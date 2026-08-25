<?php

namespace App\Http\Controllers\Cashier;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Sale;
use App\Models\Setting; 
use App\Services\DokuService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http; // Tambahan untuk Telegram
use Illuminate\Support\Str; 
use Barryvdh\DomPDF\Facade\Pdf;

class SaleController extends Controller
{
    protected $dokuService;

    public function __construct(DokuService $dokuService)
    {
        $this->dokuService = $dokuService;
    }

    public function index()
    {
        return view('cashier.pos');
    }

    public function checkProduct(Request $request)
    {
        $product = Product::where('barcode', $request->barcode)->first();
        if ($product) {
            if ($product->stock > 0) return response()->json($product);
            return response()->json(['error' => 'Stok produk habis!'], 422);
        }
        return response()->json(['error' => 'Produk tidak ditemukan!'], 404);
    }

    public function search(Request $request)
    {
        $query = $request->get('query');
        if (!$query) return response()->json([]);
        $products = Product::where('name', 'LIKE', "%{$query}%")
                            ->where('stock', '>', 0)
                            ->limit(10)
                            ->get();
        return response()->json($products);
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'nullable|string|max:100',
            'items' => 'required|array|min:1',
            'items.*.id' => 'required|exists:products,id',
            'items.*.quantity' => 'required|integer|min:1',
            'payment_method' => 'required|in:cash,qris',
            'total' => 'required|numeric',
            'amount_paid' => 'required|numeric'
        ]);

        DB::beginTransaction();
        try {
            // 1. Generate Nomor Transaksi
            $transactionNumber = "INV-" . now()->format('Ymd') . "-" . strtoupper(Str::random(5));

            // 2. Simpan Data Utama
            $sale = Sale::create([
                'transaction_number' => $transactionNumber,
                'user_id'            => Auth::id(),
                'customer_name'      => $request->customer_name ?: 'Pelanggan Umum',
                'total_amount'       => $request->total,
                'amount_paid'        => $request->amount_paid,
                'payment_method'     => $request->payment_method,
                'payment_status'     => ($request->payment_method === 'cash') ? 'success' : 'pending',
                'status'             => ($request->payment_method === 'cash') ? 'success' : 'pending',
            ]);

            // 3. Simpan Detail & Potong Stok
            foreach ($request->items as $item) {
                $product = Product::lockForUpdate()->find($item['id']);
                if ($product->stock < $item['quantity']) {
                    throw new \Exception("Stok {$product->name} tidak cukup!");
                }
                $sale->details()->create([
                    'product_id' => $product->id,
                    'quantity' => $item['quantity'],
                    'price_at_transaction' => $product->price,
                    'discount_at_transaction' => $product->discount_percent ?? 0,
                ]);
                $product->decrement('stock', $item['quantity']);
            }

            // 4. LOGIKA QRIS
            $qrString = null;
            if ($request->payment_method === 'qris') {
                $qrString = $this->dokuService->generateQris($sale); 
                if (!$qrString) {
                    throw new \Exception('Gagal generate QRIS. Gunakan Tunai.');
                }
            }

            DB::commit();

            // --- INTEGRASI NOTIFIKASI TELEGRAM (KHUSUS CASH) ---
            if ($sale->payment_method === 'cash') {
                $this->sendTelegramCashNotification($sale);
            }

            return response()->json([
                'success'   => true,
                'sale'      => $sale,
                'qr_string' => $qrString 
            ]);

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error("Toko Ananda Error: " . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * FUNGSI NOTIFIKASI CASH KE TELEGRAM
     */
    private function sendTelegramCashNotification(Sale $sale)
    {
        $token = env('TELEGRAM_BOT_TOKEN');
        $chatId = env('TELEGRAM_CHAT_ID');

        if (!$token || !$chatId) return;

        // Muat ulang relasi detail untuk mendapatkan nama produk
        $sale->load('details.product');

        $itemDetails = "";
        foreach ($sale->details as $index => $detail) {
            $itemName = $detail->product->name ?? 'Produk';
            $itemDetails .= ($index + 1) . ". " . $itemName . " (x" . $detail->quantity . ")\n";
        }

        $customerName = $sale->customer_name ?? 'Pelanggan Umum';

        $message = "💵 *LAPORAN TUNAI (CASH) BARU* 💵\n\n"
                 . "💰 *TOTAL:* Rp " . number_format($sale->total_amount, 0, ',', '.') . "\n"
                 . "🧾 *INVOICE:* `" . $sale->transaction_number . "`\n"
                 . "👤 *PELANGGAN:* " . $customerName . "\n"
                 . "⏰ *WAKTU:* " . now()->format('d/m/Y H:i') . " WIB\n"
                 . "🧑‍💼 *KASIR:* " . Auth::user()->name . "\n\n"
                 . "📦 *RINCIAN BARANG:*\n"
                 . "_" . $itemDetails . "_\n"
                 . "✅ *Status:* Transaksi Selesai & Uang Diterima.\n"
                 . "💻 *SISTEM:* SIKANDA Sultan Web Engine";

        try {
            Http::post("https://api.telegram.org/bot{$token}/sendMessage", [
                'chat_id'    => $chatId,
                'text'       => $message,
                'parse_mode' => 'Markdown',
            ]);
        } catch (\Exception $e) {
            Log::error("Gagal kirim Telegram Cash: " . $e->getMessage());
        }
    }

    public function checkStatus(Sale $sale)
    {
        $isPaid = in_array(strtolower($sale->payment_status), ['success', 'paid']);
        $isStatusOk = in_array(strtolower($sale->status), ['success', 'paid']);

        return response()->json([
            'status' => ($isPaid || $isStatusOk) ? 'success' : 'pending'
        ]);
    }

    public function generateReceipt(Sale $sale)
    {
        $sale->load(['details.product', 'user']);
        $shop = Setting::pluck('value', 'key')->all();
        
        $pdf = Pdf::loadView('cashier.print-receipt', compact('sale', 'shop'))
                  ->setPaper([0, 0, 164.41, 600], 'portrait'); 
        return $pdf->stream("Nota-{$sale->transaction_number}.pdf");
    }

    /**
     * Generate Label Resi Pengiriman Paket (Ukuran Standar A6 Portrait / Sticker)
     */
    public function generateShippingLabel(Request $request, Sale $sale)
    {
        $sale->load(['details.product', 'user']);
        $shop = Setting::pluck('value', 'key')->all();

        $recipientName = $request->input('recipient_name', $sale->customer_name ?: 'Pelanggan Umum');
        $recipientPhone = $request->input('recipient_phone', '');
        $recipientAddress = $request->input('recipient_address', '');
        $senderName = $request->input('sender_name', $shop['shop_name'] ?? 'TOKO ANANDA');
        $senderPhone = $request->input('sender_phone', $shop['shop_phone'] ?? '');
        $senderAddress = $request->input('sender_address', $shop['shop_address'] ?? '');
        $courier = $request->input('courier', 'Reguler');
        $notes = $request->input('notes', 'FRAGILE - JANGAN DIBANTING / DITINDIH');

        $pdf = Pdf::loadView('shipping.label_pdf', compact(
            'sale', 'shop', 'recipientName', 'recipientPhone', 'recipientAddress',
            'senderName', 'senderPhone', 'senderAddress', 'courier', 'notes'
        ))->setPaper('a6', 'portrait');

        return $pdf->stream("Label_Pengiriman_{$sale->transaction_number}.pdf");
    }
}
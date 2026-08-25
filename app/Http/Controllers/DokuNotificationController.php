<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Order;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class DokuNotificationController extends Controller
{
    /**
     * MENANGANI WEBHOOK DOKU (NOTIFIKASI LUNAS/GAGAL)
     */
    public function handle(Request $request)
    {
        $data = $request->all();
        if (empty($data)) {
            $raw = file_get_contents('php://input');
            $data = json_decode($raw, true) ?: [];
        }
        Log::info('DOKU Webhook Masuk (Full Payload):', $data);

        $invoiceNumber = $data['order']['invoice_number'] 
            ?? $data['order_number'] 
            ?? $data['invoice_number'] 
            ?? $data['transaction']['invoice_number'] 
            ?? $data['order']['id'] 
            ?? null;
        
        $rawStatus = $data['transaction']['status'] 
            ?? $data['transaction']['state'] 
            ?? $data['order']['status'] 
            ?? $data['status'] 
            ?? $data['transaction_status'] 
            ?? $data['result']['status'] 
            ?? '';

        $transactionStatus = strtoupper($rawStatus);

        if (!$invoiceNumber) {
            Log::error('Webhook Gagal: Invoice number tidak ditemukan di payload DOKU.', ['data' => $data]);
            return response()->json(['message' => 'Invalid Data, Invoice Missing'], 400);
        }

        $isSuccess = in_array($transactionStatus, ['SUCCESS', 'PAID', 'COMPLETED', 'SETTLED', 'OK', 'SUCCESSFUL', 'APPROVED']);
        $isFailed  = in_array($transactionStatus, ['FAILED', 'EXPIRED', 'CANCEL', 'CANCELLED', 'VOID', 'REJECTED']);

        // 1. CARI PESANAN ONLINE (ORDER)
        if (str_starts_with($invoiceNumber, 'ORD-')) {
            $order = \App\Models\Order::with('items.product')->where('order_number', $invoiceNumber)->first();
            if ($order) {
                if ($order->payment_status === 'paid') {
                    return response()->json(['message' => 'Order Already Paid'], 200);
                }

                DB::beginTransaction();
                try {
                    if ($isSuccess) {
                        $order->update([
                            'payment_status' => 'paid',
                            'status'         => 'paid',
                            'paid_at'        => now(),
                        ]);

                        try {
                            $this->sendTelegramOrderNotification($order);
                        } catch (\Throwable $te) {
                            Log::warning("Telegram Notification Order failed: " . $te->getMessage());
                        }
                        Log::info("Pesanan Online {$invoiceNumber} LUNAS via QRIS DOKU.");
                    } elseif ($isFailed) {
                        $order->update([
                            'payment_status' => 'failed',
                            'status'         => 'cancelled',
                        ]);
                        foreach ($order->items as $item) {
                            if ($item->product) {
                                $item->product->increment('stock', $item->quantity);
                            }
                        }
                    }
                    DB::commit();
                    return response()->json(['message' => 'SUCCESS'], 200);
                } catch (\Exception $e) {
                    DB::rollBack();
                    Log::error("Gagal proses webhook online order: " . $e->getMessage());
                    return response()->json(['message' => 'Error'], 500);
                }
            }
        }

        // 2. JIKA BUKAN ONLINE ORDER, CARI TRANSAKSI KASIR POS (SALE)
        $sale = Sale::with('details.product')->where('transaction_number', $invoiceNumber)->first();

        // Cadangan: Ekstrak ID dari format INV-{id}-TIMESTAMP jika format lama
        if (!$sale) {
            $parts = explode('-', $invoiceNumber);
            $saleId = $parts[1] ?? null;
            if ($saleId && is_numeric($saleId)) {
                $sale = Sale::with('details.product')->find($saleId);
            }
        }

        if (!$sale) {
            Log::error("Sale / Order dengan Invoice {$invoiceNumber} tidak ditemukan di database.");
            return response()->json(['message' => 'Invoice Not Found'], 404);
        }

        // Idempotency: Jika sudah sukses, jangan proses ulang
        if ($sale->status === 'success' || $sale->payment_status === 'success') {
            return response()->json(['message' => 'Already Processed as Success'], 200);
        }

        // Operasi Update Status & Stok
        DB::beginTransaction();
        try {
            if ($isSuccess) {
                $sale->update([
                    'status'           => 'success',
                    'payment_status'   => 'success',
                    'reference_number' => $data['transaction']['id'] ?? $data['transaction']['original_request_id'] ?? null
                ]);

                try {
                    $this->sendTelegramNotification($sale);
                } catch (\Throwable $te) {
                    Log::warning("Telegram Notification POS failed: " . $te->getMessage());
                }
                Log::info("Misi Sukses: Transaksi Kasir {$invoiceNumber} LUNAS.");

            } elseif ($isFailed) {
                $sale->update([
                    'status'         => 'failed',
                    'payment_status' => 'failed'
                ]);
                
                foreach ($sale->details as $detail) {
                    if ($detail->product) {
                        $detail->product->increment('stock', $detail->quantity);
                    }
                }
                Log::warning("Misi Gagal: Transaksi {$invoiceNumber} status {$transactionStatus}. Stok dikembalikan.");
            }

            DB::commit();
            return response()->json(['message' => 'SUCCESS'], 200);

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error("Gagal memproses webhook POS: " . $e->getMessage());
            return response()->json(['message' => 'Error'], 500);
        }
    }

    /**
     * FUNGSI KIRIM RADAR KE TELEGRAM
     */
    private function sendTelegramNotification($sale)
    {
        $token = env('TELEGRAM_BOT_TOKEN');
        $chatId = env('TELEGRAM_CHAT_ID');

        if (!$token || !$chatId) {
            Log::warning("Notifikasi Telegram batal: Token atau Chat ID belum disetel di .env");
            return;
        }

        // Susun daftar item yang dibeli
        $itemDetails = "";
        foreach ($sale->details as $index => $detail) {
            $itemName = $detail->product->name ?? 'Produk Tidak Diketahui';
            $itemDetails .= ($index + 1) . ". " . $itemName . " (x" . $detail->quantity . ")\n";
        }

        $shopName = Setting::where('key', 'shop_name')->value('value') ?: 'KASIR';
        $appName = Setting::where('key', 'app_name')->value('value') ?: 'POS';

        // Format Pesan ala Laporan Situasi Harian (LSH)
        $message = "🚨 *DANA QRIS MASUK: {$shopName}* 🚨\n\n"
                 . "💰 *TOTAL:* Rp " . number_format($sale->total_amount, 0, ',', '.') . "\n"
                 . "🧾 *INVOICE:* `" . $sale->transaction_number . "`\n"
                 . "⏰ *WAKTU:* " . now()->format('d/m/Y H:i') . " WIB\n\n"
                 . "📦 *RINCIAN BARANG:*\n"
                 . "_" . $itemDetails . "_\n"
                 . "✅ *STATUS:* Pembayaran Sah & Lunas.\n"
                 . "💻 *SISTEM:* {$appName}";

        try {
            Http::post("https://api.telegram.org/bot{$token}/sendMessage", [
                'chat_id'    => $chatId,
                'text'       => $message,
                'parse_mode' => 'Markdown',
            ]);
        } catch (\Exception $e) {
            Log::error("Gagal mengirim pesan Telegram: " . $e->getMessage());
        }
    }

    /**
     * NOTIFIKASI TELEGRAM PESANAN ONLINE MASUK
     */
    private function sendTelegramOrderNotification($order)
    {
        $token = env('TELEGRAM_BOT_TOKEN');
        $chatId = env('TELEGRAM_CHAT_ID');

        if (!$token || !$chatId) {
            return;
        }

        $itemDetails = "";
        foreach ($order->items as $index => $item) {
            $itemDetails .= ($index + 1) . ". " . $item->product_name . " (" . $item->quantity . "x)\n";
        }

        $shopName = \App\Models\Setting::where('key', 'shop_name')->value('value') ?: 'TOKO ONLINE';
        $appName = \App\Models\Setting::where('key', 'app_name')->value('value') ?: 'SIKANDA';

        $message = "🛒 *PESANAN ONLINE BARU MASUK!* 🚨\n"
                 . "🏪 *Toko:* {$shopName}\n"
                 . "==============================\n"
                 . "🧾 *NO PESANAN:* `{$order->order_number}`\n"
                 . "👤 *PEMBELI:* {$order->customer_name}\n"
                 . "📞 *WHATSAPP:* {$order->customer_phone}\n"
                 . "📍 *ALAMAT:* {$order->customer_address}\n"
                 . "🚚 *EKSPEDISI:* {$order->courier}\n"
                 . "💰 *TOTAL DIBAYAR:* Rp " . number_format($order->total_amount, 0, ',', '.') . " (QRIS LUNAS)\n"
                 . "==============================\n"
                 . "📦 *DAFTAR ITEM:*\n"
                 . "_{$itemDetails}_\n"
                 . "⚡ *STATUS:* Menunggu Konfirmasi Toko!\n"
                 . "🔗 *Lacak Pesanan:* " . url('/lacak/' . $order->order_number);

        try {
            Http::post("https://api.telegram.org/bot{$token}/sendMessage", [
                'chat_id'    => $chatId,
                'text'       => $message,
                'parse_mode' => 'Markdown',
            ]);
        } catch (\Exception $e) {
            Log::error("Gagal kirim notif telegram order: " . $e->getMessage());
        }
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Sale;
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
        Log::info('DOKU Webhook Masuk:', $data);

        $invoiceNumber = $data['order']['invoice_number'] ?? null;
        
        // Terkadang Doku menggunakan 'status', terkadang 'state'
        $transactionStatus = strtoupper($data['transaction']['status'] ?? $data['transaction']['state'] ?? '');

        if (!$invoiceNumber) {
            Log::error('Webhook Gagal: Invoice tidak ditemukan.');
            return response()->json(['message' => 'Invalid Data'], 400);
        }

        // 1. CARI TRANSAKSI
        $sale = Sale::with('details.product')->where('transaction_number', $invoiceNumber)->first();

        // Cadangan: Ekstrak ID dari format INV-{id}-TIMESTAMP
        if (!$sale) {
            $parts = explode('-', $invoiceNumber);
            $saleId = $parts[1] ?? null;
            $sale = Sale::with('details.product')->find($saleId);
        }

        if (!$sale) {
            Log::error("Sale dengan Invoice {$invoiceNumber} tidak ditemukan.");
            return response()->json(['message' => 'Not Found'], 404);
        }

        // 2. IDEMPOTENCY: Jika sudah sukses, jangan proses lagi
        if ($sale->status === 'success' || $sale->payment_status === 'success') {
            return response()->json(['message' => 'Already Processed']);
        }

        // 3. OPERASI UPDATE STATUS & STOK
        DB::beginTransaction();
        try {
            if ($transactionStatus === 'SUCCESS') {
                // MISI BERHASIL
                $sale->update([
                    'status'           => 'success',
                    'payment_status'   => 'success',
                    'reference_number' => $data['transaction']['id'] ?? null
                ]);

                // --- INTEGRASI NOTIFIKASI TELEGRAM SIKANDA ---
                $this->sendTelegramNotification($sale);
                
                Log::info("Misi Sukses: Transaksi {$invoiceNumber} LUNAS.");

            } elseif (in_array($transactionStatus, ['FAILED', 'EXPIRED', 'CANCEL', 'VOID'])) {
                // MISI GAGAL: Kembalikan Stok
                $sale->update([
                    'status' => 'failed',
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
            return response()->json(['message' => 'OK'], 200);

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error("Gagal memproses webhook: " . $e->getMessage());
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

        // Format Pesan ala Laporan Situasi Harian (LSH)
        $message = "🚨 *DANA QRIS MASUK: TOKO ANANDA* 🚨\n\n"
                 . "💰 *TOTAL:* Rp " . number_format($sale->total_amount, 0, ',', '.') . "\n"
                 . "🧾 *INVOICE:* `" . $sale->transaction_number . "`\n"
                 . "⏰ *WAKTU:* " . now()->format('d/m/Y H:i') . " WIB\n\n"
                 . "📦 *RINCIAN BARANG:*\n"
                 . "_" . $itemDetails . "_\n"
                 . "✅ *STATUS:* Pembayaran Sah & Lunas.\n"
                 . "💻 *SISTEM:* SIKANDA Sultan Web Engine";

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
}
<?php

namespace App\Services;

use App\Models\Setting;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class DokuService
{
    /**
     * AMBIL KONFIGURASI DARI PUSAT KOMANDO
     */
    private function getConfig()
    {
        $settings = Setting::pluck('value', 'key')->all();
        return [
            'client_id'  => $settings['doku_client_id'] ?? env('DOKU_CLIENT_ID'),
            'secret_key' => $settings['doku_secret_key'] ?? env('DOKU_SECRET_KEY'),
            'base_url'   => rtrim($settings['doku_base_url'] ?? env('DOKU_BASE_URL'), '/'),
        ];
    }

    /**
     * GENERATE QRIS (Metode Direct Checkout)
     * Menggunakan jalur /payment dengan callback khusus untuk pemulihan State
     */
    public function generateQris($sale)
    {
        $config = $this->getConfig();
        $targetPath = '/checkout/v1/payment'; 
        
        $body = [
            'order' => [
                'amount' => (int) $sale->total_amount,
                'invoice_number' => $sale->transaction_number,
                // MODIFIKASI: Tambahkan parameter status dan sale_id untuk deteksi di Frontend
                'callback_url' => route('cashier.pos.index') . '?status=return&sale_id=' . $sale->id,
            ],
            'payment' => [
                'payment_due_date' => 2,
                'payment_method_types' => ['QRIS'], 
            ],
            'customer' => [
                'id' => 'CUST-' . ($sale->user_id ?? 'GUEST'),
                'name' => Auth::user()->name ?? 'Pelanggan Toko Ananda',
                'email' => 'admin@sultanweb.id',
            ]
        ];

        $response = $this->executeRequest($targetPath, $body, $config);

        if (isset($response['response']['payment']['url'])) {
            return $response['response']['payment']['url'];
        }

        Log::error('DOKU API Error: ' . json_encode($response));
        return null;
    }

    /**
     * EKSEKUSI REQUEST (Protokol Legacy HMAC)
     */
    private function executeRequest($targetPath, $body, $config)
    {
        $requestId = (string) Str::uuid();
        $timestamp = gmdate("Y-m-d\TH:i:s\Z");

        $jsonBody = json_encode($body);
        $digest = base64_encode(hash('sha256', $jsonBody, true));

        $signatureString = "Client-Id:" . $config['client_id'] . "\n" .
                           "Request-Id:" . $requestId . "\n" .
                           "Request-Timestamp:" . $timestamp . "\n" .
                           "Request-Target:" . $targetPath . "\n" .
                           "Digest:" . $digest;

        $signature = base64_encode(hash_hmac('sha256', $signatureString, $config['secret_key'], true));

        try {
            $response = Http::withHeaders([
                'Client-Id'         => $config['client_id'],
                'Request-Id'        => $requestId,
                'Request-Timestamp' => $timestamp,
                'Signature'         => "HMACSHA256=" . $signature,
                'Content-Type'      => 'application/json'
            ])->post($config['base_url'] . $targetPath, $body);

            return $response->json();

        } catch (\Exception $e) {
            Log::error('DOKU Connection Error: ' . $e->getMessage());
            return null;
        }
    }
}
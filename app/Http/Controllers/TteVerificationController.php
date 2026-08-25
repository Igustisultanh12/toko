<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Setting;
use Illuminate\Http\Request;

class TteVerificationController extends Controller
{
    /**
     * Halaman Verifikasi Keaslian Dokumen & Tanda Tangan Elektronik (TTE)
     */
    public function verify($transactionNumber)
    {
        $sale = Sale::with(['details.product', 'user'])
                    ->where('transaction_number', $transactionNumber)
                    ->firstOrFail();

        $shop = Setting::pluck('value', 'key')->all();

        $signerTitle = $shop['cashier_officer_title'] ?? 'Petugas Kasir';
        $signerName = $sale->user->name ?? ($shop['cashier_officer_name'] ?? 'Petugas Kasir');

        // Generate Digital Signature Hash (TTE)
        $rawSignatureData = $sale->transaction_number . '|' . $sale->total_amount . '|' . $sale->created_at . '|' . $signerName;
        $tteHash = strtoupper(hash('sha256', $rawSignatureData));

        return view('reports.verify_tte', compact('sale', 'shop', 'signerTitle', 'signerName', 'tteHash'));
    }
}

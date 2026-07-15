<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB; // Tambahkan baris ini

class SettingController extends Controller
{
    /**
     * Menampilkan Pusat Komando SIKANDA
     */
    public function index()
    {
        $settings = Setting::pluck('value', 'key')->all();
        return view('admin.settings.index', compact('settings'));
    }

    /**
     * Update Identitas, Konfigurasi DOKU, & Fitur Suara
     */
    public function update(Request $request)
    {
        // 1. VALIDASI KETAT
        $request->validate([
            'shop_name'             => 'required|string|max:100',
            'shop_phone'            => 'nullable|string|max:20',
            'shop_logo'             => 'nullable|image|mimes:jpg,jpeg,png|max:1024',
            'payment_success_sound' => 'nullable|mimes:mp3,wav,ogg|max:2048', // Max 2MB
            'is_voice_enabled'      => 'nullable|in:0,1',
            'doku_client_id'        => 'nullable|string',
            'doku_secret_key'       => 'nullable|string',
            'doku_base_url'         => 'nullable|url',
        ]);

        // Ambil semua data kecuali file dan token
        $data = $request->except(['_token', '_method', 'shop_logo', 'payment_success_sound']);

        // 2. LOGIKA TOGGLE SUARA (Handle Checkbox)
        // Checkbox HTML tidak mengirim data jika tidak dicentang, jadi kita paksa manual
        $data['is_voice_enabled'] = $request->has('is_voice_enabled') ? '1' : '0';

        // 3. LOGIKA UPLOAD LOGO
        if ($request->hasFile('shop_logo')) {
            $this->deleteOldFile('shop_logo');
            $data['shop_logo'] = $request->file('shop_logo')->store('logos', 'public');
        }

        // 4. LOGIKA UPLOAD MP3 (NOTIFIKASI SUARA)
        if ($request->hasFile('payment_success_sound')) {
            $this->deleteOldFile('payment_success_sound');
            $data['payment_success_sound'] = $request->file('payment_success_sound')->store('audio', 'public');
        }

        // 5. EKSEKUSI PENYIMPANAN
        try {
            DB::beginTransaction();
            
            foreach ($data as $key => $value) {
                Setting::updateOrCreate(
                    ['key' => $key],
                    ['value' => $value ?? '']
                );
            }

            DB::commit();

            // Refresh sistem agar perubahan langsung terasa
            Artisan::call('optimize:clear');

            return back()->with('success', 'Pusat Komando Sultan Web Berhasil Diperbarui!');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Gagal Memperbarui: ' . $e->getMessage());
        }
    }

    /**
     * Helper: Menghapus file lama dari storage agar tidak menumpuk
     */
    private function deleteOldFile($key)
    {
        $setting = Setting::where('key', $key)->first();
        if ($setting && $setting->value) {
            if (Storage::disk('public')->exists($setting->value)) {
                Storage::disk('public')->delete($setting->value);
            }
        }
    }
}
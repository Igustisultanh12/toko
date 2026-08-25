<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderComplaint;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class OrderComplaintController extends Controller
{
    /**
     * TAMPILKAN FORM PENGAJUAN KOMPLAIN PELANGGAN
     */
    public function showForm($order_number)
    {
        $order = Order::with(['items.product', 'complaints'])->where('order_number', $order_number)->firstOrFail();
        $shop = Setting::pluck('value', 'key')->all();
        $latestComplaint = $order->complaints()->latest()->first();

        return view('online.complaint', compact('order', 'shop', 'latestComplaint'));
    }

    /**
     * PROSES SIMPAN KOMPLAIN PELANGGAN BESERTA BUKTI FOTO & VIDEO
     */
    public function store(Request $request, $order_number)
    {
        $order = Order::with('items')->where('order_number', $order_number)->firstOrFail();

        $request->validate([
            'reason'            => 'required|string|max:255',
            'description'       => 'required|string|min:10|max:2000',
            'expected_solution' => 'required|string|max:255',
            'photos'            => 'required|array|min:1|max:10',
            'photos.*'          => 'file|mimes:jpeg,png,jpg,webp,gif|max:25600', // Max 25MB per/total image
            'video'             => 'nullable|file|mimes:mp4,mov,avi,webm,mkv,3gp|max:15360', // Max 15MB
        ], [
            'reason.required'            => 'Pilih alasan pengajuan komplain.',
            'description.required'       => 'Jelaskan secara rinci kendala barang yang Anda terima.',
            'description.min'            => 'Keterangan kendala minimal 10 karakter.',
            'expected_solution.required' => 'Pilih solusi yang Anda harapkan.',
            'photos.required'            => 'Wajib mengunggah minimal 1 foto bukti kendala barang.',
            'photos.*.max'               => 'Ukuran masing-masing foto tidak boleh melebihi 25MB.',
            'video.max'                  => 'Ukuran video bukti tidak boleh melebihi 15MB.',
            'video.mimes'                => 'Format video harus berupa MP4, MOV, AVI, WEBM, MKV, atau 3GP.',
        ]);

        DB::beginTransaction();
        try {
            // 1. Upload Foto-Foto Bukti (Bisa lebih dari 1 gambar)
            $uploadedPhotos = [];
            if ($request->hasFile('photos')) {
                foreach ($request->file('photos') as $photoFile) {
                    $filename = 'complaint_' . $order->order_number . '_' . Str::random(8) . '.' . $photoFile->getClientOriginalExtension();
                    $path = $photoFile->storeAs('complaints/photos', $filename, 'public');
                    $uploadedPhotos[] = $path;
                }
            }

            // 2. Upload Video Bukti Unboxing / Kerusakan (Max 15MB)
            $uploadedVideo = null;
            if ($request->hasFile('video')) {
                $videoFile = $request->file('video');
                $videoFilename = 'video_' . $order->order_number . '_' . Str::random(8) . '.' . $videoFile->getClientOriginalExtension();
                $uploadedVideo = $videoFile->storeAs('complaints/videos', $videoFilename, 'public');
            }

            // 3. Simpan ke Database
            $complaint = OrderComplaint::create([
                'order_id'          => $order->id,
                'order_number'      => $order->order_number,
                'customer_name'     => $order->customer_name,
                'customer_phone'    => $order->customer_phone,
                'reason'            => $request->reason,
                'description'       => $request->description,
                'expected_solution' => $request->expected_solution,
                'photos'            => $uploadedPhotos,
                'video'             => $uploadedVideo,
                'status'            => 'pending',
            ]);

            DB::commit();

            // 4. Kirim Radar Notifikasi Telegram ke Pemilik Toko / Kasir
            $this->sendTelegramComplaintNotification($order, $complaint);

            return redirect()->route('order.complaint.show', $order->order_number)
                             ->with('success', 'Komplain Anda berhasil dikirim! Tim kasir/admin toko kami akan segera meninjau dan menghubungi Anda.');

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error("Gagal simpan komplain pesanan {$order_number}: " . $e->getMessage());
            return back()->withInput()->with('error', 'Gagal mengajukan komplain: ' . $e->getMessage());
        }
    }

    /**
     * UPDATE STATUS KOMPLAIN OLEH ADMIN/KASIR
     */
    public function adminUpdateStatus(Request $request, $id)
    {
        $complaint = OrderComplaint::with('order')->findOrFail($id);

        $request->validate([
            'status'      => 'required|in:pending,reviewed,approved,rejected,resolved',
            'admin_notes' => 'nullable|string|max:1000',
        ]);

        $complaint->update([
            'status'      => $request->status,
            'admin_notes' => $request->admin_notes ?: $complaint->admin_notes,
            'resolved_by' => Auth::id(),
            'resolved_at' => ($request->status === 'resolved' || $request->status === 'approved') ? now() : $complaint->resolved_at,
        ]);

        return back()->with('success', "Status komplain pesanan {$complaint->order_number} berhasil diperbarui menjadi {$complaint->status_label}.");
    }

    /**
     * KIRIM RADAR NOTIFIKASI KOMPLAIN KE TELEGRAM ADMIN
     */
    private function sendTelegramComplaintNotification($order, $complaint)
    {
        $token = env('TELEGRAM_BOT_TOKEN');
        $chatId = env('TELEGRAM_CHAT_ID');

        if (!$token || !$chatId) return;

        $shopName = Setting::where('key', 'shop_name')->value('value') ?: 'TOKO ONLINE';
        $appName = Setting::where('key', 'app_name')->value('value') ?: 'SIKANDA';

        $photoCount = is_array($complaint->photos) ? count($complaint->photos) : 0;
        $hasVideoText = $complaint->video ? "✅ Ada Video Unboxing (Max 15MB)" : "❌ Tidak Ada Video";

        $message = "⚠️ *KOMPLAIN PESANAN PELANGGAN BARU!* 🚨\n"
                 . "🏪 *Toko:* {$shopName}\n"
                 . "==============================\n"
                 . "🧾 *NO PESANAN:* `{$order->order_number}`\n"
                 . "👤 *PEMBELI:* {$order->customer_name}\n"
                 . "📞 *WHATSAPP:* {$order->customer_phone}\n"
                 . "⚠️ *ALASAN:* {$complaint->reason}\n"
                 . "💡 *SOLUSI DIHARAPKAN:* {$complaint->expected_solution}\n"
                 . "📝 *KETERANGAN:* _{$complaint->description}_\n"
                 . "==============================\n"
                 . "📸 *BUKTI FOTO:* {$photoCount} Foto terlampir\n"
                 . "🎥 *BUKTI VIDEO:* {$hasVideoText}\n"
                 . "🔗 *Tinjau di Admin:* " . route('admin.orders.index', ['search' => $order->order_number]) . "\n"
                 . "💻 *SISTEM:* {$appName}";

        try {
            Http::post("https://api.telegram.org/bot{$token}/sendMessage", [
                'chat_id'    => $chatId,
                'text'       => $message,
                'parse_mode' => 'Markdown',
            ]);
        } catch (\Exception $e) {
            Log::warning("Gagal kirim notif telegram komplain: " . $e->getMessage());
        }
    }
}

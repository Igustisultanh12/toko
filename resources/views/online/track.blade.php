@extends('online.layout')

@section('title', 'Lacak Pesanan ' . $order->order_number)

@section('content')
<div x-data="liveOrderTracker('{{ $order->order_number }}', {{ $order->status === 'pending_payment' ? 1 : ($order->status === 'paid' ? 2 : ($order->status === 'processing' ? 3 : ($order->status === 'shipped' ? 4 : ($order->status === 'completed' ? 5 : 1)))) }}, '{{ $order->status }}', '{{ $order->tracking_number ?? '' }}', '{{ $order->courier }}')" class="max-w-3xl mx-auto px-4 py-8 space-y-6">

    {{-- HEADER KARTU UTAMA --}}
    <div class="bg-white rounded-[2.5rem] p-6 sm:p-8 border border-gray-100 shadow-xl space-y-8">
        
        {{-- TOP BAR --}}
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-3 border-b border-gray-100 pb-6">
            <div>
                <div class="flex items-center space-x-2">
                    <span class="text-xs font-black text-gray-400 uppercase tracking-widest">No. Pesanan:</span>
                    <span class="font-mono font-black text-indigo-700 text-base">{{ $order->order_number }}</span>
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-ping" title="Live Realtime"></span>
                </div>
                <p class="text-xs text-gray-400 font-medium mt-0.5">Dipesan pada: {{ $order->created_at->format('d F Y, H:i') }} WIB</p>
            </div>
            <div>
                <span id="liveStatusBadge" x-html="statusBadge">
                    {!! $order->status_badge !!}
                </span>
            </div>
        </div>

        {{-- VISUAL STEPPER PELACAKAN PESANAN (REALTIME DYNAMIC) --}}
        <div class="space-y-4">
            <div class="flex justify-between items-center">
                <h3 class="text-xs font-black text-gray-800 uppercase tracking-wider">Status & Tahapan Pengiriman:</h3>
                <span class="text-[10px] font-bold text-emerald-600 bg-emerald-50 px-2.5 py-1 rounded-full uppercase tracking-wider">
                    ⚡ Update Otomatis Realtime
                </span>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-5 gap-3">
                {{-- STEP 1 --}}
                <div class="p-3.5 rounded-2xl border transition-all text-center sm:text-left"
                     :class="currentLevel === 1 ? 'bg-emerald-50 border-[#00AA13] shadow-md' : (currentLevel >= 1 ? 'bg-gray-50 border-gray-200 text-gray-700' : 'bg-white border-gray-100 opacity-40')">
                    <div class="flex items-center space-x-2 sm:block sm:space-x-0">
                        <span class="text-xl block sm:mb-1">💳</span>
                        <div>
                            <h4 class="font-black text-xs" :class="currentLevel === 1 ? 'text-[#00880F]' : 'text-gray-800'">Menunggu Bayar</h4>
                            <p class="text-[9px] text-gray-500 font-medium leading-tight mt-0.5">Menunggu scan QRIS</p>
                        </div>
                    </div>
                </div>

                {{-- STEP 2 --}}
                <div class="p-3.5 rounded-2xl border transition-all text-center sm:text-left"
                     :class="currentLevel === 2 ? 'bg-emerald-50 border-[#00AA13] shadow-md' : (currentLevel >= 2 ? 'bg-gray-50 border-gray-200 text-gray-700' : 'bg-white border-gray-100 opacity-40')">
                    <div class="flex items-center space-x-2 sm:block sm:space-x-0">
                        <span class="text-xl block sm:mb-1">💰</span>
                        <div>
                            <h4 class="font-black text-xs" :class="currentLevel === 2 ? 'text-[#00880F]' : 'text-gray-800'">Sudah Dibayar</h4>
                            <p class="text-[9px] text-gray-500 font-medium leading-tight mt-0.5">Menunggu konfirmasi kasir</p>
                        </div>
                    </div>
                </div>

                {{-- STEP 3 --}}
                <div class="p-3.5 rounded-2xl border transition-all text-center sm:text-left"
                     :class="currentLevel === 3 ? 'bg-emerald-50 border-[#00AA13] shadow-md' : (currentLevel >= 3 ? 'bg-gray-50 border-gray-200 text-gray-700' : 'bg-white border-gray-100 opacity-40')">
                    <div class="flex items-center space-x-2 sm:block sm:space-x-0">
                        <span class="text-xl block sm:mb-1">📦</span>
                        <div>
                            <h4 class="font-black text-xs" :class="currentLevel === 3 ? 'text-[#00880F]' : 'text-gray-800'">Sedang Disiapkan</h4>
                            <p class="text-[9px] text-gray-500 font-medium leading-tight mt-0.5">Barang dipacking toko</p>
                        </div>
                    </div>
                </div>

                {{-- STEP 4 --}}
                <div class="p-3.5 rounded-2xl border transition-all text-center sm:text-left"
                     :class="currentLevel === 4 ? 'bg-emerald-50 border-[#00AA13] shadow-md' : (currentLevel >= 4 ? 'bg-gray-50 border-gray-200 text-gray-700' : 'bg-white border-gray-100 opacity-40')">
                    <div class="flex items-center space-x-2 sm:block sm:space-x-0">
                        <span class="text-xl block sm:mb-1">🚚</span>
                        <div>
                            <h4 class="font-black text-xs" :class="currentLevel === 4 ? 'text-[#00880F]' : 'text-gray-800'">Sedang Dikirim</h4>
                            <p class="text-[9px] text-gray-500 font-medium leading-tight mt-0.5">Diserahkan ke kurir</p>
                        </div>
                    </div>
                </div>

                {{-- STEP 5 --}}
                <div class="p-3.5 rounded-2xl border transition-all text-center sm:text-left"
                     :class="currentLevel === 5 ? 'bg-emerald-50 border-[#00AA13] shadow-md' : (currentLevel >= 5 ? 'bg-gray-50 border-gray-200 text-gray-700' : 'bg-white border-gray-100 opacity-40')">
                    <div class="flex items-center space-x-2 sm:block sm:space-x-0">
                        <span class="text-xl block sm:mb-1">🎉</span>
                        <div>
                            <h4 class="font-black text-xs" :class="currentLevel === 5 ? 'text-[#00880F]' : 'text-gray-800'">Selesai</h4>
                            <p class="text-[9px] text-gray-500 font-medium leading-tight mt-0.5">Pesanan telah diterima</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- KOTAK NOMOR RESI PENGIRIMAN (LIVE DYNAMIC) --}}
        <template x-if="trackingNumber && trackingNumber.trim() !== ''">
            <div class="bg-gradient-to-r from-emerald-500 to-[#00880F] rounded-3xl p-6 text-white shadow-lg space-y-3 transition-all">
                <div class="flex justify-between items-center">
                    <span class="text-[10px] font-black uppercase tracking-widest text-emerald-200">Nomor Resi Pengiriman Resmi:</span>
                    <span class="px-3 py-1 bg-white/20 rounded-full text-[10px] font-bold text-white uppercase" x-text="courier"></span>
                </div>
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-3">
                    <div class="font-mono text-2xl sm:text-3xl font-black tracking-widest" x-text="trackingNumber"></div>
                    <button type="button" @click="copyTrackingNumber()"
                            class="px-5 py-2.5 bg-white text-[#00880F] hover:bg-emerald-50 rounded-xl font-black text-xs uppercase tracking-wider shadow transition">
                        📋 Salin Resi
                    </button>
                </div>
                <p class="text-xs text-emerald-100 font-medium">
                    Gunakan nomor resi di atas untuk melacak posisi paket di aplikasi / situs resmi <b x-text="courier"></b>.
                </p>
            </div>
        </template>

        <template x-if="(!trackingNumber || trackingNumber.trim() === '') && currentLevel === 1">
            <div class="p-5 bg-amber-50 rounded-3xl border border-amber-200 text-amber-800 flex justify-between items-center">
                <div>
                    <h4 class="font-black text-xs uppercase">Menunggu Pembayaran QRIS</h4>
                    <p class="text-[11px] font-medium mt-0.5">Selesaikan pembayaran untuk memproses pesanan Anda.</p>
                </div>
                <a href="{{ route('order.pay', $order->order_number) }}" 
                   class="px-5 py-2.5 bg-amber-500 hover:bg-amber-600 text-white rounded-xl font-black text-xs uppercase tracking-wider transition">
                    Bayar QRIS →
                </a>
            </div>
        </template>

        <template x-if="(!trackingNumber || trackingNumber.trim() === '') && currentLevel > 1">
            <div class="p-5 bg-gray-50 rounded-3xl border border-gray-100 text-gray-600 text-xs">
                <span>⏳ Nomor resi pengiriman akan otomatis muncul di halaman ini secara langsung saat pesanan Anda diserahkan ke pihak ekspedisi oleh toko.</span>
            </div>
        </template>

        {{-- RINCIAN BARANG & ALAMAT PENGIRIMAN --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pt-4 border-t border-gray-100 text-xs">
            
            {{-- DATA PENERIMA --}}
            <div class="bg-gray-50 p-5 rounded-2xl border border-gray-100 space-y-2">
                <h4 class="font-black text-gray-800 uppercase text-[10px] tracking-widest text-[#00AA13]">Informasi Penerima:</h4>
                <p class="font-bold text-gray-900 text-sm">{{ $order->customer_name }}</p>
                <p class="text-gray-600">{{ $order->customer_phone }}</p>
                <p class="text-gray-700 leading-relaxed font-medium mt-1">{{ $order->customer_address }}</p>
                @if($order->customer_notes)
                    <div class="p-2.5 bg-white rounded-xl text-[11px] text-gray-500 border border-gray-100 mt-2">
                        <b>Catatan:</b> {{ $order->customer_notes }}
                    </div>
                @endif
            </div>

            {{-- DAFTAR BARANG --}}
            <div class="space-y-3">
                <h4 class="font-black text-gray-800 uppercase text-[10px] tracking-widest text-[#00AA13]">Daftar Produk:</h4>
                <div class="divide-y divide-gray-100 border border-gray-100 rounded-2xl p-4">
                    @foreach($order->items as $item)
                        <div class="py-2 flex justify-between items-center text-xs">
                            <div>
                                <p class="font-bold text-gray-800">{{ $item->product_name }}</p>
                                <span class="text-[10px] text-gray-400 font-medium">{{ $item->quantity }}x @ Rp {{ number_format($item->price, 0, ',', '.') }}</span>
                            </div>
                            <span class="font-black text-gray-900">Rp {{ number_format($item->subtotal, 0, ',', '.') }}</span>
                        </div>
                    @endforeach
                    <div class="pt-3 mt-2 flex justify-between items-center font-black text-sm text-gray-900 border-t border-gray-100">
                        <span>Total:</span>
                        <span class="text-[#00AA13]">{{ $order->formatted_total }}</span>
                    </div>
                </div>
            </div>

        </div>

        {{-- BANTUAN TOKO VIA WHATSAPP --}}
        @if(!empty($shop['shop_phone']))
            <div class="pt-4 border-t border-gray-100 flex flex-col sm:flex-row justify-between items-center gap-3">
                <p class="text-xs text-gray-500 font-medium text-center sm:text-left">Ada pertanyaan seputar pesanan Anda?</p>
                <a href="https://api.whatsapp.com/send?phone={{ preg_replace('/[^0-9]/', '', $shop['shop_phone']) }}&text={{ urlencode('Halo ' . ($shop['shop_name'] ?? 'Toko') . ', saya ingin bertanya mengenai pesanan online saya dengan Nomor ' . $order->order_number) }}" 
                   target="_blank"
                   class="px-5 py-3 bg-emerald-50 text-[#00880F] hover:bg-emerald-100 rounded-2xl font-black text-xs uppercase tracking-wider transition border border-emerald-200/60 flex items-center space-x-2">
                    <span>💬 Chat WhatsApp Toko</span>
                </a>
            </div>
        @endif

    </div>

</div>

<script>
function liveOrderTracker(orderNumber, initialLevel, initialStatus, initialTracking, initialCourier) {
    return {
        currentLevel: initialLevel,
        currentStatus: initialStatus,
        trackingNumber: initialTracking,
        courier: initialCourier,
        statusBadge: '{!! addslashes($order->status_badge) !!}',
        pollInterval: null,

        init() {
            // Polling realtime perubahan status & nomor resi setiap 3 detik
            this.pollInterval = setInterval(async () => {
                try {
                    const res = await fetch(`/order/check-status/${orderNumber}`);
                    if (res.ok) {
                        const data = await res.json();
                        
                        // Deteksi jika terjadi perubahan status atau resi baru
                        if (data.status !== this.currentStatus || (data.tracking_number && data.tracking_number !== this.trackingNumber)) {
                            this.currentLevel = data.level;
                            this.currentStatus = data.status;
                            this.trackingNumber = data.tracking_number || '';
                            this.courier = data.courier || this.courier;
                            this.statusBadge = data.status_badge;

                            if (typeof window.playNotificationSound === 'function') {
                                window.playNotificationSound('status_update');
                            }

                            Swal.fire({
                                icon: 'info',
                                title: 'Status Pesanan Diperbarui!',
                                text: `Pesanan Anda sekarang: ${data.status_label}`,
                                toast: true,
                                position: 'top-end',
                                timer: 3500,
                                showConfirmButton: false
                            });
                        }
                    }
                } catch (e) {
                    console.log('Error polling order track:', e);
                }
            }, 3000);
        },

        copyTrackingNumber() {
            if (this.trackingNumber) {
                navigator.clipboard.writeText(this.trackingNumber);
                if (typeof window.playNotificationSound === 'function') {
                    window.playNotificationSound('chime');
                }
                Swal.fire({
                    icon: 'success',
                    title: 'Tersalin!',
                    text: 'Nomor resi berhasil disalin ke clipboard.',
                    toast: true,
                    position: 'top-end',
                    timer: 2000,
                    showConfirmButton: false
                });
            }
        }
    }
}
</script>
@endsection

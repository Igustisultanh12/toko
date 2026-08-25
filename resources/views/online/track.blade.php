@extends('online.layout')

@section('title', 'Lacak Pesanan ' . $order->order_number)

@section('content')
<div class="max-w-3xl mx-auto px-4 py-8 space-y-6">

    {{-- HEADER KARTU UTAMA --}}
    <div class="bg-white rounded-[2.5rem] p-6 sm:p-8 border border-gray-100 shadow-xl space-y-8">
        
        {{-- TOP BAR --}}
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-3 border-b border-gray-100 pb-6">
            <div>
                <div class="flex items-center space-x-2">
                    <span class="text-xs font-black text-gray-400 uppercase tracking-widest">No. Pesanan:</span>
                    <span class="font-mono font-black text-indigo-700 text-base">{{ $order->order_number }}</span>
                </div>
                <p class="text-xs text-gray-400 font-medium mt-0.5">Dipesan pada: {{ $order->created_at->format('d F Y, H:i') }} WIB</p>
            </div>
            <div>
                {!! $order->status_badge !!}
            </div>
        </div>

        {{-- VISUAL STEPPER PELACAKAN PESANAN --}}
        @php
            $steps = [
                'pending_payment' => ['title' => 'Menunggu Bayar', 'desc' => 'Menunggu scan QRIS', 'icon' => '💳', 'level' => 1],
                'paid'            => ['title' => 'Sudah Dibayar', 'desc' => 'Menunggu konfirmasi kasir', 'icon' => '💰', 'level' => 2],
                'processing'      => ['title' => 'Sedang Disiapkan', 'desc' => 'Barang dipacking toko', 'icon' => '📦', 'level' => 3],
                'shipped'         => ['title' => 'Sedang Dikirim', 'desc' => 'Diserahkan ke kurir', 'icon' => '🚚', 'level' => 4],
                'completed'       => ['title' => 'Selesai', 'desc' => 'Pesanan telah diterima', 'icon' => '🎉', 'level' => 5],
            ];

            $currentLevel = match($order->status) {
                'pending_payment' => 1,
                'paid'            => 2,
                'processing'      => 3,
                'shipped'         => 4,
                'completed'       => 5,
                default           => 1,
            };
        @endphp

        <div class="space-y-4">
            <h3 class="text-xs font-black text-gray-800 uppercase tracking-wider">Status & Tahapan Pengiriman:</h3>
            
            <div class="grid grid-cols-1 sm:grid-cols-5 gap-3">
                @foreach($steps as $key => $s)
                    @php
                        $isActive = $s['level'] <= $currentLevel;
                        $isCurrent = $s['level'] === $currentLevel;
                    @endphp
                    <div class="p-3.5 rounded-2xl border transition-all text-center sm:text-left {{ $isCurrent ? 'bg-emerald-50 border-[#00AA13] shadow-md' : ($isActive ? 'bg-gray-50 border-gray-200 text-gray-700' : 'bg-white border-gray-100 opacity-40') }}">
                        <div class="flex items-center space-x-2 sm:block sm:space-x-0">
                            <span class="text-xl block sm:mb-1">{{ $s['icon'] }}</span>
                            <div>
                                <h4 class="font-black text-xs {{ $isCurrent ? 'text-[#00880F]' : 'text-gray-800' }}">{{ $s['title'] }}</h4>
                                <p class="text-[9px] text-gray-500 font-medium leading-tight mt-0.5">{{ $s['desc'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- KOTAK NOMOR RESI PENGIRIMAN (JIKA SUDAH DIKIRIM) --}}
        @if(!empty($order->tracking_number))
            <div class="bg-gradient-to-r from-emerald-500 to-[#00880F] rounded-3xl p-6 text-white shadow-lg space-y-3">
                <div class="flex justify-between items-center">
                    <span class="text-[10px] font-black uppercase tracking-widest text-emerald-200">Nomor Resi Pengiriman Resmi:</span>
                    <span class="px-3 py-1 bg-white/20 rounded-full text-[10px] font-bold text-white uppercase">{{ $order->courier }}</span>
                </div>
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-3">
                    <div class="font-mono text-2xl sm:text-3xl font-black tracking-widest" id="trackingNumberText">
                        {{ $order->tracking_number }}
                    </div>
                    <button type="button" onclick="navigator.clipboard.writeText('{{ $order->tracking_number }}'); Swal.fire({ icon: 'success', title: 'Tersalin!', text: 'Nomor resi berhasil disalin ke clipboard.', toast: true, position: 'top-end', timer: 2000, showConfirmButton: false });"
                            class="px-5 py-2.5 bg-white text-[#00880F] hover:bg-emerald-50 rounded-xl font-black text-xs uppercase tracking-wider shadow transition">
                        📋 Salin Resi
                    </button>
                </div>
                <p class="text-xs text-emerald-100 font-medium">
                    Gunakan nomor resi di atas untuk melacak posisi paket di aplikasi / situs resmi <b>{{ $order->courier }}</b>.
                </p>
            </div>
        @elseif($order->status === 'pending_payment')
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
        @else
            <div class="p-5 bg-gray-50 rounded-3xl border border-gray-100 text-gray-600 text-xs">
                <span>⏳ Nomor resi pengiriman akan otomatis muncul di halaman ini setelah pesanan Anda diserahkan ke pihak ekspedisi oleh toko.</span>
            </div>
        @endif

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
@endsection

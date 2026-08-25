@extends('online.layout')

@section('title', 'Bukti Pesanan ' . $order->order_number)

@section('content')
<div class="max-w-xl mx-auto px-4 py-8 space-y-6">

    {{-- KARTU STRUK DIGITAL --}}
    <div class="bg-white rounded-[2.5rem] p-6 sm:p-8 border border-gray-100 shadow-xl space-y-6 text-center">
        
        {{-- BADGE SUKSES --}}
        <div class="w-16 h-16 bg-emerald-100 text-[#00880F] rounded-full flex items-center justify-center mx-auto text-2xl shadow-inner animate-bounce">
            ✔
        </div>

        <div>
            <h2 class="text-xl font-black text-gray-900 uppercase tracking-tight">Pesanan Berhasil Dibuat!</h2>
            <p class="text-xs text-gray-500 font-medium mt-1">Pembayaran QRIS telah lunas dan pesanan diteruskan ke kasir/admin toko.</p>
        </div>

        {{-- KOTAK NOMOR PESANAN --}}
        <div class="bg-gray-50 p-4 rounded-2xl border border-gray-100 flex justify-between items-center text-xs">
            <span class="text-gray-400 font-bold uppercase">No. Pesanan:</span>
            <span class="font-mono font-black text-indigo-700 text-sm">{{ $order->order_number }}</span>
        </div>

        {{-- STATUS STEPPER SINGKAT --}}
        <div class="p-4 bg-emerald-50 rounded-2xl border border-emerald-200/60 text-left space-y-1">
            <div class="flex items-center space-x-2">
                <span class="w-2.5 h-2.5 rounded-full bg-[#00AA13] animate-ping"></span>
                <span class="text-xs font-black text-[#00880F] uppercase">Status Saat Ini: {{ $order->status_label }}</span>
            </div>
            <p class="text-[11px] text-emerald-800 font-medium">Kasir/Admin sedang menyiapkan pesanan Anda. Anda dapat melacak status resi pengiriman secara realtime.</p>
        </div>

        {{-- TABEL RINCIAN BARANG --}}
        <div class="text-left space-y-3 pt-2">
            <h4 class="font-black text-gray-800 uppercase text-xs">Rincian Pembelian</h4>
            <div class="divide-y divide-gray-100 border border-gray-100 rounded-2xl p-4">
                @foreach($order->items as $item)
                    <div class="py-2 flex justify-between items-center text-xs">
                        <div>
                            <p class="font-bold text-gray-800">{{ $item->product_name }}</p>
                            <span class="text-[10px] text-gray-400 font-medium">{{ $item->quantity }} pcs x Rp {{ number_format($item->price, 0, ',', '.') }}</span>
                        </div>
                        <span class="font-black text-gray-900">Rp {{ number_format($item->subtotal, 0, ',', '.') }}</span>
                    </div>
                @endforeach
                
                <div class="pt-3 mt-2 flex justify-between items-center font-black text-sm text-gray-900 border-t border-gray-100">
                    <span>Total Pembayaran (QRIS):</span>
                    <span class="text-[#00AA13]">{{ $order->formatted_total }}</span>
                </div>
            </div>
        </div>

        {{-- INFORMASI PENGIRIMAN --}}
        <div class="text-left bg-gray-50 p-4 rounded-2xl border border-gray-100 text-xs space-y-1.5">
            <h4 class="font-black text-gray-800 uppercase text-[10px] tracking-wider">Tujuan Pengiriman</h4>
            <p class="font-bold text-gray-900">{{ $order->customer_name }} ({{ $order->customer_phone }})</p>
            <p class="text-gray-600 leading-relaxed">{{ $order->customer_address }}</p>
            <p class="text-[11px] text-gray-500 font-bold">🚚 Kurir: {{ $order->courier }}</p>
            @if($order->tracking_number)
                <div class="p-2 bg-emerald-100 text-[#00661A] rounded-xl font-bold font-mono mt-1">
                    No. Resi: {{ $order->tracking_number }}
                </div>
            @endif
        </div>

        {{-- TOMBOL AKSI: LACAK PESANAN --}}
        <div class="pt-2 flex flex-col sm:flex-row gap-3">
            <a href="{{ route('order.track', $order->order_number) }}" 
               class="flex-1 py-4 bg-[#00AA13] hover:bg-[#00880F] text-white font-black text-xs uppercase tracking-wider rounded-2xl shadow-lg shadow-emerald-500/25 transition flex items-center justify-center space-x-2">
                <span>📦 Lacak Status Pengiriman</span>
            </a>
            <button onclick="window.print()" 
                    class="px-5 py-4 bg-gray-100 hover:bg-gray-200 text-gray-700 font-bold text-xs uppercase tracking-wider rounded-2xl transition">
                🖨️ Cetak Struk
            </button>
        </div>

    </div>

</div>
@endsection

@extends('online.layout')

@section('title', 'Pembayaran QRIS Pesanan ' . $order->order_number)

@section('content')
<div x-data="qrisPayment('{{ $order->order_number }}')" class="max-w-xl mx-auto px-4 py-8 space-y-6">

    {{-- KARTU PEMBAYARAN QRIS --}}
    <div class="bg-white rounded-[2.5rem] p-6 sm:p-8 border border-gray-100 shadow-xl text-center space-y-6">
        
        {{-- HEADER STATUS --}}
        <div>
            <span class="px-4 py-1.5 bg-amber-50 text-amber-600 rounded-full text-[10px] font-black uppercase tracking-wider border border-amber-200 inline-block animate-pulse">
                ⏱️ Menunggu Pembayaran QRIS
            </span>
            <h2 class="text-xl font-black text-gray-900 uppercase tracking-tight mt-2">Pindai QRIS untuk Membayar</h2>
            <p class="text-xs text-gray-400 font-medium">Buka aplikasi GoPay, OVO, Dana, BCA, ShopeePay, atau Mobile Banking Anda.</p>
        </div>

        {{-- TOTAL TAGIHAN --}}
        <div class="bg-gradient-to-r from-emerald-50 to-teal-50 p-5 rounded-3xl border border-emerald-200/60">
            <span class="text-[10px] font-black text-gray-400 uppercase tracking-widest block">Total Tagihan Pesanan:</span>
            <h3 class="text-3xl font-black text-[#00AA13] mt-1">{{ $order->formatted_total }}</h3>
            <span class="text-[10px] font-mono text-gray-500 font-bold block mt-1">No. Pesanan: {{ $order->order_number }}</span>
        </div>

        {{-- KODE QRIS DINAMIS --}}
        <div class="bg-white p-6 rounded-3xl border-2 border-dashed border-emerald-300 inline-block shadow-sm">
            @if(!empty($order->qris_url))
                <iframe src="{{ $order->qris_url }}" class="w-64 h-64 border-0 rounded-2xl mx-auto"></iframe>
            @else
                {{-- SIMULASI / QR CODE GENERATOR STANDAR --}}
                <div class="space-y-3">
                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=240x240&data={{ urlencode(route('order.pay', $order->order_number)) }}" 
                         class="w-56 h-56 mx-auto rounded-2xl shadow-sm border border-gray-100">
                    <p class="text-[10px] font-black text-gray-400 uppercase tracking-wider">QRIS Dinamis Otomatis</p>
                </div>
            @endif
        </div>

        {{-- COUNTDOWN TIMER --}}
        <div class="flex items-center justify-center space-x-2 text-xs font-bold text-gray-500">
            <span>Selesaikan pembayaran dalam:</span>
            <span class="font-mono font-black text-rose-600 bg-rose-50 px-3 py-1 rounded-xl text-sm" x-text="countdownText">15:00</span>
        </div>

        {{-- DETEKSI PEMBAYARAN OTOMATIS --}}
        <div class="p-4 bg-gray-50 rounded-2xl border border-gray-100 flex items-center justify-center space-x-2 text-xs font-bold text-gray-600">
            <svg class="animate-spin h-4 w-4 text-[#00AA13]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
            <span>Sistem otomatis mendeteksi ketika Anda selesai membayar...</span>
        </div>

        {{-- TOMBOL SIMULASI BAYAR (KHUSUS SANDBOX / TESTING) --}}
        <div class="pt-2 border-t border-gray-100 flex flex-col sm:flex-row gap-3">
            <form method="POST" action="{{ route('order.simulatePay', $order->order_number) }}" class="w-full">
                @csrf
                <button type="submit" 
                        class="w-full py-3.5 bg-[#00AA13] hover:bg-[#00880F] text-white font-black text-xs uppercase tracking-wider rounded-2xl shadow-lg shadow-emerald-500/20 transition">
                    ⚡ Simulasi Bayar Sekarang (Testing)
                </button>
            </form>
        </div>

    </div>

    {{-- RINCIAN BARANG --}}
    <div class="bg-white rounded-[2rem] p-6 border border-gray-100 shadow-sm space-y-3">
        <h4 class="font-black text-gray-900 uppercase text-xs">Rincian Barang yang Dipesan</h4>
        <div class="divide-y divide-gray-50">
            @foreach($order->items as $item)
                <div class="py-2.5 flex justify-between items-center text-xs">
                    <div>
                        <p class="font-bold text-gray-800">{{ $item->product_name }}</p>
                        <span class="text-[10px] text-gray-400 font-medium">{{ $item->quantity }}x @ Rp {{ number_format($item->price, 0, ',', '.') }}</span>
                    </div>
                    <span class="font-black text-gray-900">Rp {{ number_format($item->subtotal, 0, ',', '.') }}</span>
                </div>
            @endforeach
        </div>
    </div>

</div>

<script>
function qrisPayment(orderNumber) {
    return {
        timeLeft: 900, // 15 menit
        countdownText: '15:00',
        checkInterval: null,
        timerInterval: null,

        init() {
            // Jalankan hitung mundur
            this.timerInterval = setInterval(() => {
                this.timeLeft--;
                if (this.timeLeft <= 0) {
                    clearInterval(this.timerInterval);
                    this.countdownText = '00:00';
                } else {
                    const m = Math.floor(this.timeLeft / 60);
                    const s = this.timeLeft % 60;
                    this.countdownText = `${String(m).padStart(2, '0')}:${String(s).padStart(2, '0')}`;
                }
            }, 1000);

            // Polling status pembayaran setiap 3 detik
            this.checkInterval = setInterval(async () => {
                try {
                    const res = await fetch(`/order/check-status/${orderNumber}`);
                    if (res.ok) {
                        const data = await res.json();
                        if (data.is_paid) {
                            clearInterval(this.checkInterval);
                            clearInterval(this.timerInterval);
                            
                            Swal.fire({
                                icon: 'success',
                                title: 'Pembayaran Diterima!',
                                text: 'Pembayaran QRIS Anda berhasil diverifikasi.',
                                timer: 2000,
                                showConfirmButton: false
                            }).then(() => {
                                window.location.href = data.redirect_url;
                            });
                        }
                    }
                } catch (e) {
                    console.log('Polling check error:', e);
                }
            }, 3000);
        }
    }
}
</script>
@endsection

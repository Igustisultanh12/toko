@extends('layouts.admin')

@section('title', 'Laporan QRIS DOKU')
@section('header_title', 'Monitoring Digital QRIS DOKU')

@section('content')
<div class="max-w-6xl mx-auto space-y-8 pb-20">

    {{-- HEADER BAR & EXPORT --}}
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 bg-white p-6 rounded-[2.5rem] border border-gray-100 shadow-sm">
        <div>
            <h3 class="text-lg font-black text-gray-900 uppercase tracking-tight">Kanal Pembayaran Digital QRIS</h3>
            <p class="text-xs text-gray-400 font-medium">Monitoring transaksi QRIS DOKU, saldo masuk realtime, dan grafik pendapatan harian.</p>
        </div>
        <div class="flex items-center space-x-3 w-full sm:w-auto">
            <a href="{{ route('admin.reports.qris.pdf', request()->all()) }}" 
               class="flex-1 sm:flex-none text-center px-5 py-3 bg-[#EE2737] hover:bg-rose-700 text-white rounded-2xl font-black text-xs uppercase tracking-wider shadow-lg shadow-rose-200 transition">
                📄 Export PDF
            </a>
            <a href="{{ route('admin.reports.qris.excel', request()->all()) }}" 
               class="flex-1 sm:flex-none text-center px-5 py-3 bg-[#00AA13] hover:bg-[#00880F] text-white rounded-2xl font-black text-xs uppercase tracking-wider shadow-lg shadow-emerald-500/25 transition">
                📊 Export Excel
            </a>
        </div>
    </div>
    
    {{-- STATS CARDS GOPAY STYLE --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-gray-100">
            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">Pemasukan QRIS Hari Ini</p>
            <h3 class="text-3xl font-black text-[#00AED6]">Rp {{ number_format($stats['today_revenue'], 0, ',', '.') }}</h3>
            <p class="text-[10px] text-cyan-600 mt-1 font-bold">● Transaksi Berhasil</p>
        </div>

        <div class="bg-gradient-to-r from-[#004D13] to-[#00880F] p-8 rounded-[2.5rem] shadow-xl text-white">
            <p class="text-[10px] font-black text-emerald-200 uppercase tracking-widest mb-1">Total Saldo QRIS (Lunas)</p>
            <h3 class="text-3xl font-black">Rp {{ number_format($stats['total_success'], 0, ',', '.') }}</h3>
            <p class="text-[10px] text-emerald-200 mt-1 font-bold">● Saldo Terkumpul</p>
        </div>

        <div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-gray-100">
            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">Transaksi Belum Bayar</p>
            <h3 class="text-3xl font-black text-[#FFB800]">{{ $stats['pending_count'] }} <span class="text-sm text-gray-400">Invoice</span></h3>
            <p class="text-[10px] text-amber-600 mt-1 font-bold">● Menunggu Pembeli</p>
        </div>
    </div>

    {{-- GRAFIK TREN --}}
    <div class="bg-white p-8 sm:p-10 rounded-[3rem] shadow-sm border border-gray-100">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h3 class="text-base font-black text-gray-900 uppercase tracking-tight">Tren Pendapatan QRIS 7 Hari Terakhir</h3>
                <p class="text-xs text-gray-400 font-medium">Aktivitas volume penerimaan QRIS DOKU</p>
            </div>
            <div class="bg-emerald-50 text-[#00880F] text-[10px] font-black px-4 py-1.5 rounded-full uppercase border border-emerald-200/60">
                🟢 Live Sinkron
            </div>
        </div>
        <canvas id="qrisChart" height="90"></canvas>
    </div>

    {{-- TABEL TRANSAKSI --}}
    <div class="bg-white rounded-[2.5rem] shadow-sm border border-gray-100 overflow-hidden">
        {{-- HEADER TABEL & SEARCH BAR --}}
        <div class="p-6 sm:p-8 border-b border-gray-100 flex flex-col md:flex-row justify-between items-center gap-4 bg-gray-50/50">
            <div>
                <h3 class="font-black text-gray-900 uppercase text-sm">Riwayat QRIS DOKU</h3>
                <p class="text-xs text-gray-400 font-medium">Daftar pembayaran digital via scan QRIS</p>
            </div>
            
            {{-- FORM PENCARIAN --}}
            <form action="{{ route('admin.reports.qris') }}" method="GET" class="relative w-full md:w-80">
                <input type="text" 
                       name="search" 
                       value="{{ request('search') }}"
                       placeholder="Cari Nomor Invoice..." 
                       class="w-full pl-10 pr-4 py-3 bg-white border border-gray-200 rounded-2xl text-xs font-bold focus:border-[#00AA13] transition-all outline-none"
                >
                <div class="absolute left-3.5 top-3.5 text-gray-400">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
                @if(request('search'))
                    <a href="{{ route('admin.reports.qris') }}" class="absolute right-4 top-3 text-[10px] font-black text-rose-500 uppercase hover:underline">Reset</a>
                @endif
            </form>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse text-xs">
                <thead>
                    <tr class="bg-gray-50/80 text-[10px] font-black text-gray-400 uppercase tracking-widest border-b border-gray-100">
                        <th class="p-5">No. Invoice</th>
                        <th class="p-5">Waktu Transaksi</th>
                        <th class="p-5 text-right">Nominal QRIS</th>
                        <th class="p-5 text-center">Status Pembayaran</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    @forelse($transactions as $trx)
                    <tr class="hover:bg-emerald-50/30 transition-colors">
                        <td class="p-5 font-mono text-xs font-black text-gray-800">{{ $trx->transaction_number }}</td>
                        <td class="p-5 text-xs text-gray-500 font-medium">{{ $trx->created_at->format('d M Y, H:i') }} WIB</td>
                        <td class="p-5 text-right font-black text-[#00AED6] text-sm">Rp {{ number_format($trx->total_amount, 0, ',', '.') }}</td>
                        <td class="p-5 text-center">
                            @if($trx->payment_status == 'success')
                                <span class="bg-emerald-50 text-[#00880F] border border-emerald-200/60 text-[9px] font-black px-3 py-1 rounded-full uppercase">Lunas</span>
                            @elseif($trx->payment_status == 'pending')
                                <span class="bg-amber-50 text-amber-600 border border-amber-200/60 text-[9px] font-black px-3 py-1 rounded-full uppercase">Menunggu</span>
                            @else
                                <span class="bg-rose-50 text-rose-600 border border-rose-200/60 text-[9px] font-black px-3 py-1 rounded-full uppercase">Gagal</span>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="p-12 text-center text-gray-300 font-bold uppercase text-xs italic">Data transaksi QRIS tidak ditemukan</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="p-6 bg-white border-t border-gray-100">
            {{ $transactions->links() }}
        </div>
    </div>
</div>

{{-- SCRIPT CHART.JS GOJEK CYAN GRADIENT --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('qrisChart').getContext('2d');
    const gradient = ctx.createLinearGradient(0, 0, 0, 300);
    gradient.addColorStop(0, 'rgba(0, 174, 214, 0.25)');
    gradient.addColorStop(1, 'rgba(0, 174, 214, 0.0)');

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: {!! json_encode($chartData->pluck('date')) !!},
            datasets: [{
                label: 'Pemasukan QRIS (Rp)',
                data: {!! json_encode($chartData->pluck('total')) !!},
                borderColor: '#00AED6',
                backgroundColor: gradient,
                borderWidth: 3.5,
                fill: true,
                tension: 0.4,
                pointRadius: 5,
                pointBackgroundColor: '#fff',
                pointBorderColor: '#00AED6',
                pointBorderWidth: 3
            }]
        },
        options: {
            responsive: true,
            plugins: { 
                legend: { display: false },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return 'Rp ' + context.parsed.y.toLocaleString('id-ID');
                        }
                    }
                }
            },
            scales: {
                y: { beginAtZero: true, grid: { display: false }, ticks: { font: { weight: 'bold' } } },
                x: { grid: { display: false }, ticks: { font: { weight: 'bold' } } }
            }
        }
    });
</script>
@endsection

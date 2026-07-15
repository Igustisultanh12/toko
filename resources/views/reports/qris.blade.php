@extends('layouts.admin')

@section('title', 'Laporan QRIS DOKU')

@section('content')

{{-- TOMBOL EXPORT DENGAN FILTER PENCARIAN --}}
<div class="flex space-x-3 mt-4 mb-6">
    <a href="{{ route('admin.reports.qris.pdf', request()->all()) }}" class="flex items-center px-6 py-3 bg-red-500 text-white rounded-2xl font-black text-[10px] uppercase shadow-lg hover:bg-red-600 transition-all">
        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" stroke-width="2.5"/></svg>
        Export PDF
    </a>
    
    <a href="{{ route('admin.reports.qris.excel', request()->all()) }}" class="flex items-center px-6 py-3 bg-green-600 text-white rounded-2xl font-black text-[10px] uppercase shadow-lg hover:bg-green-700 transition-all">
        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" stroke-width="2.5"/></svg>
        Export Excel
    </a>
</div>

<div class="max-w-6xl mx-auto space-y-8 pb-20">
    
    {{-- HEADER & STATS --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-gray-100">
            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">Pemasukan QRIS Hari Ini</p>
            <h3 class="text-3xl font-black text-indigo-600">Rp {{ number_format($stats['today_revenue'], 0, ',', '.') }}</h3>
        </div>
        <div class="bg-indigo-600 p-8 rounded-[2.5rem] shadow-xl text-white">
            <p class="text-[10px] font-bold text-indigo-200 uppercase tracking-widest mb-1">Total Saldo QRIS (Lunas)</p>
            <h3 class="text-3xl font-black">Rp {{ number_format($stats['total_success'], 0, ',', '.') }}</h3>
        </div>
        <div class="bg-white p-8 rounded-[2.5rem] shadow-sm border border-gray-100">
            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">Transaksi Belum Bayar</p>
            <h3 class="text-3xl font-black text-orange-500">{{ $stats['pending_count'] }} <span class="text-sm text-gray-300">Item</span></h3>
        </div>
    </div>

    {{-- GRAFIK TREN --}}
    <div class="bg-white p-10 rounded-[3.5rem] shadow-sm border border-gray-100">
        <div class="flex justify-between items-center mb-8">
            <h3 class="text-lg font-black text-gray-800 uppercase">Tren QRIS 7 Hari Terakhir</h3>
            <div class="bg-green-100 text-green-600 text-[10px] font-black px-4 py-1.5 rounded-full uppercase">Update Realtime</div>
        </div>
        <canvas id="qrisChart" height="100"></canvas>
    </div>

    {{-- TABEL TRANSAKSI --}}
    <div class="bg-white rounded-[3rem] shadow-sm border border-gray-100 overflow-hidden">
        
        {{-- HEADER TABEL & SEARCH BAR --}}
        <div class="p-8 border-b border-gray-50 flex flex-col md:flex-row justify-between items-center gap-4">
            <h3 class="font-black text-gray-800 uppercase text-sm">Riwayat QRIS DOKU</h3>
            
            {{-- FORM PENCARIAN --}}
            <form action="{{ route('admin.reports.qris') }}" method="GET" class="relative w-full md:w-80">
                <input type="text" 
                       name="search" 
                       value="{{ request('search') }}"
                       placeholder="Cari ID Transaksi..." 
                       class="w-full pl-12 pr-4 py-3 bg-gray-50 border-none rounded-2xl text-xs font-bold focus:ring-2 focus:ring-indigo-500 transition-all shadow-inner"
                >
                <div class="absolute left-4 top-3.5 text-gray-400">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
                @if(request('search'))
                    <a href="{{ route('admin.reports.qris') }}" class="absolute right-4 top-3 text-[10px] font-black text-red-500 uppercase hover:underline">Reset</a>
                @endif
            </form>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50">
                        <th class="p-6 text-[10px] font-black text-gray-400 uppercase">ID Transaksi</th>
                        <th class="p-6 text-[10px] font-black text-gray-400 uppercase">Waktu</th>
                        <th class="p-6 text-[10px] font-black text-gray-400 uppercase">Nominal</th>
                        <th class="p-6 text-[10px] font-black text-gray-400 uppercase text-center">Status Bayar</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    @forelse($transactions as $trx)
                    <tr class="hover:bg-indigo-50/30 transition-colors">
                        <td class="p-6 font-mono text-xs font-bold text-gray-600">{{ $trx->transaction_number }}</td>
                        <td class="p-6 text-xs text-gray-500 font-medium">{{ $trx->created_at->format('d M Y, H:i') }} WIB</td>
                        <td class="p-6 font-black text-gray-800">Rp {{ number_format($trx->total_amount, 0, ',', '.') }}</td>
                        <td class="p-6 text-center">
                            @if($trx->payment_status == 'success')
                                <span class="bg-green-100 text-green-600 text-[9px] font-black px-3 py-1 rounded-full uppercase shadow-sm">Lunas</span>
                            @elseif($trx->payment_status == 'pending')
                                <span class="bg-orange-100 text-orange-600 text-[9px] font-black px-3 py-1 rounded-full uppercase shadow-sm">Waiting</span>
                            @else
                                <span class="bg-red-100 text-red-600 text-[9px] font-black px-3 py-1 rounded-full uppercase shadow-sm">Gagal</span>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="p-10 text-center text-gray-400 font-bold uppercase text-xs">Data tidak ditemukan</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="p-6 bg-gray-50">
            {{ $transactions->links() }}
        </div>
    </div>
</div>

{{-- SCRIPT CHART.JS --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('qrisChart').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: {!! json_encode($chartData->pluck('date')) !!},
            datasets: [{
                label: 'Pemasukan (Rp)',
                data: {!! json_encode($chartData->pluck('total')) !!},
                borderColor: '#4f46e5',
                backgroundColor: 'rgba(79, 70, 229, 0.1)',
                borderWidth: 4,
                fill: true,
                tension: 0.4,
                pointRadius: 6,
                pointBackgroundColor: '#fff',
                pointBorderColor: '#4f46e5',
                pointBorderWidth: 3
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { display: false } },
            scales: {
                y: { beginAtZero: true, grid: { display: false }, ticks: { font: { weight: 'bold' } } },
                x: { grid: { display: false }, ticks: { font: { weight: 'bold' } } }
            }
        }
    });
</script>
@endsection
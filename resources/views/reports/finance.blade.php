@extends('layouts.admin')

@section('title', 'Laporan Keuangan')
@section('header_title', 'Pusat Laporan Keuangan')

@section('content')
<div class="max-w-7xl mx-auto space-y-6 pb-20">

    {{-- HEADER ACTION --}}
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 bg-white p-6 rounded-[2rem] border border-gray-100 shadow-sm">
        <div>
            <h2 class="text-xl font-black text-gray-800 uppercase tracking-tight">Laporan Keuangan & Arus Kas</h2>
            <p class="text-xs text-gray-400 font-medium mt-0.5">Monitoring total omset, pendapatan kas tunai, dan penerimaan digital QRIS DOKU.</p>
        </div>
        <div class="flex items-center gap-2">
            <a href="{{ route('admin.reports.index') }}" 
               class="inline-flex items-center px-4 py-2.5 bg-indigo-50 text-indigo-600 hover:bg-indigo-100 rounded-xl font-bold text-xs transition-all">
                ← Buka Laporan Penjualan
            </a>
            <a href="{{ route('admin.reports.qris') }}" 
               class="inline-flex items-center px-4 py-2.5 bg-gray-100 text-gray-700 hover:bg-gray-200 rounded-xl font-bold text-xs transition-all">
                Monitoring QRIS DOKU
            </a>
        </div>
    </div>

    {{-- FILTER FORM CARD --}}
    <div class="bg-white p-6 sm:p-8 rounded-[2.5rem] border border-gray-100 shadow-sm space-y-6">
        <form method="GET" action="{{ route('admin.reports.finance') }}" id="financeFilterForm">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                
                {{-- PILIH PERIODE --}}
                <div>
                    <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1.5">Pilih Periode</label>
                    <select name="period" id="periodSelectFinance" onchange="togglePeriodInputsFinance()" 
                            class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-4 py-3 text-xs font-bold text-gray-800 focus:ring-2 focus:ring-indigo-500 focus:bg-white transition-all">
                        <option value="daily" {{ ($filters['period'] ?? 'daily') == 'daily' ? 'selected' : '' }}>📅 Harian (Pilih Tanggal)</option>
                        <option value="monthly" {{ ($filters['period'] ?? '') == 'monthly' ? 'selected' : '' }}>📆 Bulanan (Pilih Bulan)</option>
                        <option value="quarterly" {{ in_array($filters['period'] ?? '', ['quarterly', '3_months']) ? 'selected' : '' }}>📊 3 Bulan (Triwulan)</option>
                        <option value="yearly" {{ ($filters['period'] ?? '') == 'yearly' ? 'selected' : '' }}>📈 Tahunan (Pilih Tahun)</option>
                    </select>
                </div>

                {{-- DYNAMIC INPUT PERIODE --}}
                <div id="inputDailyFinance" class="period-input-fin">
                    <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1.5">Tanggal</label>
                    <input type="date" name="date" value="{{ $filters['date'] ?? date('Y-m-d') }}"
                           class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-4 py-3 text-xs font-bold text-gray-800 focus:ring-2 focus:ring-indigo-500 focus:bg-white transition-all">
                </div>

                <div id="inputMonthlyFinance" class="period-input-fin" style="display: none;">
                    <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1.5">Bulan & Tahun</label>
                    <input type="month" name="month" value="{{ $filters['month'] ?? date('Y-m') }}"
                           class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-4 py-3 text-xs font-bold text-gray-800 focus:ring-2 focus:ring-indigo-500 focus:bg-white transition-all">
                </div>

                <div id="inputQuarterlyFinance" class="period-input-fin grid grid-cols-2 gap-2" style="display: none;">
                    <div>
                        <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1.5">Kuartal</label>
                        <select name="quarter" class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-3 py-3 text-xs font-bold text-gray-800 focus:ring-2 focus:ring-indigo-500 focus:bg-white transition-all">
                            <option value="1" {{ ($filters['quarter'] ?? 1) == 1 ? 'selected' : '' }}>Q1 (Jan - Mar)</option>
                            <option value="2" {{ ($filters['quarter'] ?? 1) == 2 ? 'selected' : '' }}>Q2 (Apr - Jun)</option>
                            <option value="3" {{ ($filters['quarter'] ?? 1) == 3 ? 'selected' : '' }}>Q3 (Jul - Sep)</option>
                            <option value="4" {{ ($filters['quarter'] ?? 1) == 4 ? 'selected' : '' }}>Q4 (Okt - Des)</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1.5">Tahun</label>
                        <input type="number" name="year" min="2020" max="2099" value="{{ $filters['year'] ?? date('Y') }}"
                               class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-3 py-3 text-xs font-bold text-gray-800 focus:ring-2 focus:ring-indigo-500 focus:bg-white transition-all">
                    </div>
                </div>

                <div id="inputYearlyFinance" class="period-input-fin" style="display: none;">
                    <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1.5">Tahun</label>
                    <input type="number" name="year" min="2020" max="2099" value="{{ $filters['year'] ?? date('Y') }}"
                           class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-4 py-3 text-xs font-bold text-gray-800 focus:ring-2 focus:ring-indigo-500 focus:bg-white transition-all">
                </div>

                {{-- FILTER METODE BAYAR --}}
                <div>
                    <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1.5">Kanal Kas</label>
                    <select name="payment_method" class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-4 py-3 text-xs font-bold text-gray-800 focus:ring-2 focus:ring-indigo-500 focus:bg-white transition-all">
                        <option value="all" {{ ($filters['payment_method'] ?? 'all') == 'all' ? 'selected' : '' }}>Semua Kanal</option>
                        <option value="cash" {{ ($filters['payment_method'] ?? '') == 'cash' ? 'selected' : '' }}>💵 Kas Tunai (Cash)</option>
                        <option value="qris" {{ ($filters['payment_method'] ?? '') == 'qris' ? 'selected' : '' }}>📱 Digital QRIS (DOKU)</option>
                    </select>
                </div>

                {{-- CARI INVOICE / PELANGGAN --}}
                <div>
                    <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1.5">Cari Transaksi</label>
                    <div class="relative">
                        <input type="text" name="search" value="{{ $filters['search'] ?? '' }}" placeholder="Invoice / Pelanggan..."
                               class="w-full bg-gray-50 border border-gray-200 rounded-2xl pl-10 pr-4 py-3 text-xs font-bold text-gray-800 focus:ring-2 focus:ring-indigo-500 focus:bg-white transition-all">
                        <div class="absolute left-3.5 top-3.5 text-gray-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-width="2.5"/></svg>
                        </div>
                    </div>
                </div>
            </div>

            {{-- TOMBOL FILTER & EXPORT --}}
            <div class="flex flex-wrap items-center justify-between gap-3 pt-4 border-t border-gray-100">
                <div class="flex flex-wrap items-center gap-3">
                    <button type="submit" class="px-6 py-3 bg-[#00AA13] hover:bg-[#00880F] text-white rounded-2xl font-black text-xs uppercase tracking-wider shadow-lg shadow-emerald-500/25 transition-all flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" stroke-width="2"/></svg>
                        Tampilkan Data Keuangan
                    </button>
                    
                    <a href="{{ route('admin.reports.finance') }}" class="px-4 py-3 bg-gray-100 hover:bg-gray-200 text-gray-600 rounded-2xl font-bold text-xs uppercase transition-all">
                        Reset Filter
                    </a>
                </div>

                <div class="flex items-center gap-3">
                    <a href="{{ route('admin.reports.finance.pdf', request()->all()) }}" 
                       class="flex items-center px-5 py-3 bg-[#EE2737] text-white rounded-2xl font-black text-xs uppercase tracking-wider shadow-lg shadow-rose-200 hover:bg-rose-700 transition-all">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" stroke-width="2.5"/></svg>
                        Cetak PDF Keuangan
                    </a>

                    <a href="{{ route('admin.reports.finance.excel', request()->all()) }}" 
                       class="flex items-center px-5 py-3 bg-[#00AA13] text-white rounded-2xl font-black text-xs uppercase tracking-wider shadow-lg shadow-emerald-500/25 hover:bg-[#00880F] transition-all">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" stroke-width="2.5"/></svg>
                        Export Excel Keuangan
                    </a>
                </div>
            </div>
        </form>
    </div>

    {{-- STATISTIK KEUANGAN GOPAY STYLE --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        {{-- Total Omset --}}
        <div class="bg-gradient-to-r from-[#004D13] to-[#00880F] p-6 rounded-[2.5rem] shadow-xl text-white">
            <p class="text-[10px] font-black text-emerald-200 uppercase tracking-widest mb-1">Total Pemasukan Kas (Lunas)</p>
            <h3 class="text-3xl font-black">Rp {{ number_format($stats['total_income'] ?? 0, 0, ',', '.') }}</h3>
            <p class="text-[10px] text-emerald-200 mt-1 font-bold">{{ $periodLabel }}</p>
        </div>

        {{-- Kas Tunai --}}
        <div class="bg-white p-6 rounded-[2.5rem] shadow-sm border border-gray-100">
            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">Penerimaan Tunai (Cash)</p>
            <h3 class="text-2xl font-black text-[#00880F]">Rp {{ number_format($stats['cash_income'] ?? 0, 0, ',', '.') }}</h3>
            <p class="text-[10px] text-emerald-600 mt-1 font-bold">● Uang fisik di kasir</p>
        </div>

        {{-- Digital QRIS --}}
        <div class="bg-white p-6 rounded-[2.5rem] shadow-sm border border-gray-100">
            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">Penerimaan Digital QRIS</p>
            <h3 class="text-2xl font-black text-[#00AED6]">Rp {{ number_format($stats['qris_income'] ?? 0, 0, ',', '.') }}</h3>
            <p class="text-[10px] text-cyan-600 mt-1 font-bold">● Merchant DOKU</p>
        </div>

        {{-- Pending --}}
        <div class="bg-white p-6 rounded-[2.5rem] shadow-sm border border-gray-100">
            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">Dana Belum Selesai (Pending)</p>
            <h3 class="text-2xl font-black text-[#FFB800]">Rp {{ number_format($stats['pending_income'] ?? 0, 0, ',', '.') }}</h3>
            <p class="text-[10px] text-amber-600 mt-1 font-bold">● {{ $stats['pending_count'] ?? 0 }} transaksi tertunda</p>
        </div>
    </div>

    {{-- TABEL ARUS KAS MASUK --}}
    <div class="bg-white rounded-[2.5rem] shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-6 sm:p-8 border-b border-gray-50 flex justify-between items-center">
            <div>
                <h3 class="font-black text-gray-800 uppercase text-sm">Riwayat Arus Kas Penjualan</h3>
                <p class="text-xs text-gray-400 font-medium mt-0.5">Catatan seluruh penerimaan kas dan transfer kanal pembayaran.</p>
            </div>
            <span class="px-3 py-1.5 bg-indigo-50 text-indigo-600 text-[10px] font-black rounded-full uppercase">
                {{ $periodLabel }}
            </span>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50/80 text-[10px] font-black text-gray-400 uppercase tracking-wider">
                        <th class="p-5 text-center">No</th>
                        <th class="p-5">No. Invoice</th>
                        <th class="p-5">Tanggal & Waktu</th>
                        <th class="p-5">Pelanggan</th>
                        <th class="p-5 text-center">Kanal Pembayaran</th>
                        <th class="p-5 text-right">Nominal Masuk</th>
                        <th class="p-5 text-center">Status Transaksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50 text-xs">
                    @forelse($transactions as $index => $trx)
                    <tr class="hover:bg-indigo-50/20 transition-colors">
                        <td class="p-5 text-center font-bold text-gray-400">
                            {{ $transactions->firstItem() ? $transactions->firstItem() + $index : $index + 1 }}
                        </td>
                        <td class="p-5 font-mono font-bold text-gray-800">
                            {{ $trx->transaction_number }}
                        </td>
                        <td class="p-5 text-gray-500 font-medium whitespace-nowrap">
                            {{ $trx->created_at->format('d M Y, H:i') }} WIB
                        </td>
                        <td class="p-5 font-bold text-gray-700">
                            {{ $trx->customer_name ?? 'Pelanggan Umum' }}
                        </td>
                        <td class="p-5 text-center">
                            @if(strtolower($trx->payment_method) === 'qris')
                                <span class="bg-indigo-100 text-indigo-700 font-black px-3 py-1 rounded-full text-[9px] uppercase tracking-wider">QRIS DOKU</span>
                            @else
                                <span class="bg-emerald-100 text-emerald-700 font-black px-3 py-1 rounded-full text-[9px] uppercase tracking-wider">KAS TUNAI</span>
                            @endif
                        </td>
                        <td class="p-5 text-right font-black text-gray-900 whitespace-nowrap">
                            Rp {{ number_format($trx->total_amount, 0, ',', '.') }}
                        </td>
                        <td class="p-5 text-center whitespace-nowrap">
                            @if($trx->payment_status == 'success')
                                <span class="bg-green-100 text-green-700 text-[9px] font-black px-3 py-1 rounded-full uppercase shadow-sm">Lunas</span>
                            @elseif($trx->payment_status == 'pending')
                                <span class="bg-orange-100 text-orange-700 text-[9px] font-black px-3 py-1 rounded-full uppercase shadow-sm">Pending</span>
                            @else
                                <span class="bg-red-100 text-red-700 text-[9px] font-black px-3 py-1 rounded-full uppercase shadow-sm">Gagal</span>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="p-12 text-center text-gray-400 font-medium">
                            Tidak ada transaksi keuangan pada periode ini.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($transactions->hasPages())
        <div class="p-6 border-t border-gray-50">
            {{ $transactions->links() }}
        </div>
        @endif
    </div>

</div>

<script>
function togglePeriodInputsFinance() {
    const period = document.getElementById('periodSelectFinance').value;
    const allInputs = document.querySelectorAll('.period-input-fin');
    allInputs.forEach(el => el.style.display = 'none');

    if (period === 'daily') {
        document.getElementById('inputDailyFinance').style.display = 'block';
    } else if (period === 'monthly') {
        document.getElementById('inputMonthlyFinance').style.display = 'block';
    } else if (period === 'quarterly' || period === '3_months') {
        document.getElementById('inputQuarterlyFinance').style.display = 'grid';
    } else if (period === 'yearly') {
        document.getElementById('inputYearlyFinance').style.display = 'block';
    }
}

document.addEventListener('DOMContentLoaded', function() {
    togglePeriodInputsFinance();
});
</script>
@endsection

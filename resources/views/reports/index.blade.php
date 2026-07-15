@extends('layouts.admin')
@section('title', 'Laporan Penjualan')
@section('content')
<div class="max-w-4xl mx-auto space-y-6">
    <h2 class="text-2xl font-bold uppercase tracking-tighter text-gray-800">Pusat Laporan SIKANDA</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <a href="{{ route('admin.reports.qris') }}" class="p-8 bg-indigo-600 text-white rounded-[2.5rem] shadow-xl hover:scale-105 transition-all">
            <h3 class="font-black uppercase tracking-widest text-xs">Monitoring</h3>
            <p class="text-2xl font-bold mt-2">Laporan QRIS DOKU →</p>
        </a>
        <div class="p-8 bg-white border rounded-[2.5rem] shadow-sm">
             <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">Penjualan Hari Ini</p>
             <p class="text-3xl font-black text-gray-800">Rp {{ number_format($todaySales, 0, ',', '.') }}</p>
        </div>
    </div>
</div>
@endsection
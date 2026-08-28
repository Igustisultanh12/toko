@extends('layouts.admin')

@section('title', 'Pusat Backup & Migrasi Data')

@section('content')
<div class="max-w-6xl mx-auto space-y-8 pb-12">

    {{-- HEADER UTAMA --}}
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 bg-gradient-to-r from-[#00360D] to-[#005B16] text-white p-6 sm:p-8 rounded-[2.5rem] shadow-xl relative overflow-hidden">
        <div class="absolute -right-10 -bottom-10 w-48 h-48 bg-[#00AA13]/20 rounded-full blur-2xl pointer-events-none"></div>
        
        <div class="space-y-1 relative z-10">
            <div class="inline-flex items-center space-x-2 px-3 py-1 bg-white/10 rounded-full text-[10px] font-black uppercase tracking-wider text-emerald-300 border border-white/10 mb-2">
                <span>🔄</span>
                <span>Pusat Cadangan & Pemindahan Data</span>
            </div>
            <h1 class="text-2xl sm:text-3xl font-black uppercase tracking-tight text-white">Backup & Migrasi Data</h1>
            <p class="text-xs text-emerald-200/80 font-medium max-w-xl">
                Ekspor seluruh data barang, foto galeri, riwayat penjualan, pesanan online, akun pengguna, dan pengaturan sistem ke dalam 1 paket lengkap untuk mempermudah migrasi ke server atau aplikasi baru.
            </p>
        </div>

        <div class="relative z-10 shrink-0">
            <a href="{{ route('admin.backup.export.zip') }}" 
               class="px-6 py-4 bg-[#00AA13] hover:bg-[#00880F] active:scale-95 text-white rounded-2xl font-black text-xs uppercase tracking-wider shadow-lg shadow-emerald-950/40 transition flex items-center space-x-2 border border-emerald-400/30">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                </svg>
                <span>Unduh Paket Lengkap (.ZIP)</span>
            </a>
        </div>
    </div>

    {{-- STATISTIK RINGKASAN DATA YANG TERSEDIA --}}
    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
        <div class="bg-white p-5 rounded-3xl border border-slate-100 shadow-sm space-y-1">
            <span class="text-[10px] font-black uppercase text-slate-400 tracking-wider">📦 Produk & Stok</span>
            <p class="text-2xl font-black text-slate-800">{{ $stats['total_products'] }} <span class="text-xs text-slate-400 font-bold">Item</span></p>
            <p class="text-[9px] text-emerald-600 font-bold">Termasuk foto & galeri</p>
        </div>

        <div class="bg-white p-5 rounded-3xl border border-slate-100 shadow-sm space-y-1">
            <span class="text-[10px] font-black uppercase text-slate-400 tracking-wider">🧾 Transaksi Kasir</span>
            <p class="text-2xl font-black text-[#00880F]">{{ $stats['total_sales'] }} <span class="text-xs text-slate-400 font-bold">Faktur</span></p>
            <p class="text-[9px] text-slate-400 font-bold">{{ $stats['total_sale_items'] }} item terjual</p>
        </div>

        <div class="bg-white p-5 rounded-3xl border border-slate-100 shadow-sm space-y-1">
            <span class="text-[10px] font-black uppercase text-slate-400 tracking-wider">🚚 Pesanan Online</span>
            <p class="text-2xl font-black text-purple-700">{{ $stats['total_orders'] }} <span class="text-xs text-slate-400 font-bold">Pesanan</span></p>
            <p class="text-[9px] text-slate-400 font-bold">{{ $stats['total_complaints'] }} komplain layanan</p>
        </div>

        <div class="bg-white p-5 rounded-3xl border border-slate-100 shadow-sm space-y-1">
            <span class="text-[10px] font-black uppercase text-slate-400 tracking-wider">💾 Total Media Storage</span>
            <p class="text-2xl font-black text-blue-600">{{ $stats['storage_size'] }}</p>
            <p class="text-[9px] text-slate-400 font-bold">{{ $stats['total_users'] }} akun &bull; {{ $stats['total_settings'] }} setelan</p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
        
        {{-- KOLOM KIRI: FITUR EKSPOR DATA (6 SPAN) --}}
        <div class="lg:col-span-6 space-y-6">
            <div class="bg-white rounded-[2.5rem] p-6 sm:p-8 border border-slate-100 shadow-sm space-y-6">
                <div class="border-b border-slate-100 pb-4">
                    <span class="text-[10px] font-black text-[#00AA13] uppercase tracking-widest block mb-1">FITUR 1 &bull; EKSPOR DATA</span>
                    <h3 class="text-lg font-black text-slate-900 uppercase">Ekspor Semua Data Sistem</h3>
                    <p class="text-xs text-slate-400 font-medium mt-0.5">Unduh data untuk arsip berkala atau pemindahan ke server baru.</p>
                </div>

                {{-- OPSI 1: PAKET ZIP LENGKAP --}}
                <div class="p-5 bg-emerald-50/60 rounded-3xl border-2 border-emerald-200/80 space-y-3">
                    <div class="flex items-start space-x-3">
                        <div class="w-10 h-10 rounded-2xl bg-[#00AA13] text-white flex items-center justify-center text-lg shrink-0 shadow-md shadow-emerald-600/30">
                            📦
                        </div>
                        <div class="flex-1">
                            <h4 class="font-black text-xs uppercase text-slate-900 leading-tight">Paket Lengkap Migrasi (.ZIP)</h4>
                            <p class="text-[11px] text-slate-600 font-medium mt-1">
                                Sangat direkomendasikan untuk pindah server! Mencakup seluruh database JSON, Dump SQL, serta seluruh file foto barang, galeri, dan logo.
                            </p>
                        </div>
                    </div>

                    <a href="{{ route('admin.backup.export.zip') }}" 
                       class="w-full py-3.5 bg-[#00AA13] hover:bg-[#00880F] active:scale-95 text-white rounded-2xl font-black text-xs uppercase tracking-wider shadow-lg shadow-emerald-500/20 transition flex items-center justify-center space-x-2">
                        <span>⚡ Unduh Paket Migrasi Lengkap (.ZIP)</span>
                    </a>
                </div>

                {{-- OPSI 2 & 3: EKSPOR KHUSUS JSON & SQL --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-2">
                    <a href="{{ route('admin.backup.export.json') }}" 
                       class="p-4 bg-slate-50 hover:bg-slate-100 border border-slate-200 rounded-2xl text-left transition flex flex-col justify-between space-y-2 group">
                        <div class="flex justify-between items-center">
                            <span class="text-base">📄</span>
                            <span class="text-[9px] font-black uppercase text-slate-400 group-hover:text-[#00AA13]">JSON</span>
                        </div>
                        <div>
                            <h5 class="font-black text-xs text-slate-900 uppercase">Ekspor Data JSON</h5>
                            <p class="text-[10px] text-slate-400 font-medium mt-0.5">Database terstruktur</p>
                        </div>
                    </a>

                    <a href="{{ route('admin.backup.export.sql') }}" 
                       class="p-4 bg-slate-50 hover:bg-slate-100 border border-slate-200 rounded-2xl text-left transition flex flex-col justify-between space-y-2 group">
                        <div class="flex justify-between items-center">
                            <span class="text-base">💾</span>
                            <span class="text-[9px] font-black uppercase text-slate-400 group-hover:text-[#00AA13]">SQL</span>
                        </div>
                        <div>
                            <h5 class="font-black text-xs text-slate-900 uppercase">Ekspor SQL Dump</h5>
                            <p class="text-[10px] text-slate-400 font-medium mt-0.5">Siap import phpMyAdmin</p>
                        </div>
                    </a>
                </div>

            </div>
        </div>

        {{-- KOLOM KANAN: FITUR IMPOR / PULIHKAN DATA (6 SPAN) --}}
        <div class="lg:col-span-6 space-y-6">
            <div class="bg-white rounded-[2.5rem] p-6 sm:p-8 border border-slate-100 shadow-sm space-y-6">
                <div class="border-b border-slate-100 pb-4">
                    <span class="text-[10px] font-black text-purple-600 uppercase tracking-widest block mb-1">FITUR 2 &bull; IMPOR & PULIHKAN</span>
                    <h3 class="text-lg font-black text-slate-900 uppercase">Impor Data ke Aplikasi Ini</h3>
                    <p class="text-xs text-slate-400 font-medium mt-0.5">Pulihkan atau masukkan data hasil backup dari server/aplikasi lama.</p>
                </div>

                <form id="importForm" action="{{ route('admin.backup.import') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                    @csrf

                    {{-- PILIHAN FILE BACKUP --}}
                    <div class="space-y-2">
                        <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest">
                            Pilih File Backup (.ZIP atau .JSON) <span class="text-rose-500">*</span>
                        </label>
                        <div class="p-4 bg-slate-50 rounded-2xl border-2 border-dashed border-slate-200 hover:border-[#00AA13] transition">
                            <input type="file" 
                                   name="backup_file" 
                                   id="backupFileInput"
                                   accept=".zip,.json" 
                                   required
                                   class="block w-full text-xs text-slate-500 file:mr-4 file:py-2.5 file:px-5 file:rounded-xl file:border-0 file:text-xs file:font-black file:uppercase file:bg-slate-800 file:text-white hover:file:bg-black file:cursor-pointer transition">
                            <p class="text-[9px] text-slate-400 font-bold mt-2">Maksimal ukuran file: 200MB.</p>
                        </div>
                    </div>

                    {{-- PILIHAN MODE IMPOR --}}
                    <div class="space-y-2">
                        <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest">
                            Metode Pemulihan Data:
                        </label>
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <label class="p-4 rounded-2xl border-2 cursor-pointer transition flex flex-col justify-between space-y-1.5 bg-emerald-50/50 border-emerald-500" id="labelReplace">
                                <div class="flex items-center justify-between">
                                    <span class="text-xs font-black uppercase text-slate-900">🌟 Timpa Bersih</span>
                                    <input type="radio" name="mode" value="replace" checked class="w-4 h-4 text-[#00AA13] focus:ring-[#00AA13]">
                                </div>
                                <p class="text-[10px] text-slate-500 font-medium">Cocok untuk server baru. Mengosongkan data lama lalu mengisi data backup.</p>
                            </label>

                            <label class="p-4 rounded-2xl border-2 cursor-pointer transition flex flex-col justify-between space-y-1.5 bg-slate-50 border-slate-200" id="labelMerge">
                                <div class="flex items-center justify-between">
                                    <span class="text-xs font-black uppercase text-slate-900">🔄 Gabungkan</span>
                                    <input type="radio" name="mode" value="merge" class="w-4 h-4 text-[#00AA13] focus:ring-[#00AA13]">
                                </div>
                                <p class="text-[10px] text-slate-500 font-medium">Menambahkan data baru dan memperbarui data yang cocok tanpa menghapus.</p>
                            </label>
                        </div>
                    </div>

                    {{-- TOMBOL SUBMIT IMPOR --}}
                    <div class="pt-3">
                        <button type="button" 
                                onclick="confirmImport()"
                                class="w-full py-4 bg-purple-700 hover:bg-purple-800 active:scale-95 text-white rounded-2xl font-black text-xs uppercase tracking-wider shadow-lg shadow-purple-900/20 transition flex items-center justify-center space-x-2">
                            <span>📥 Mulai Proses Impor Data</span>
                        </button>
                    </div>
                </form>

            </div>
        </div>

    </div>

    {{-- PETUNJUK LENGKAP MIGRASI SERVER --}}
    <div class="bg-white rounded-[2.5rem] p-6 sm:p-8 border border-slate-100 shadow-sm space-y-4">
        <div class="flex items-center space-x-3">
            <span class="text-xl">💡</span>
            <h4 class="font-black text-sm uppercase text-slate-900">Panduan Praktis Cara Pindah ke Server Baru</h4>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-xs text-slate-600 font-medium">
            <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100 space-y-1.5">
                <span class="w-6 h-6 rounded-lg bg-[#00AA13] text-white font-black text-[10px] flex items-center justify-center mb-1">1</span>
                <h5 class="font-black text-slate-800 uppercase text-[11px]">Unduh File Backup</h5>
                <p class="text-[10px] leading-relaxed">Klik tombol hijau <b>"Unduh Paket Migrasi Lengkap (.ZIP)"</b> di atas untuk menyimpan seluruh data toko Anda ke laptop/komputer.</p>
            </div>

            <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100 space-y-1.5">
                <span class="w-6 h-6 rounded-lg bg-[#00AA13] text-white font-black text-[10px] flex items-center justify-center mb-1">2</span>
                <h5 class="font-black text-slate-800 uppercase text-[11px]">Buka Aplikasi Baru</h5>
                <p class="text-[10px] leading-relaxed">Pasang/buka aplikasi toko di server yang baru, lalu login ke panel admin dan buka menu <b>Backup & Migrasi Data</b> ini.</p>
            </div>

            <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100 space-y-1.5">
                <span class="w-6 h-6 rounded-lg bg-[#00AA13] text-white font-black text-[10px] flex items-center justify-center mb-1">3</span>
                <h5 class="font-black text-slate-800 uppercase text-[11px]">Impor 1 Kali Klik</h5>
                <p class="text-[10px] leading-relaxed">Unggah file ZIP hasil backup tadi, pilih mode <b>"Timpa Bersih"</b>, lalu klik <b>Mulai Impor</b>. Semua data dan foto otomatis berpindah!</p>
            </div>
        </div>
    </div>

</div>

@push('scripts')
<script>
function confirmImport() {
    const fileInput = document.getElementById('backupFileInput');
    if (!fileInput.files || fileInput.files.length === 0) {
        Swal.fire({
            icon: 'warning',
            title: 'Pilih File',
            text: 'Silakan pilih file backup (.zip atau .json) terlebih dahulu.',
            confirmButtonColor: '#00AA13'
        });
        return;
    }

    const mode = document.querySelector('input[name="mode"]:checked').value;
    const modeText = mode === 'replace' 
        ? 'Mode Timpa Bersih akan mengosongkan data sebelumnya dan menggantikannya dengan data dari file backup.'
        : 'Mode Gabungkan akan menambahkan data baru ke dalam database tanpa menghapus data yang ada.';

    Swal.fire({
        title: 'Konfirmasi Impor Data',
        text: `Apakah Anda yakin ingin memulihkan data? ${modeText}`,
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#7e22ce',
        cancelButtonColor: '#94a3b8',
        confirmButtonText: 'Ya, Jalankan Impor',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: 'Sedang Memproses Data...',
                text: 'Harap tunggu, sistem sedang mengekstrak file media dan memulihkan seluruh database.',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });
            document.getElementById('importForm').submit();
        }
    });
}
</script>
@endpush
@endsection

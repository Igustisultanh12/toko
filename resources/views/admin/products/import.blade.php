<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impor Produk | SIKANDA Premium POS</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8fafc; }
        .sidebar-gradient { background: linear-gradient(180deg, #4f46e5 0%, #3730a3 100%); }
        .form-card { transition: all 0.3s ease; }
        .custom-scroll::-webkit-scrollbar { width: 4px; }
        .custom-scroll::-webkit-scrollbar-thumb { background: #e2e8f0; border-radius: 10px; }
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="flex min-h-screen">

    <aside class="w-72 sidebar-gradient text-white hidden lg:flex flex-col shadow-2xl z-20">
        <div class="p-8">
            <h1 class="text-3xl font-black tracking-tighter uppercase text-white">SIKANDA</h1>
            <p class="text-[10px] text-indigo-200 uppercase tracking-widest font-bold mt-1">Sultan Web Engine</p>
        </div>

        <nav class="flex-grow px-4 space-y-2">
            <a href="{{ route('dashboard') }}" class="flex items-center space-x-3 p-4 hover:bg-white/5 text-indigo-100 rounded-2xl transition font-medium">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" stroke-width="2"/></svg>
                <span>Dashboard</span>
            </a>

            <a href="{{ route('admin.products.index') }}" class="flex items-center space-x-3 p-4 bg-white/10 rounded-2xl font-bold border border-white/10 shadow-sm transition">
                <svg class="w-5 h-5 text-indigo-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" stroke-width="2"/></svg>
                <span>Manajemen Produk</span>
            </a>

            <a href="{{ route('admin.reports.index') }}" class="flex items-center space-x-3 p-4 hover:bg-white/5 text-indigo-100 rounded-2xl transition font-medium">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 17v-2m3 2v-4m3 2v-6m-8 10H7a2 2 0 01-2-2V5a2 2 0 12-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" stroke-width="2"/></svg>
                <span>Laporan Penjualan</span>
            </a>

            <a href="{{ route('cashier.pos.index') }}" class="flex items-center space-x-3 p-4 hover:bg-white/5 text-indigo-100 rounded-2xl transition font-medium text-sm">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" stroke-width="2"/></svg>
                <span>Buka Kasir (POS)</span>
            </a>
        </nav>

        <div class="p-8 border-t border-white/10">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="flex items-center space-x-2 text-red-300 font-bold hover:text-red-100 transition uppercase text-[10px] tracking-widest">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" stroke-width="2.5"/></svg>
                    <span>Keluar Sistem</span>
                </button>
            </form>
        </div>
    </aside>

    <main class="flex-grow flex flex-col h-screen overflow-hidden">
        
        <header class="bg-white/80 backdrop-blur-md p-6 border-b flex justify-between items-center px-10 sticky top-0 z-10 border-gray-100">
            <div>
                <h2 class="text-xl font-black text-gray-800 tracking-tighter uppercase leading-none">Impor Data Excel</h2>
                <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest mt-1">Unggah katalog produk massal</p>
            </div>
            <a href="{{ route('admin.products.index') }}" class="bg-gray-100 text-gray-500 px-6 py-3 rounded-2xl font-black text-[10px] uppercase tracking-widest hover:bg-gray-200 transition-all shadow-sm">
                Batal / Kembali
            </a>
        </header>

        <div class="flex-grow overflow-y-auto p-10 custom-scroll space-y-10 pb-20">
            
            {{-- Error Notification --}}
            @if (session('error'))
                <div class="p-6 bg-red-50 border border-red-100 rounded-[2rem] shadow-sm mb-6 flex items-center">
                    <div class="w-10 h-10 bg-red-100 rounded-xl flex items-center justify-center text-red-600 mr-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" stroke-width="2"/></svg>
                    </div>
                    <div>
                        <p class="text-red-700 font-bold text-sm uppercase tracking-widest leading-none mb-1">Gagal Mengimpor</p>
                        <p class="text-red-500 text-xs font-medium">{{ session('error') }}</p>
                    </div>
                </div>
            @endif

            <div class="max-w-4xl mx-auto space-y-10">
                <div class="bg-white p-10 md:p-14 rounded-[3.5rem] shadow-sm border border-gray-100">
                    <form action="{{ route('admin.products.import.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="space-y-6">
                            <div class="text-center space-y-2 mb-8">
                                <div class="w-20 h-20 bg-indigo-50 text-indigo-600 rounded-[2rem] flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" stroke-width="2"/></svg>
                                </div>
                                <h3 class="text-lg font-black text-gray-800 uppercase tracking-tighter">Pilih File Produk</h3>
                                <p class="text-xs text-gray-400 font-bold uppercase tracking-widest leading-none">Mendukung format .xlsx atau .xls</p>
                            </div>

                            <div class="relative group">
                                <input type="file" name="file" id="file" required 
                                       class="w-full px-6 py-10 bg-gray-50 border-2 border-dashed border-gray-200 rounded-[2.5rem] outline-none group-hover:border-indigo-400 transition-all font-bold text-gray-500 cursor-pointer">
                            </div>

                            <div class="pt-8 border-t border-gray-50 flex items-center justify-between">
                                <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest leading-none italic">
                                    *Ukuran file maksimal 5MB
                                </p>
                                <button type="submit" 
                                        class="px-12 py-5 bg-indigo-600 text-white rounded-[1.5rem] font-black text-xs uppercase tracking-[0.2em] shadow-xl shadow-indigo-100 hover:bg-indigo-700 hover:-translate-y-1 transition-all active:scale-95">
                                    Proses Impor
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="bg-white p-10 rounded-[3rem] shadow-sm border border-gray-100">
                    <div class="flex items-center space-x-3 mb-8">
                        <div class="w-10 h-10 bg-green-50 text-green-600 rounded-xl flex items-center justify-center font-black">?</div>
                        <h3 class="text-lg font-black text-gray-800 uppercase tracking-tighter">Struktur Kolom Excel</h3>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-4">
                            <div class="flex items-start space-x-4">
                                <div class="w-8 h-8 bg-gray-100 rounded-lg flex items-center justify-center font-black text-gray-500 text-xs shadow-sm">1</div>
                                <div>
                                    <p class="font-black text-gray-700 text-[10px] uppercase tracking-widest">Kolom: `nama`</p>
                                    <p class="text-xs text-gray-400 font-medium">Wajib diisi (Nama Produk Anda).</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-8 h-8 bg-gray-100 rounded-lg flex items-center justify-center font-black text-gray-500 text-xs shadow-sm">2</div>
                                <div>
                                    <p class="font-black text-gray-700 text-[10px] uppercase tracking-widest">Kolom: `barcode`</p>
                                    <p class="text-xs text-gray-400 font-medium">Opsional (Harus unik jika diisi).</p>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div class="flex items-start space-x-4">
                                <div class="w-8 h-8 bg-gray-100 rounded-lg flex items-center justify-center font-black text-gray-500 text-xs shadow-sm">3</div>
                                <div>
                                    <p class="font-black text-gray-700 text-[10px] uppercase tracking-widest">Kolom: `harga`</p>
                                    <p class="text-xs text-gray-400 font-medium">Wajib (Hanya angka tanpa simbol Rp).</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-8 h-8 bg-gray-100 rounded-lg flex items-center justify-center font-black text-gray-500 text-xs shadow-sm">4</div>
                                <div>
                                    <p class="font-black text-gray-700 text-[10px] uppercase tracking-widest">Kolom: `stok`</p>
                                    <p class="text-xs text-gray-400 font-medium">Wajib (Hanya angka jumlah stok).</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10 p-6 bg-indigo-50 border border-indigo-100 rounded-[2rem]">
                        <p class="text-[10px] font-black text-indigo-400 uppercase tracking-widest mb-1 flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/></svg>
                            Tips Penting
                        </p>
                        <p class="text-xs text-indigo-700 leading-relaxed font-medium">
                            Gunakan header pada baris pertama. Nama kolom harus persis seperti di atas (huruf kecil semua). Sistem akan menolak file jika format kolom tidak sesuai.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
</html>
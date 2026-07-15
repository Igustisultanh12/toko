<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk | SIKANDA Premium POS</title>
    
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
<body class="flex min-h-screen" x-data="productForm()">

    <aside class="w-72 sidebar-gradient text-white hidden lg:flex flex-col shadow-2xl z-20">
        <div class="p-8">
            <h1 class="text-3xl font-black tracking-tighter uppercase text-white">SIKANDA</h1>
            <p class="text-[10px] text-indigo-200 uppercase tracking-widest font-bold mt-1">Sultan Web Engine</p>
        </div>

        <nav class="flex-grow px-4 space-y-2">
            <a href="{{ route('dashboard') }}" class="flex items-center space-x-3 p-4 hover:bg-white/5 text-indigo-100 rounded-2xl transition font-medium">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" stroke-width="2.5"/></svg>
                <span>Dashboard</span>
            </a>

            <a href="{{ route('admin.products.index') }}" class="flex items-center space-x-3 p-4 bg-white/10 rounded-2xl font-bold border border-white/10 shadow-sm transition">
                <svg class="w-5 h-5 text-indigo-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" stroke-width="2.5"/></svg>
                <span>Manajemen Produk</span>
            </a>

            <a href="{{ route('admin.reports.index') }}" class="flex items-center space-x-3 p-4 hover:bg-white/5 text-indigo-100 rounded-2xl transition font-medium">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 17v-2m3 2v-4m3 2v-6m-8 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" stroke-width="2.5"/></svg>
                <span>Laporan Penjualan</span>
            </a>

            <a href="{{ route('cashier.pos.index') }}" class="flex items-center space-x-3 p-4 hover:bg-white/5 text-indigo-100 rounded-2xl transition font-medium">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" stroke-width="2.5"/></svg>
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
                <h2 class="text-xl font-black text-gray-800 tracking-tighter uppercase leading-none">Perbarui Data Produk</h2>
                <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest mt-1">ID Produk: #{{ $product->id }}</p>
            </div>
            <a href="{{ route('admin.products.index') }}" class="bg-gray-100 text-gray-500 px-6 py-3 rounded-2xl font-black text-[10px] uppercase tracking-widest hover:bg-gray-200 transition-all shadow-sm">
                Batal / Kembali
            </a>
        </header>

        <div class="flex-grow overflow-y-auto p-10 custom-scroll space-y-10 pb-20">
            
            {{-- Alert Errors --}}
            @if ($errors->any())
                <div class="p-6 bg-red-50 border border-red-100 rounded-[2rem] shadow-sm mb-6">
                    <div class="text-red-600 font-black uppercase text-xs tracking-widest mb-3 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                        Mohon Perbaiki Kesalahan:
                    </div>
                    <ul class="list-disc list-inside text-sm text-red-500 font-medium">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="max-w-4xl mx-auto">
                <div class="bg-white p-10 md:p-14 rounded-[3.5rem] shadow-sm border border-gray-100 form-card">
                    <form action="{{ route('admin.products.update', $product) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-10">
                            
                            {{-- Nama Produk --}}
                            <div class="space-y-2 md:col-span-1">
                                <label for="name" class="block text-[10px] font-black text-gray-400 uppercase tracking-widest ml-1">Nama Barang</label>
                                <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}" required 
                                       class="w-full px-6 py-4 bg-gray-50 border border-gray-100 rounded-[1.5rem] outline-none focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 transition-all font-bold text-gray-700 shadow-inner">
                            </div>

                            {{-- Barcode --}}
                            <div class="space-y-2 md:col-span-1">
                                <label for="barcode" class="block text-[10px] font-black text-gray-400 uppercase tracking-widest ml-1">Barcode / SKU</label>
                                <div class="flex space-x-2">
                                    <input type="text" name="barcode" id="barcode" x-model="barcode" 
                                           class="flex-grow px-6 py-4 bg-gray-50 border border-gray-100 rounded-[1.5rem] outline-none focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 transition-all font-mono font-bold text-gray-600 shadow-inner">
                                    <button @click.prevent="startScanner()" type="button" 
                                            class="px-5 bg-gray-900 text-white rounded-[1.5rem] hover:bg-black transition-all flex items-center shadow-lg shadow-gray-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>
                                    </button>
                                </div>
                            </div>

                            {{-- Harga --}}
                            <div class="space-y-2 md:col-span-1">
                                <label for="price" class="block text-[10px] font-black text-gray-400 uppercase tracking-widest ml-1">Harga Jual (Rp)</label>
                                <input type="number" name="price" id="price" value="{{ old('price', $product->price) }}" required 
                                       class="w-full px-6 py-4 bg-indigo-50 border border-indigo-100 rounded-[1.5rem] outline-none focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 transition-all font-black text-indigo-600 text-xl shadow-inner">
                            </div>

                            {{-- Stok --}}
                            <div class="space-y-2 md:col-span-1">
                                <label for="stock" class="block text-[10px] font-black text-gray-400 uppercase tracking-widest ml-1">Sisa Stok</label>
                                <input type="number" name="stock" id="stock" value="{{ old('stock', $product->stock) }}" required 
                                       class="w-full px-6 py-4 bg-gray-50 border border-gray-100 rounded-[1.5rem] outline-none focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 transition-all font-black text-gray-800 text-xl text-center shadow-inner">
                            </div>

                            {{-- Diskon --}}
                            <div class="space-y-2 md:col-span-1">
                                <label for="discount_percent" class="block text-[10px] font-black text-gray-400 uppercase tracking-widest ml-1">Diskon (%)</label>
                                <input type="number" name="discount_percent" id="discount_percent" value="{{ old('discount_percent', $product->discount_percent) }}"
                                       class="w-full px-6 py-4 bg-orange-50 border border-orange-100 rounded-[1.5rem] outline-none focus:ring-4 focus:ring-orange-500/10 focus:border-orange-400 transition-all font-black text-orange-600 shadow-inner">
                            </div>

                            {{-- Deskripsi --}}
                            <div class="space-y-2 md:col-span-2">
                                <label for="description" class="block text-[10px] font-black text-gray-400 uppercase tracking-widest ml-1">Deskripsi Produk</label>
                                <textarea name="description" id="description" rows="3" 
                                          class="w-full px-6 py-4 bg-gray-50 border border-gray-100 rounded-[1.5rem] outline-none focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 transition-all font-medium text-gray-600 shadow-inner">{{ old('description', $product->description) }}</textarea>
                            </div>
                        </div>

                        <div class="mt-14 pt-8 border-t border-gray-50 flex items-center justify-between">
                            <div>
                                <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest">Terakhir Diupdate:</p>
                                <p class="text-xs text-gray-500 font-medium">{{ $product->updated_at->format('d M Y, H:i') }}</p>
                            </div>
                            <button type="submit" 
                                    class="px-12 py-5 bg-indigo-600 text-white rounded-[1.5rem] font-black text-xs uppercase tracking-[0.2em] shadow-xl shadow-indigo-100 hover:bg-indigo-700 hover:-translate-y-1 transition-all active:scale-95">
                                Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <div x-show="isScannerActive" class="fixed inset-0 z-[100] flex items-center justify-center p-6 overflow-hidden" x-cloak>
        <div class="absolute inset-0 bg-indigo-900/80 backdrop-blur-sm" @click="stopScanner()"></div>
        <div class="bg-white rounded-[3rem] p-8 w-full max-w-lg relative z-10 shadow-2xl border border-white/20">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-lg font-black text-gray-800 uppercase tracking-tighter">Pindai Barcode</h3>
                <button @click="stopScanner()" class="p-2 bg-gray-100 rounded-xl hover:bg-red-50 hover:text-red-500 transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M6 18L18 6M6 6l12 12" stroke-width="2.5"/></svg>
                </button>
            </div>
            <div id="admin-edit-reader" class="w-full overflow-hidden rounded-[2rem] border-4 border-gray-100"></div>
            <p class="mt-4 text-center text-[10px] font-bold text-gray-400 uppercase tracking-widest leading-relaxed">
                Posisikan barcode di tengah kotak pemindaian
            </p>
        </div>
    </div>

    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('productForm', () => ({
                barcode: '{{ $product->barcode }}',
                isScannerActive: false,
                html5QrCode: null,
                startScanner() {
                    this.isScannerActive = true;
                    this.$nextTick(() => {
                        if (!this.html5QrCode) {
                            this.html5QrCode = new Html5Qrcode("admin-edit-reader");
                        }
                        
                        const config = { fps: 15, qrbox: { width: 250, height: 150 } };
                        this.html5QrCode.start({ facingMode: "environment" }, config, (decodedText) => {
                            this.barcode = decodedText;
                            this.stopScanner();
                        }).catch(err => {
                            console.error(err);
                            alert('Gagal mengakses kamera.');
                            this.isScannerActive = false;
                        });
                    });
                },
                stopScanner() {
                    if (this.html5QrCode && this.isScannerActive) {
                        this.html5QrCode.stop().catch(err => console.error(err));
                    }
                    this.isScannerActive = false;
                }
            }));
        });
    </script>
</body>
</html>
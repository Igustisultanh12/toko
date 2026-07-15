<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Produk | SIKANDA Premium POS</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8fafc; }
        .sidebar-gradient { background: linear-gradient(180deg, #4f46e5 0%, #3730a3 100%); }
        .stat-card { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
        .stat-card:hover { transform: translateY(-5px); box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.05); }
        .custom-scroll::-webkit-scrollbar { width: 4px; }
        .custom-scroll::-webkit-scrollbar-thumb { background: #e2e8f0; border-radius: 10px; }
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="flex min-h-screen" x-data="quickStockManager()" x-init="init()">

    <aside class="w-72 sidebar-gradient text-white hidden lg:flex flex-col shadow-2xl z-20">
        <div class="p-8">
            <h1 class="text-3xl font-black tracking-tighter uppercase">SIKANDA</h1>
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
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 17v-2m3 2v-4m3 2v-6m-8 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" stroke-width="2"/></svg>
                <span>Laporan Penjualan</span>
            </a>

            <a href="{{ route('cashier.pos.index') }}" class="flex items-center space-x-3 p-4 hover:bg-white/5 text-indigo-100 rounded-2xl transition font-medium">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" stroke-width="2"/></svg>
                <span>Buka Kasir (POS)</span>
            </a>
        </nav>

        <div class="p-8 border-t border-white/10">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="flex items-center space-x-2 text-red-300 font-bold hover:text-red-100 transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" stroke-width="2"/></svg>
                    <span>Keluar Sistem</span>
                </button>
            </form>
        </div>
    </aside>

    <main class="flex-grow flex flex-col h-screen overflow-hidden">
        
        <header class="bg-white/80 backdrop-blur-md p-6 border-b flex justify-between items-center px-10 sticky top-0 z-10 border-gray-100">
            <div>
                <h2 class="text-xl font-black text-gray-800 tracking-tighter uppercase">Katalog Inventaris</h2>
                <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest mt-1">Status: Manajemen Barang</p>
            </div>
            <div class="flex space-x-3">
                <a href="{{ route('admin.products.import.show') }}" class="bg-green-50 text-green-600 px-6 py-3 rounded-2xl font-black text-[10px] uppercase tracking-widest hover:bg-green-600 hover:text-white transition-all shadow-sm">
                    Impor Excel
                </a>
                <a href="{{ route('admin.products.create') }}" class="bg-indigo-600 text-white px-6 py-3 rounded-2xl font-black text-[10px] uppercase tracking-widest shadow-lg shadow-indigo-100 hover:bg-indigo-700 transition-all">
                    + Tambah Produk
                </a>
            </div>
        </header>

        <div class="flex-grow overflow-y-auto p-10 custom-scroll space-y-10 pb-20">
            
            {{-- Notifikasi Sukses --}}
            @if (session('success'))
                <div class="p-5 bg-green-50 text-green-700 border border-green-100 rounded-[2rem] font-bold text-sm flex items-center shadow-sm">
                    <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white p-8 rounded-[3rem] shadow-sm border border-gray-100">
                <div class="flex items-center space-x-3 mb-6">
                    <div class="w-10 h-10 bg-indigo-50 rounded-xl flex items-center justify-center text-indigo-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 4v16m8-8H4" stroke-width="3"/></svg>
                    </div>
                    <h3 class="text-lg font-black text-gray-800 uppercase tracking-tighter">Update Stok Cepat</h3>
                </div>

                <div x-show="message" x-cloak :class="messageType === 'success' ? 'bg-green-50 text-green-700' : 'bg-red-50 text-red-700'" class="p-4 rounded-2xl mb-6 font-bold text-sm" x-text="message"></div>

                <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-end">
                    <div class="md:col-span-6">
                        <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2 ml-1">Scan Barcode / SKU</label>
                        <input type="text" x-model="barcode" @keydown.enter.prevent="updateStock()" x-ref="barcodeInput" placeholder="Arahkan scanner ke kode barang..." 
                               class="w-full px-6 py-4 bg-gray-50 border-none rounded-[1.5rem] outline-none focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 transition-all font-bold text-gray-700">
                    </div>
                    <div class="md:col-span-3">
                        <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2 ml-1">Jumlah Unit</label>
                        <input type="number" x-model.number="quantity" min="1" 
                               class="w-full px-6 py-4 bg-gray-50 border-none rounded-[1.5rem] outline-none focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 transition-all font-black text-center text-gray-700">
                    </div>
                    <div class="md:col-span-3">
                        <button @click="updateStock()" :disabled="isLoading" 
                                class="w-full py-4 bg-indigo-600 text-white rounded-[1.5rem] font-black text-xs uppercase tracking-[0.2em] shadow-xl shadow-indigo-100 hover:bg-indigo-700 hover:-translate-y-1 transition-all disabled:bg-indigo-300">
                            <span x-show="!isLoading">Update Stok</span>
                            <span x-show="isLoading">Memproses...</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-[3.5rem] shadow-sm border border-gray-100 overflow-hidden">
                <div class="p-8 border-b border-gray-50 bg-gray-50/30">
                    <form action="{{ route('admin.products.index') }}" method="GET" class="relative group">
                        <svg class="w-5 h-5 absolute left-6 top-4.5 text-gray-400 group-focus-within:text-indigo-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-width="2.5"/></svg>
                        <input type="text" name="search" placeholder="Cari berdasarkan nama atau kode barcode produk..." 
                               class="w-full pl-14 pr-6 py-4 bg-white border border-gray-100 rounded-2xl outline-none focus:ring-4 focus:ring-indigo-500/5 focus:border-indigo-500 transition-all font-medium text-gray-600 shadow-sm" value="{{ request('search') }}">
                    </form>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead>
                            <tr class="bg-gray-50/50">
                                <th class="p-6 text-[10px] font-black text-gray-400 uppercase tracking-widest">Informasi Barang</th>
                                <th class="p-6 text-[10px] font-black text-gray-400 uppercase tracking-widest text-center">Barcode</th>
                                <th class="p-6 text-[10px] font-black text-gray-400 uppercase tracking-widest text-right">Harga Jual</th>
                                <th class="p-6 text-[10px] font-black text-gray-400 uppercase tracking-widest text-center">Sisa Stok</th>
                                <th class="p-6 text-[10px] font-black text-gray-400 uppercase tracking-widest text-center">Opsi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50">
                            @forelse ($products as $product)
                                <tr class="hover:bg-indigo-50/30 transition-all group">
                                    <td class="p-6">
                                        <p class="font-black text-gray-800 text-base leading-none group-hover:text-indigo-600 transition-colors uppercase tracking-tighter">{{ $product->name }}</p>
                                        <p class="text-[10px] text-gray-400 font-bold uppercase mt-1 tracking-tighter">Inventory SKU #{{ $product->id }}</p>
                                    </td>
                                    <td class="p-6 text-center">
                                        <span class="font-mono text-xs bg-gray-100 px-3 py-1 rounded-lg text-gray-600 font-bold tracking-widest">{{ $product->barcode }}</span>
                                    </td>
                                    <td class="p-6 text-right font-black text-indigo-700 tracking-tighter text-lg">
                                        Rp {{ number_format($product->price, 0, ',', '.') }}
                                    </td>
                                    <td class="p-6 text-center">
                                        <span class="inline-block px-4 py-1.5 rounded-xl text-[10px] font-black {{ $product->stock <= 10 ? 'bg-red-50 text-red-600' : 'bg-green-50 text-green-600' }}">
                                            {{ $product->stock }} <small class="ml-1 opacity-50 uppercase font-black">Pcs</small>
                                        </span>
                                    </td>
                                    <td class="p-6 text-center">
                                        <div class="flex items-center justify-center space-x-3">
                                            <a href="{{ route('admin.products.edit', $product) }}" class="p-2 text-indigo-400 hover:text-indigo-600 hover:bg-indigo-50 rounded-xl transition-all">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" stroke-width="2.5"/></svg>
                                            </a>
                                            <form action="{{ route('admin.products.destroy', $product) }}" method="POST" onsubmit="return confirm('Hapus produk ini?');">
                                                @csrf @method('DELETE')
                                                <button type="submit" class="p-2 text-red-300 hover:text-red-600 hover:bg-red-50 rounded-xl transition-all">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" stroke-width="2.5"/></svg>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="p-20 text-center">
                                        <p class="text-gray-300 font-black uppercase tracking-[0.2em] text-sm italic">Belum Ada Data Produk</p>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                {{-- Pagination Custom --}}
                <div class="p-8 border-t border-gray-50 bg-white">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </main>

    <script>
        function quickStockManager() {
            return {
                barcode: '',
                quantity: 1,
                isLoading: false,
                message: '',
                messageType: '',
                
                init() {
                    this.$nextTick(() => {
                        this.$refs.barcodeInput.focus();
                    });
                },

                async updateStock() {
                    if (!this.barcode || this.quantity < 1) {
                        this.showMessage('Barcode dan jumlah wajib diisi.', 'error');
                        return;
                    }
                    
                    this.isLoading = true;
                    this.message = '';

                    try {
                        const response = await fetch('{{ route("admin.products.quick-stock") }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                'Accept': 'application/json',
                            },
                            body: JSON.stringify({
                                barcode: this.barcode,
                                quantity: this.quantity,
                            })
                        });

                        const data = await response.json();

                        if (response.ok) {
                            this.showMessage(data.message, 'success');
                            setTimeout(() => window.location.reload(), 1500);
                        } else {
                            if (response.status === 404) {
                                if (confirm('Barang belum terdaftar. Apakah Anda ingin menambahkan produk baru ini?')) {
                                    window.location.href = `{{ route('admin.products.create') }}?barcode=${this.barcode}`;
                                } else {
                                    this.showMessage(data.message, 'error');
                                }
                            } else {
                                this.showMessage(data.message || 'Terjadi kesalahan.', 'error');
                            }
                        }
                    } catch (error) {
                        this.showMessage('Gagal terhubung ke server.', 'error');
                    } finally {
                        this.isLoading = false;
                        this.barcode = '';
                        this.quantity = 1;
                        this.$refs.barcodeInput.focus();
                    }
                },

                showMessage(msg, type) {
                    this.message = msg;
                    this.messageType = type;
                    setTimeout(() => this.message = '', 3000);
                }
            }
        }
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | SIKANDA Premium POS</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8fafc; }
        .sidebar-gradient { background: linear-gradient(180deg, #4f46e5 0%, #3730a3 100%); }
        .stat-card { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
        .stat-card:hover { transform: translateY(-8px); box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.05); }
        .custom-scroll::-webkit-scrollbar { width: 4px; }
        .custom-scroll::-webkit-scrollbar-thumb { background: #e2e8f0; border-radius: 10px; }
    </style>
</head>
<body class="flex min-h-screen">

    <aside class="w-72 sidebar-gradient text-white hidden lg:flex flex-col shadow-2xl">
        <div class="p-8">
            <h1 class="text-3xl font-black tracking-tighter uppercase">SIKANDA</h1>
            <p class="text-[10px] text-indigo-200 uppercase tracking-widest font-bold mt-1">Sultan Web Engine</p>
        </div>

        <nav class="flex-grow px-4 space-y-2">
            <a href="{{ route('dashboard') }}" class="flex items-center space-x-3 p-4 {{ request()->routeIs('dashboard') ? 'bg-white/10 border border-white/10 shadow-sm' : 'hover:bg-white/5' }} rounded-2xl font-bold transition">
                <svg class="w-5 h-5 text-indigo-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" stroke-width="2"/></svg>
                <span>Dashboard</span>
            </a>

            <a href="{{ route('admin.products.index') }}" class="flex items-center space-x-3 p-4 hover:bg-white/5 rounded-2xl transition font-medium text-indigo-100">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" stroke-width="2"/></svg>
                <span>Manajemen Produk</span>
            </a>

            <a href="{{ route('admin.reports.index') }}" class="flex items-center space-x-3 p-4 hover:bg-white/5 rounded-2xl transition font-medium text-indigo-100">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 17v-2m3 2v-4m3 2v-6m-8 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" stroke-width="2"/></svg>
                <span>Laporan Penjualan</span>
            </a>

            <a href="{{ route('admin.settings.index') }}" class="flex items-center space-x-3 p-4 {{ request()->routeIs('admin.settings.*') ? 'bg-white/10 border border-white/10 shadow-sm' : 'hover:bg-white/5' }} rounded-2xl transition font-medium text-indigo-100">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                <span>Identitas Toko</span>
            </a>

            <a href="{{ route('cashier.pos.index') }}" class="flex items-center space-x-3 p-4 hover:bg-white/5 rounded-2xl transition font-medium text-indigo-100">
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
        
        <header class="bg-white/80 backdrop-blur-md p-6 border-b flex justify-between items-center px-10 sticky top-0 z-10">
            <div>
                <h2 class="text-xl font-black text-gray-800 tracking-tighter uppercase">Admin Summary</h2>
                <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest mt-1">Laporan Real-time</p>
            </div>
            <div class="flex items-center space-x-4">
                <div class="text-right">
                    <p class="text-sm font-black text-indigo-600 uppercase tracking-tighter leading-none">{{ Auth::user()->name }}</p>
                    <p class="text-[10px] text-gray-400 font-bold mt-1 tracking-widest uppercase">Administrator</p>
                </div>
                <div class="w-12 h-12 bg-indigo-100 rounded-2xl flex items-center justify-center text-indigo-600 font-black shadow-inner">
                    {{ substr(Auth::user()->name, 0, 1) }}
                </div>
            </div>
        </header>

        <div class="flex-grow overflow-y-auto p-10 custom-scroll space-y-10">
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="stat-card bg-white p-6 rounded-[2.5rem] shadow-sm border border-gray-100">
                    <div class="w-10 h-10 bg-green-50 text-green-500 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke-width="2.5"/></svg>
                    </div>
                    <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-1">Pendapatan Hari Ini</p>
                    <h3 class="text-2xl font-black text-gray-900 tracking-tighter">Rp {{ number_format($pendapatanHariIni ?? 0, 0, ',', '.') }}</h3>
                </div>

                <div class="stat-card bg-white p-6 rounded-[2.5rem] shadow-sm border border-gray-100">
                    <div class="w-10 h-10 bg-indigo-50 text-indigo-500 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" stroke-width="2.5"/></svg>
                    </div>
                    <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-1">Total Transaksi</p>
                    <h3 class="text-3xl font-black text-gray-900 tracking-tighter">{{ $transaksiHariIni ?? 0 }}</h3>
                </div>

                <div class="stat-card bg-white p-6 rounded-[2.5rem] shadow-sm border border-gray-100">
                    <div class="w-10 h-10 bg-orange-50 text-orange-500 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" stroke-width="2.5"/></svg>
                    </div>
                    <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-1">Produk Terjual</p>
                    <h3 class="text-3xl font-black text-gray-900 tracking-tighter">{{ $produkTerjualHariIni ?? 0 }}</h3>
                </div>

                <div class="stat-card bg-indigo-600 p-6 rounded-[2.5rem] shadow-xl shadow-indigo-200 text-white border-2 border-white/10">
                    <div class="w-10 h-10 bg-white/20 rounded-xl flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" stroke-width="2.5"/></svg>
                    </div>
                    <p class="text-xs font-bold text-indigo-100 uppercase tracking-widest mb-1">Total Produk</p>
                    <h3 class="text-3xl font-black tracking-tighter">{{ $totalProduk ?? 0 }}</h3>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 pb-10">
                <div class="lg:col-span-2 bg-white p-8 rounded-[3rem] shadow-sm border border-gray-100">
                    <h4 class="font-black text-gray-800 text-lg mb-8 uppercase tracking-tighter">Analisis Revenue Mingguan</h4>
                    <div class="h-80"><canvas id="salesChart"></canvas></div>
                </div>

                <div class="bg-white p-8 rounded-[3rem] shadow-sm border border-gray-100 flex flex-col">
                    <h4 class="font-black text-gray-800 text-lg mb-8 uppercase tracking-tighter">History Terakhir</h4>
                    <div class="space-y-6 flex-grow">
                        @forelse($penjualanTerakhir ?? [] as $sale)
                            <div class="flex justify-between items-center group transition-all">
                                <div class="flex items-center space-x-4">
                                    <div class="w-12 h-12 bg-gray-50 text-indigo-600 rounded-2xl flex items-center justify-center font-black group-hover:bg-indigo-600 group-hover:text-white transition-all duration-300">
                                        {{ substr($sale->customer->name ?? 'P', 0, 1) }}
                                    </div>
                                    <div>
                                        <p class="text-sm font-black text-gray-800 leading-none mb-1">{{ $sale->customer->name ?? 'Pelanggan' }}</p>
                                        <p class="text-[10px] text-gray-400 font-bold uppercase tracking-tighter">{{ $sale->created_at->diffForHumans() }}</p>
                                    </div>
                                </div>
                                <span class="font-black text-indigo-600 tracking-tighter text-sm">+Rp {{ number_format($sale->total_amount, 0, ',', '.') }}</span>
                            </div>
                        @empty
                            <div class="text-center py-10 italic text-gray-300">Belum ada transaksi</div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const ctx = document.getElementById('salesChart').getContext('2d');
            const rawData = '{!! $chartData ?? "{\"labels\":[], \"data\":[]}" !!}';
            const salesData = JSON.parse(rawData);

            const gradient = ctx.createLinearGradient(0, 0, 0, 400);
            gradient.addColorStop(0, 'rgba(79, 70, 229, 0.35)');
            gradient.addColorStop(1, 'rgba(79, 70, 229, 0)');

            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: salesData.labels,
                    datasets: [{
                        label: 'Revenue',
                        data: salesData.data,
                        borderColor: '#4f46e5',
                        backgroundColor: gradient,
                        borderWidth: 4,
                        tension: 0.4,
                        fill: true,
                        pointRadius: 0,
                        pointHoverRadius: 7,
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: { legend: { display: false } },
                    scales: {
                        y: { beginAtZero: true, grid: { color: 'rgba(0,0,0,0.03)' }, ticks: { font: { weight: 'bold' } } },
                        x: { grid: { display: false }, ticks: { font: { weight: 'bold' } } }
                    }
                }
            });
        });
    </script>
</body>
</html>
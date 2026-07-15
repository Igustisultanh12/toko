<div class="p-8">
    <h1 class="text-3xl font-black tracking-tighter uppercase">SIKANDA</h1>
    <p class="text-[10px] text-indigo-200 uppercase tracking-widest font-bold mt-1">Sultan Web Engine</p>
</div>

<nav class="flex-grow px-4 space-y-2">
    <a href="{{ route('dashboard') }}" 
       class="flex items-center space-x-3 p-4 rounded-2xl transition font-bold {{ request()->routeIs('dashboard') ? 'bg-white/10 border border-white/10 shadow-sm text-white' : 'text-indigo-100 hover:bg-white/5' }}">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
            <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
        </svg>
        <span>Dashboard</span>
    </a>

    <a href="{{ route('admin.products.index') }}" 
       class="flex items-center space-x-3 p-4 rounded-2xl transition font-medium {{ request()->routeIs('admin.products.*') ? 'bg-white/10 border border-white/10 shadow-sm text-white' : 'text-indigo-100 hover:bg-white/5' }}">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
            <path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
        </svg>
        <span>Manajemen Produk</span>
    </a>

    <a href="{{ route('admin.reports.index') }}" 
       class="flex items-center space-x-3 p-4 rounded-2xl transition font-medium {{ request()->routeIs('admin.reports.*') ? 'bg-white/10 border border-white/10 shadow-sm text-white' : 'text-indigo-100 hover:bg-white/5' }}">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
            <path d="M9 17v-2m3 2v-4m3 2v-6m-8 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
        </svg>
        <span>Laporan Penjualan</span>
    </a>

    <a href="{{ route('admin.settings.index') }}" 
       class="flex items-center space-x-3 p-4 rounded-2xl transition font-medium {{ request()->routeIs('admin.settings.*') ? 'bg-white/10 border border-white/10 shadow-sm text-white' : 'text-indigo-100 hover:bg-white/5' }}">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
            <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
            <circle cx="12" cy="12" r="3" />
        </svg>
        <span>Identitas Toko</span>
    </a>

    <a href="{{ route('cashier.pos.index') }}" 
       class="flex items-center space-x-3 p-4 rounded-2xl transition font-medium text-indigo-100 hover:bg-white/5">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
            <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
        </svg>
        <span>Buka Kasir (POS)</span>
    </a>
</nav>

<div class="p-8 border-t border-white/10">
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="flex items-center space-x-2 text-red-300 font-bold hover:text-red-100 transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                <path d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
            </svg>
            <span>Keluar Sistem</span>
        </button>
    </form>
</div>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | {{ $shop['app_name'] ?? 'SIKANDA' }} POS</title>
    @if(!empty($shop['app_favicon']))
        <link rel="icon" href="{{ asset('storage/' . $shop['app_favicon']) }}">
    @endif
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #F6F8F9; }
        .bg-gojek { background-color: #00AA13; }
        .text-gojek { color: #00AA13; }
        .border-gojek { border-color: #00AA13; }
        .sidebar-gojek { 
            background: linear-gradient(180deg, #00360D 0%, #004D13 50%, #00661A 100%); 
        }
        [x-cloak] { display: none !important; }
        
        /* Custom smooth scrollbar */
        ::-webkit-scrollbar { width: 6px; height: 6px; }
        ::-webkit-scrollbar-track { background: #f1f5f9; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 999px; }
        ::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
    </style>
</head>
<body class="flex min-h-screen antialiased text-gray-800">
    <aside class="w-72 sidebar-gojek text-white hidden lg:flex flex-col shadow-2xl shrink-0 z-30">
        @include('partials.sidebar')
    </aside>

    <main class="flex-grow flex flex-col h-screen overflow-hidden bg-[#F6F8F9]">
        {{-- TOP HEADER GOJEK STYLE --}}
        <header class="bg-white/95 backdrop-blur-md px-8 py-4 border-b border-gray-100/80 flex justify-between items-center z-20 shrink-0 shadow-sm">
            <div class="flex items-center space-x-3">
                <div class="w-2.5 h-7 bg-emerald-500 rounded-full"></div>
                <div>
                    <h2 class="text-lg font-black text-gray-900 uppercase tracking-tight">@yield('header_title', 'Dashboard')</h2>
                    <p class="text-[11px] text-gray-400 font-bold uppercase tracking-wider">{{ $shop['shop_name'] ?? 'TOKO ANANDA' }}</p>
                </div>
            </div>

            <div class="flex items-center space-x-4">
                {{-- BADGE TOKO BUKA --}}
                <div class="hidden sm:flex items-center space-x-2 bg-emerald-50 text-emerald-700 px-3.5 py-1.5 rounded-full border border-emerald-200/60 text-xs font-black">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    <span class="uppercase tracking-wider text-[10px]">Toko Aktif</span>
                </div>

                {{-- SHORTCUT BUKA KASIR GOJEK GREEN --}}
                <a href="{{ route('cashier.pos.index') }}" 
                   class="flex items-center space-x-2 px-5 py-2.5 bg-[#00AA13] hover:bg-[#00880F] active:scale-95 text-white rounded-2xl font-black text-xs uppercase tracking-wider shadow-lg shadow-emerald-500/25 transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" stroke-width="2.5"/></svg>
                    <span>Kasir POS</span>
                </a>

                {{-- USER CHIP --}}
                <div class="flex items-center space-x-2.5 pl-2 border-l border-gray-200">
                    <div class="w-9 h-9 rounded-2xl bg-emerald-100 text-[#00880F] flex items-center justify-center font-black text-sm border border-emerald-200 shadow-sm">
                        {{ strtoupper(substr(Auth::user()->name ?? 'A', 0, 1)) }}
                    </div>
                    <div class="hidden md:block text-left">
                        <span class="block text-xs font-black text-gray-800 leading-tight">{{ Auth::user()->name ?? 'Admin' }}</span>
                        <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">{{ strtoupper(Auth::user()->role ?? 'Admin') }}</span>
                    </div>
                </div>
            </div>
        </header>

        {{-- PAGE CONTENT CONTAINER --}}
        <div class="flex-grow overflow-y-auto p-6 sm:p-8 md:p-10">
            @yield('content')
        </div>
    </main>
</body>
</html>
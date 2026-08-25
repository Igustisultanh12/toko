<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Toko Online') | {{ $shop['app_name'] ?? 'SIKANDA' }}</title>
    @if(!empty($shop['app_favicon']))
        <link rel="icon" href="{{ route('media.file', ['path' => $shop['app_favicon']]) }}">
    @endif
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #F8FAF9; }
        [x-cloak] { display: none !important; }
        .bg-gojek { background-color: #00AA13; }
        .text-gojek { color: #00AA13; }
        .border-gojek { border-color: #00AA13; }
        
        /* Custom SweetAlert2 Style */
        .swal2-popup {
            border-radius: 2rem !important;
            font-family: 'Plus Jakarta Sans', sans-serif !important;
            padding: 1.8rem !important;
        }
        .swal2-title { font-weight: 900 !important; font-size: 1.15rem !important; }
        .swal2-confirm {
            border-radius: 1rem !important;
            font-weight: 800 !important;
            font-size: 0.75rem !important;
            text-transform: uppercase !important;
            padding: 0.75rem 1.5rem !important;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col justify-between text-gray-800 antialiased selection:bg-emerald-500 selection:text-white">

    {{-- NAVBAR PUBLIK --}}
    <header class="bg-white/90 backdrop-blur-md sticky top-0 z-40 border-b border-gray-100 shadow-sm">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 py-3.5 flex justify-between items-center">
            
            {{-- LOGO & NAMA TOKO --}}
            <a href="{{ route('order.index') }}" class="flex items-center space-x-3 group">
                @if(!empty($shop['shop_logo']))
                    <img src="{{ route('media.file', ['path' => $shop['shop_logo']]) }}" class="h-10 w-10 object-contain rounded-2xl shadow-sm border border-gray-100 group-hover:scale-105 transition">
                @else
                    <div class="w-10 h-10 rounded-2xl bg-[#00AA13] text-white flex items-center justify-center font-black text-lg shadow-md group-hover:scale-105 transition">
                        🏪
                    </div>
                @endif
                <div>
                    <h1 class="text-sm font-black text-gray-900 tracking-tight leading-tight uppercase group-hover:text-[#00AA13] transition">{{ $shop['shop_name'] ?? 'TOKO KITA' }}</h1>
                    <p class="text-[10px] text-gray-400 font-bold uppercase tracking-wider">Toko Online Resmi &bull; Pembayaran QRIS</p>
                </div>
            </a>

            {{-- MENU NAVIGASI --}}
            <div class="flex items-center space-x-2 sm:space-x-3">
                <a href="{{ route('order.index') }}" 
                   class="px-3.5 sm:px-4 py-2 rounded-2xl text-xs font-black uppercase tracking-wider {{ request()->routeIs('order.index') ? 'bg-emerald-50 text-[#00880F] border border-emerald-200/60' : 'text-gray-600 hover:text-[#00AA13] hover:bg-gray-50' }} transition">
                    🛍️ Belanja
                </a>
                <a href="{{ route('order.track.index') }}" 
                   class="px-3.5 sm:px-4 py-2 rounded-2xl text-xs font-black uppercase tracking-wider {{ request()->routeIs('order.track*') ? 'bg-emerald-50 text-[#00880F] border border-emerald-200/60' : 'text-gray-600 hover:text-[#00AA13] hover:bg-gray-50' }} transition">
                    📦 Lacak Pesanan
                </a>
                <a href="{{ route('login') }}" 
                   class="hidden sm:inline-flex items-center px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-2xl text-xs font-bold uppercase tracking-wider transition">
                    Staff Login
                </a>
            </div>

        </div>
    </header>

    {{-- KONTEN UTAMA --}}
    <main class="flex-grow">
        @yield('content')
    </main>

    {{-- FOOTER PUBLIK --}}
    <footer class="bg-white border-t border-gray-100 py-8 mt-12">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 text-center space-y-3">
            <div class="flex items-center justify-center space-x-2 text-xs font-bold text-gray-500">
                <span>📍 {{ $shop['shop_address'] ?? 'Jember, Jawa Timur' }}</span>
                @if(!empty($shop['shop_phone']))
                    <span>&bull;</span>
                    <span>📞 WA: {{ $shop['shop_phone'] }}</span>
                @endif
            </div>
            <p class="text-[11px] font-bold text-gray-400">
                &copy; {{ date('Y') }} <span class="text-gray-700 font-black">{{ $shop['shop_name'] ?? 'Toko' }}</span>. Sistem ditenagai oleh <b>{{ $shop['app_name'] ?? 'SIKANDA' }}</b> &bull; Managed by <b>I Gusti Sultan</b>.
            </p>
        </div>
    </footer>

    {{-- FLASH ALERTS SCRIPT --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if(session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: "{!! addslashes(session('success')) !!}",
                    confirmButtonColor: '#00AA13',
                    timer: 3500,
                    timerProgressBar: true
                });
            @endif

            @if(session('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Perhatian!',
                    text: "{!! addslashes(session('error')) !!}",
                    confirmButtonColor: '#EE2737'
                });
            @endif
        });
    </script>
</body>
</html>

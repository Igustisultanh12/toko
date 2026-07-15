<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | SIKANDA Kasir Modern</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .glass-effect {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-6">

    <div class="w-full max-w-md">
        <div class="text-center mb-8">
            <h1 class="text-4xl font-black text-white tracking-tighter mb-2">SIKANDA</h1>
            <p class="text-indigo-100 text-sm font-medium uppercase tracking-widest">Sistem Kasir Modern Anda</p>
        </div>

        <div class="glass-effect rounded-[2rem] shadow-2xl p-10">
            <h2 class="text-2xl font-bold text-gray-800 mb-2">Selamat Datang</h2>
            <p class="text-gray-500 text-sm mb-8">Silakan masuk untuk mengelola toko Anda.</p>

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-5">
                    <label for="email" class="block text-xs font-bold text-gray-400 uppercase mb-2 ml-1">Email Pengguna</label>
                    <input id="email" type="email" name="email" :value="old('email')" required autofocus 
                           class="w-full px-5 py-4 bg-gray-50 border border-gray-200 rounded-2xl outline-none focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10 transition-all text-gray-700" 
                           placeholder="nama@toko.com">
                    @error('email')
                        <p class="text-red-500 text-xs mt-2 ml-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-2">
                    <label for="password" class="block text-xs font-bold text-gray-400 uppercase mb-2 ml-1">Kata Sandi</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password" 
                           class="w-full px-5 py-4 bg-gray-50 border border-gray-200 rounded-2xl outline-none focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10 transition-all text-gray-700" 
                           placeholder="••••••••">
                    @error('password')
                        <p class="text-red-500 text-xs mt-2 ml-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between mb-8 px-1">
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" name="remember" class="rounded-md border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                        <span class="ml-2 text-sm text-gray-500">Ingat saya</span>
                    </label>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500 transition">Lupa sandi?</a>
                    @endif
                </div>

                <button type="submit" 
                        class="w-full bg-indigo-600 text-white py-4 rounded-2xl font-bold text-lg shadow-lg shadow-indigo-200 hover:bg-indigo-700 hover:shadow-indigo-300 active:scale-[0.98] transition-all">
                    MASUK KE SISTEM
                </button>
            </form>

            <div class="mt-10 text-center border-t border-gray-100 pt-6">
                <p class="text-gray-400 text-xs">SIKANDA Versi 2.0 &copy; 2026</p>
                <p class="text-gray-400 text-[10px] mt-1 uppercase tracking-tighter">Powered by <span class="font-bold text-indigo-400">Sultan Web</span></p>
            </div>
        </div>
    </div>

</body>
</html>
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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8fafc; }
        .sidebar-gradient { background: linear-gradient(180deg, #4f46e5 0%, #3730a3 100%); }
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="flex min-h-screen">
    <aside class="w-72 sidebar-gradient text-white hidden lg:flex flex-col shadow-2xl">
        @include('partials.sidebar') </aside>

    <main class="flex-grow flex flex-col h-screen overflow-hidden">
        <header class="bg-white/80 backdrop-blur-md p-6 border-b flex justify-between items-center px-10">
            <h2 class="text-xl font-black text-gray-800 uppercase">@yield('header_title')</h2>
        </header>

        <div class="flex-grow overflow-y-auto p-10">
            @yield('content')
        </div>
    </main>
</body>
</html>
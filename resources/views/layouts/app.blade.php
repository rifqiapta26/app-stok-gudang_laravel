<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Sistem Informasi Stok Gudang')</title>

    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans antialiased">

    <div class="flex min-h-screen">

        {{-- Sidebar Navigasi --}}
        <aside class="w-64 bg-slate-800 text-white flex-shrink-0">
            <div class="p-6 border-b border-slate-700">
                <h1 class="text-xl font-bold">Stok Gudang</h1>
                <p class="text-xs text-slate-400 mt-1">Sistem Informasi v1.0</p>
            </div>

            <nav class="mt-4">
                <a href="{{ route('dashboard') }}"
                   class="flex items-center px-6 py-3 hover:bg-slate-700 transition {{ request()->routeIs('dashboard') ? 'bg-slate-700 border-l-4 border-blue-500' : '' }}">
                    <span>📊</span>
                    <span class="ml-3">Dashboard</span>
                </a>

                <a href="{{ route('categories.index') }}"
                   class="flex items-center px-6 py-3 hover:bg-slate-700 transition {{ request()->routeIs('categories.*') ? 'bg-slate-700 border-l-4 border-blue-500' : '' }}">
                    <span>📁</span>
                    <span class="ml-3">Data Kategori</span>
                </a>

                <a href="{{ route('products.index') }}"
                   class="flex items-center px-6 py-3 hover:bg-slate-700 transition {{ request()->routeIs('products.*') ? 'bg-slate-700 border-l-4 border-blue-500' : '' }}">
                    <span>📦</span>
                    <span class="ml-3">Stok Barang</span>
                </a>
            </nav>
        </aside>

        {{-- Konten Utama --}}
        <main class="flex-1 flex flex-col">

            {{-- Topbar --}}
            <header class="bg-white shadow-sm px-8 py-4 flex items-center justify-between">
                <h2 class="text-lg font-semibold text-gray-700">@yield('page-title', 'Dashboard')</h2>
                <div class="text-sm text-gray-500">
                    {{ \Carbon\Carbon::now()->translatedFormat('l, d F Y') }}
                </div>
            </header>

            {{-- Flash Message --}}
            @if(session('success'))
                <div class="mx-8 mt-6 bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded" role="alert">
                    <p class="font-semibold">Berhasil!</p>
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            @if(session('error'))
                <div class="mx-8 mt-6 bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded" role="alert">
                    <p class="font-semibold">Terjadi Kesalahan!</p>
                    <p>{{ session('error') }}</p>
                </div>
            @endif

            {{-- Konten Halaman --}}
            <section class="p-8 flex-1">
                @yield('content')
            </section>

            {{-- Footer --}}
            <footer class="bg-white px-8 py-4 text-center text-sm text-gray-500 border-t">
                &copy; {{ date('Y') }} Sistem Informasi Stok Gudang — Tugas Kelompok Laravel 10
            </footer>

        </main>

    </div>

</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-gradient-to-b from-sky-50 to-neutral-50">
        <header class="py-6">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">
                <a href="/" class="flex items-center gap-3">
                    <x-application-logo class="h-9 w-auto fill-current text-primary" />
                    <span class="text-xl font-semibold text-neutral-800">{{ config('app.name') }}</span>
                </a>

                <div class="flex items-center gap-3">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="btn-primary">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="inline-flex items-center rounded-2xl px-4 py-2 text-sm font-semibold text-neutral-700 hover:text-neutral-900">Masuk</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn-primary">Daftar</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </header>

        <main>
            <section class="pt-10 pb-16">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                    <div>
                        <h1 class="text-4xl sm:text-5xl font-bold text-neutral-900 leading-tight">Portal Sistem Informasi Alumni</h1>
                        <p class="mt-4 text-neutral-700 text-lg">Terhubung dengan jejaring alumni, peluang karier, beasiswa, dan kuisioner akademik. Desain modern, cepat, dan aman.</p>
                        <div class="mt-8 flex gap-3">
                            <a href="{{ route('register') }}" class="btn-primary">Mulai Sekarang</a>
                            <a href="{{ route('login') }}" class="inline-flex items-center rounded-2xl px-4 py-2 text-sm font-semibold text-neutral-700 hover:text-neutral-900">Masuk</a>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="card">
                            <div class="h-64 bg-gradient-to-br from-sky-200 to-sky-400 rounded-2xl"></div>
                            <div class="mt-4 grid grid-cols-3 gap-3">
                                <div class="badge">Kuisioner</div>
                                <div class="badge">Lowongan</div>
                                <div class="badge">Beasiswa</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="pb-20">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="card">
                        <h3 class="text-lg font-semibold text-neutral-900">Profil Alumni</h3>
                        <p class="mt-2 text-neutral-700">Kelola data alumni, CV, dan pengaturan privasi dengan aman.</p>
                    </div>
                    <div class="card">
                        <h3 class="text-lg font-semibold text-neutral-900">Verifikasi Admin</h3>
                        <p class="mt-2 text-neutral-700">Akses admin aman dengan 2FA (OTP Email & TOTP).</p>
                    </div>
                    <div class="card">
                        <h3 class="text-lg font-semibold text-neutral-900">Kuisioner & Laporan</h3>
                        <p class="mt-2 text-neutral-700">Kumpulkan data, agregasi statistik, ekspor CSV/PDF.</p>
                    </div>
                </div>
            </section>
        </main>

        <footer class="py-10 border-t border-neutral-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-4">
                <p class="text-neutral-600">© {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
                <div class="flex items-center gap-3">
                    <a href="#" class="text-neutral-600 hover:text-neutral-900">Privacy</a>
                    <a href="#" class="text-neutral-600 hover:text-neutral-900">Terms</a>
                    <a href="#" class="text-neutral-600 hover:text-neutral-900">Contact</a>
                </div>
            </div>
        </footer>
    </body>
</html>
<nav x-data="{ open: false }" class="sticky top-0 z-50 bg-white/80 backdrop-blur border-b border-neutral-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center gap-3">
                <a href="/" aria-label="Beranda" class="flex items-center gap-3">
                    <x-application-logo class="h-8 w-auto fill-current text-primary" />
                    <span class="hidden sm:block text-base sm:text-lg font-semibold text-neutral-800">{{ config('app.name') }}</span>
                </a>
            </div>

            <div class="hidden md:flex items-center gap-6">
                <a href="#fitur" class="text-sm font-medium text-neutral-700 hover:text-neutral-900 focus:outline-none focus:ring-2 focus:ring-primary rounded-2xl">Fitur</a>
                <a href="#carakerja" class="text-sm font-medium text-neutral-700 hover:text-neutral-900 focus:outline-none focus:ring-2 focus:ring-primary rounded-2xl">Cara Kerja</a>
                <a href="#demo" class="text-sm font-medium text-neutral-700 hover:text-neutral-900 focus:outline-none focus:ring-2 focus:ring-primary rounded-2xl">Demo</a>
                <a href="#kontak" class="text-sm font-medium text-neutral-700 hover:text-neutral-900 focus:outline-none focus:ring-2 focus:ring-primary rounded-2xl">Kontak</a>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn-primary">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="inline-flex items-center rounded-2xl px-3 py-2 text-sm font-semibold text-neutral-700 hover:text-neutral-900">Masuk</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn-primary">Daftar</a>
                        @endif
                    @endauth
                @endif
            </div>

            <div class="md:hidden flex items-center">
                <button x-on:click="open = !open" aria-label="Toggle menu" class="inline-flex items-center justify-center rounded-2xl p-2 text-neutral-700 hover:text-neutral-900 focus:outline-none focus:ring-2 focus:ring-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>
                </button>
            </div>
        </div>
    </div>

    <div x-show="open" x-transition class="md:hidden border-t border-neutral-200">
        <div class="px-4 py-4 space-y-2">
            <a href="#fitur" class="block rounded-2xl px-3 py-2 text-sm font-medium text-neutral-700 hover:bg-neutral-100">Fitur</a>
            <a href="#carakerja" class="block rounded-2xl px-3 py-2 text-sm font-medium text-neutral-700 hover:bg-neutral-100">Cara Kerja</a>
            <a href="#demo" class="block rounded-2xl px-3 py-2 text-sm font-medium text-neutral-700 hover:bg-neutral-100">Demo</a>
            <a href="#kontak" class="block rounded-2xl px-3 py-2 text-sm font-medium text-neutral-700 hover:bg-neutral-100">Kontak</a>
            <div class="flex gap-2 pt-2">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn-primary w-full">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="inline-flex items-center rounded-2xl px-3 py-2 text-sm font-semibold text-neutral-700 hover:text-neutral-900">Masuk</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn-primary">Daftar</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </div>
</nav>
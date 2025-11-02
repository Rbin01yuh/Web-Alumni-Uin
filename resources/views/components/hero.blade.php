<section id="hero" class="pt-8 sm:pt-12 pb-10 sm:pb-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
        <div>
            <h1 class="reveal text-4xl sm:text-5xl font-bold text-neutral-900 leading-tight">Sistem Informasi Alumni Modern</h1>
            <p class="reveal mt-4 text-neutral-700 text-lg">
                Terhubung dengan jejaring alumni, peluang karier, beasiswa, dan kuisioner dinamis. Cepat, aman, dan mudah digunakan.
            </p>
            <div class="mt-8 flex gap-3">
                <button x-on:click="$store.ui.openDemo()" class="btn-primary">Coba Demo</button>
                <a href="#fitur" class="inline-flex items-center rounded-2xl px-4 py-2 text-sm font-semibold text-neutral-700 hover:text-neutral-900 focus:outline-none focus:ring-2 focus:ring-primary">Lihat Fitur</a>
            </div>
            <!-- Preview Mobile Floating Card -->
            <div class="mt-8 relative">
                <div class="absolute -bottom-8 -right-2 md:-right-10 motion-safe:animate-float">
                    <div class="card w-64">
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-semibold text-neutral-800">Profil Alumni</span>
                            <span class="badge">Aktif</span>
                        </div>
                        <div class="mt-3 space-y-2">
                            <div class="h-3 bg-neutral-100 rounded-full"></div>
                            <div class="h-3 bg-neutral-100 rounded-full w-3/4"></div>
                            <div class="h-3 bg-neutral-100 rounded-full w-2/3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden md:block">
            <img src="/images/hero-illustration.svg" alt="Ilustrasi dashboard alumni" class="w-full h-auto motion-safe:animate-float" loading="lazy" decoding="async" />
        </div>
    </div>
</section>
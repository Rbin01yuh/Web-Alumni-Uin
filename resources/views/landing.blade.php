<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Sistem Informasi Alumni') }} — Portal Alumni Modern</title>
        <meta name="description" content="Sistem Informasi Alumni modern: jejaring, peluang karier, beasiswa, dan kuisioner dinamis. Cepat, aman, dan responsif.">
        <meta property="og:title" content="{{ config('app.name', 'Sistem Informasi Alumni') }}">
        <meta property="og:description" content="Jejaring alumni, karier, beasiswa, dan kuisioner dinamis. Desain modern, cepat, aman.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url('/landing') }}">
        <meta property="og:image" content="{{ asset('images/hero-illustration.svg') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-gradient-to-b from-sky-50 to-neutral-50">
        <x-navbar />

        <main>
            <x-hero />

            <!-- Fitur -->
            <section id="fitur" class="py-12">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="reveal text-2xl sm:text-3xl font-bold text-neutral-900">Fitur Utama</h2>
                    <p class="reveal mt-2 text-neutral-700">Dirancang untuk kebutuhan kampus dan alumni dengan keamanan dan kemudahan.</p>
                    <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        <x-card-feature title="Keamanan & 2FA" :desc="'Autentikasi dua faktor via email/OTP dengan kontrol akses yang ketat.'" :icon="'<svg xmlns=\'http://www.w3.org/2000/svg\' class=\'h-6 w-6\' fill=\'none\' viewBox=\'0 0 24 24\' stroke=\'currentColor\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M12 11c0 1.657-1.343 3-3 3s-3-1.343-3-3 1.343-3 3-3 3 1.343 3 3z\'/><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z\'/></svg>'" />
                        <x-card-feature title="Registrasi Kartu" :desc="'Verifikasi nomor kartu mahasiswa/alumni dengan validasi otomatis.'" :icon="'<svg xmlns=\'http://www.w3.org/2000/svg\' class=\'h-6 w-6\' fill=\'none\' viewBox=\'0 0 24 24\' stroke=\'currentColor\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M4 7h16M4 11h16M4 15h16M4 19h16\'/></svg>'" />
                        <x-card-feature title="Kuisioner Dinamis" :desc="'Formulir kuisioner fleksibel untuk evaluasi akademik dan tracer study.'" :icon="'<svg xmlns=\'http://www.w3.org/2000/svg\' class=\'h-6 w-6\' fill=\'none\' viewBox=\'0 0 24 24\' stroke=\'currentColor\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M9 12h6m-6 4h6M9 8h6\'/><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M4 5h16v14H4z\'/></svg>'" />
                        <x-card-feature title="Lowongan & Lamaran" :desc="'Posting lowongan, daftar beasiswa, dan kelola lamaran alumni.'" :icon="'<svg xmlns=\'http://www.w3.org/2000/svg\' class=\'h-6 w-6\' fill=\'none\' viewBox=\'0 0 24 24\' stroke=\'currentColor\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M7 7h10M7 11h10M7 15h6\'/><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M5 5h14v14H5z\'/></svg>'" />
                    </div>
                </div>
            </section>

            <!-- Cara Kerja -->
            <section id="carakerja" class="py-12">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="reveal text-2xl sm:text-3xl font-bold text-neutral-900">Cara Kerja</h2>
                    <ol class="mt-6 grid grid-cols-1 sm:grid-cols-3 gap-6">
                        <li class="card reveal">
                            <span class="badge">Langkah 1</span>
                            <h3 class="mt-2 font-semibold text-neutral-900">Registrasi & Verifikasi</h3>
                            <p class="mt-1 text-neutral-700">Daftar akun alumni dan verifikasi via email/OTP 2FA.</p>
                        </li>
                        <li class="card reveal" style="transition-delay: 100ms">
                            <span class="badge">Langkah 2</span>
                            <h3 class="mt-2 font-semibold text-neutral-900">Lengkapi Profil</h3>
                            <p class="mt-1 text-neutral-700">Isi data, unggah CV (placeholder UI), dan pilih privasi.</p>
                        </li>
                        <li class="card reveal" style="transition-delay: 200ms">
                            <span class="badge">Langkah 3</span>
                            <h3 class="mt-2 font-semibold text-neutral-900">Terhubung & Berpartisipasi</h3>
                            <p class="mt-1 text-neutral-700">Ikut kuisioner, temukan lowongan, dan bangun jejaring.</p>
                        </li>
                    </ol>
                </div>
            </section>

            <!-- Statistik -->
            <section id="statistik" class="py-12">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="reveal text-2xl sm:text-3xl font-bold text-neutral-900">Statistik Singkat</h2>
                    <div class="mt-6 grid grid-cols-1 sm:grid-cols-3 gap-6" x-data="{mounted:false, v1:0, v2:0, v3:0, init(){this.mounted=true; const t=[1200, 450, 78]; const vars=['v1','v2','v3']; vars.forEach((k,i)=>{ let c=0; const step=Math.ceil(t[i]/40); const id=setInterval(()=>{ c+=step; this[k]=c; if(c>=t[i]){ this[k]=t[i]; clearInterval(id);} }, 16); });}}" x-init="init()">
                        <x-stats-card label="Alumni Terdaftar" trend="↑ +12%"><span x-text="v1"></span></x-stats-card>
                        <x-stats-card label="Lowongan Aktif" trend="↑ +5%"><span x-text="v2"></span></x-stats-card>
                        <x-stats-card label="Kuisioner Berjalan" trend="→ Stable"><span x-text="v3"></span></x-stats-card>
                    </div>
                </div>
            </section>

            <!-- Demo & Modal -->
            <section id="demo" class="py-12">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-6 items-start">
                    <div class="card">
                        <h3 class="text-lg font-semibold text-neutral-900">Form Demo</h3>
                        <p class="mt-2 text-neutral-700">Contoh field dengan states & validasi visual.</p>
                        <form class="mt-4 space-y-4" x-data="{name:'', email:'', file:null, error:''}" @submit.prevent="error = (name&&email) ? '' : 'Harap isi nama & email';">
                            <div>
                                <x-input-label for="name" value="Nama Lengkap" />
                                <x-text-input id="name" x-model="name" type="text" class="input w-full mt-2" placeholder="Nama" required />
                            </div>
                            <div>
                                <x-input-label for="email" value="Email" />
                                <x-text-input id="email" x-model="email" type="email" class="input w-full mt-2" placeholder="email@domain.ac.id" required />
                            </div>
                            <div>
                                <x-input-label for="cv" value="Unggah CV (Placeholder)" />
                                <input id="cv" type="file" class="input w-full mt-2" aria-label="Unggah CV" />
                            </div>
                            <div class="flex items-center gap-3">
                                <button type="submit" class="btn-primary">Kirim</button>
                                <button type="button" class="inline-flex items-center rounded-2xl px-4 py-2 text-sm font-semibold text-neutral-700 hover:text-neutral-900" x-on:click="$store.ui.openDemo()">Buka Modal</button>
                            </div>
                            <p x-show="error" x-text="error" class="mt-2 text-sm text-danger"></p>
                        </form>
                    </div>
                    <div class="card">
                        <h3 class="text-lg font-semibold text-neutral-900">Preview Floating Card</h3>
                        <p class="mt-2 text-neutral-700">Contoh kartu melayang untuk highlight informasi penting.</p>
                        <div class="mt-4 relative h-48">
                            <div class="absolute left-6 top-6 motion-safe:animate-float card w-60">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm font-semibold text-neutral-800">Ringkasan Profil</span>
                                    <span class="badge">Lengkap</span>
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
            </section>

            <x-cta />

        </main>

        <x-footer />

        <!-- Modal Skeleton -->
        <x-modal name="demoModal">
            <div class="p-6">
                <h3 class="text-lg font-semibold text-neutral-900">Modal Demo</h3>
                <p class="mt-2 text-neutral-700">Ini adalah contoh modal untuk menampilkan informasi atau form kecil.</p>
                <div class="mt-4 flex justify-end">
                    <button type="button" class="btn-primary" x-on:click="$store.ui.closeDemo()">Tutup</button>
                </div>
            </div>
        </x-modal>
    </body>
</html>
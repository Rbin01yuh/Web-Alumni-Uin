<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-neutral-800 leading-tight">{{ __('Dashboard') }}</h2>
            <div class="hidden sm:flex gap-2">
                <x-secondary-button>{{ __('Lihat Profil') }}</x-secondary-button>
                <x-primary-button>{{ __('Buat Update') }}</x-primary-button>
            </div>
        </div>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="card">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-neutral-900">Status Akun</h3>
                        <span class="badge">Aktif</span>
                    </div>
                    <p class="mt-2 text-neutral-700">Anda telah masuk dan siap menggunakan portal.</p>
                </div>

                <div class="card">
                    <h3 class="text-lg font-semibold text-neutral-900">Kuisioner</h3>
                    <p class="mt-2 text-neutral-700">Lengkapi kuisioner tracer study untuk dukung akreditasi.</p>
                    <div class="mt-4">
                        <x-primary-button>{{ __('Isi Kuisioner') }}</x-primary-button>
                    </div>
                </div>

                <div class="card">
                    <h3 class="text-lg font-semibold text-neutral-900">Peluang Karier</h3>
                    <p class="mt-2 text-neutral-700">Lihat lowongan kerja dan beasiswa terbaru.</p>
                    <div class="mt-4 flex gap-2">
                        <x-secondary-button>{{ __('Lowongan') }}</x-secondary-button>
                        <x-secondary-button>{{ __('Beasiswa') }}</x-secondary-button>
                    </div>
                </div>
            </div>

            <div class="mt-8 grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div class="card">
                    <h3 class="text-lg font-semibold text-neutral-900">Ringkasan Profil</h3>
                    <p class="mt-2 text-neutral-700">Perbarui informasi, unggah CV, dan atur privasi.</p>
                    <div class="mt-4">
                        <x-primary-button>{{ __('Kelola Profil') }}</x-primary-button>
                    </div>
                </div>

                <div class="card">
                    <h3 class="text-lg font-semibold text-neutral-900">Informasi Sistem</h3>
                    <p class="mt-2 text-neutral-700">Desain modern, performa optimal, dan keamanan ditingkatkan.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-neutral-800 leading-tight">{{ __('Verifikasi Admin Diperlukan') }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card">
                <p class="text-neutral-700">Akun Anda sedang menunggu verifikasi oleh admin. Anda akan mendapatkan notifikasi email setelah disetujui.</p>
            </div>
        </div>
    </div>
</x-app-layout>
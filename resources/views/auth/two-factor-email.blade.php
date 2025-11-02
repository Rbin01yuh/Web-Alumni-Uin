<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-neutral-800 leading-tight">{{ __('Verifikasi 2FA (Email OTP)') }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-md mx-auto sm:px-6 lg:px-8">
            <div class="card space-y-4">
                @if(session('status'))
                    <div class="badge bg-success/10 text-success">{{ session('status') }}</div>
                @endif

                <form method="POST" action="{{ route('2fa.email.send') }}">
                    @csrf
                    <button class="btn-primary w-full">Kirim OTP ke Email</button>
                </form>

                <form method="POST" action="{{ route('2fa.email.verify') }}" class="space-y-2">
                    @csrf
                    <x-input-label for="code" :value="__('Masukkan Kode OTP')" />
                    <x-text-input id="code" class="block mt-1 w-full" type="text" name="code" required maxlength="6" />
                    <x-input-error :messages="$errors->get('code')" class="mt-2" />
                    <button class="btn-primary w-full mt-2">Verifikasi</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
<x-guest-layout>
    <div class="max-w-md mx-auto card">
        <h1 class="text-xl font-semibold mb-4">{{ __('Verifikasi 2FA (TOTP / Recovery Code)') }}</h1>
        <p class="text-sm text-neutral-600 mb-4">Masukkan kode dari aplikasi authenticator atau gunakan recovery code.</p>

        <form method="POST" action="{{ url('/two-factor-challenge') }}" class="space-y-3">
            @csrf

            <div>
                <x-input-label for="code" :value="__('Kode Authenticator')" />
                <x-text-input id="code" class="block mt-1 w-full" type="text" name="code" autofocus autocomplete="one-time-code" />
                <x-input-error :messages="$errors->get('code')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="recovery_code" :value="__('Recovery Code')" />
                <x-text-input id="recovery_code" class="block mt-1 w-full" type="text" name="recovery_code" />
                <x-input-error :messages="$errors->get('recovery_code')" class="mt-2" />
            </div>

            <x-primary-button class="w-full">{{ __('Verifikasi') }}</x-primary-button>
        </form>
    </div>
</x-guest-layout>
<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <x-input-label for="nomor_kartu_mahasiswa" :value="__('Nomor Kartu Mahasiswa')" />
                <x-text-input id="nomor_kartu_mahasiswa" name="nomor_kartu_mahasiswa" type="text" class="mt-1 block w-full" :value="old('nomor_kartu_mahasiswa', $user->nomor_kartu_mahasiswa)" required />
                <x-input-error class="mt-2" :messages="$errors->get('nomor_kartu_mahasiswa')" />
            </div>
            <div>
                <x-input-label for="tahun_lulus" :value="__('Tahun Lulus')" />
                <x-text-input id="tahun_lulus" name="tahun_lulus" type="number" class="mt-1 block w-full" :value="old('tahun_lulus', $user->tahun_lulus)" required min="1950" max="2100" />
                <x-input-error class="mt-2" :messages="$errors->get('tahun_lulus')" />
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <x-input-label for="fakultas" :value="__('Fakultas')" />
                <x-text-input id="fakultas" name="fakultas" type="text" class="mt-1 block w-full" :value="old('fakultas', $user->fakultas)" />
                <x-input-error class="mt-2" :messages="$errors->get('fakultas')" />
            </div>
            <div>
                <x-input-label for="jurusan" :value="__('Jurusan')" />
                <x-text-input id="jurusan" name="jurusan" type="text" class="mt-1 block w-full" :value="old('jurusan', $user->jurusan)" />
                <x-input-error class="mt-2" :messages="$errors->get('jurusan')" />
            </div>
        </div>

        <div>
            <x-input-label for="alamat" :value="__('Alamat')" />
            <textarea id="alamat" name="alamat" class="mt-1 block w-full rounded-2xl border-neutral-300 focus:border-primary focus:ring-primary">{{ old('alamat', $user->alamat) }}</textarea>
            <x-input-error class="mt-2" :messages="$errors->get('alamat')" />
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <x-input-label for="phone" :value="__('Phone')" />
                <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full" :value="old('phone', $user->phone)" />
                <x-input-error class="mt-2" :messages="$errors->get('phone')" />
            </div>
            <div>
                <x-input-label for="linkedin" :value="__('LinkedIn URL')" />
                <x-text-input id="linkedin" name="linkedin" type="url" class="mt-1 block w-full" :value="old('linkedin', $user->linkedin)" />
                <x-input-error class="mt-2" :messages="$errors->get('linkedin')" />
            </div>
        </div>

        <div>
            <x-input-label for="cv" :value="__('Upload CV (PDF/DOCX, max 5MB)')" />
            <input id="cv" name="cv" type="file" class="mt-1 block w-full file:btn-primary" accept=".pdf,.docx" />
            @if($user->cv_path)
                <p class="mt-2 text-sm"><a class="text-primary underline" href="{{ Storage::url($user->cv_path) }}" target="_blank">Lihat CV saat ini</a></p>
            @endif
            <x-input-error class="mt-2" :messages="$errors->get('cv')" />
        </div>

        <div>
            <h3 class="text-md font-medium">{{ __('Privacy Settings') }}</h3>
            @php($privacy = $user->privacy_settings ?? [])
            <div class="mt-2 grid grid-cols-1 sm:grid-cols-2 gap-3">
                <label class="inline-flex items-center gap-2"><input type="checkbox" name="privacy_settings[show_email]" value="1" @checked(($privacy['show_email'] ?? false))> <span>Tampilkan Email</span></label>
                <label class="inline-flex items-center gap-2"><input type="checkbox" name="privacy_settings[show_phone]" value="1" @checked(($privacy['show_phone'] ?? false))> <span>Tampilkan Phone</span></label>
                <label class="inline-flex items-center gap-2"><input type="checkbox" name="privacy_settings[show_linkedin]" value="1" @checked(($privacy['show_linkedin'] ?? false))> <span>Tampilkan LinkedIn</span></label>
                <label class="inline-flex items-center gap-2"><input type="checkbox" name="privacy_settings[show_cv]" value="1" @checked(($privacy['show_cv'] ?? false))> <span>Tampilkan CV</span></label>
            </div>
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>

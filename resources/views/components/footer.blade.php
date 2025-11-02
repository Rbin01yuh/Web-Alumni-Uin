<footer id="kontak" class="mt-16 border-t border-neutral-200 bg-white/60 backdrop-blur">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 grid grid-cols-1 sm:grid-cols-3 gap-6">
        <div>
            <div class="flex items-center gap-3">
                <x-application-logo class="h-7 w-auto fill-current text-primary" />
                <span class="font-semibold text-neutral-800">{{ config('app.name') }}</span>
            </div>
            <p class="mt-2 text-sm text-neutral-600">Platform alumni modern untuk jejaring, karier, dan kuisioner.</p>
        </div>
        <div>
            <h4 class="text-sm font-semibold text-neutral-800">Kontak</h4>
            <ul class="mt-2 space-y-1 text-sm">
                <li><a href="mailto:kontak@kampus.ac.id" class="hover:text-neutral-900">kontak@kampus.ac.id</a></li>
                <li><a href="#" class="hover:text-neutral-900">+62 812 3456 7890</a></li>
            </ul>
        </div>
        <div>
            <h4 class="text-sm font-semibold text-neutral-800">Legal</h4>
            <ul class="mt-2 space-y-1 text-sm">
                <li><a href="#" class="hover:text-neutral-900">Kebijakan Privasi</a></li>
                <li><a href="#" class="hover:text-neutral-900">Syarat & Ketentuan</a></li>
            </ul>
        </div>
    </div>
    <div class="px-4 sm:px-6 lg:px-8 py-4 text-center text-xs text-neutral-500">© {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</div>
</footer>
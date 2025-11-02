# Landing Page Sistem Informasi Alumni

Landing page modern, bersih, dan 100% responsif menggunakan Blade + Tailwind CSS (mobile-first). Menggunakan skema warna biru muda, tipografi profesional (Inter/Poppins), radius besar `rounded-2xl`, dan bayangan lembut `0 8px 30px rgba(59,130,246,0.08)`.

## Struktur & Komponen

- `resources/views/landing.blade.php` — halaman landing lengkap dengan meta SEO, navbar, hero, fitur, cara kerja, statistik, demo modal & form, CTA, footer.
- `resources/views/components/navbar.blade.php` — navbar sticky dengan link anchor, CTA Masuk/Daftar.
- `resources/views/components/hero.blade.php` — hero besar dengan ilustrasi, animasi halus.
- `resources/views/components/card-feature.blade.php` — kartu fitur modular.
- `resources/views/components/stats-card.blade.php` — kartu statistik ringkas.
- `resources/views/components/cta.blade.php` — testimonial/CTA sekunder.
- `resources/views/components/footer.blade.php` — footer dengan kontak & legal.
- `public/images/hero-illustration.svg` — ilustrasi SVG ringan.

## Tailwind Config (snippet)

Tambahkan/cek bagian berikut di `tailwind.config.js`:

```js
export default {
  theme: {
    extend: {
      fontFamily: { sans: ['Inter', 'Poppins', ...defaultTheme.fontFamily.sans] },
      colors: {
        primary: { DEFAULT: '#60A5FA', dark: '#3B82F6' },
        accent: { DEFAULT: '#7DD3FC' },
        neutral: { 50: '#F9FAFB', 100: '#F3F4F6', 900: '#111827' },
      },
      boxShadow: { soft: '0 8px 30px rgba(59,130,246,0.08)' },
      keyframes: {
        fadeUp: { '0%': { opacity: 0, transform: 'translateY(16px)' }, '100%': { opacity: 1, transform: 'translateY(0)' } },
        float: { '0%': { transform: 'translateY(0)' }, '50%': { transform: 'translateY(-6px)' }, '100%': { transform: 'translateY(0)' } },
      },
      animation: { 'fade-up': 'fadeUp 700ms ease-out both', float: 'float 6s ease-in-out infinite' },
    },
  },
};
```

## CSS Komponen

`resources/css/app.css` mendefinisikan utility komponen:

```css
@layer components {
  .btn-primary { @apply inline-flex items-center justify-center rounded-2xl px-4 py-2 bg-primary text-white shadow-soft hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 transition; }
  .card { @apply rounded-2xl bg-white shadow-soft p-6; }
  .input { @apply rounded-2xl border-neutral-300 focus:border-primary focus:ring-primary; }
  .badge { @apply inline-flex items-center rounded-full px-3 py-1 text-sm font-medium bg-neutral-100 text-neutral-700; }
}
```

## Alpine.js (reveal & modal)

`resources/js/app.js` menambahkan IntersectionObserver untuk efek reveal-on-scroll yang halus dan store Alpine untuk modal demo:

```js
document.addEventListener('DOMContentLoaded', () => {
  const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const elements = document.querySelectorAll('.reveal');
  if (reduceMotion) { elements.forEach(el => el.classList.add('opacity-100', 'translate-y-0')); return; }
  const io = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const el = entry.target; const delay = el.getAttribute('data-io-delay') || '0ms';
        el.style.transitionDelay = delay; el.classList.add('opacity-100', 'translate-y-0'); io.unobserve(el);
      }
    });
  }, { threshold: 0.2 });
  elements.forEach(el => { el.classList.add('opacity-0', 'translate-y-4', 'transition', 'duration-700'); io.observe(el); });
});

document.addEventListener('alpine:init', () => {
  Alpine.store('ui', {
    openDemo() { window.dispatchEvent(new CustomEvent('open-modal', { detail: 'demoModal' })); },
    closeDemo() { window.dispatchEvent(new CustomEvent('close-modal', { detail: 'demoModal' })); },
  });
});
```

## Integrasi ke Laravel

1. Tempatkan file Blade di `resources/views/` dan komponen di `resources/views/components/`.
2. Tempatkan aset SVG di `public/images/`.
3. Pastikan `tailwind.config.js` dan `resources/css/app.css` telah disesuaikan.
4. Tambah rute di `routes/web.php`:
   ```php
   Route::get('/landing', function () { return view('landing'); })->name('landing');
   ```
5. Jalankan pengembangan:
   - `npm run dev` (Vite)
   - `php artisan serve` dan buka `http://127.0.0.1:8000/landing`

## Konten Demo

Contoh teks Bahasa Indonesia profesional:
- Headline: "Sistem Informasi Alumni Modern"
- Subheadline: "Terhubung dengan jejaring alumni, peluang karier, beasiswa, dan kuisioner dinamis. Cepat, aman, dan mudah digunakan."
- 3 Fitur ringkas: Keamanan & 2FA, Registrasi Kartu, Kuisioner Dinamis (ditambah Lowongan & Lamaran).
- 3-Step flow: Registrasi & Verifikasi → Lengkapi Profil → Terhubung & Berpartisipasi.
- CTA: "Coba Demo" / "Lihat Fitur".

## Kompatibilitas & Performa

- Minimal dependensi, SVG dioptimasi, gambar lazy-load, animasi halus & non-overlapping.
- Mendukung `prefers-reduced-motion`, fokus ring terlihat (`focus:ring-primary`).
- Uji breakpoint `sm/md/lg/xl` dan browser modern.
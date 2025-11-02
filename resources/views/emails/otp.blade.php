@component('mail::message')
# Kode OTP Login

Gunakan kode berikut untuk menyelesaikan proses login. Kode berlaku selama 60 detik.

@component('mail::panel')
**{{ $code }}**
@endcomponent

Jika Anda tidak meminta kode ini, abaikan email ini.

Terima kasih,
Sistem Informasi Alumni
@endcomponent
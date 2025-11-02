<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\EmailOtpCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class TwoFactorEmailController extends Controller
{
    public function show()
    {
        return view('auth.two-factor-email');
    }

    public function send(Request $request)
    {
        $user = $request->user();
        $code = (string) random_int(100000, 999999);
        $key = 'email_otp_user_'.$user->id;
        Cache::put($key, $code, now()->addSeconds(60));

        Mail::to($user->email)->queue(new EmailOtpCode($code));

        return back()->with('status', 'Kode OTP telah dikirim ke email Anda.');
    }

    public function verify(Request $request)
    {
        $request->validate([
            'code' => ['required', 'digits:6'],
        ]);

        $user = $request->user();
        $key = 'email_otp_user_'.$user->id;
        $cached = Cache::get($key);

        if ($cached && hash_equals($cached, $request->code)) {
            Cache::forget($key);
            $request->session()->put('twofactor_passed', true);
            return redirect()->intended(route('dashboard'));
        }

        return back()->withErrors(['code' => 'Kode OTP tidak valid atau telah kedaluwarsa.']);
    }
}
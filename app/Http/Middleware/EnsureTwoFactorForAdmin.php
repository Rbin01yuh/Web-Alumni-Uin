<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureTwoFactorForAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();
        if ($user && $user->hasRole('admin')) {
            if (!$request->session()->get('twofactor_passed')) {
                return redirect()->route('2fa.email.show');
            }
        }
        return $next($request);
    }
}
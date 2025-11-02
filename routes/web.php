<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserVerificationController;
use App\Http\Controllers\Auth\TwoFactorEmailController;

// Admin verification notice
Route::get('/admin/verification-notice', function () {
    return view('admin.verification-notice');
})->middleware(['auth'])->name('admin.verification.notice');

// Admin routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::middleware('twofactor.admin')->group(function () {
        Route::get('/admin/verify-users', [UserVerificationController::class, 'index'])->name('admin.verify-users.index');
        Route::post('/admin/verify-users/{user}', [UserVerificationController::class, 'verify'])->name('admin.verify-users.verify');
    });
});

// Two-Factor Email OTP
Route::middleware(['auth'])->group(function () {
    Route::get('/2fa/email', [TwoFactorEmailController::class, 'show'])->name('2fa.email.show');
    Route::post('/2fa/email/send', [TwoFactorEmailController::class, 'send'])->name('2fa.email.send');
    Route::post('/2fa/email/verify', [TwoFactorEmailController::class, 'verify'])->name('2fa.email.verify');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landing', function () {
    return view('landing');
})->name('landing');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

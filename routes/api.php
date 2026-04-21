<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RumahSakitController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Http\Request;

use App\Http\Controllers\TransJatimController;

// --- GUEST ROUTES ---
Route::middleware('guest')->group(function () {
    Route::post('/register', [RegisteredUserController::class, 'store'])
                ->name('register');

    Route::post('/login', [AuthenticatedSessionController::class, 'store'])
                ->name('login');

    // Mengirim email link reset password
    Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    // Eksekusi reset password (Controller yang kamu kirim tadi)
    Route::post('/reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');

    Route::get('/route', [TransJatimController::class, 'index']);
    Route::get('/route/{id}',[TransJatimController::class,'detail']);
});

// --- AUTHENTICATED ROUTES ---
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');

    // Route untuk cek profile user yang login
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('/rumah-sakit', [RumahSakitController::class, 'index']);
    Route::get('/rumah-sakit/search', [RumahSakitController::class, 'search']);
    Route::get('/rumah-sakit/{id}', [RumahSakitController::class, 'show']);

});

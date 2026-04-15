<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\NomorDaruratController;
use App\Http\Controllers\ProgramBansosController;
use App\Http\Controllers\SkriningTbcController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// --- PUBLIC ROUTES (🔥 untuk testing tanpa login) ---
Route::get('/nomor-darurat', [NomorDaruratController::class, 'index']);
Route::get('/program-bansos', [ProgramBansosController::class, 'index']);
Route::get('/skrining-tbc', [SkriningTbcController::class, 'index']);


// --- GUEST ROUTES ---
Route::middleware('guest')->group(function () {
    Route::post('/register', [RegisteredUserController::class, 'store'])
                ->name('register');

    Route::post('/login', [AuthenticatedSessionController::class, 'store'])
                ->name('login');

    Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::post('/reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');
});


// --- AUTHENTICATED ROUTES ---
Route::middleware('auth:sanctum')->group(function () {

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

});
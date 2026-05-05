<?php

use App\Http\Controllers\OpenDataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RumahSakitController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\NomorDaruratController;
use App\Http\Controllers\ProgramBansosController;
use App\Http\Controllers\SkriningTbcController;
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

    //transjatim
    Route::get('/route', [TransJatimController::class, 'index']);
    Route::get('/route/{id}',[TransJatimController::class,'show']);

    //rs
    Route::get('/rumah-sakit', [RumahSakitController::class, 'index']);
    Route::get('/rumah-sakit/search', [RumahSakitController::class, 'search']);
    Route::get('/rumah-sakit/{id}', [RumahSakitController::class, 'show']);

    //open data
    Route::get('/datasets',[OpenDataController::class, 'indexDatasets']);
    Route::get('/articles',[OpenDataController::class,'indexArticles']);
    Route::get('/datasets/{id}',[OpenDataController::class, 'showDataset']);
    Route::get('/articles/{id}',[OpenDataController::class,'showArticle']);
});


// --- AUTHENTICATED ROUTES ---
Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::post('/rumah-sakit',[RumahSakitController::class,'store']);

    //role admin
    Route::middleware(['role:admin'])->group(function() {
        //transjatim
        Route::post('/route',[TransJatimController::class,'store']);
        
        //opendata
        Route::post('/datasets',[OpenDataController::class,'storeDataset']);
        Route::post('/articles',[OpenDataController::class,'storeArticle']);
        Route::put('/datasets{id}',[OpenDataController::class,'updateDataset']);
        Route::put('/articles{id}',[OpenDataController::class,'updateArticle']);
        Route::delete('/datasets{id}',[OpenDataController::class,'destroyDataset']);
        Route::delete('/articles{id}',[OpenDataController::class,'destroyArticle']);
    });
});
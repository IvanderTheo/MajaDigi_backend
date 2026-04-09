<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RumahSakitController;

Route::get('/rumah-sakit', [RumahSakitController::class, 'index']);
Route::get('/rumah-sakit/search', [RumahSakitController::class, 'search']);
Route::get('/rumah-sakit/{id}', [RumahSakitController::class, 'show']);

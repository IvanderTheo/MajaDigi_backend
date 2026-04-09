<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RumahSakitController;

Route::get('/rumah-sakit', [RumahSakitController::class, 'index']);
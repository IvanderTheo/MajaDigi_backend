<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\NomorDarurat;

class NomorDaruratController extends Controller
{
    public function index()
    {
        return NomorDarurat::all();
    }
}
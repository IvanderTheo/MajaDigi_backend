<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SkriningTbc;

class SkriningTbcController extends Controller
{
    public function index()
    {
        return SkriningTbc::all();
    }
}
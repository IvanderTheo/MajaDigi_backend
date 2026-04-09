<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rumah_sakit;

class RumahSakitController extends Controller
{
    public function index()
    {
        return rumah_sakit::all();
    }
}

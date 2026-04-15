<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProgramBansos;

class ProgramBansosController extends Controller
{
    public function index()
    {
        return ProgramBansos::all();
    }
}
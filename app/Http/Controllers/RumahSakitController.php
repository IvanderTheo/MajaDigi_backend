<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rumah_sakit;

class RumahSakitController extends Controller
{
    public function index()
    {
        $rumah_sakit = rumah_sakit::all();
        return response()->json($rumah_sakit);
    }

    public function show($id)
    {
        $rumah_sakit = rumah_sakit::findOrFail($id);

        return response()->json([
            'rumah_sakits' => $rumah_sakit
        ]);
    }

    public function search(Request $request)
    {
        return rumah_sakit::where('name', 'ilike', '%'.$request->q.'%')->get();
    }
    
    public function antrian($id)
    {
        $rumah_sakit = rumah_sakit::findOrFail($id);

        return response()->json([
            'antrian' => $rumah_sakit->antrian
        ]);
    }
}

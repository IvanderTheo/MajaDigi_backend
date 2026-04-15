<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rumah_sakit;

class RumahSakitController extends Controller
{
    public function index(Request $request)
    {
        $query = rumah_sakit::query();

        if ($request->city) {
            $query->where('city','ilike', '%'.$request->city.'%');
        }

        return $query->paginate(10);
    }

    public function show($id)
    {
        $rumah_sakit = rumah_sakit::with(['kamar', 'antrian'])->findOrFail($id);

        return response()->json([
            'rumah_sakits' => $rumah_sakit
        ]);
    }

    public function search(Request $request)
    {
        return rumah_sakit::where('name', 'ilike', '%'.$request->q.'%')->get();
    }
}

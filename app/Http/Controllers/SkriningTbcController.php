<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SkriningTbc;
use Illuminate\Http\Request;
use App\Services\SkriningTbcService;

class SkriningTbcController extends Controller
{
    public function index() {
        return SkriningTbc::all();
    }
    public function show($id)
    {
        $result = SkriningTbc::where('used_id',$id)->firstOrFail();
        return response()->json([
            'status'=>'success',
            'message'=>'success retrieved data',
            'data'=>$result,
        ],200);
    }

    public function store(Request $request, SkriningTbcService $service)
    {
        $data = $request->all();

        $data['screening_result'] = $service->calculate($data);
        $data['screening_date'] = now();

        SkriningTbc::create($data);

        return response()->json([
            'message' => 'Data saved'
        ]);
    }
}
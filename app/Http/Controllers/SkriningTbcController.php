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
        $result = SkriningTbc::where('user_id',$id)->firstOrFail();
        return response()->json([
            'status'=>'success',
            'message'=>'success retrieved data',
            'data'=>$result,
        ],200);
    }

    public function store(Request $request, SkriningTbcService $service)
    {
        $request->validate([
            'user_id' => 'required|uuid|exists:users,id',
            'cough_duration' => 'required|integer|min:0|max:365',
            'fever' => 'required|boolean',
            'weight_loss' => 'required|boolean',
            'night_sweat' => 'required|boolean',
        ]);

        $data = $request->only([
            'user_id',
            'cough_duration',
            'fever',
            'weight_loss',
            'night_sweat'
        ]);

        $data['fever'] = $request->boolean('fever');
        $data['weight_loss'] = $request->boolean('weight_loss');
        $data['night_sweat'] = $request->boolean('night_sweat');

        $result = $service->calculate($data);

        $data['screening_result'] = $result['result'];
        $data['risk_level'] = $result['risk_level'];
        $data['score'] = $result['score'];
        $data['screening_date'] = now();

        SkriningTbc::create($data);

        return response()->json([
            'message' => 'Data saved'
        ]);
    }
}
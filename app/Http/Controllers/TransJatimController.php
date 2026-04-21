<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransJatim;
use Illuminate\Support\Facades\DB;

class TransJatimController extends Controller
{
    //
    public function index() {
        $route = TransJatim::all();
        return response()->json($route);
    }

    public function detail(Request $request) {
        $route_id = $request->id;

        $route = TransJatim::with('route_details')
            ->where('id', $route_id)
            ->first();

        if (!$route) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        return response()->json([
            'status' => 1,
            'message' => 'Success',
            'data' => [
                'route_name'=>$route->route_name,
                'start_point'=>$route->start_point,
                'end_point'=>$route->end_point,
                'ticket_price'=>$route->price,
                'route' => $route->route_details
            ]
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourierController extends Controller
{
    public function showprice(){
        $price = DB::table('prices')->get();
        return view ('price',['data'=>$price]);
    }

    public function tracking(Request $request)
    {
        $id = $request->input('id');
        $track = DB::table('couriers')->where('id', $id)->first();
    
        if ($track) {
            return response()->json([
                'status' => 'success',
                'data' => $track,
            ]);
        }
    
        return response()->json([
            'status' => 'error',
            'message' => 'Tracking ID not found!',
        ]);
    }
    
    public function viewtracking(Request $request)
    {
        $id = $request->id; // Get the 'id' from the request
        $track = DB::table('couriers')->where('id', $id)->first(); // Fetch a single record
    
        if ($track) {
            return response()->json([
                'status' => 'success',
                'data' => $track,
            ]);
        }
    
        return response()->json([
            'status' => 'error',
            'message' => 'Record not found!',
        ]);
    }

    public function showrecord(){
        $records = DB::table('couriers')->get();
        return view ('courier', ['data'=>$records]);
    }
    

}

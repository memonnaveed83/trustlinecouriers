<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function showusers()
    {
        $users = DB::table('users')->get();
        return view('userreport', ['data' => $users]);
    }

    public function showcouriers()
    {
        $courier = DB::table('couriers')->get();
        return view('courierreport', ['data' => $courier]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function insert1(Request $req){
        $req->validate([

            'bdate'=>'required',
            'sname'=>'required',
            'rname'=>'required',
            'receiveraddress'=>'required',
            'senderaddress'=>'required',
            'charges'=>'required',
            'qty'=>'required',
            'sendercontact'=>'required',
            'receivercontact'=>'required',
            'status'=>'required'

        ]);

        $data = DB::table('couriers')->insert([

            'bdate'=>$req->bdate,
            'sname'=>$req->sname,
            'rname'=>$req->rname,
            'receiveraddress'=>$req->receiveraddress,
            'senderaddress'=>$req->senderaddress,
            'charges'=>$req->charges,
            'qty'=>$req->qty,
            'sendercontact'=>$req->sendercontact,
            'receivercontact'=>$req->receivercontact,
            'status'=>$req->status,
        ]);

        if($data){
            return redirect()->route('operation');
        }
    }

    public function updateviewcourier($id){
        $updateview = DB::table('couriers')->find($id);
        return view ('updatecourier',['result'=>$updateview]);
    }
    
    public function updatecourier1(Request $req, $id){
        $updatedata = DB::table('couriers')->where('id',$id)->update([
            'bdate'=>$req->bdate,
            'sname'=>$req->sname,
            'rname'=>$req->rname,
            'senderaddress'=>$req->senderaddress,
            'receiveraddress'=>$req->receiveraddress,
            'charges'=>$req->charges,
            'qty'=>$req->qty,
            'sendercontact'=>$req->sendercontact,
            'receivedby'=>$req->receivedby,
            'receiveddate'=>$req->receiveddate,
            'receivercontact'=>$req->receivercontact,
            'status'=>$req->status,
            'receivedbycontact'=>$req->receivedbycontact
            
        ]);
    
        if($updatedata){
    
            return redirect()->route('showrecords');
                }
    }

    public function deletecourier($id){

        $record = DB::table('couriers')->where('id',$id)->delete();
        return redirect()->route('showrecords');
    }



    public function showdashboarddata() {
        $totalusers = DB::table('users')->count();
        $totalcouriers = DB::table('couriers')->count();
        $totalcharges = DB::table('couriers')->sum('charges');
    
        return view('home', compact('totalusers', 'totalcouriers', 'totalcharges'));
    }

}

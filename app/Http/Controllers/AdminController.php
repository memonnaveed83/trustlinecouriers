<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function show(){
        $records = DB::table('users')->get();
        return view ('admin', ['data' => $records]);
    }

    public function updateviewuser($id){
        $updateview = DB::table('users')->find($id);
        return view('updateviewuser',['data'=>$updateview]);
    }

    public function urecord(Request $req, $id){

        $updaterecord = DB::table('users')->where('id',$id)->update([
    
            'fname'=>$req->fname,
            'lname'=>$req->lname,
            'email'=>$req->email,
            'contact'=>$req->contact,
    
        ]);
    
        if ($updaterecord) {
            return redirect()->route('admin')->with('success', 'User record updated successfully.');
        } else {
            return back()->with('error', 'Failed to update the record. Please try again.');
        }
    
    
    }
    
    public function deleteuser($id){
        $deleteuser = DB::table('users')->where('id',$id)->delete();
        return redirect()->route('admin');
    }
}

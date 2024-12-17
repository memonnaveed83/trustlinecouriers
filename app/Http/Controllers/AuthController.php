<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{

    public function home(){

        return view('home');
    }

    public function index(){

        return view('auth.login');

    }

    public function login(Request $req){
        // dd($req->all());
        $credentials = $req->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
    
    if(\Auth::attempt($req->only('email','password'))){

        return redirect()->route('home');
    }

    return redirect('login')->withErrors(['error' => 'Invalid email or password.']);
}

    public function register_view(){

        return view('auth.register');
    }

    public function register(Request $req){

        // dd($req->all());

        $req->validate([

            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required|unique:users|email',
            'userid'=>'required',
            'password'=>'required|confirmed',
            'contact'=>'required',
            'type'=>'required'

        ]);

        user::create([

            'fname'=>$req->fname,
            'lname'=>$req->lname,
            'email'=>$req->email,
            'userid'=>$req->userid,
            'contact'=>$req->contact,
            'password'=>\Hash::make($req->password),
            'type'=>$req->type
        ]);

        if(\Auth::attempt($req->only('email','password'))){

            return redirect()->route('home');
        }
        
        return redirect()->back()->withErrors(['message' => 'Registration failed. Try again.']);

    }

  

    public function logout()
    {
        // Clear the authenticated user session
        \Auth::logout();
    
        // Flush all session data
        Session::flush();
    
        // Redirect to login page
        return redirect('/login')->with('success', 'Logged out successfully!');
    }


    public function getUser($id)
{
    $user = DB::table('users')->where('id',$id)->get();
    return view ('viewuser', ['data'=>$user]);

   
}

    // public function showusers(){
    //     $totalusers = DB::table('users')->count();
    //     $totalcouriers = DB::table('couriers')->count();
    //     $totalcharges = DB::table('couriers')->sum('charges');
    //     return view ('showusers', compact ('totalusers', 'totalcouriers', 'totalcharges'));

    //     return redirect()->name('showusers');
        
    // }

}

<?php

namespace App\Http\Controllers;
// use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function pageLogin(){
        return view('auth.login');
    }
    public function postLogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/home');
        }
        return redirect('/login');
    }
    public function logout(){
       Auth::logout();;
       return redirect('/login');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
class LoginController extends Controller
{
    public function login(){
        return view('login.login');
      
    }
    public function store(Request $r){
         $data = $r->only('email', 'password');

        if (Auth::attempt($data)) {
            return redirect()->route('about');
        } else {
            return redirect()->route('login')->withErrors('message','Email or password mismatch');
        }
    }
    public function logout(Request $r){
        Auth::logout();

        return redirect()->route('login');
    }
}

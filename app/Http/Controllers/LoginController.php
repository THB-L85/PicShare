<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function authenticate(Request $request){

        // dd('authenticate');
        //* Validate form data
        $credentials = $request->validate([
            'email'     => 'required|email|max:60',
            'password'  => 'required'
        ]);

        //* Attempt to authenticate
        if(Auth::attempt($credentials, $request->remember)){
            $request->session()->regenerate();
            return redirect()->intended('profile');
        }

        return back()->withErrors(['email' => 'The provided credentials do not match our records.'])->onlyInput('email');
    }
}

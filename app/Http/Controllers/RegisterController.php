<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function store(Request $request){
        
        $validation = $request->validate([
            'name'              => 'required|max:30',
            'username'          => 'required|unique:users|min:3|max:20',
            'email'             => 'required|unique:users|email|max:60',
            'password'          => 'required|confirmed'
        ]);

        dd($request->all());

    }
}

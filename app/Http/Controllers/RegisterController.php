<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    public function store(Request $request){
        
        //* Set slug to username
        $request->request->add(['username' => Str::slug($request->username)]);

        //* Validate form data
        $validation = $request->validate([
            'name'              => 'required|max:30',
            'username'          => 'required|unique:users|min:3|max:20',
            'email'             => 'required|unique:users|email|max:60',
            'password'          => 'required|confirmed'
        ]);

        //* Create user
        User::create([
            'name'      => $request->name,
            'username'  => $request->username,
            'email'     => $request->email,
            'password'  => Hash::make($request->password)
        ]);

        //* Authenticate user
        Auth::attempt([
            'email'     => $request->email,
            'password'  => $request->password
        ]);

        return redirect()->route('profile')->with('message', 'User created successfully. Please log in.');
    }
}

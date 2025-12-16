<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create_post()
    {
        return view('create_post');
    }

    public function store(Request $request){

        $request->validate([
            'title'         => 'required|max:255',
            'description'   => 'required',
            'image'         => 'required',
        ]);

        dd($request->all());

    }
}

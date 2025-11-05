<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PicShareController extends Controller
{
    public function profile(){
        return view('profile');
    }

    public function post_details(){
        return view('post_details');
    }

    public function create_post(){
        return view('create_post');
    }
}

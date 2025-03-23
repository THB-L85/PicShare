<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PicShareController extends Controller
{
    public function profile(){
        return view('profile');
    }

    public function photo_details(){
        return view('photo_details');
    }
}

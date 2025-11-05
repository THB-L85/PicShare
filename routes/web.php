<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PicShareController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/register',         [RegisterController::class, 'register']);
Route::post('/save-register',   [RegisterController::class, 'store']);
Route::get('/login',            [RegisterController::class, 'login']);
Route::get('/profile',          [PicShareController::class, 'profile']);
Route::get('/post-details',     [PicShareController::class, 'post_details']);
Route::get('create-post',       [PicShareController::class, 'create_post']);
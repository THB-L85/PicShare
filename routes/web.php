<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/register',         [RegisterController::class, 'register']);
Route::post('/save-register',   [RegisterController::class, 'store']);
Route::get('/login',            [RegisterController::class, 'login']);
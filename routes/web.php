<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PicShareController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/register',         [RegisterController::class, 'register'])->name('register');
Route::post('/register',        [RegisterController::class, 'store']);

Route::get('/login',            [LoginController::class, 'login'])->name('login');
Route::post('/login',           [LoginController::class, 'authenticate']);

Route::post('/logout',          [LogoutController::class, 'logout'])->name('logout');

Route::get('/post-details',     [PicShareController::class, 'post_details']);
Route::get('create-post',       [PostController::class, 'create_post']);

Route::middleware('auth')->group(function () {

    Route::get('/',             [PicShareController::class, 'home']);
    Route::get('/profile',      [ProfileController::class, 'profile'])->name('profile');
    // otras rutas protegidas
});

Route::get('/panel', function () {
    return 'Solo usuarios autenticados';
})->middleware('auth');
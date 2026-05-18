<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('users/{user}', [UserController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});

Route::view('/contact', 'contact');

Route::get('/', function () {
    return view('welcome');
    // return redirect('about');
});

Route::get('/{username}', function ($username) {
    return view('welcome', ['username' => $username]);
});

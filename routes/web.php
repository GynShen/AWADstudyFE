<?php

use Illuminate\Support\Facades\Route;

Route::get('/{username}', function ($username) {
    return view('welcome', ['username' => $username]);
});

Route::get('/about', function () {
    return view('about');
});

Route::view('/contact', 'contact');

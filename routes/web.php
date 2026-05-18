<?php

use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
    return view('about');
});

Route::view('/contact', 'contact');

Route::view('/', 'welcome');

Route::get('/{username}', function ($username) {
    return view('welcome', ['username' => $username]);
});
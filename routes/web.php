<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::group(['middleware' => ['checkAge']], function() 
//     {
//         Route::view("signUp","signUp");
//         Route::view("contact", "contact");
//     }
// ); //Remember to comment both signUp and contact route below

Route::post('/login', [UserController::class, 'login']);
Route::view('/login','login');

Route::get('/getUser', [UserController::class,'getUser']);

Route::get('/getManyCompany', [UserController::class,'getManyCompany']);
Route::get('/getOneCompany', [UserController::class, 'getOneCompany']);

Route::post('/signUp', [UserController::class, 'signUp']);
Route::view('/signUp', 'signUp');

Route::post('/updateUser', [UserController::class, 'storeUser']);
Route::get('/updateUser/{id}', [UserController::class, 'updateUser']);

Route::get('/deleteUser/{id}', [UserController::class, 'deleteUser']);

Route::post('/addUser', [UserController::class, 'addUser']);
Route::view('/addUser', 'addUser');

Route::get('/datatest', [UserController::class, 'testData']);

Route::get('/user/{user}', [UserController::class, 'loadView']);

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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($user) {
        echo $user;
        echo ", Hello from UserController";
        echo "\n";
        return ['name' =>'ABC', 'age' => 40];
    }
}

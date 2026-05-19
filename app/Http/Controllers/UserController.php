<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    public function deleteUser($id){
        // $user = User::find($id);
        // $user->delete();
        $user = User::destroy($id);
        return redirect('/datatest');
    }

    public function addUser(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect('/datatest');
    }

    public function testData()
    {
        // return DB::select('select * from users');
        // $data=User::all();
        $data = User::paginate(3);
        return view('/user', ['users' => $data]);
    }

    public function index($user)
    {
        echo $user;
        echo ", Hello from UserController";
        echo "\n";
        return ['name' => 'ABC', 'age' => 40];
    }

    public function loadView($user)
    {
        $data = ['Parker', 'Abu', 'Ching'];
        return view(
            'user',
            ['user' => $user, 'users' => $data]
        );
    }
}

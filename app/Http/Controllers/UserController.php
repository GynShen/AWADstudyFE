<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Company;

class UserController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:50'
        ]);

        return $request->input();
    }

    public function getUser(){
        return Company::find(1)->user;
    }
    
    public function getManyCompany(){
        return User::find(2)->companies;
    }

    public function getOneCompany(){
        return User::find(2)->company;
    }

    public function signUp(Request $request)
    {
        $data = $request->all();
        $data['is_admin'] = 0;
        User::create($data);
        return redirect('datatest');
    }

    public function storeUser(Request $request)
    {
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect('datatest');
    }

    public function updateUser($id)
    {
        $user = User::find($id);
        return view('/updateUser', ['user' => $user]);
    }

    public function deleteUser($id)
    {
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

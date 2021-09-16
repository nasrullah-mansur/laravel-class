<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'con_password' => 'required|same:password'
        ],
        [
           'con_password.required' => 'The confirm password is required', 
        ]);


        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = md5($request->password);

        $user->save();

        return redirect()->route('user.index');
    }
}

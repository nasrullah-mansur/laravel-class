<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        // $users = User::all();
        // return $users;


        // $output = User::all()->last();
        // $output = User::orderBy('created_at', 'DESC')->take(1)->get();

        $output = User::where('id', 3)->get();

        return $output;
    }

    public function create()
    {
        $user = new User();
        $user->name = 'Nasrullah';
        $user->email = 'test2@email.com';
        $user->password = '1234';

        $user->save();

    }


    public function update()
    {
        $output = User::where('id', 3)->first();
        $output->name = 'Mansur';
        $output->save();

        return $output;
    }

    public function delete()
    {
        $output = User::where('id', 3)->first();
        $output->delete();
    }
}

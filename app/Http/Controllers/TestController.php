<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        // return 'This is output from controller';

        return view('test');
    }
}

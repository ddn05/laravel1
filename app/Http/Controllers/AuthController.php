<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function awalan(){
        return view('index');
    }

    public function form(){
        return view('form');
    }
}

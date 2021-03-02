<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request){
        // dd($request->all());
        $first_name = $request->first;
        $last_name  = $request->last; 

        return view('halo', compact("first_name","last_name"));
    }
}

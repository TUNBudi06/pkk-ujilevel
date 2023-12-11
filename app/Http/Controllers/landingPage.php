<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class landingPage extends Controller
{
    public static function home(){
        return view('landingPage');
    }

    public static function shop(){
        return view("shop");
    }
}

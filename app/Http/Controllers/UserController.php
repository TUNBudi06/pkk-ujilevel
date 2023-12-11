<?php

namespace App\Http\Controllers;

use App\Http\Requests\accounting;
use App\Models\User;
use Illuminate\Contracts\Auth\Middleware\AuthenticatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use function Laravel\Prompts\password;

class UserController extends Controller
{
    public function doLogin(Request $req){
        $data = $req->validate([
           "email"=>"required|email" ,
            "password"=>"required|min:6"
        ]);

        if (auth()->attempt($data)){
            return redirect()->route("home");
        } else {
            return redirect()->route("login")->with("error","login error please try again");
        }
    }

    public function login(){
        if(Auth::check()){
            return redirect()->route("home");
        } else {
            return  view("user.loginv2");
        }
    }

    public static function register(){
        return view("user.registerv2");
    }

    public static function buatAkun(accounting $req){
        $data = $req->validate(accounting::rules());

        User::create([
            "name"=> $data["name"],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        return redirect()->route("login");
    }

    public function doLogout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route("home");
    }
}

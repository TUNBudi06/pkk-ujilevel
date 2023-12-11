<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',function () {
    return redirect()->route("home");
});

Route::get("/home",[\App\Http\Controllers\landingPage::class,"home"])->name("home");
Route::get("/shop",[\App\Http\Controllers\landingPage::class,"shop"])->name("shop")->middleware('authUser');

Route::get("/login",[\App\Http\Controllers\UserController::class,"login"])->name("login");
Route::post("/login",[\App\Http\Controllers\UserController::class,"doLogin"])->name("login");
Route::get("/logout",[\App\Http\Controllers\UserController::class,"doLogout"])->name("logout");
Route::get("/register",[\App\Http\Controllers\UserController::class,"register"])->name("register");
Route::post("/register",[\App\Http\Controllers\UserController::class,"buatAkun"])->name("register");


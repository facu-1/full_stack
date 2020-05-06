<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//rutas default
Auth::routes();

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

//rutas

Route::get('/', function () {
    $user = null;
    if (Auth::check()) { //nos fijamos si el usuario esta logueado
        $user = Auth::user(); //devolvemos el usuario como objeto
    }
    return view('home', compact('user'));
});

Route::get('/faq', function () {
    $user = null;
    if (Auth::check()) { //nos fijamos si el usuario esta logueado
        $user = Auth::user(); //devolvemos el usuario como objeto
    }
    return view('faq', compact('user'));
});

Route::get('/contact', function () {
    $user = null;
    if (Auth::check()) { //nos fijamos si el usuario esta logueado
        $user = Auth::user(); //devolvemos el usuario como objeto
    }
    return view('contact', compact('user'));
});


Route::get('/test', function () {
    $user = null;
    if (Auth::check()) {
        $user = Auth::user();
    }
    $token = csrf_field()->toHtml();
    return view('homejs', compact('token', 'user'));
});

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
    return view('index', compact('user'));
});

Route::get('/test', function () {
    $token = csrf_field()->toHtml();
    $user = Auth::user();
    return view('prueba', compact('token', 'user'));
});

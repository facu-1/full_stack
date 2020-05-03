<?php

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

Route::get('/home', 'HomeController@index')->name('home');

//rutas

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/new_role/{name}', 'RoleController@create');
Route::get('/delete_role/{name}', 'RoleController@delete');

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

Route::get('/test/{pag}', 'htmlController@get'); //retorna la vista de homejs, con todas las variables necesaias a javscript

Route::get('/test/producto/{id}', 'htmlController@prod');


//rutas del carrito:
Route::post('/carritoAdd', 'carritoCompras@add')->middleware('web');
Route::get('/carritoDelete/{id}', 'carritoCompras@delete');

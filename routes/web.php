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


//rutas de administrador

Route::get('/admin/{categoria}', 'adminController@show')->middleware('isAdmin');

Route::post('/producto/add', 'productos_controller@store')->middleware('isAdmin');

Route::put('/producto/edit', 'productos_controller@update')->middleware('isAdmin');

Route::delete('/producto/delete', 'productos_controller@destroy')->middleware('isAdmin');

Route::post('/categoria/add', 'categorias_controller@store')->middleware('isAdmin');

Route::put('/categoria/edit', 'categorias_controller@update')->middleware('isAdmin');

Route::delete('/categoria/delete', 'categorias_controller@destroy')->middleware('isAdmin');

Route::post('/marca/add', 'marcas_controller@store')->middleware('isAdmin');

Route::put('/marca/edit', 'marcas_controller@update')->middleware('isAdmin');

Route::delete('/marca/delete', 'marcas_controller@destroy')->middleware('isAdmin');

Route::put('/user/edit', 'user_controller@update')->middleware('isAdmin');

Route::delete('/user/delete', 'user_controller@destroy')->middleware('isAdmin');

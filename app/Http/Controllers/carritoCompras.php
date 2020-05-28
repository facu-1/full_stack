<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producto;
use Illuminate\Support\Facades\Session;

class carritoCompras extends Controller
{
    public function __construct()
    {
        if (!Session::has('cart')) {
            $array = [];
            Session::put('cart', $array);
        }
    }
    public function delete($id)
    {
        $cart = Session::get('cart');
        unset($cart[$id]);
        Session::put('cart', $cart);
        return redirect('/test/showCarrito');
    }

    public function add(Request $objeto)
    {
        $data = $objeto->json()->all();
        $cart = Session::get('cart');
        $producto = producto::find($data['id']);
        $producto->cantidadElegida = $data['cantidadElegida'];
        $cart[$producto->id] = $producto;
        Session::put('cart', $cart);
        return true;
    }
}

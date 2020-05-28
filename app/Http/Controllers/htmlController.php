<?php

namespace App\Http\Controllers;

use App\marca;
use App\producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;



class htmlController extends Controller
{
    public function get($pag)
    {
        if ($pag == "showCarrito") {
            $user = null;
            if (Auth::check()) {
                $user = Auth::user();
            }
            $cart = Session::get('cart');

            return view('showCarrito', compact('user', 'cart'));
        } else {
            $user = null;
            if (Auth::check()) {
                $user = Auth::user();
            }
            $token = csrf_field()->toHtml();

            $html = config('htmlCompactado');
            return view('homejs', compact('html', 'token', 'user', 'pag'));
        }
    }


    public function prod($id)
    {
        $user = null;
        if (Auth::check()) {
            $user = Auth::user();
        }
        $prod = producto::find($id);
        $nombreMarca = $prod->marca->nombre;
        return view('producto', compact('prod', 'nombreMarca', 'user'));
    }
}

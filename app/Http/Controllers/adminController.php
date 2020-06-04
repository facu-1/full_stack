<?php

namespace App\Http\Controllers;

use App\categoria;
use App\marca;
use App\producto;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function show($categoria)
    {
        switch ($categoria) {
            case 'productos':
                $categorias = categoria::orderBy('nombre')->get();
                $marcas = marca::orderBy('nombre')->get();
                $productos = producto::orderBy('id')->paginate(10);
                return view('admin.productos', compact('categorias', 'marcas', 'productos'));
                break;
            case 'categorias':
                $categorias = categoria::orderBy('id')->get();
                return view('admin.categorias', compact('categorias'));
                break;
            case 'marcas':
                $marcas = marca::orderBy('id')->get();
                return view('admin.marcas', compact('marcas'));
                break;
            case 'usuarios':
                $users = User::orderBy('id')->get();
                $roles = Role::orderBy('id')->get();
                return view('admin.usuarios', compact('users', 'roles'));
            case 'home':
                return view('admin.home');
        }
    }
}

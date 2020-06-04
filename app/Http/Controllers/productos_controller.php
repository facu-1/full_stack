<?php

namespace App\Http\Controllers;

use App\marca;
use Illuminate\Support\Facades\Auth;
use App\producto;
use Illuminate\Http\Request;

class productos_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function mostrar_m_c($id)
    {
    }


    public function index()
    {
        return producto::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $form)
    {
        $reglas = [
            'nombre' => 'required|string|min:3|max:30|unique:productos,nombre',
            'categoriaId' => 'required',
            'marcaId' => 'required',
            'descripcion' => 'required|min:5|max:50|string|unique:productos,descripcion',
            'img' => 'file|mimes:png,jpg,jpeg',
            'cantidad' => 'numeric|integer|min:1',
            'precio' => 'numeric|min:0'
        ];

        $mensajes = [
            'string' => 'El campo :attribute debe ser un texto',
            'min' => 'El campo :attribute tiene un minimo de :min',
            'max' => 'el campo :attribute tiene un maximo de :max',
            'numeric' => 'el campo :attribute debe ser un numero',
            'required' => 'El campo :attribute es obligatorio',
            'integer' => 'El campo :attribute debe ser un numero entero',
            'file' => 'El campo :attribute debe ser una imagen (png,jpg,jpeg)'
        ];

        $this->validate($form, $reglas, $mensajes);

        $nuevoProducto = new producto();
        $nuevoProducto->nombre = $form['nombre'];
        $nuevoProducto->descripcion = $form['descripcion'];

        $img = $form['img']->store('public/img/productos');
        $ruta_img = basename($img);
        $nuevoProducto->img = $ruta_img;

        $nuevoProducto->precio = $form['precio'];
        $nuevoProducto->cantidad = $form['cantidad'];
        $nuevoProducto->categoria_id = $form['categoriaId'];
        $nuevoProducto->marca_id = $form['marcaId'];

        $nuevoProducto->save();
        $sucessfull = 'Producto agregado correctamente';
        return view('admin.home', compact('sucessfull'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $form)
    {

        $reglas = [];
        if ($form['nombreEditar']) {
            $nombreEditar = [
                'nombreEditar' => 'required|string|min:3|max:30|unique:productos,nombre',
            ];
            $reglas = array_merge($reglas, $nombreEditar);
        }
        if ($form['imgEditar']) {
            $imgEditar = [
                'imgEditar' => 'file|mimes:png,jpg,jpeg',
            ];
            $reglas = array_merge($reglas, $imgEditar);
        }
        if ($form['cantidadEditar']) {
            $cantidadEditar = [
                'cantidadEditar' => 'numeric|integer|min:1',
            ];
            $reglas = array_merge($reglas, $cantidadEditar);
        }
        if ($form['precioEditar']) {
            $precioEditar = [
                'precioEditar' => 'numeric|min:0'
            ];
            $reglas = array_merge($reglas, $precioEditar);
        }

        if ($form['descripcionEditar']) {
            $descripcionEditar = [
                'descripcionEditar' => 'required|string|min:3|max:30|unique:productos,nombre',
            ];
            $reglas = array_merge($reglas, $descripcionEditar);
        }

        $mensajes = [
            'string' => 'El campo :attribute debe ser un texto',
            'min' => 'El campo :attribute tiene un minimo de :min',
            'max' => 'el campo :attribute tiene un maximo de :max',
            'numeric' => 'el campo :attribute debe ser un numero',
            'required' => 'El campo :attribute es obligatorio',
            'integer' => 'El campo :attribute debe ser un numero entero',
            'file' => 'El campo :attribute debe ser una imagen (png,jpg,jpeg)'
        ];

        $this->validate($form, $reglas, $mensajes);

        $producto = producto::find($form['id']);

        if ($form['nombreEditar']) {
            $producto->nombre = $form['nombreEditar'];
        }

        if ($form['descripcionEditar']) {
            $producto->descripcion = $form['descripcionEditar'];
        }

        if ($form['imgEditar']) {
            $img = $form['imgEditar']->store('public/img/productos');
            $ruta_img = basename($img);
            $producto->img = $ruta_img;
        }

        if ($form['precioEditar']) {
            $producto->precio = $form['precioEditar'];
        }
        if ($form['cantidadEditar']) {
            $producto->cantidad = $form['cantidadEditar'];
        }

        $producto->categoria_id = $form['categoriaIdEditar'];
        $producto->marca_id = $form['marcaIdEditar'];

        $producto->save();
        $sucessfull = 'Producto actualizado correctamente';
        redirect('/admin/home');
        return view('admin.home', compact('sucessfull'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $form)
    {
        $id = $form['idDelete'];
        $producto = producto::find($id);
        $producto->delete();
        $sucessfull = 'Producto eliminado correctamente';
        redirect('/admin/home');
        return view('admin.home', compact('sucessfull'));
    }
}

<?php

namespace App\Http\Controllers;

use App\categoria;
use App\producto;
use Illuminate\Http\Request;

class categorias_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return categoria::all();
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
            'nombre' => 'required|string|min:3|max:30|unique:categorias,nombre'
        ];

        $mensajes = [
            'string' => 'El campo :attribute debe ser un texto',
            'min' => 'El campo :attribute tiene un minimo de :min',
            'max' => 'el campo :attribute tiene un maximo de :max',
            'required' => 'El campo :attribute es obligatorio'
        ];
        $this->validate($form, $reglas, $mensajes);

        $nuevaCategoria = new categoria();
        $nuevaCategoria->nombre = $form['nombre'];
        $nuevaCategoria->save();
        $sucessfull = 'Categoria añadida correctamente';
        return view('admin.home', compact('sucessfull'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(categoria $categoria)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $form)
    {
        $reglas = [
            'nombreEditar' => 'required|string|min:3|max:30|unique:categorias,nombre'
        ];

        $mensajes = [
            'string' => 'El campo :attribute debe ser un texto',
            'min' => 'El campo :attribute tiene un minimo de :min',
            'max' => 'el campo :attribute tiene un maximo de :max',
            'required' => 'El campo :attribute es obligatorio'
        ];
        $this->validate($form, $reglas, $mensajes);

        $categoria = categoria::find($form['id']);
        $categoria->nombre = $form['nombreEditar'];
        $categoria->save();
        $sucessfull = 'Categoria actualizada correctamente';
        redirect('/admin/home');
        return view('admin.home', compact('sucessfull'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $form)
    {

        $id = $form['idDelete'];
        $categoria = categoria::find($id);

        $productos = $categoria->productos;

        foreach ($productos as $producto) {
            $producto->categoria_id = 1;
            $producto->save();
        }


        $categoria->delete();
        $sucessfull = 'Categoria eliminada correctamente';
        redirect('/admin/home');
        return view('admin.home', compact('sucessfull'));
    }
}

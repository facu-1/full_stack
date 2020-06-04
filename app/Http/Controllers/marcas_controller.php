<?php

namespace App\Http\Controllers;

use App\marca;
use Illuminate\Http\Request;

class marcas_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return marca::all();
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
            'nombre' => 'required|string|min:3|max:30|unique:marcas,nombre'
        ];

        $mensajes = [
            'string' => 'El campo :attribute debe ser un texto',
            'min' => 'El campo :attribute tiene un minimo de :min',
            'max' => 'el campo :attribute tiene un maximo de :max',
            'required' => 'El campo :attribute es obligatorio'
        ];
        $this->validate($form, $reglas, $mensajes);

        $nuevaMarca = new marca();
        $nuevaMarca->nombre = $form['nombre'];
        $nuevaMarca->save();
        $sucessfull = 'Marca añadida correctamente';
        return view('admin.home', compact('sucessfull'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function show(marca $marca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function edit(marca $marca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $form)
    {
        $reglas = [
            'nombreEditar' => 'required|string|min:3|max:30|unique:marcas,nombre'
        ];

        $mensajes = [
            'string' => 'El campo :attribute debe ser un texto',
            'min' => 'El campo :attribute tiene un minimo de :min',
            'max' => 'el campo :attribute tiene un maximo de :max',
            'required' => 'El campo :attribute es obligatorio'
        ];
        $this->validate($form, $reglas, $mensajes);

        $marca = marca::find($form['id']);
        $marca->nombre = $form['nombreEditar'];
        $marca->save();
        $sucessfull = 'Marca actualizada correctamente';
        redirect('/admin/home');
        return view('admin.home', compact('sucessfull'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $form)
    {
        $id = $form['idDelete'];
        $marca = marca::find($id);

        $productos = $marca->productos;

        foreach ($productos as $producto) {
            $producto->marca_id = 1;
            $producto->save();
        }


        $marca->delete();
        $sucessfull = 'Marca eliminada correctamente';
        redirect('/admin/home');
        return view('admin.home', compact('sucessfull'));
    }
}

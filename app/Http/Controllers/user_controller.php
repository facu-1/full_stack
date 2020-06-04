<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class user_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $form)
    {
        $id = $form['id'];
        $user = User::find($id);
        $user->role_id = $form['rolEditar'];
        $user->save();
        $sucessfull = 'Usuario actualizado correctamente';
        redirect('/admin/home');
        return view('admin.home', compact('sucessfull'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $form)
    {
        $user = User::find($form['idDelete']);
        $user->delete();
        $sucessfull = 'Usuario eliminado correctamente';
        redirect('/admin/home');
        return view('admin.home', compact('sucessfull'));
    }
}

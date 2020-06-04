<?php

namespace App\Http\Controllers;

use App\Role;

use Illuminate\Http\Request;

class RoleController extends Controller
{

    public function create($name)
    {
        $newRole = new Role();
        $newRole->name = $name;
        $newRole->save();
        return view('home');
    }
    public function delete($name)
    {
        $role = Role::where('name', $name);
        $role->delete();
        return view('home');
    }

    public function show()
    {
        $rol = Role::find(2);
        return $rol->usuarios;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class GeneralApis extends Controller
{
    public function logged()
    {
        $logged = Auth::user();
        return json_encode($logged);
    }
}

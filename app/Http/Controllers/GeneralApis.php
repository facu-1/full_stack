<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GeneralApis extends Controller
{

    public function get()
    {
        $html_templates = Storage::disk('public_resources')->allFiles('/html');
        $html_array = [];
        foreach ($html_templates as $html_template) {
            $html_array += [
                pathinfo($html_template, PATHINFO_FILENAME) => Storage::disk('public_resources')->get($html_template),
            ];
        }
        return json_encode($html_array);
    }
}

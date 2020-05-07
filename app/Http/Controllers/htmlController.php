<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class htmlController extends Controller
{
    public function get()
    {
        $user = null;
        if (Auth::check()) {
            $user = Auth::user();
        }
        $token = csrf_field()->toHtml();

        $html_templates = Storage::disk('public_resources')->allFiles('/html');
        $html_array = [];
        foreach ($html_templates as $html_template) {
            $html_array += [
                pathinfo($html_template, PATHINFO_FILENAME) => Storage::disk('public_resources')->get($html_template),
            ];
        }
        $html_compactado = $html_array;
        return view('homejs', compact('html_compactado', 'token', 'user'));
    }
}

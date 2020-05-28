<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Storage;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $html_templates = Storage::disk('public_resources')->allFiles('/html');
        $html_array = [];
        foreach ($html_templates as $html_template) {
            $html_array += [
                pathinfo($html_template, PATHINFO_FILENAME) => Storage::disk('public_resources')->get($html_template),
            ];
        }
        $html_compactado = $html_array;
        config(['htmlCompactado' => $html_compactado]);
    }
}

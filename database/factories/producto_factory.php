<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\producto;
use App\categoria;
use App\marca;
use Faker\Generator as Faker;




$factory->define(producto::class, function (Faker $faker) {
    $categorias = categoria::all();
    $marcas = marca::all();
    return [
        "nombre" => $faker->sentence(1),
        "descripcion" => $faker->sentence(1),
        "precio" => $faker->numberBetween($min = 10, $max = 5000),
        "cantidad" => $faker->numberBetween($min = 1, $max = 200),
        "categoria_id" => $faker->randomElement($categorias)->id,
        "marca_id" => $faker->randomElement($marcas)->id

    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\producto;
use App\categoria;
use App\marca;
use Faker\Generator as Faker;




$factory->define(producto::class, function (Faker $faker) {
    $categorias = categoria::all();
    $marcas = marca::all();
    $img = ['0.jpg', '1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg', '7.jpg', '8.jpg', '9.jpg', '10.jpg', '11.jpg', '13.jpg', '15.jpg', '16.jpg', '17.jpg', '18.jpg', '19.jpg', '20.jpg'];
    return [
        "nombre" => $faker->sentence(1),
        "descripcion" => $faker->sentence(1),
        "precio" => $faker->numberBetween($min = 10, $max = 5000),
        "cantidad" => $faker->numberBetween($min = 1, $max = 200),
        "categoria_id" => $faker->randomElement($categorias)->id,
        "marca_id" => $faker->randomElement($marcas)->id,
        "img" => $faker->randomElement($img),
    ];
});

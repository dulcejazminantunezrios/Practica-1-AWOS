<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\modelos\productos;
use Faker\Generator as Faker;

$factory->define(productos::class, function (Faker $faker) {
    return [
        'nombre_p'=>$faker->word, 
        'descripcion'=>$faker->text($maxNbChars = 100),
        'precio'=>$faker->randomFloat($nbMaxDecimals = null, $min = 1, $max = 999),
    ];
});

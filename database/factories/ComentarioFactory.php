<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\modelos\comentarios;
use Faker\Generator as Faker;

$factory->define(comentarios::class, function (Faker $faker) {
    return [
        'titulo'=>$faker->word,
        'cuerpo'=>$faker->text($maxNbChars = 100),
        'producto_id'=>$faker->randomNumber($nbDigits = 2, $strict = true),
        'persona_id'=>$faker->randomNumber($nbDigits = 2, $strict = true), // 79907610

    ];
});

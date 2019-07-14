<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Libro;
use Faker\Generator as Faker;

$factory->define(Libro::class, function (Faker $faker) {
    return [
      'titulo'=>$faker->sentence($nbWords = 4, $variableNbWords = true),
      'isbn'=>$faker->unique()->isbn10,
      'autor'=>$faker->name,
      'cantidad'=>$faker->randomDigit,
      'editorial'=>$faker->sentence($nbWords = 2, $variableNbWords = false)
    ];
});

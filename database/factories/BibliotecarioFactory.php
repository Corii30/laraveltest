<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Bibliotecario;
use Faker\Generator as Faker;

$factory->define(Bibliotecario::class, function (Faker $faker) {
    return [
      'nombre' => $faker->name,
      'documento'=>$faker->unique()->randomNumber($nbDigits = NULL, $strict = false),
      'telefono'=>$faker->tollFreePhoneNumber,
      'email'=>$faker->unique()->freeEmail
    ];
});

<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Usuario;

$factory->define(Usuario::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'documento'=>$faker->unique()->randomNumber($nbDigits = NULL, $strict = false),
        'telefono'=>$faker->tollFreePhoneNumber,
        'edad'=>$faker->numberBetween(2, 85),
        'ubicacion'=>$faker->streetName,
        'email'=>$faker->unique()->freeEmail
    ];
});

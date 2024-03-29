<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Actividad;
use Faker\Generator as Faker;

$factory->define(Actividad::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->sentence(2,false),
        'descripcion'=>$faker->paragraph
    ];
});

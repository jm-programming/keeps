<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Task::class, function (Faker $faker) {
    return [
        'keep' => $faker->sentence,
    ];
});


$factory->define(App\Contacts::class, function (Faker $faker) {
    return [
        'nombre' 	=> $faker->name,
        'telefono' 	=> 8298499,
        'email'		=> $faker->email,
    ];
});
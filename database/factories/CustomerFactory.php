<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name(),
        'correo' => $faker->email(),
        'direccion' => $faker->address(),
        'telefono' => $faker->phoneNumber(),
    ];
});

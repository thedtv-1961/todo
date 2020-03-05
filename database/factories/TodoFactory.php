<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Todo;
use Faker\Generator as Faker;

$factory->define(Todo::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'contain' => $faker->sentence(20),
        'user_id' => random_int(1, 10),
    ];
});

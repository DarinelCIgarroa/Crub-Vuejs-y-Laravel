<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pensamiento;
use Faker\Generator as Faker;

$factory->define(Pensamiento::class, function (Faker $faker) {
    return [
        'user_id' => $faker->unique()->numberBetween(1,6),
        'description' => $faker->text
    ];
});

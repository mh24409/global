<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\types;
use Faker\Generator as Faker;

$factory->define(types::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(1),
    ];
});

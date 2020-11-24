<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\products;
use Faker\Generator as Faker;

$factory->define(App\products::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(1),
        'typeId' => $faker->sentence(1),
        'avilableNum' => $faker->avilableNum,

    ];
});

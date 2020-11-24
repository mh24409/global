<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\cards;
use Faker\Generator as Faker;

$factory->define(cards::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'productId' => $faker->productId,
        'usertId' => $faker->usertId,
        'numOfProducts' => $faker->numOfProducts,

        
    ];
});

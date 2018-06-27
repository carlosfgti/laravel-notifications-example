<?php

use Faker\Generator as Faker;
use App\Models\Product;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'user_id'       => 1,
        'name'          => $faker->unique()->word,
        'description'   => $faker->sentence(),
    ];
});

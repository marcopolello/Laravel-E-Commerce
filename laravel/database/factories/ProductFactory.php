<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
      'name' => $faker-> word . rand(0, 100000),
      'slug' => $faker -> slug,
      'details' => $faker -> sentence(8),
      'price' => $faker -> numberBetween(1000, 500000),
      'description' => $faker -> paragraph,
    ];
});

<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
      'first_name_receiver' => $faker -> firstName,
      'last_name_receiver' => $faker -> lastName,
      'email_receiver' => $faker->email,
      'phone_receiver' => $faker->e164PhoneNumber,
      'comment_receiver' => $faker->word,
      'address_receiver' => $faker->streetAddress,
      'payment_state' => rand(0,1),
      'total_price' => rand(100,10000),
    ];
});

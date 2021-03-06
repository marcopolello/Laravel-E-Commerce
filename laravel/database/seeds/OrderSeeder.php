<?php

use Illuminate\Database\Seeder;
use App\Order;
use App\User;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Order::class, 200)
        -> make()
        -> each(function($order){
          $user = User::inRandomOrder() -> first();
          $order -> user() -> associate($user);
          $order -> save();
        });
    }
}

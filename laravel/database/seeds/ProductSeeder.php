<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Category;
use App\Order;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Product::class, 800) -> create()
        ->each(function ($product) {
          $categories = Category::inRandomOrder() ->limit(rand(1,2)) -> get();
          $orders = Order::inRandomOrder() ->limit(rand(1,5)) -> get();
          $product -> categories() -> attach($categories);
          $product -> orders() -> attach($orders);
        });
    }
}

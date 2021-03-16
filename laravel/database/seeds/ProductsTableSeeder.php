<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Product::create([
        'name' => 'MacBook Pro',
        'slug' => 'macbook-pro',
        'details' => '15 pollici, 2 TB SSD, 32 GB RAM',
        'price' => 2499,
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        'category_id' => 1,
      ]);
      Product::create([
        'name' => 'Laptop-1',
        'slug' => 'laptop-1',
        'details' => '15 pollici, 2 TB SSD, 32 GB RAM',
        'price' => 2499,
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        'category_id' => 1,
      ]);
      Product::create([
        'name' => 'laptop-2',
        'slug' => 'Laptop-2',
        'details' => '15 pollici, 2 TB SSD, 32 GB RAM',
        'price' => 2499,
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        'category_id' => 1,
      ]);
      Product::create([
        'name' => 'laptop-3',
        'slug' => 'Laptop-3',
        'details' => '15 pollici, 2 TB SSD, 32 GB RAM',
        'price' => 2499,
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        'category_id' => 1,
      ]);
      Product::create([
        'name' => 'laptop-4',
        'slug' => 'laptop-4',
        'details' => '15 pollici, 2 TB SSD, 32 GB RAM',
        'price' => 2499,
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        'category_id' => 1,
      ]);
      Product::create([
        'name' => 'Laptop-5',
        'slug' => 'laptop-5',
        'details' => '15 pollici, 2 TB SSD, 32 GB RAM',
        'price' => 2499,
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        'category_id' => 1,
      ]);
    }
}

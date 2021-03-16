<?php

use Illuminate\Database\Seeder;
use App\Product;

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
        'price' => 289090,
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',

      ]);
      Product::create([
        'name' => 'Laptop-1',
        'slug' => 'laptop-1',
        'details' => '13.8 pollici, 2 TB SSD, 32 GB RAM',
        'price' => 249999,
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',

      ]);
      Product::create([
        'name' => 'laptop-2',
        'slug' => 'Laptop-2',
        'details' => '17.2 pollici, 2 TB SSD, 32 GB RAM',
        'price' => 449999,
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',

      ]);
      Product::create([
        'name' => 'laptop-3',
        'slug' => 'Laptop-3',
        'details' => '15 pollici, 2 TB SSD, 32 GB RAM',
        'price' => 549999,
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',

      ]);
      Product::create([
        'name' => 'laptop-4',
        'slug' => 'laptop-4',
        'details' => '17.2 pollici, 2 TB SSD, 32 GB RAM',
        'price' => 210020,
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',

      ]);
      Product::create([
        'name' => 'Laptop-5',
        'slug' => 'laptop-5',
        'details' => '13 pollici, 2 TB SSD, 32 GB RAM',
        'price' => 249950,
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',

      ]);
      Product::create([
        'name' => 'Laptop-6',
        'slug' => 'laptop-6',
        'details' => '13 pollici, 2 TB SSD, 32 GB RAM',
        'price' => 349950,
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',

      ]);
      Product::create([
        'name' => 'Laptop-7',
        'slug' => 'laptop-7',
        'details' => '13 pollici, 2 TB SSD, 32 GB RAM',
        'price' => 809950,
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',

      ]);
    }
}

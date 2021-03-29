<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Product;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product_photos = Storage::disk('public')->files('/products_example');

        // dd($product_photos);

        $products = Product::all();
        foreach ($products as $key => $product) {
          $rand = rand(0, (count($product_photos) - 1));
          $randomFile = $product_photos[$rand];
          // dd($randomFile);

          // estensione del file
          $info = pathinfo(storage_path() . $randomFile);
          // dd($info);
          $extension = $info['extension'];

          $name = rand(100000, 9999999) . '_' . time();
          $fileName = $name . '.' . $extension;
          // dd($fileName);

          // copia del file con nome cambiato
          Storage::disk('public') -> copy($randomFile, 'product_photo/' . $fileName);

          $product -> photo = $fileName;
          $product -> save();
        }
    }
}

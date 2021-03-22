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
      // Ottiene la lista di tutte le img presenti nella cartella img/restaurant_icon
      $product_image = Storage::disk('public')->files('/img/products');

      // Prendo tutti i Product uno ad uno.
      // Prendo un file casuale da img/public/products/ e lo copio in product_image.
      // Salvo nel db questa informazione.

      $products = Product::all();
      foreach ($products as $key => $product) {
        $rand = rand(0, (count($product_image) - 1));
        $randomFile = $product_image[$rand];

        // Ottiene l'estensione del file
        $info = pathinfo(storage_path(). $randomFile);
        $extension = $info['extension'];

        $name = rand(100000, 999999) . '_' . time();
        $fileName = $name . '.' . $extension;

        // Copia di un file cambiandogli nome
        Storage::disk('public')->copy($randomFile, 'product_image/' . $fileName);

        //Salvo nel db
        $product -> photo = $fileName;
        $product -> save();
      }
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
          'Elettronica',
          'Informatica',
          'Bellezza',
          'Elettrodomestici',
          'Abbigliamento',
          'Illuminazione',
          'Giochi e Giocattoli',
          'Videogiochi',
          'Auto e moto',
          'Altro',
          'Fai da te',
          'Prodotti per infanzia',
          'Musicali',
          'Libri',
          'Orologi',
          'Salute e cura della persona',
          'Alimentari',
          'Sport',
          'Casa e cucina',
          'Tempo libero'
        ];

        foreach ($categories as $category) {
          $newCategory = new Category();
          $newCategory -> category = $category;
          $newCategory -> save(); 
        }
    }
}

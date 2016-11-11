<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $product = new \App\Product([
        'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/51gY5jzz3NL.jpg',
        'title' => 'Harry Potter - Prisoner',
        'description' => 'Super cool - at least for a child.',
        'price' => 35
      ]);
      $product->save();

      $product = new \App\Product([
        'imagePath' => 'http://www.thealmightyguru.com/Reviews/HarryPotter/Images/Cover-GobletOfFire.jpg',
        'title' => 'Harry Potter - Goblet of Fire',
        'description' => 'Super cool - at least for a child.',
        'price' => 10
      ]);
      $product->save();

      $product = new \App\Product([
        'imagePath' => 'https://www.abebooks.com/images/books/harry-potter/sorcerers-stone.jpg',
        'title' => 'Harry Potter - Sorcerers-stone',
        'description' => 'Super cool - at least for a child.',
        'price' => 25
      ]);
      $product->save();

      $product = new \App\Product([
        'imagePath' => 'http://media.harrypotter.bloomsbury.com/rep/g/Harry%20Potter%20and%20the%20Chamber%20of%20Secrets%205.jpg',
        'title' => 'Harry Potter - Chamber of Secrets',
        'description' => 'Super cool - at least for a child.',
        'price' => 25
      ]);
      $product->save();

      $product = new \App\Product([
        'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/51SfTd37PaL._AC_UL320_SR266,320_.jpg',
        'title' => 'Harry Potter - Order of the Phoenix',
        'description' => 'Super cool - at least for a child.',
        'price' => 35
      ]);
      $product->save();
    }
}

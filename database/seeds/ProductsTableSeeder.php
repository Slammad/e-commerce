<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Product;
use App\Category;
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
        'name'=>'Dell Inspiron 5',
        'slug'=>'Deel inspiton',
        'details'=>[13,14,15][array_rand([13,14,15])].' inch '.[1,2,3][array_rand([1,2,3])] . 'TB SSD,32GB RAM',
        'original_price'=>rand(149999,249999),
        'discount_price'=>rand(119999,119999),
        'in_stock'=>5,
        'description'=> 'The Fuckin Laptop in Good Condition and we all know its an e-commerce site '
      ])->categories()->attach(1);

      $product= Product::find(1);
      $product->categories()->attach(2);

      Product::create([
        'name'=>'Lenovo A45',
        'slug'=>'Lenovo A',
        'details'=>[13,14,15][array_rand([13,14,15])].' inch '.[1,2,3][array_rand([1,2,3])] . 'TB SSD,32GB RAM',
        'original_price'=>rand(149999,249999),
        'discount_price'=>rand(119999,119999),
        'in_stock'=>5,
        'description'=> 'The Fuckin Laptop in Good Condition and we all know its an e-commerce site '
      ])->category()->attach(2);
    }
}

<?php
use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $now =Carbon::now()->toDateTimeString();
      Category::insert([
          ['name' =>'Computers and Laptops','slug'=>'computers-laptops','icon'=>'fa fa-laptop','created_at'=>$now, 'updated_at'=>$now],
          ['name' =>'Smart Phones and Tablet','slug'=>'phones-tablet','icon'=>'fa fa-tablet','created_at'=>$now, 'updated_at'=>$now],
          ['name' =>'Digital Cameras','slug'=>'camera','icon'=>'fa fa-camera','created_at'=>$now, 'updated_at'=>$now],
          ['name' =>'Home Appliances','slug'=>'home-appliances','icon'=>'fa fa-home','created_at'=>$now, 'updated_at'=>$now],
          ['name' =>'Kitchen-Appliances','slug'=>'kitchen-appliance','icon'=>'fa fa-knife','created_at'=>$now, 'updated_at'=>$now],
          ['name' =>'TVs','slug'=>'tvs','icon'=>'fa fa-television','created_at'=>$now, 'updated_at'=>$now],
      ]);


    }
}

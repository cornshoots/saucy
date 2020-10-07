<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Product::factory()
        ->times(10)
        ->create();
        //

        
            // $newProduct = new Product();
            // $newProduct->productname = "Ketchup";
            // $newProduct->productdescription = "Regular Tomato Sauce";
            // $newProduct->supplierid = 2;
            // $newProduct->price = 3.5;
            // $newProduct->save();

    }
}

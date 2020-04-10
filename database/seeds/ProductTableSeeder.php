<?php

use App\Product;
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
        //
        $products = array(
            array("category_id" => 1 ,"slug" => "shoes-1", "product_name" => "Shoes 1", "product_detail" => "Shoes Detail"),
            array("category_id" => 2, "slug" => "bags-1", "product_name" => "Bags 1", "product_detail" => "Bags Detail")
        );

        foreach ($products as $product)
        {
            Product::create($product);
        }
    }
}

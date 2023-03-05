<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $products = [
            [
                'product_name' => 'Iphone 11',
                'price' => 4000000,
                'qty' => 20,
            ],
            [
                'product_name' => 'Samsung S21',
                'price' => 4300000,
                'qty' => 30,
            ],
            [
                'product_name' => 'Hello 11',
                'price' => 500000,
                'qty' => 20,
            ],

        ];

        foreach($products as $product){
            Product::create($product);
        }
    }
}

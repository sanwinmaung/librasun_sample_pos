<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product_1 = Product::create([
        	'code'			=> 'COF001',
        	'name'			=> 'Espresso',
        	'price'			=> 4.00,
        	'quantity'		=> 30,
        	'status'		=> true,
        ]);

        $product_2 = Product::create([
        	'code'			=> 'COF002',
        	'name'			=> 'Cafe Latte',
        	'price'			=> 4.00,
        	'quantity'		=> 20,
        	'status'		=> true,
        ]);

        $product_3 = Product::create([
        	'code'			=> 'COF003',
        	'name'			=> 'Hazelnut Latte',
        	'price'			=> 4.00,
        	'quantity'		=> 19,
        	'status'		=> true,
        ]);

        $product_4 = Product::create([
        	'code'			=> 'COF004',
        	'name'			=> 'Cappuccino',
        	'price'			=> 4.00,
        	'quantity'		=> 25,
        	'status'		=> true,
        ]);

        $product_5 = Product::create([
        	'code'			=> 'FD001',
        	'name'			=> 'Blueberry Muffin',
        	'price'			=> 1.00,
        	'quantity'		=> 15,
        	'status'		=> true,
        ]);

        $product_6 = Product::create([
        	'code'			=> 'FD002',
        	'name'			=> 'Strawberry Muffin',
        	'price'			=> 1.00,
        	'quantity'		=> 15,
        	'status'		=> true,
        ]);
    }
}

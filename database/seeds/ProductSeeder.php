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
            'slug'          => 'COF001',
        	'name'			=> 'Espresso',
        	'price'			=> 4.00,
        	'quantity'		=> 30,
            // 'photo'         => ''
        	'status'		=> true,
        ]);

        $product_2 = Product::create([
        	'code'			=> 'COF002',
            'slug'          => 'COF002',
        	'name'			=> 'Cafe Latte',
        	'price'			=> 4.00,
        	'quantity'		=> 20,
        	'status'		=> true,
        ]);

        $product_3 = Product::create([
        	'code'			=> 'COF003',
            'slug'          => 'COF003',
        	'name'			=> 'Hazelnut Latte',
        	'price'			=> 4.00,
        	'quantity'		=> 19,
        	'status'		=> true,
        ]);

        $product_4 = Product::create([
        	'code'			=> 'COF004',
            'slug'          => 'COF004',
        	'name'			=> 'Cappuccino',
        	'price'			=> 4.00,
        	'quantity'		=> 25,
        	'status'		=> true,
        ]);

        $product_5 = Product::create([
        	'code'			=> 'FD001',
            'slug'          => 'FD001',
        	'name'			=> 'Blueberry Muffin',
        	'price'			=> 1.00,
        	'quantity'		=> 15,
        	'status'		=> true,
        ]);

        $product_6 = Product::create([
        	'code'			=> 'FD002',
            'slug'          => 'FD002',
        	'name'			=> 'Strawberry Muffin',
        	'price'			=> 1.00,
        	'quantity'		=> 15,
        	'status'		=> true,
        ]);

        $product_7 = Product::create([
            'code'          => 'COF007',
            'slug'          => 'COF007',
            'name'          => 'Black Coffee',
            'price'         => 6.00,
            'quantity'      => 10,
            'status'        => true,
        ]);

        $product_8 = Product::create([
            'code'          => 'COF008',
            'slug'          => 'COF008',
            'name'          => 'White Chocolate',
            'price'         => 8.00,
            'quantity'      => 7,
            'status'        => true,
        ]);

        $product_9 = Product::create([
            'code'          => 'COF009',
            'slug'          => 'COF009',
            'name'          => 'Hot Milk',
            'price'         => 3.50,
            'quantity'      => 20,
            'status'        => true,
        ]);

        $product_10 = Product::create([
            'code'          => 'COF010',
            'slug'          => 'COF010',
            'name'          => 'Milo',
            'price'         => 6.00,
            'quantity'      => 7,
            'status'        => true,
        ]);

        $product_11 = Product::create([
            'code'          => 'COF011',
            'slug'          => 'COF011',
            'name'          => 'Dark Chocolate',
            'price'         => 8.00,
            'quantity'      => 7,
            'status'        => true,
        ]);
    }
}

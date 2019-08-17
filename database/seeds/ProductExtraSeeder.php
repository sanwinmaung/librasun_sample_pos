<?php

use Illuminate\Database\Seeder;
use App\ProductExtra;

class ProductExtraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product_extra_1 = ProductExtra::create([
        	'code'			=> 'EX001',
            'slug'          => 'EX001',
        	'name'			=> 'Upsize',
        	'price'			=> 0.50,
        	'quantity'		=> 30,
        ]);

        $product_extra_2 = ProductExtra::create([
        	'code'			=> 'EX002',
            'slug'          => 'EX002',
        	'name'			=> 'Extra Hot',
        	'price'			=> 0.00,
        	'quantity'		=> 10,
        ]);
    }
}

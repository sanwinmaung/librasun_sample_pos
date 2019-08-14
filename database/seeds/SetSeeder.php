<?php

use Illuminate\Database\Seeder;
use App\Set;

class SetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $set_1 = Set::create([
        	'first_product_id'		=> 1,
        	'second_product_id'		=> 5,
        	'set_name'				=> 'Set 1',
        	'price'					=> 5.00,
        ]);

        $set_2 = Set::create([
        	'first_product_id'		=> 2,
        	'second_product_id'		=> 6,
        	'set_name'				=> 'Set 2',
        	'price'					=> 5.50,
        ]);
    }
}

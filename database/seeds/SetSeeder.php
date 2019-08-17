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
            'code'                  => 'SET001',
            'slug'                  => 'SET001',
        	'first_product_id'		=> 1,
        	'second_product_id'		=> 5,
        	'name'				=> 'Set 1',
        	'price'					=> 4.50,
        ]);

        $set_2 = Set::create([
            'code'                  => 'SET002',
            'slug'                  => 'SET002',
        	'first_product_id'		=> 2,
        	'second_product_id'		=> 6,
        	'name'				=> 'Set 2',
        	'price'					=> 4.50,
        ]);

        $set_3 = Set::create([
            'code'                  => 'SET003',
            'slug'                  => 'SET003',
            'first_product_id'      => 4,
            'second_product_id'     => 6,
            'name'              => 'Set 3',
            'price'                 => 4.50,
        ]);
    }
}

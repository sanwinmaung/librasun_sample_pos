<?php

use Illuminate\Database\Seeder;
use App\Cashier;

class CashierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cashier_1 = Cashier::create([
        	'name'			=> 'smo',
        	'fullname'		=> 'Soe Moe Oo',
        	'mobile'		=> '+959733635',
        	'gender'		=> 'male',
        ]);

        $cashier_2 = Cashier::create([
        	'name'			=> 'mtn',
        	'fullname'		=> 'Min Thet Naing',
        	'mobile'		=> '+959423112',
        	'gender'		=> 'male',
        ]);

        $cashier_3 = Cashier::create([
        	'name'			=> 'hyl',
        	'fullname'		=> 'Hnin Yee Lwin',
        	'mobile'		=> '+9577900635',
        	'gender'		=> 'female',
        ]);
    }
}

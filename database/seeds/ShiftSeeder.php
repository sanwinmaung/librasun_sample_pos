<?php

use Illuminate\Database\Seeder;
use App\Shift;

class ShiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shift_1 = Shift::create([
        	'name'	=> '01',
        ]);

        $shift_2 = Shift::create([
        	'name'	=> '02',
        ]);

        $shift_3 = Shift::create([
        	'name'	=> '03',
        ]);
    }
}

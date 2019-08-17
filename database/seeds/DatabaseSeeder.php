<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ShiftSeeder::class);
        $this->call(CashierSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ProductExtraSeeder::class);
        $this->call(SetSeeder::class);
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(YearsTableSeeder::class);
        $this->call(MonthsTableSeeder::class);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class YearsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $years = array("2018","2019","2020");

        for ($i = 0; $i>sizeof($years);$i++)
        DB::table('years')->insert([
            'year' => $years[$i],
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}

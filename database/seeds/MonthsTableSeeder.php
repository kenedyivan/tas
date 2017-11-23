<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MonthsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $years=array(1,2,3);
        $months = array("january","february","march","april","may","june","july","august","september","october","november","december");

        for($i = 0; $i<sizeof($years);$i++){
            for($j=0;$j<sizeof($months);$j++){
                DB::table('months')->insert([
                    'year_id' => $years[$i],
                    'month' => $months[$j],
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ]);
            }
        }

    }
}

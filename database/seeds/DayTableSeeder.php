<?php

use Illuminate\Database\Seeder;

class DayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $days = [	['day_no' => 1,],
			        ['day_no' => 2,],
			        ['day_no' => 3,],
			        ['day_no' => 4,],
			        ['day_no' => 5,],
			        ['day_no' => 6,],
			        ['day_no' => 7,],
			        ['day_no' => 8,],
			        ['day_no' => 9,],
			        ['day_no' => 10,],
			        ['day_no' => 11,],
			        ['day_no' => 12,],
			        ['day_no' => 13,],
			        ['day_no' => 14,],
			        ['day_no' => 15,],
			        ['day_no' => 16,],
			        ['day_no' => 17,],
			        ['day_no' => 18,],
			        ['day_no' => 19,],
			        ['day_no' => 20,],
			        ['day_no' => 21,],
			        ['day_no' => 22,],
			        ['day_no' => 23,],
			        ['day_no' => 24,],
			        ['day_no' => 25,],
			        ['day_no' => 26,],
			        ['day_no' => 27,],
			        ['day_no' => 28,],
			        ['day_no' => 29,],
			        ['day_no' => 30,],
			        ['day_no' => 31,],
     		      ];

		DB::table('days_in_months')->insert($days);
    }
}

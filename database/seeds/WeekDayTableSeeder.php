<?php

use Illuminate\Database\Seeder;

class WeekDayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $days = [	['day_name' => 'Monday',],
			        ['day_name' => 'Tuesday',],
			        ['day_name' => 'Wednesday',],
			        ['day_name' => 'Thursday',],
			        ['day_name' => 'Friday',],
			        ['day_name' => 'Saturday',],
			        ['day_name' => 'Sunday',],
     		      ];

		DB::table('days_in_weeks')->insert($days);
    }
}

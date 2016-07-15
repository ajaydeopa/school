<?php

use Illuminate\Database\Seeder;

class MonthTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $months = [	['month' => 'January',],
			        ['month' => 'February',],
			        ['month' => 'March',],
			        ['month' => 'April',],
		            ['month' => 'May',],
		            ['month' => 'June',],
		            ['month' => 'July',],
			        ['month' => 'August',],
			        ['month' => 'September',],
			        ['month' => 'October',],
		            ['month' => 'November',],
		            ['month' => 'December',],
     		      ];

		DB::table('months_in_years')->insert($months);
    }
}

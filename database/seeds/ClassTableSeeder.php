<?php

use Illuminate\Database\Seeder;

class ClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $class = [	['class' => 1,],
			        ['class' => 2,],
			        ['class' => 3,],
			        ['class' => 4,],
			        ['class' => 5,],
			        ['class' => 6,],
			        ['class' => 7,],
			        ['class' => 8,],
			        ['class' => 9,],
			        ['class' => 10,],
			        ['class' => 11,],
			        ['class' => 12,],
     		     ];

		DB::table('classes')->insert($class);
    }
}

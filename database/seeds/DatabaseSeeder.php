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
        // $this->call(UsersTableSeeder::class);
        $this->call(MonthTableSeeder::class);
        $this->call(DayTableSeeder::class);
        $this->call(WeekDayTableSeeder::class);
        $this->call(ClassTableSeeder::class);
    }
}

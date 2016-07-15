<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_attendances', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('session_id')->unsigned();
            $table->integer('months_in_year_id')->unsigned();
            $table->integer('days_in_month_id')->unsigned();
            $table->integer('teacher_id')->unsigned();

            $table->foreign('session_id')->references('id')->on('teachers')->onDelete('cascade');
            $table->foreign('months_in_year_id')->references('id')->on('teachers')->onDelete('cascade');
            $table->foreign('days_in_month_id')->references('id')->on('teachers')->onDelete('cascade');
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('teacher_attendances');
    }
}

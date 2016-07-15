<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherAssignedClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_assigned_classes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('time_table_id')->unsigned();
            $table->integer('teacher_id')->unsigned();
            $table->integer('days_in_week_id')->unsigned();
            $table->integer('period');
            $table->integer('subject_id')->unsigned();
            $table->integer('substitution_flag'); // 0 if substitute, 1 if originally assigned teacher

            $table->foreign('time_table_id')->references('id')->on('time_tables')->onDelete('cascade');
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');
            $table->foreign('days_in_week_id')->references('id')->on('days_in_weeks')->onDelete('cascade');
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('teacher_assigned_classes');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('profile_pic');
            $table->integer('college_detail_id')->unsigned();
            $table->date('joining_date');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('blood_group');
            $table->string('birth_place');
            $table->string('nationality');
            $table->string('mother_tongue');
            $table->string('category');
            $table->string('religion');
            $table->string('residential_addr');
            $table->string('permanent_addr');
            $table->string('phone_no');
            $table->string('email');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('college_detail_id')->references('id')->on('college_details')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_details');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('gender');
            $table->string('phone');
            $table->string('address');
            $table->string('course');
            $table->string('marital');
            $table->string('nationality');
            $table->mediumText('state');
            $table->mediumText('lga');
            $table->string('religion');
            $table->mediumText('date_entry');
            $table->mediumText('name_parent');
            $table->mediumText('relation_ship');
            $table->mediumText('parent_address');
            $table->mediumText('tel_no');
            $table->mediumText('parent_occupation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}

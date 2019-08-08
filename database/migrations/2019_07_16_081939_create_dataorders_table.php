<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dataorders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Order')->nullable();
            $table->string('Number')->nullable();
            $table->string('Date')->nullable();
            $table->string('Full_Name')->nullable();
            $table->string('Governorate')->nullable();
            $table->string('City')->nullable();
            $table->string('Neighborhood')->nullable();
            $table->string('Address')->nullable();
            $table->string('The_Phone')->nullable();
            $table->string('Call_Phone')->nullable();
            $table->string('Email')->nullable();
            $table->string('Occupation')->nullable();

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
        Schema::dropIfExists('dataorders');
    }
}

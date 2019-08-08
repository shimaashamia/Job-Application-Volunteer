<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicAchievementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_achievement', function (Blueprint $table) {
            $table->increments('id');
            $table->string('University');
            $table->string('Specialization');
            $table->double('average');
            $table->string('Graduation_Year');
            $table->integer('academic_id')->unsigned();
            $table->timestamps();
           
            $table->foreign('academic_id')->references('id')->on('dataorders')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('academic_achievement');
         //$table->dropForeign('academic_id');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_course');
            $table->string('Place_get');
            $table->string('Date_get');
            $table->string('number_hours');
            $table->integer('training_id')->unsigned();
            $table->timestamps();
            $table->foreign('training_id')->references('id')->on('dataorders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('training_courses');
        $table->dropForeign('training_id');

    }
}

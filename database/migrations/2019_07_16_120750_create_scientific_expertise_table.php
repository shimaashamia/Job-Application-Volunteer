<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScientificExpertiseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scientific_expertise', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Workplace');
            $table->date('Start_Date');
            $table->date('Expiry_date');
            $table->string('Occupationn');
            $table->integer('expertise_id')->unsigned();
            $table->timestamps();
            $table->foreign('expertise_id')->references('id')->on('dataorders')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scientific_expertise');
         $table->dropForeign('expertise_id');
    }
}

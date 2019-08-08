<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateDataordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dataorders', function (Blueprint $table) {
            // $table->integer('number_id')->unsigned();
            // $table->integer('academic_id')->unsigned();
            // $table->integer('expertise_id')->unsigned();
            // $table->integer('training_id')->unsigned();

            // $table->foreign('number_id')->references('id')->on('idnumbers')->onDelete('cascade');
            // $table->foreign('academic_id')->references('id')->on('academic_achievement')->onDelete('cascade');
            // $table->foreign('expertise_id')->references('id')->on('scientific_expertise')->onDelete('cascade');
            // $table->foreign('training_id')->references('id')->on('training_courses')->onDelete('cascade');

          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dataorders', function (Blueprint $table) {
            // $table->dropColumn('number_id');
            // $table->dropColumn('academic_id');
            // $table->dropColumn('expertise_id');
            // $table->dropColumn('training_id');
             $table->dropForeign();
            // $table->dropForeign('number_id');
            // $table->dropForeign('academic_id');
            // $table->dropForeign('expertise_id');
            // $table->dropForeign('training_id');

        });
    }
}

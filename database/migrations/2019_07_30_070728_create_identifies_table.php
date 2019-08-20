<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdentifiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identifies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_number')->unique();
           $table->integer('ident_id')->unsigned();
            $table->timestamps();
           $table->foreign('ident_id')->references('id')->on('dataorders')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('identifies');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarquesTable extends Migration
{
    /**
     * Run the migrations.
     *  the marks : benz, renault ....
     * @return void
     */
    public function up()
    {
        Schema::create('marques', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('noma')->nullable();
            $table->unsignedBigInteger('nationality_id');
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
        Schema::dropIfExists('marques');
    }
}

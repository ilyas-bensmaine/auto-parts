<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNationalitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nationalities', function (Blueprint $table) {
            $table->id();
            $table->string('country');
            $table->string('nationality');
            $table->string('countrya')->nullable();       //arabic country name
            $table->string('nationalitya')->nullable();     //arabic nationality name
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
        Schema::dropIfExists('nationalities');
    }
}

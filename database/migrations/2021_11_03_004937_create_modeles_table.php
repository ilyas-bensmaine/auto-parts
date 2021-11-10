<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelesTable extends Migration
{
    /**
     * Run the migrations.
     * modeles : clio4, golf8 ...
     * @return void
     */
    public function up()
    {
        Schema::create('modeles', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('noma')->nullable();
            $table->unsignedBigInteger('marque_id');
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
        Schema::dropIfExists('modeles');
    }
}

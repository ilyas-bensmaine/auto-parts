<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandePieceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demande_piece', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('demande_id');
            $table->unsignedBigInteger('piece_id');
            $table->integer('quantity_demande')->default(1);
            $table->integer('prix_min')->nullable();
            $table->integer('prix_max')->nullable();
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
        Schema::dropIfExists('demande_piece');
    }
}

<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->id();
            $table->timestamp('deb_demande')->default(Carbon::now());
            $table->timestamp('fin_demande')->default(Carbon::now()->add(1,'day'));
            $table->integer('vue')->default(0);
            $table->string('note' , 500)->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('wilaya_id');
            $table->enum('statut' , ['active' , 'expirée' , 'satisfaite'])->default('active');
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
        Schema::dropIfExists('demandes');
    }
}

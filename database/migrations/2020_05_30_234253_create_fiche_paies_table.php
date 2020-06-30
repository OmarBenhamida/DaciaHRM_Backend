<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichePaiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiche_paies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('salaire_horaire')->nullable(true);
            $table->integer('heure_travail')->nullable(true);
            // $table->integer('idRegion')->nullable(true);
             $table->unsignedBigInteger('idemploye');
             $table->foreign('idemploye')->references('id')->on('employes');
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
        Schema::dropIfExists('fiche_paies');
    }
}

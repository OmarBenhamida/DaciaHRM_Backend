<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeCongesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employe_conges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idemploye');
            $table->unsignedBigInteger('idconge');
            $table->string('etat');
            $table->foreign('idemploye')->references('id')->on('employes');
            $table->foreign('idconge')->references('id')->on('conges'); 
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
        Schema::dropIfExists('employe_conges');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employe_formations', function (Blueprint $table) {
           

            $table->bigIncrements('id');
            $table->unsignedBigInteger('idemploye');
            $table->unsignedBigInteger('idformation');
            $table->foreign('idemploye')->references('id')->on('employes');
            $table->foreign('idformation')->references('id')->on('formations'); 
     
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
        Schema::dropIfExists('employe_formations');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeIndimnitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employe_indimnites', function (Blueprint $table) {
          
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idemploye');
            $table->unsignedBigInteger('idindimnite');
            $table->foreign('idemploye')->references('id')->on('employes');
            $table->foreign('idindimnite')->references('id')->on('indimnites'); 
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
        Schema::dropIfExists('employe_indimnites');
    }
}

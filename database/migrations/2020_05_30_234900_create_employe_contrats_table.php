<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeContratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employe_contrats', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('idemploye');
                $table->unsignedBigInteger('idcontrat');
                $table->date('dateSignature')->nullable(true);

                $table->foreign('idemploye')->references('id')->on('employes');
                $table->foreign('idcontrat')->references('id')->on('contrats'); 
                

     
               
          
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
        Schema::dropIfExists('employe_contrats');
    }
}

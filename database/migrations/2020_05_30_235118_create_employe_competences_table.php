<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeCompetencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employe_competences', function (Blueprint $table) {
            
     
        
                        $table->bigIncrements('id');
                        $table->unsignedBigInteger('idemploye');
                        $table->unsignedBigInteger('idcompetence');
                        $table->foreign('idemploye')->references('id')->on('employes');
                        $table->foreign('idcompetence')->references('id')->on('competences'); 

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
        Schema::dropIfExists('employe_competences');
    }
}

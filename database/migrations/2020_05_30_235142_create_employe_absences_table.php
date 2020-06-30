<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeAbsencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employe_absences', function (Blueprint $table) {

                        
                      $table->bigIncrements('id');
                     $table->unsignedBigInteger('idemploye');
                      $table->unsignedBigInteger('idabsence');
                    
                    $table->foreign('idemploye')->references('id')->on('employes');
                    $table->foreign('idabsence')->references('id')->on('absences');

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
        Schema::dropIfExists('employe_absences');
    }
}

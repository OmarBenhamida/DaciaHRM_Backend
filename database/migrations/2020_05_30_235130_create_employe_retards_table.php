<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeRetardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employe_retards', function (Blueprint $table) {

                        
                        $table->bigIncrements('id');
                        $table->unsignedBigInteger('idemploye');
                        $table->unsignedBigInteger('idretard');
                        
                        $table->foreign('idemploye')->references('id')->on('employes');
                        $table->foreign('idretard')->references('id')->on('retards');


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
        Schema::dropIfExists('employe_retards');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRetardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('dateRetard')->nullable(true);
            $table->boolean('type');
            $table->integer('nb_heure');
            $table->string('justification');
            $table->unsignedBigInteger('idemploye');
            $table->foreign('idemploye')->references('id')->on('employes');
            
            // $table->integer('idRegion')->nullable(true);
            // $table->unsignedBigInteger('idUser');
            // $table->foreign('idUser')->references('id')->on('users');
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
        Schema::dropIfExists('retards');
    }
}

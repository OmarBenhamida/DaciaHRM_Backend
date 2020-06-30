<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndimnitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indimnites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('libelle');
            
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
        Schema::dropIfExists('indimnites');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employe_posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idemploye');
            $table->unsignedBigInteger('idpost');
            $table->date('datedebut')->nullable(true);
            $table->date('dateFin')->nullable(true);
            $table->foreign('idemploye')->references('id')->on('employes');
            $table->foreign('idpost')->references('id')->on('posts'); 
   
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
        Schema::dropIfExists('employe_posts');
    }
}

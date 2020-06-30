
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Marticule');
            $table->string('Nom');
            $table->string('Prenom');
            $table->string('cin');
            $table->longText('adresse')->nullable(true);
            $table->date('dateNaissance')->nullable(true);
            $table->string('sexe')->nullable(true);
            $table->date('dateEmbauche')->nullable(true);
            $table->integer('nbrEnfant')->nullable(true);
            $table->integer('cnss')->nullable(true);
            $table->string('email');
            $table->string('passwd');
            $table->integer('role');
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
        Schema::dropIfExists('employes');
    }
}

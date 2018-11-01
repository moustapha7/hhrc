<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDemande extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->increments('id');
            $table->integer('entreprises_id')->unsigned();
            $table->string('niveauFormation');
            $table->integer('nbreAnneeExperience');
            $table->string('dureeContrat');
            $table->date('dateLimite');
            $table->integer('specialites_id')->unsigned();
             $table->string('libelleSpecialite');
            
            $table->foreign('entreprises_id')->references('id')->on('entreprises')->onDelete('restrict')  ->onUpdate('restrict');
             $table->foreign('specialites_id')->references('id')->on('specialites')->onDelete('restrict')  ->onUpdate('restrict'); 
        
           
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
        Schema::dropIfExists('demandes');
    }
}

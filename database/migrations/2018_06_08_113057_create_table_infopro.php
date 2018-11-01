<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableInfopro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Infopros', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->increments('id');
            $table->integer('candidats_id')->unsigned();
            $table->string('niveauFormation');
            $table->integer('nbreAnneeExperience');
            $table->longText('lettreMotive');
            $table->boolean('disponibilite');
            $table->binary('cv');
            $table->integer('specialites_id')->unsigned();
            
             $table->foreign('candidats_id')->references('id')->on('candidats');
            $table->foreign('specialites_id')->references('id')->on('specialites');
            
        
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
        Schema::dropIfExists('Infopros');
    }
}

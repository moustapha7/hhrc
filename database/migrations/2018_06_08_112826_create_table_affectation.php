<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAffectation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('affectations', function(Blueprint $table) {
            $table->engine = 'InnoDB';
        
            $table->increments('id');
            $table->integer('candidats_id')->unsigned();
            $table->integer('demandes_id')->unsigned();
            $table->date('dateAffectation');
            $table->longText('libelle');
            
            $table->foreign('candidats_id')->references('id')->on('candidats')->onDelete('restrict')  ->onUpdate('restrict');
             $table->foreign('demandes_id')->references('id')->on('demandes')->onDelete('restrict')  ->onUpdate('restrict');    
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
         Schema::dropIfExists('affectations');
    }
}

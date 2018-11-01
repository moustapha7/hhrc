<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Affectation extends Model
{
    protected $key=['id'];
    protected $fillable = ['candidats_id','demandes_id','dateAffectation','libelle'];
    protected $dates = ['created_at','updated_at'] ;


    public function candidat()
    {
        return $this->belongsTo('App\Candidat','candidats_id');
    }

    public function demande()
    {
        return  $this->belongsTo('App\Demande','demandes_id');
    }

    
}


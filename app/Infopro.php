<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infopro extends Model
{
    protected $key=['id'];
    protected $fillable = ['candidats_id','niveauFormation','nbreAnneeExperience','lettreMotive','disponibilite','cv','specialites_id'];
    protected $dates = ['created_at','updated_at'] ;


     public function candidat()
    {
        return $this->belongsTo('App\Candidat','candidats_id');
        
    }

    public function specialite()
    {
        return  $this->belongsTo('App\Specialite','specialites_id');
    }
}



<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    protected $key=['id'];
    protected $fillable = ['entreprises_id','niveauFormation','nbreAnneeExperience','dureeContrat','dateLimite','specialites_id','libelleSpecialite'];
    protected $dates = ['created_at','updated_at'] ;
    
    public function entreprise()
    {
    
       return $this->belongsTo('App\Entreprise','entreprises_id');

        
    }


    public function specialite()
    {
         
    	return $this->belongsTo('App\Specialite','specialites_id');
        
    }
    

    public function affectations()
    {
        return $this->hasMany(Affectation::class);
    }
}

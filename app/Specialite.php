<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialite extends Model
{
     protected $key=['id'];
    protected $fillable = ['libelle','description','domaines_id'];
    protected $dates = ['created_at','updated_at'] ;



	public function domaine()
    {
        return $this->belongsTo('App\Domaine','domaines_id');
    }

    public function demandes()
    {
        
         return $this->belongsTo(Demande::class);
    }
    
    

     public function infopros()
    {
        return $this->hasMany(Infopro::class);
    }
    
}    
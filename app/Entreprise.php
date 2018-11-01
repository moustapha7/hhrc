<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    protected $key=['id'];
    protected $fillable = ['nomEntreprise','adresseEntreprise','telEntreprise','emailEntreprise','password'];
    protected $dates = ['created_at','updated_at'] ;

    public function demandes()
    {
    	
    	 return $this->hasMany(Demande::class);
       
    }
    
}

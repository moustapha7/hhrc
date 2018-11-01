<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
   protected $key=['id'];
    protected $fillable = ['nom','prenom','adresse','numTel','email','password'];
    protected $dates = ['created_at','updated_at'] ;


     public function affectations()
    {
        return $this->hasMany(Affectation::class);
    }

     public function infopros()
    {
        return $this->hasMany(Infopro::class);
    }

}


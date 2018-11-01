<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domaine extends Model
{
     protected $key=['id'];
    protected $fillable = ['libelle','description'];
    protected $dates = ['created_at','updated_at'] ;


	public function specialites()
    {
        return $this->hasMany(Specialite::class);
    }
}
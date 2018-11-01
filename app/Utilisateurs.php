<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utilisateurs extends Model
{
     protected $key=['id'];
    protected $fillable = ['profilusers_id','login','password','nom','prenom','email','telephone','etat'];
    protected $dates = ['created_at','updated_at'] ;
}

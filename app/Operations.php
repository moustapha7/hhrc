<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operations extends Model
{
    protected $key=['id'];
    protected $fillable = ['utilisateurs_id','operant','idOperant'];
    protected $dates = ['created_at','updated_at'] ;
}

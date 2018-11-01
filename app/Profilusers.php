<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profilusers extends Model
{
    protected $key=['id'];
    protected $fillable = ['role_name'];
    protected $dates = ['created_at','updated_at'] ;
}

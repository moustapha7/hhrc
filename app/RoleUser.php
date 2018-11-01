<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    public $timestamps = false;

    public function users()
    {
    	return $this->belongsToMany('App\User');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RolesUserController extends Controller
{
    
    public function store()
    {
    	request()->user()->makeEmployee("super_admin");
    	dd(request()->user()->hasRole("candidat"));
    }
}

<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany('App\Profilusers');
    }

    public function isEmployee()
    {
        return ($this->roles()->count()) ? true:false;
    }


    public function hasRole ($role)
    {
        return in_array($this->roles->pluck("role_name"),$role);

    }

    private function getIdInArray($array, $torm)

    {
        foreach ($array as $key => $value)
         {
                if ($value == $torm)
                 {
                    return $key;
                }
        }

        throw new UnexpectedValueException;
        

    }


    public function makeEmployee($title)
    {
        $assigned_roles = array();
        $roles = Profilusers::all()->pluck("role_name","id");

        switch ($title) 
        {
            case 'super_admin':
                $assigned_roles[] = $this->getIdInArray($roles,'administrateur');
                $assigned_roles[] = $this->getIdInArray($roles,'candidat');
                break;
            case 'admin':
                $assigned_roles[] = $this->getIdInArray($roles,'entreprise');
                $assigned_roles[] = $this->getIdInArray($roles,'secretaire');
                break;

             case 'moderator':
                $assigned_roles[] = $this->getIdInArray($roles,'humainResource');
                $assigned_roles[] = $this->getIdInArray($roles,'humainResource');
                break;       
            
            default:
                throw new \Exception("the role is not exists", 1);
                
                break;
        }
        $this->roles()->sync($assigned_roles);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'username',
                  'phone',
                  'password'
              ];
    protected $hidden = [
                'password', 
                'remember_token'
             ];    
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];
    
    /**
     * Get the roles for this model.
     */
    public function roles()
    {
        return $this->belongsToMany('App\Models\Role','user_role','user_id','role_id')
                    ->withTimestamps();
    }

    /**
     * Check if the user has any role
     * 
     * @param Object $roles 
     */
    public function hasAnyRole($roles)
    {
        if ( is_array($roles) ) {
            foreach ($roles as  $role) {
                if ($this-hasRole($role)) {
                    return true;
                }                
            }
        } else {
            if ($this-hasRole($role)) {
                return true;
            }   
        }
        return false;
         
    }

    public function hasRole($role)
    {
        if ($this->roles()->where('name',role)->first()) {
            return true;
        }
        return false;
    }


}

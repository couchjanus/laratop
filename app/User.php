<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Hash;

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

    public function setPasswordAttribute($input)
    {
        if ($input)
            $this->attributes['password'] = app('hash')->needsRehash($input) ? Hash::make($input) : $input;
    }

    /*
    |-------------------------------------------------
    | Relationship Methods
    |---------------------------------------------------
    */
    /**
     * Many-To-Many Relationship Method for accessing the User->roles
     *
     * @return QueryBuilder Object
    */

    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }

    public function permissions()
    {
        return $this->hasManyThrough('App\Permission', 'App\Role');
    }

    public function profile()
    {
        return $this->hasOne('App\Profile');
    }

    public function accounts(){
        return $this->hasMany('App\LinkedSocialAccount');
    }

     /**
     * Checks a Permission
     */

    public function isSuperVisor()
    {
       if ($this->roles->contains('title', 'Supervisor')) {
            return true;
        }

        return false;
    }

    public function hasRole($role)
    {
        if ($this->isSuperVisor()) {
            return true;
        }

        if (is_string($role)) {
            return $this->role->contains('title', $role);
        }

        return !! $this->roles->intersect($role)->count();
    }


}

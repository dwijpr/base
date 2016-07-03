<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
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

    public function name() {
        return implode(' ', [
            $this->firstname, $this->lastname,
        ]);
    }

    public function roles() {
        return $this->belongsToMany(Role::class);
    }

    public function assign(Role $role) {
        return $this->roles()->save($role);
    }

    public function hasRole($role) {
        if (is_string($role)) {
            return $this->roles->contains('name', $role);
        }
        return !! $role->intersect($this->roles)->count();
    }

    public function hasAnyRoles($roles) {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                return $this->hasRole($role);
            }
        }
        return $this->hasRole($roles);
    }
}

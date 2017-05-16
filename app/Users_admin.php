<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Users_admin extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastName', 'DocIdentidad', 'email', 'password', 'perfil'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];    
    public function sucursals()
    {
        return $this->belongsTo('App\Sucursal');
    }  
}

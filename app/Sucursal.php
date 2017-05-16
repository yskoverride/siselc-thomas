<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    public function users_admins()
    {
        return $this->hasMany('App\Users_admins');
    }
    
    public function municipios()
    {
        return $this->hasMany('App\Municipio');
    }   
    
    public function vacantes()
    {
        return $this->hasMany('App\Vacante');
    }     
}

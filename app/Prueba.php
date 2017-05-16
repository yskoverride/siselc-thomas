<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
    public function clientes()
    {
        return $this->belongsTo('App\Cliente');
    }  
    
    public function vacantes()
    {
        return $this->hasMany('App\Vacante');
    }    
    
    public function postulacion_cargos()
    {
        return $this->hasMany('App\Postulacion_cargo');
    }    
}

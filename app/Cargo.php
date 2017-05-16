<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    public function banco_examens()
    {
        return $this->belongsTo('App\Banco_examen');
    }
    
    public function cargos_habilitados()
    {
        return $this->hasMany('App\Cargos_habilitado');
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

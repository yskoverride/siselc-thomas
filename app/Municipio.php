<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

        
class Municipio extends Model
{
    public $primaryKey = 'codigoMunicipio';
    
    public function sucursals()
    {
        return $this->belongsTo('App\Sucursal');
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

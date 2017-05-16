<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacante extends Model
{
    public function pruebas()
    {
        return $this->belongsTo('App\Prueba');
    }
    
    public function cargos()
    {
        return $this->belongsTo('App\Cargo');
    }

    public function sucursals()
    {
        return $this->belongsTo('App\Sucursal');
    }

    public function municipios()
    {
        return $this->belongsTo('App\Municipio');
    } 
    
    public function postulacion_cargos()
    {
        return $this->hasMany('App\Postulacion_cargo');
    }     
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postulacion_cargo extends Model
{
    public function vacantes()
    {
        return $this->belongsTo('App\Vacante');
    }
    
    public function users()
    {
        return $this->belongsTo('App\User');
    }    
    
    public function pruebas()
    {
        return $this->belongsTo('App\Prueba');
    }
    
    public function cargos()
    {
        return $this->belongsTo('App\Cargo');
    }

    public function municipios()
    {
        return $this->belongsTo('App\Municipio');
    } 
}

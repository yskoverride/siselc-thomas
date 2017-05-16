<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Creacion_examen extends Model
{
    public function banco_examens()
    {
        return $this->belongsTo('App\Banco_examen');
    }
    
    public function banco_preguntas()
    {
        return $this->belongsTo('App\Banco_pregunta');
    }    
}

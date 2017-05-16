<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banco_pregunta extends Model
{
    public function creacion_examens()
    {
        return $this->hasMany('App\Creacion_examen');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function pruebas()
    {
        return $this->hasMany('App\Prueba', 'id_cliente', 'id');
    }
}

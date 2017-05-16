<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargos_habilidado extends Model
{
    public function cargos()
    {
        return $this->belongsTo('App\Cargo');
    }
    
    public function users()
    {
        return $this->belongsTo('App\User');
    }    
}

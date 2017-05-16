<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Privilegios_admin extends Model
{
    public function modulos_admins()
    {
        return $this->belongsTo('App\Modulos_admin');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modulos_admin extends Model
{
    public function privilegios_admins()
    {
        return $this->hasMany('App\Privilegios_admin');
    }
}

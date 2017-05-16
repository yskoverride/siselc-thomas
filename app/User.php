<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastName', 'DocIdentidad', 'email', 'password', 'DocIdentidad', 'perfil', 'foto', 'DocExpedicion', 'FechaNacimiento', 'Edad', 'sexo', 'LibretaMilitar', 'DireccionResidencia', 'movilPersonal', 'DepartamentoResidencia', 'CiudadResidencia', 'TelefonoResidencia', 'ImagenDoc', 'NivelEducacion', 'SoporteEducacion', 'experienciaFormal', 'empresaTGS', 'UltimaEmpresa', 'Cargo', 'Antiguedad', 'DireccionEmpresa', 'TelefenoEmpresa', 'experienciaSIS', 'desdeExperienciaSIS', 'hastaExperienciaSIS', 'CargoSIS1', 'CargoSIS2', 'CargoSIS3', 'NombrePrueba1', 'NombrePrueba2', 'NombrePrueba3', 'PruebasEntreSemana', 'PruebasFueraBogota', 'NombreRefPersonal', 'ApellidosRefPersonal', 'direccionResidenciaRefPersonal', 'telefonoResidenciaRefPersonal', 'celularRefPersonal', 'RecomendadoTGS', 'NombreRecomendado', 'ApellidosRecomendado', 'CelularRecomendado', 'AreaRecomendado', 'NombreRefEmergencia', 'ApellidosRefEmergencia', 'direccionResidenciaRefEmergencia', 'telefonoResidenciaRefEmergencia', 'celularRefEmergencia', 'tituloEducacion', 'eps', 'certificadoEps', 'hvcompleto', 'estadoSeguridad', 'fechaEstudio', 'usuarioEstudio', 'observacionesSeguridad', 'HVestado'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function cargos_habilitados()
    {
        return $this->hasMany('App\Cargos_habilidado', 'id_users');
    }    
    
    public function postulacion_cargos()
    {
        return $this->hasMany('App\Postulacion_cargo', 'id_users');
    }    
}

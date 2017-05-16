<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('lastName');
            $table->string('email',100)->unique();
            $table->string('password');
            $table->string('passRec')->nullable();
            $table->string('DocIdentidad',100)->unique();
            $table->string('perfil')->nullable();
            $table->text('foto')->nullable();
            $table->string('DocExpedicion')->nullable();
            $table->string('FechaNacimiento')->nullable();
            $table->string('Edad')->nullable();
            $table->string('sexo')->nullable();
            $table->string('LibretaMilitar')->nullable();
            $table->string('DireccionResidencia')->nullable();
            $table->string('movilPersonal')->nullable();
            $table->string('DepartamentoResidencia')->nullable();
            $table->string('CiudadResidencia')->nullable();
            $table->string('TelefonoResidencia')->nullable();
            $table->text('ImagenDoc')->nullable();
            $table->string('NivelEducacion')->nullable();
            $table->text('SoporteEducacion')->nullable();
            $table->string('experienciaFormal')->nullable()->default('No');
            $table->string('empresaTGS')->nullable()->default('No aplica');
            $table->string('UltimaEmpresa')->nullable();
            $table->string('Cargo')->nullable();
            $table->string('Antiguedad')->nullable();
            $table->string('DireccionEmpresa')->nullable();
            $table->string('TelefenoEmpresa')->nullable();
            $table->string('experienciaSIS')->nullable()->default('No');
            $table->string('desdeExperienciaSIS')->nullable();
            $table->string('hastaExperienciaSIS')->nullable();
            $table->string('CargoSIS1')->nullable();
            $table->string('CargoSIS2')->nullable();
            $table->string('CargoSIS3')->nullable();
            $table->string('NombrePrueba1')->nullable();
            $table->string('NombrePrueba2')->nullable();
            $table->string('NombrePrueba3')->nullable();
            $table->string('PruebasEntreSemana')->nullable();
            $table->string('PruebasFueraBogota')->nullable();
            $table->string('NombreRefPersonal')->nullable();
            $table->string('ApellidosRefPersonal')->nullable();
            $table->string('direccionResidenciaRefPersonal')->nullable();
            $table->string('telefonoResidenciaRefPersonal')->nullable();
            $table->string('celularRefPersonal')->nullable();
            $table->string('RecomendadoTGS')->nullable()->default('No');
            $table->string('NombreRecomendado')->nullable();
            $table->string('ApellidosRecomendado')->nullable();
            $table->string('CelularRecomendado')->nullable();
            $table->string('AreaRecomendado')->nullable();
            $table->string('NombreRefEmergencia')->nullable();
            $table->string('ApellidosRefEmergencia')->nullable();
            $table->string('direccionResidenciaRefEmergencia')->nullable();
            $table->string('telefonoResidenciaRefEmergencia')->nullable();
            $table->string('celularRefEmergencia')->nullable();
            $table->string('tituloEducacion')->nullable();
            $table->string('eps')->nullable();
            $table->text('certificadoEps')->nullable();
            $table->integer('hvcompleto')->nullable();
            $table->string('estadoSeguridad')->nullable()->default('Nuevo');
            $table->date('fechaEstudio')->nullable();
            $table->string('usuarioEstudio')->nullable();
            $table->text('observacionesSeguridad')->nullable();
            $table->string('HVestado')->nullable()->default('Nuevo');            
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

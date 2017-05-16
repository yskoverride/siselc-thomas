<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargos', function (Blueprint $table) {
            $table->engine = 'InnoDB';            
            $table->increments('id');
            $table->string('nombreCargo',100)->unique();
            $table->string('cargoJefe')->nullable();
            $table->string('areaCargo')->nullable();
            $table->integer('lider')->nullable()->default('0');
            $table->string('unidadOrganizativa')->nullable();
            $table->string('cargoDependiente1')->nullable();
            $table->string('cargoDependiente2')->nullable();
            $table->string('cargoDependiente3')->nullable();
            $table->string('cargoDependiente4')->nullable();
            $table->string('tipoDependencia1')->nullable();
            $table->string('tipoDependencia2')->nullable();
            $table->string('tipoDependencia3')->nullable();
            $table->string('tipoDependencia4')->nullable();
            $table->string('nivelPrimarioEduc')->nullable();
            $table->string('nombreProgramaPrimario')->nullable();
            $table->string('nivelSecundarioEduc')->nullable();
            $table->string('nombreProgramaSecundario')->nullable();
            $table->string('tarjetaProfesional')->nullable();
            $table->string('formacionEspecifica')->nullable();
            $table->string('formacionEspecifica2')->nullable();
            $table->string('formacionEspecifica3')->nullable();
            $table->string('formacionEspecifica4')->nullable();
            $table->string('formacionEspecificaMedicion')->nullable();
            $table->string('formacionEspecificaMedicion2')->nullable();
            $table->string('formacionEspecificaMedicion3')->nullable();
            $table->string('formacionEspecificaMedicion4')->nullable();
            $table->string('experienciaGeneral')->nullable();
            $table->string('experienciaEspecifica')->nullable();
            $table->text('descripcionCargo')->nullable();
            $table->text('objetivoClaveCargo')->nullable();
            $table->text('queHace1')->nullable();
            $table->text('queHace2')->nullable();
            $table->text('queHace3')->nullable();
            $table->text('queHace4')->nullable();
            $table->text('comoHace1')->nullable();
            $table->text('comoHace2')->nullable();
            $table->text('comoHace3')->nullable();
            $table->text('comoHace4')->nullable();
            $table->text('deberes')->nullable();
            $table->text('responsabilidades')->nullable();
            $table->text('nivelAutoridad')->nullable();
            $table->text('activo1')->nullable();
            $table->text('activo2')->nullable();
            $table->text('activo3')->nullable();
            $table->text('activo4')->nullable();
            $table->text('activoCategoria1')->nullable();
            $table->text('activoCategoria2')->nullable();
            $table->text('activoCategoria3')->nullable();
            $table->text('activoCategoria4')->nullable();
            $table->integer('id_examen')->nullable()->unsigned()->index();
            $table->foreign('id_examen')->references('id')->on('banco_examens')->onDelete('restrict')->onUpdate('cascade');            
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
        Schema::dropIfExists('cargos');
    }
}

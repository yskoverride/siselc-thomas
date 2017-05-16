<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostulacionCargosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postulacion_cargos', function (Blueprint $table) {
            $table->engine = 'InnoDB';             
            $table->increments('id');
            $table->integer('id_vacantes')->nullable()->unsigned()->index();
            $table->foreign('id_vacantes')->references('id')->on('vacantes')->onDelete('restrict')->onUpdate('cascade');
            $table->integer('id_users')->unsigned()->index();
            $table->foreign('id_users')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
            $table->integer('id_prueba')->unsigned()->index();
            $table->foreign('id_prueba')->references('id')->on('pruebas')->onDelete('restrict')->onUpdate('cascade');
            $table->integer('id_cargos')->unsigned()->index();
            $table->foreign('id_cargos')->references('id')->on('cargos')->onDelete('cascade')->onUpdate('cascade');
            $table->string('id_municipio',20)->index();
            $table->foreign('id_municipio')->references('codigoMunicipio')->on('municipios')->onDelete('restrict')->onUpdate('cascade');
            $table->string('resultadoTest')->default('No tomado');
            $table->string('estado')->default('Pendiente Examen Cargo');
            $table->string('confirmacion')->nullable();
            $table->datetime('solicitudConfirmacion')->nullable();
            $table->string('estado2')->nullable();
            $table->text('abandono_razon')->nullable();
            $table->tinyInteger('asistencia')->default('0');
            $table->tinyInteger('lider')->default('0');
            $table->integer('calificacionCall')->nullable()->default('0');
            $table->text('observacionesCall')->nullable();
            $table->string('calificacionJefeToken')->nullable();
            $table->float('calificacionJefe')->nullable();
            $table->text('observacionesJefe')->nullable();
            $table->integer('calificacionHR')->default('4');
            $table->text('observacionesHR')->nullable();
            $table->integer('calificacionCUAD')->default('4');
            $table->text('observacionesCUAD')->nullable();
            $table->float('calificacionPonderado')->nullable()->default('4');
            $table->string('sancionado')->default('No');            
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
        Schema::dropIfExists('postulacion_cargos');
    }
}

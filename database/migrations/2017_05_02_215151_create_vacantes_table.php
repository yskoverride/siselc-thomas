<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacantes', function (Blueprint $table) {
            $table->engine = 'InnoDB';             
            $table->increments('id');
            $table->integer('id_prueba')->unsigned()->index();
            $table->foreign('id_prueba')->references('id')->on('pruebas')->onDelete('restrict')->onUpdate('cascade');
            $table->integer('id_cargos')->unsigned()->index();
            $table->foreign('id_cargos')->references('id')->on('cargos')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_sucursal')->unsigned()->index();
            $table->foreign('id_sucursal')->references('id')->on('sucursals')->onDelete('restrict')->onUpdate('cascade');
            $table->string('id_municipio',20)->index();
            $table->foreign('id_municipio')->references('codigoMunicipio')->on('municipios')->onDelete('restrict')->onUpdate('cascade');
            $table->string('codigoSitio');
            $table->string('nombreSitio');
            $table->string('direccionSitio');
            $table->integer('cant_vacantes');
            $table->float('cant_postulaciones');
            $table->integer('id_examen')->unsigned()->index();
            $table->foreign('id_examen')->references('id')->on('banco_examens')->onDelete('restrict')->onUpdate('cascade');
            $table->string('ruta')->nullable();
            $table->integer('id_encuesta')->unsigned()->index(); 
            $table->foreign('id_encuesta')->references('id')->on('banco_examens')->onDelete('restrict')->onUpdate('cascade');
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
        Schema::dropIfExists('vacantes');
    }
}

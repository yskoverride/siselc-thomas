<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargosHabilidadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargos_habilidados', function (Blueprint $table) {
            $table->engine = 'InnoDB';            
            $table->increments('id');
            $table->integer('id_users')->unsigned()->index();
            $table->foreign('id_users')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');       
            $table->integer('id_cargos')->unsigned()->index();
            $table->foreign('id_cargos')->references('id')->on('cargos')->onDelete('restrict')->onUpdate('cascade');       
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
        Schema::dropIfExists('cargos_habilidados');
    }
}

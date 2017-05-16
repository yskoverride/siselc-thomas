<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreacionExamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creacion_examens', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_examen')->unsigned()->index();
            $table->foreign('id_examen')->references('id')->on('banco_examens')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_pregunta')->unsigned()->index();
            $table->foreign('id_pregunta')->references('id')->on('banco_preguntas')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('orden')->nullable();
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
        Schema::dropIfExists('creacion_examens');
    }
}

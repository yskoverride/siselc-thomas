<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPostulacionCargosExamenColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('postulacion_cargos', function($table)
        {
            $table->integer('id_examen')->unsigned()->index();
            $table->foreign('id_examen')->references('id')->on('banco_examens')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("postulacion_cargos", function ($table) {
            $table->dropForeign('postulacion_cargos_id_examen_foreign');
            $table->dropColumn('id_examen');
        });                
    }
}

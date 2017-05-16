<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulosAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modulos_admins', function (Blueprint $table) {
            $table->engine = 'InnoDB';              
            $table->increments('id');
            $table->string('modulo',100)->unique();
            $table->timestamps();
        });
        
        
        DB::table('modulos_admins')->insert(
            array(
                ['modulo' => 'Administrar Vacantes'],
                ['modulo' => 'E-Learning'],
                ['modulo' => 'Estudio Seguridad'],
                ['modulo' => 'Gestión de Personal'],
                ['modulo' => 'Selección y Asignación'],
                ['modulo' => 'Logística día-D'],
                ['modulo' => 'Evaluación'],
            )
        ); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modulos_admins');
    }
}

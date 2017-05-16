<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrivilegiosAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('privilegios_admins', function (Blueprint $table) {
            $table->engine = 'InnoDB';              
            $table->increments('id');
            $table->integer('users_admin_id')->unsigned()->index();
            $table->foreign('users_admin_id')->references('id')->on('users_admins')->onDelete('restrict')->onUpdate('cascade');
            $table->integer('modulo_id')->unsigned()->index();            
            $table->foreign('modulo_id')->references('id')->on('modulos_admins')->onDelete('restrict')->onUpdate('cascade');
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
        Schema::dropIfExists('privilegios_admins');
    }
}

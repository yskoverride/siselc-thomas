<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_admins', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('lastName');
            $table->string('email',100)->unique();
            $table->string('password');
            $table->string('DocIdentidad',100)->unique();
            $table->string('perfil')->nullable();
            $table->integer('id_sucursal')->unsigned()->index()->nullable();
            $table->foreign('id_sucursal')->references('id')->on('sucursals')->onDelete('set null')->onUpdate('cascade');
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
        Schema::dropIfExists('users_admins');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTgsEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tgs_empresas', function (Blueprint $table) {
            $table->engine = 'InnoDB';   
            $table->increments('id');
            $table->string('empresa',100)->unique();
            $table->timestamps();
        });
        DB::table('tgs_empresas')->insert(
            array(
                ['empresa' => 'No aplica'],
                ['empresa' => 'MTI S.A.'],
                ['empresa' => 'SEGURIDAD ELECTRONICA'],
                ['empresa' => 'SERDEMPO S.A.S.'],
                ['empresa' => 'SERPROSA S.A.'],
                ['empresa' => 'THOMAS GREG & SONS'],
                ['empresa' => 'THOMAS GREG & SONS LTD'],
                ['empresa' => 'THOMAS GREG EXPRESS S.A.'],
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
        Schema::dropIfExists('tgs_empresas');
    }
}

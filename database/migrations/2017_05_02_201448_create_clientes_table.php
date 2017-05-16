<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombreCliente',100)->unique();
            $table->timestamps();
        });
        DB::table('clientes')->insert(
            array(
                ['nombreCliente' => 'Universidad Nacional'],
                ['nombreCliente' => 'ESAP'],
                ['nombreCliente' => 'ICFES'],
                ['nombreCliente' => 'Universidad de Pamplona'],                
                ['nombreCliente' => 'Universidad de La Sabana'],
                ['nombreCliente' => 'Universidad de Medellín'],
                ['nombreCliente' => 'Universidad Manuela Beltran'],                
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
        Schema::dropIfExists('clientes');
    }
}

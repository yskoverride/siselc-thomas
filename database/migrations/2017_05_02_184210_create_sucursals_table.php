<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSucursalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sucursals', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id')->unsigned()->primary();
            $table->string('agencia',100)->unique();
            $table->string('director');
            $table->string('ind');
            $table->string('telefono');
            $table->string('fax');
            $table->string('celular');
            $table->string('correo');
            $table->string('direccion');            
            $table->timestamps();
        });
        
        DB::table('sucursals')->insert(
            array(
                ['id' => 1,'agencia' => 'Bogotá territorios','director' => 'Seguridad TGS','ind' => '91','telefono' => '3697320','fax' => '3693720','celular' => '3165545555','correo' => 'seguridad@thomasgreg.com','direccion' => 'Av Americas No. 44 - 57'],
                ['id' => 63001,'agencia' => 'Armenia','director' => 'Ivan Albeiro Diaz Peláez','ind' => '96','telefono' => '7489031','fax' => '7489031','celular' => '3168755090','correo' => 'ivan.diaz@thomasgreg.com','direccion' => 'Carrera 18  No. 12-26 Barrio Centro'],
                ['id' => 8001,'agencia' => 'Barranquilla','director' => 'Alvaro Barrios Hernández','ind' => '95','telefono' => '368  28 74 - 368  81  62 - 368  66 05 - 368  53 20','fax' => '368 65 64','celular' => '318  622 86 38','correo' => 'alvaro.barrios@thomasgreg.com','direccion' => 'Carrera 53 No.  68 - 69 Local 1 Br. Prado '],
                ['id' => 11001,'agencia' => 'Bogotá','director' => 'Edgar Fajardo','ind' => '91','telefono' => '3697320','fax' => '3697320','celular' => '3165545555','correo' => 'seguridad@thomasgreg.com','direccion' => 'Av Americas No. 44 - 57'],
                ['id' => 68001,'agencia' => 'Bucaramanga','director' => 'Isabel Ovalle Ballesteros','ind' => '97','telefono' => '637 11 07','fax' => '637 52 99','celular' => '318   622 86 46','correo' => 'isabel.ovalle@thomasgreg.com','direccion' => 'Cra. 34W No.71-36  Provincia de Soto I Etapa  Bodega 49'],
                ['id' => 76001,'agencia' => 'Cali','director' => 'Carlos Andrés Niño','ind' => '92','telefono' => '449 15 25  ','fax' => '447 20 30','celular' => '318   622 86 47','correo' => 'carlos.nino@thomasgreg.com','direccion' => 'Carrera 2 Norte No. 66-12 Bodega 11 Br. Calima'],
                ['id' => 13001,'agencia' => 'Cartagena','director' => 'Richard Augusto Malo Castillo','ind' => '95','telefono' => '6625318','fax' => '6624350','celular' => '318  622 86 48','correo' => 'richard.malo@thomasgreg.com','direccion' => 'Transversal 56 No. 22 - 107 Br. El Bosque'],
                ['id' => 54001,'agencia' => 'Cúcuta','director' => 'Durly Andrea Quintero ','ind' => '97','telefono' => '583 21 64','fax' => ' 572 29 88  ','celular' => '31 6   253 98 39','correo' => 'durly,quintero@thomasgreg.com','direccion' => 'Av. 0 A No. 12 A-38/40 Barrio La Playa'],
                ['id' => 18001,'agencia' => 'Florencia','director' => 'Luxora Castro Cruz','ind' => '98','telefono' => '436 31 79 ','fax' => '435 91 03','celular' => '318  622 86 65','correo' => 'luxora.castro@thomasgreg.com','direccion' => 'Avenida Circunvalar No. 5B-52'],
                ['id' => 25307,'agencia' => 'Girardot','director' => 'Marlén  Deyanira Melo ','ind' => '0','telefono' => '835 19 09','fax' => '831  50 81  ','celular' => '318   622 86 66','correo' => 'marlen.melo@thomasgreg.com','direccion' => 'Calle 20 No. 10 - 81 Br. Sucre'],
                ['id' => 73349,'agencia' => 'Honda','director' => 'Sara Mendez Bernal','ind' => '98','telefono' => '251  00 08','fax' => '251  00 08','celular' => '315  288 97 71  ','correo' => 'sara.mendez@thomasgreg.com','direccion' => 'Transversal 5 No. 17 - 39 Br. BogotÃ¡'],
                ['id' => 73001,'agencia' => 'Ibagué','director' => 'Cirlelly Ortiz Puentes','ind' => '98','telefono' => '263 99 59 - 261  05 34','fax' => '263 99 59','celular' => '318  622 86 55  ','correo' => 'bibian.santos@thomasgreg.com','direccion' => ' Calle 22 No. 5 - 37 Br. Carmen'],
                ['id' => 17001,'agencia' => 'Manizales','director' => 'Sandra Milena Pérez Alvarez','ind' => '96','telefono' => '880 84 20','fax' => '884 80 95','celular' => '315   755 73 92 ','correo' => 'sandram.perez@thomasgreg.com','direccion' => 'CarreraÂ  23 No. 15-42  Br. San Antonio'],
                ['id' => 5001,'agencia' => 'Medellín','director' => 'Jose Ricardo Garavito','ind' => '94','telefono' => '2656572','fax' => '2656022','celular' => '3154884524','correo' => 'lucas.velez@thomasgreg.com','direccion' => 'Calle 27A No. 52-34  Av. Guayabal'],
                ['id' => 23001,'agencia' => 'Montería','director' => 'Saray  Santero Arrieta','ind' => '94','telefono' => '792 64 70','fax' => '782 51 63','celular' => '316  369 23 62','correo' => 'saray.santero@thomasgreg.com','direccion' => 'Calle 30 No. 4 - 32 Br. Centro'],
                ['id' => 41001,'agencia' => 'Neiva','director' => 'Leidy Johanna  Perdomo García','ind' => '98','telefono' => '871  50 51','fax' => '871 97 93','celular' => '318  622 86 56','correo' => 'leidy.perdomo@thomasgreg.com','direccion' => 'Calle 12 No. 2-23 Br. Centro '],
                ['id' => 52001,'agencia' => 'Pasto','director' => 'Pablo  López Benavides','ind' => '92','telefono' => '729 47 18','fax' => '729 45 72','celular' => '317  428 35 44','correo' => 'pablo.lopez@thomasgreg.com','direccion' => 'Carrera 25 No. 21-41 Local 2 Edificio Entre RÃ­os Br. Centro'],
                ['id' => 66001,'agencia' => 'Pereira','director' => 'Diego Luis Cardona','ind' => '96','telefono' => '315  44 00- 315 40 10 ','fax' => '330 05 98','celular' => '318 622 86 58','correo' => 'juan.banol@thomasgreg.com','direccion' => 'CalleÂ  13 No. 9A - 33 Bodega  4 Plaza comercial San Ãngel Dosquebradas (Risaralda) '],
                ['id' => 19001,'agencia' => 'Popayán','director' => 'Leidy Carolina Fernandez Delgado','ind' => '92','telefono' => '839 50 67','fax' => '839 50 67','celular' => '318 622 86 60','correo' => 'leidy.fernandez@thomasgreg.com','direccion' => 'Carrera 9 No. 1-30 Br. Centro'],
                ['id' => 44001,'agencia' => 'Riohacha','director' => 'Martha Freyle Ballesta','ind' => '95','telefono' => '728 84 42 ','fax' => '727 33 89','celular' => '318  622 86 61','correo' => 'martha.freyle@thomasgreg.com','direccion' => 'Calle 3 No. 5 - 10 Local 2 Br. Centro'],
                ['id' => 47001,'agencia' => 'Santa Marta','director' => 'Marcos Rodriguez Perez','ind' => '95','telefono' => '431  12 40- 431  57 66  ','fax' => '431  57 66','celular' => '316 473 0968','correo' => 'marcos.rodriguez@thomasgreg.com','direccion' => 'Calle 22 No. 6 - 51 Local 1  B. Centro'],
                ['id' => 70001,'agencia' => 'Sincelejo','director' => 'Jazmín  Meza Fernandez','ind' => '95','telefono' => '275 44 95 ','fax' => '275 44 95','celular' => '316  527 03 16 ','correo' => 'jazmin.meza@thomasgreg.com','direccion' => 'Calle 22 No. 15 - 28 Calle Santander'],
                ['id' => 15001,'agencia' => 'Tunja','director' => 'Fredy Armando Ramirez','ind' => '98','telefono' => '744 67 94 ','fax' => '743 87 05','celular' => '316  472 21 31','correo' => 'fredy.ramirez@thomasgreg.com ','direccion' => 'Av. Norte No. 59-54'],
                ['id' => 20001,'agencia' => 'Valledupar','director' => 'Marina de Los Reyes Martinez ','ind' => '95','telefono' => '570 85 16 - 560 19 98','fax' => '574 32 85','celular' => '315  327 03 98','correo' => 'marina.martinez@thomasgreg.com','direccion' => 'Calle 14 No. 7 - 67 Locales 2 y 3 Br. CaÃ±aguate'],
                ['id' => 50001,'agencia' => 'Villavicencio','director' => 'Silvia Cristina Hernandez','ind' => '98','telefono' => '667  89 28','fax' => '667  89 28','celular' => '318  622 86 62','correo' => 'silvia.hernadez@thomasgreg.com','direccion' => 'Calle 27 No. 38-45 Local 1 Br. 7 de Agosto'],
                ['id' => 85001,'agencia' => 'Yopal','director' => 'Patricia  Monroy Amaya','ind' => '98','telefono' => '634 88 68','fax' => '634 88 68','celular' => ' 317  517 53 89','correo' => 'patricia.monroy@thomasgreg.com','direccion' => 'Cra. 20 No.35-30 Local 1 Br. 20 de Julio'],
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
        Schema::dropIfExists('sucursals');
    }
}

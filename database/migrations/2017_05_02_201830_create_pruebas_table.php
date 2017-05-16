<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePruebasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pruebas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_cliente')->unsigned()->index();
            $table->foreign('id_cliente')->references('id')->on('clientes')->onDelete('restrict')->onUpdate('cascade');
            $table->string('nombre_prueba',100)->unique();
            $table->date('fecha_inicio');
            $table->date('fecha_final');
            $table->date('fecha_publicacion');
            $table->date('fecha_final_publicacion');
            $table->string('estado')->default('Abierta');
            $table->timestamps();
        });
        DB::table('pruebas')->insert(
            array(        
                [ 'id' => '1', 'id_cliente' => '1', 'nombre_prueba' => 'MATEMÁTICAS BÁSICAS', 'fecha_inicio' => '2014-01-25', 'fecha_final' => '2014-01-25', 'fecha_publicacion' => '2014-01-25', 'fecha_final_publicacion' => '2014-01-25', 'estado' => 'Cerrada'],
                [ 'id' => '2', 'id_cliente' => '5', 'nombre_prueba' => 'DAPRE CNSC', 'fecha_inicio' => '2014-02-09', 'fecha_final' => '2014-02-09', 'fecha_publicacion' => '2014-02-09', 'fecha_final_publicacion' => '2014-02-09', 'estado' => 'Cerrada'],
                [ 'id' => '3', 'id_cliente' => '3', 'nombre_prueba' => 'POLICÍA PATRULLEROS', 'fecha_inicio' => '2014-02-23', 'fecha_final' => '2014-02-23', 'fecha_publicacion' => '2014-02-23', 'fecha_final_publicacion' => '2014-02-23', 'estado' => 'Cerrada'],
                [ 'id' => '4', 'id_cliente' => '3', 'nombre_prueba' => 'PILOTO SABER 11 CAL B', 'fecha_inicio' => '2014-03-16', 'fecha_final' => '2014-03-16', 'fecha_publicacion' => '2014-03-16', 'fecha_final_publicacion' => '2014-03-16', 'estado' => 'Cerrada'],
                [ 'id' => '5', 'id_cliente' => '1', 'nombre_prueba' => 'CURADORES URBANOS', 'fecha_inicio' => '2014-03-16', 'fecha_final' => '2014-03-16', 'fecha_publicacion' => '2014-03-16', 'fecha_final_publicacion' => '2014-03-16', 'estado' => 'Cerrada'],
                [ 'id' => '6', 'id_cliente' => '6', 'nombre_prueba' => 'ESAP', 'fecha_inicio' => '2014-03-16', 'fecha_final' => '2014-03-16', 'fecha_publicacion' => '2014-03-16', 'fecha_final_publicacion' => '2014-03-16', 'estado' => 'Cerrada'],
                [ 'id' => '7', 'id_cliente' => '3', 'nombre_prueba' => 'SABER 11 CALENDARIO B', 'fecha_inicio' => '2014-03-30', 'fecha_final' => '2014-03-30', 'fecha_publicacion' => '2014-03-30', 'fecha_final_publicacion' => '2014-03-30', 'estado' => 'Cerrada'],
                [ 'id' => '8', 'id_cliente' => '7', 'nombre_prueba' => 'CATASTRO DISTRITAL CONVOCATORIA 233', 'fecha_inicio' => '2014-04-27', 'fecha_final' => '2014-04-27', 'fecha_publicacion' => '2014-04-27', 'fecha_final_publicacion' => '2014-04-27', 'estado' => 'Cerrada'],
                [ 'id' => '9', 'id_cliente' => '1', 'nombre_prueba' => 'PREGRADO ', 'fecha_inicio' => '2014-04-27', 'fecha_final' => '2014-04-27', 'fecha_publicacion' => '2014-04-27', 'fecha_final_publicacion' => '2014-04-27', 'estado' => 'Cerrada'],
                [ 'id' => '10', 'id_cliente' => '1', 'nombre_prueba' => 'MEDELLIN', 'fecha_inicio' => '2014-05-09', 'fecha_final' => '2014-05-09', 'fecha_publicacion' => '2014-05-09', 'fecha_final_publicacion' => '2014-05-09', 'estado' => 'Cerrada'],
                [ 'id' => '11', 'id_cliente' => '1', 'nombre_prueba' => 'POSGRADO', 'fecha_inicio' => '2014-05-10', 'fecha_final' => '2014-05-10', 'fecha_publicacion' => '2014-05-10', 'fecha_final_publicacion' => '2014-05-10', 'estado' => 'Cerrada'],
                [ 'id' => '12', 'id_cliente' => '1', 'nombre_prueba' => 'INGLES PREGRADO', 'fecha_inicio' => '2014-05-10', 'fecha_final' => '2014-05-10', 'fecha_publicacion' => '2014-05-10', 'fecha_final_publicacion' => '2014-05-10', 'estado' => 'Cerrada'],
                [ 'id' => '13', 'id_cliente' => '1', 'nombre_prueba' => 'INGLES', 'fecha_inicio' => '2014-05-10', 'fecha_final' => '2014-05-10', 'fecha_publicacion' => '2014-05-10', 'fecha_final_publicacion' => '2014-05-10', 'estado' => 'Cerrada'],
                [ 'id' => '14', 'id_cliente' => '3', 'nombre_prueba' => 'PISA', 'fecha_inicio' => '2014-05-14', 'fecha_final' => '2014-05-14', 'fecha_publicacion' => '2014-05-14', 'fecha_final_publicacion' => '2014-05-14', 'estado' => 'Cerrada'],
                [ 'id' => '15', 'id_cliente' => '1', 'nombre_prueba' => 'MAGDALENA', 'fecha_inicio' => '2014-06-03', 'fecha_final' => '2014-06-03', 'fecha_publicacion' => '2014-06-03', 'fecha_final_publicacion' => '2014-06-03', 'estado' => 'Cerrada'],
                [ 'id' => '16', 'id_cliente' => '3', 'nombre_prueba' => 'SABER PRO  1', 'fecha_inicio' => '2014-06-08', 'fecha_final' => '2014-06-08', 'fecha_publicacion' => '2014-06-08', 'fecha_final_publicacion' => '2014-06-08', 'estado' => 'Cerrada'],
                [ 'id' => '17', 'id_cliente' => '1', 'nombre_prueba' => 'ATLANTICO', 'fecha_inicio' => '2014-06-09', 'fecha_final' => '2014-06-09', 'fecha_publicacion' => '2014-06-09', 'fecha_final_publicacion' => '2014-06-09', 'estado' => 'Cerrada'],
                [ 'id' => '18', 'id_cliente' => '3', 'nombre_prueba' => 'POLICÍA MAYORES', 'fecha_inicio' => '2014-06-14', 'fecha_final' => '2014-06-14', 'fecha_publicacion' => '2014-06-14', 'fecha_final_publicacion' => '2014-06-14', 'estado' => 'Cerrada'],
                [ 'id' => '21', 'id_cliente' => '3', 'nombre_prueba' => 'SABER PRO T&T PENITENCIARIAS', 'fecha_inicio' => '2014-07-07', 'fecha_final' => '2014-07-07', 'fecha_publicacion' => '2014-07-07', 'fecha_final_publicacion' => '2014-07-07', 'estado' => 'Cerrada'],
                [ 'id' => '22', 'id_cliente' => '3', 'nombre_prueba' => 'SABER 11 CALENDARIO A', 'fecha_inicio' => '2014-08-03', 'fecha_final' => '2014-08-03', 'fecha_publicacion' => '2014-08-03', 'fecha_final_publicacion' => '2014-08-03', 'estado' => 'Cerrada'],
                [ 'id' => '23', 'id_cliente' => '6', 'nombre_prueba' => 'APC', 'fecha_inicio' => '2014-09-07', 'fecha_final' => '2014-09-07', 'fecha_publicacion' => '2014-09-07', 'fecha_final_publicacion' => '2014-09-07', 'estado' => 'Cerrada'],
                [ 'id' => '24', 'id_cliente' => '3', 'nombre_prueba' => 'ASCENSO DOCENTES', 'fecha_inicio' => '2014-09-07', 'fecha_final' => '2014-09-07', 'fecha_publicacion' => '2014-09-07', 'fecha_final_publicacion' => '2014-09-07', 'estado' => 'Cerrada'],
                [ 'id' => '29', 'id_cliente' => '7', 'nombre_prueba' => 'PARQUES NACIONALES', 'fecha_inicio' => '2014-10-05', 'fecha_final' => '2014-10-05', 'fecha_publicacion' => '2014-10-05', 'fecha_final_publicacion' => '2014-10-05', 'estado' => 'Cerrada'],
                [ 'id' => '30', 'id_cliente' => '6', 'nombre_prueba' => 'CONTRALORIAS TERRITORIALES', 'fecha_inicio' => '2014-10-19', 'fecha_final' => '2014-10-19', 'fecha_publicacion' => '2014-10-19', 'fecha_final_publicacion' => '2014-10-19', 'estado' => 'Cerrada'],
                [ 'id' => '31', 'id_cliente' => '3', 'nombre_prueba' => 'INSOR', 'fecha_inicio' => '2014-09-14', 'fecha_final' => '2014-09-14', 'fecha_publicacion' => '2014-09-14', 'fecha_final_publicacion' => '2014-09-14', 'estado' => 'Cerrada'],
                [ 'id' => '32', 'id_cliente' => '3', 'nombre_prueba' => 'CAMBRIDGE LATINO', 'fecha_inicio' => '2014-10-22', 'fecha_final' => '2014-10-22', 'fecha_publicacion' => '2014-10-22', 'fecha_final_publicacion' => '2014-10-22', 'estado' => 'Cerrada'],
                [ 'id' => '34', 'id_cliente' => '3', 'nombre_prueba' => 'ICCS', 'fecha_inicio' => '2014-10-28', 'fecha_final' => '2014-10-28', 'fecha_publicacion' => '2014-10-28', 'fecha_final_publicacion' => '2014-10-28', 'estado' => 'Cerrada'],
                [ 'id' => '35', 'id_cliente' => '3', 'nombre_prueba' => 'SABER PRO EXTERIOR', 'fecha_inicio' => '2014-10-31', 'fecha_final' => '2014-10-31', 'fecha_publicacion' => '2014-10-31', 'fecha_final_publicacion' => '2014-10-31', 'estado' => 'Cerrada'],
                [ 'id' => '37', 'id_cliente' => '3', 'nombre_prueba' => 'SABER 3 5 9 ', 'fecha_inicio' => '2014-11-05', 'fecha_final' => '2014-11-05', 'fecha_publicacion' => '2014-11-05', 'fecha_final_publicacion' => '2014-11-05', 'estado' => 'Cerrada'],
                [ 'id' => '38', 'id_cliente' => '1', 'nombre_prueba' => 'TRIBUNALES Y JUZGADOS', 'fecha_inicio' => '2014-11-09', 'fecha_final' => '2014-11-09', 'fecha_publicacion' => '2014-11-09', 'fecha_final_publicacion' => '2014-11-09', 'estado' => 'Cerrada'],
                [ 'id' => '41', 'id_cliente' => '1', 'nombre_prueba' => 'CONSEJO SUPERIOR DE LA JUDICATURA', 'fecha_inicio' => '2014-11-25', 'fecha_final' => '2014-11-25', 'fecha_publicacion' => '2014-11-25', 'fecha_final_publicacion' => '2014-11-25', 'estado' => 'Cerrada'],
                [ 'id' => '42', 'id_cliente' => '3', 'nombre_prueba' => 'SABER PRO 2', 'fecha_inicio' => '2014-11-30', 'fecha_final' => '2014-11-30', 'fecha_publicacion' => '2014-11-30', 'fecha_final_publicacion' => '2014-11-30', 'estado' => 'Cerrada'],
                [ 'id' => '43', 'id_cliente' => '1', 'nombre_prueba' => 'MATEMATICAS FINAL', 'fecha_inicio' => '2014-12-05', 'fecha_final' => '2014-12-05', 'fecha_publicacion' => '2014-12-05', 'fecha_final_publicacion' => '2014-12-05', 'estado' => 'Cerrada'],
                [ 'id' => '44', 'id_cliente' => '4', 'nombre_prueba' => 'RAMA JUDICIAL', 'fecha_inicio' => '2014-12-07', 'fecha_final' => '2014-12-07', 'fecha_publicacion' => '2014-12-07', 'fecha_final_publicacion' => '2014-12-07', 'estado' => 'Cerrada'],
                [ 'id' => '46', 'id_cliente' => '1', 'nombre_prueba' => 'ALTAS CORTES CONSEJO SUPERIOR DE LA JUDICATURA', 'fecha_inicio' => '2015-03-15', 'fecha_final' => '2015-03-15', 'fecha_publicacion' => '2015-03-15', 'fecha_final_publicacion' => '2015-03-15', 'estado' => 'Cerrada'],
                [ 'id' => '48', 'id_cliente' => '3', 'nombre_prueba' => 'DOCENTES INGLES (DIAGNOSTICO)', 'fecha_inicio' => '2015-03-22', 'fecha_final' => '2015-03-22', 'fecha_publicacion' => '2015-03-22', 'fecha_final_publicacion' => '2015-03-22', 'estado' => 'Cerrada'],
                [ 'id' => '54', 'id_cliente' => '4', 'nombre_prueba' => 'UNIVERSIDAD DE ANTIOQUIA', 'fecha_inicio' => '2015-05-24', 'fecha_final' => '2015-05-24', 'fecha_publicacion' => '2015-05-24', 'fecha_final_publicacion' => '2015-05-24', 'estado' => 'Cerrada'],
                [ 'id' => '55', 'id_cliente' => '7', 'nombre_prueba' => 'DEPARTAMENTO PARA LA PROSPERIDAD SOCIAL (DPS)', 'fecha_inicio' => '2015-05-31', 'fecha_final' => '2015-05-31', 'fecha_publicacion' => '2015-05-31', 'fecha_final_publicacion' => '2015-05-31', 'estado' => 'Cerrada'],
                [ 'id' => '60', 'id_cliente' => '1', 'nombre_prueba' => 'CARGOS ADMINISTRATIVOS DE LA CONTRALORIA', 'fecha_inicio' => '2015-07-26', 'fecha_final' => '2015-07-26', 'fecha_publicacion' => '2015-07-26', 'fecha_final_publicacion' => '2015-07-26', 'estado' => 'Cerrada'],
                [ 'id' => '63', 'id_cliente' => '5', 'nombre_prueba' => 'IDEAM', 'fecha_inicio' => '2015-08-23', 'fecha_final' => '2015-08-23', 'fecha_publicacion' => '2015-08-23', 'fecha_final_publicacion' => '2015-08-23', 'estado' => 'Cerrada'],
                [ 'id' => '64', 'id_cliente' => '1', 'nombre_prueba' => 'CIUDADANIA, CONVIVENCIA Y CLIMA ORGANIZACIONAL', 'fecha_inicio' => '2015-08-27', 'fecha_final' => '2015-08-27', 'fecha_publicacion' => '2015-08-27', 'fecha_final_publicacion' => '2015-08-27', 'estado' => 'Cerrada'],
                [ 'id' => '65', 'id_cliente' => '3', 'nombre_prueba' => ' INGLES DOCENTES (BILINGUISMO)', 'fecha_inicio' => '2015-08-30', 'fecha_final' => '2015-08-30', 'fecha_publicacion' => '2015-08-30', 'fecha_final_publicacion' => '2015-08-30', 'estado' => 'Cerrada'],
                [ 'id' => '66', 'id_cliente' => '5', 'nombre_prueba' => 'AGENCIA NACIONAL DE MINERIA', 'fecha_inicio' => '2015-09-06', 'fecha_final' => '2015-09-06', 'fecha_publicacion' => '2015-09-06', 'fecha_final_publicacion' => '2015-09-06', 'estado' => 'Cerrada'],
                [ 'id' => '67', 'id_cliente' => '4', 'nombre_prueba' => 'PROCURADURIA GENERAL DE LA NACION', 'fecha_inicio' => '2015-09-13', 'fecha_final' => '2015-09-13', 'fecha_publicacion' => '2015-09-13', 'fecha_final_publicacion' => '2015-09-13', 'estado' => 'Cerrada'],
                [ 'id' => '70', 'id_cliente' => '3', 'nombre_prueba' => 'POLICIA MAYORES (POLICIAL)', 'fecha_inicio' => '2015-09-26', 'fecha_final' => '2015-09-26', 'fecha_publicacion' => '2015-09-26', 'fecha_final_publicacion' => '2015-09-26', 'estado' => 'Cerrada'],
                [ 'id' => '73', 'id_cliente' => '3', 'nombre_prueba' => 'POLICIA MAYORES (JUDICIAL)', 'fecha_inicio' => '2015-10-10', 'fecha_final' => '2015-10-10', 'fecha_publicacion' => '2015-10-10', 'fecha_final_publicacion' => '2015-10-10', 'estado' => 'Cerrada'],
                [ 'id' => '74', 'id_cliente' => '3', 'nombre_prueba' => 'DOCENTES INGLES', 'fecha_inicio' => '2015-10-18', 'fecha_final' => '2015-10-18', 'fecha_publicacion' => '2015-10-18', 'fecha_final_publicacion' => '2015-10-18', 'estado' => 'Cerrada'],
                [ 'id' => '75', 'id_cliente' => '3', 'nombre_prueba' => 'SABER 3 5 7 9 ', 'fecha_inicio' => '2015-10-19', 'fecha_final' => '2015-10-19', 'fecha_publicacion' => '2015-10-19', 'fecha_final_publicacion' => '2015-10-19', 'estado' => 'Cerrada'],
                [ 'id' => '77', 'id_cliente' => '3', 'nombre_prueba' => 'PARES EVALUADORES DOCENTES', 'fecha_inicio' => '2015-11-01', 'fecha_final' => '2015-11-01', 'fecha_publicacion' => '2015-11-01', 'fecha_final_publicacion' => '2015-11-01', 'estado' => 'Cerrada'],
                [ 'id' => '80', 'id_cliente' => '1', 'nombre_prueba' => 'NOTARIOS', 'fecha_inicio' => '2015-11-08', 'fecha_final' => '2015-11-08', 'fecha_publicacion' => '2015-11-08', 'fecha_final_publicacion' => '2015-11-08', 'estado' => 'Cerrada'],
                [ 'id' => '81', 'id_cliente' => '3', 'nombre_prueba' => 'SABER PRO 3', 'fecha_inicio' => '2015-11-22', 'fecha_final' => '2015-11-22', 'fecha_publicacion' => '2015-11-22', 'fecha_final_publicacion' => '2015-11-22', 'estado' => 'Cerrada'],
                [ 'id' => '84', 'id_cliente' => '1', 'nombre_prueba' => 'CORDOBA', 'fecha_inicio' => '2015-12-06', 'fecha_final' => '2015-12-06', 'fecha_publicacion' => '2015-12-06', 'fecha_final_publicacion' => '2015-12-06', 'estado' => 'Cerrada'],
                [ 'id' => '85', 'id_cliente' => '2', 'nombre_prueba' => 'PERSONEROS', 'fecha_inicio' => '2015-12-20', 'fecha_final' => '2015-12-20', 'fecha_publicacion' => '2015-12-20', 'fecha_final_publicacion' => '2015-12-20', 'estado' => 'Cerrada'],
                [ 'id' => '86', 'id_cliente' => '1', 'nombre_prueba' => 'INGLES FRONTERAS', 'fecha_inicio' => '2016-01-29', 'fecha_final' => '2016-01-29', 'fecha_publicacion' => '2016-01-29', 'fecha_final_publicacion' => '2016-01-29', 'estado' => 'Cerrada'],
                [ 'id' => '87', 'id_cliente' => '1', 'nombre_prueba' => 'ALCALDIAS LOCALES', 'fecha_inicio' => '2016-02-20', 'fecha_final' => '2016-02-20', 'fecha_publicacion' => '2016-02-20', 'fecha_final_publicacion' => '2016-02-20', 'estado' => 'Cerrada'],
                [ 'id' => '89', 'id_cliente' => '3', 'nombre_prueba' => 'REPETICIÓN SABER PRO 3', 'fecha_inicio' => '2016-03-22', 'fecha_final' => '2016-03-22', 'fecha_publicacion' => '2016-03-22', 'fecha_final_publicacion' => '2016-03-22', 'estado' => 'Cerrada'],
                [ 'id' => '91', 'id_cliente' => '6', 'nombre_prueba' => 'ICA', 'fecha_inicio' => '2016-04-24', 'fecha_final' => '2016-04-24', 'fecha_publicacion' => '2016-04-24', 'fecha_final_publicacion' => '2016-04-24', 'estado' => 'Cerrada'],
                [ 'id' => '92', 'id_cliente' => '1', 'nombre_prueba' => 'ELECCION DE PERSONERO Y CONTRALOR', 'fecha_inicio' => '2016-04-24', 'fecha_final' => '2016-04-24', 'fecha_publicacion' => '2016-04-24', 'fecha_final_publicacion' => '2016-04-24', 'estado' => 'Cerrada'],
                [ 'id' => '94', 'id_cliente' => '1', 'nombre_prueba' => 'INGLES PREGRADO Y POSGRADO', 'fecha_inicio' => '2016-05-14', 'fecha_final' => '2016-05-14', 'fecha_publicacion' => '2016-05-14', 'fecha_final_publicacion' => '2016-05-14', 'estado' => 'Cerrada'],
                [ 'id' => '95', 'id_cliente' => '4', 'nombre_prueba' => 'GERENTES DE HOSPITALES', 'fecha_inicio' => '2016-05-15', 'fecha_final' => '2016-05-15', 'fecha_publicacion' => '2016-05-15', 'fecha_final_publicacion' => '2016-05-15', 'estado' => 'Cerrada'],
                [ 'id' => '96', 'id_cliente' => '1', 'nombre_prueba' => 'UNIVERSIDAD DEL MAGDALENA', 'fecha_inicio' => '2016-05-22', 'fecha_final' => '2016-05-22', 'fecha_publicacion' => '2016-05-22', 'fecha_final_publicacion' => '2016-05-22', 'estado' => 'Cerrada'],
                [ 'id' => '97', 'id_cliente' => '1', 'nombre_prueba' => 'EXAMEN FINAL', 'fecha_inicio' => '2016-05-27', 'fecha_final' => '2016-05-27', 'fecha_publicacion' => '2016-05-27', 'fecha_final_publicacion' => '2016-05-27', 'estado' => 'Cerrada'],
                [ 'id' => '98', 'id_cliente' => '1', 'nombre_prueba' => 'UNIVERSIDAD DEL ATLANTICO', 'fecha_inicio' => '2016-06-07', 'fecha_final' => '2016-06-07', 'fecha_publicacion' => '2016-06-07', 'fecha_final_publicacion' => '2016-06-07', 'estado' => 'Cerrada'],
                [ 'id' => '99', 'id_cliente' => '4', 'nombre_prueba' => 'INSTITUTO DE DESARROLLO URBANO - IDU', 'fecha_inicio' => '2016-06-12', 'fecha_final' => '2016-06-12', 'fecha_publicacion' => '2016-06-12', 'fecha_final_publicacion' => '2016-06-12', 'estado' => 'Cerrada'],
                [ 'id' => '100', 'id_cliente' => '3', 'nombre_prueba' => 'SABER PRO 1 (T & T)', 'fecha_inicio' => '2016-06-19', 'fecha_final' => '2016-06-19', 'fecha_publicacion' => '2016-06-19', 'fecha_final_publicacion' => '2016-06-19', 'estado' => 'Cerrada'],
                [ 'id' => '101', 'id_cliente' => '1', 'nombre_prueba' => 'UNIVERSIDAD DE CORDOBA', 'fecha_inicio' => '2016-06-19', 'fecha_final' => '2016-06-19', 'fecha_publicacion' => '2016-06-19', 'fecha_final_publicacion' => '2016-06-19', 'estado' => 'Cerrada'],
                [ 'id' => '103', 'id_cliente' => '4', 'nombre_prueba' => 'SECRETARIA DE HACIENDA DISTRITAL - SHD', 'fecha_inicio' => '2016-07-24', 'fecha_final' => '2016-07-24', 'fecha_publicacion' => '2016-07-24', 'fecha_final_publicacion' => '2016-07-24', 'estado' => 'Cerrada'],
                [ 'id' => '104', 'id_cliente' => '2', 'nombre_prueba' => 'PERSONEROS MUNICIPALES', 'fecha_inicio' => '2016-07-24', 'fecha_final' => '2016-07-24', 'fecha_publicacion' => '2016-07-24', 'fecha_final_publicacion' => '2016-07-24', 'estado' => 'Cerrada'],
                [ 'id' => '107', 'id_cliente' => '3', 'nombre_prueba' => 'ASCENSO PATRULLERO', 'fecha_inicio' => '2016-08-07', 'fecha_final' => '2016-08-07', 'fecha_publicacion' => '2016-08-07', 'fecha_final_publicacion' => '2016-08-07', 'estado' => 'Cerrada'],
                [ 'id' => '108', 'id_cliente' => '4', 'nombre_prueba' => 'SECRETARIA DISTRITAL DE PLANEACIÓN - SDP', 'fecha_inicio' => '2016-08-07', 'fecha_final' => '2016-08-07', 'fecha_publicacion' => '2016-08-07', 'fecha_final_publicacion' => '2016-08-07', 'estado' => 'Cerrada'],
                [ 'id' => '109', 'id_cliente' => '5', 'nombre_prueba' => 'MIGRACIÓN COLOMBIA', 'fecha_inicio' => '2016-08-28', 'fecha_final' => '2016-08-28', 'fecha_publicacion' => '2016-08-28', 'fecha_final_publicacion' => '2016-08-28', 'estado' => 'Cerrada'],
                [ 'id' => '110', 'id_cliente' => '5', 'nombre_prueba' => 'AGENCIA NACIONAL DE HIDROCARBUROS', 'fecha_inicio' => '2016-09-04', 'fecha_final' => '2016-09-04', 'fecha_publicacion' => '2016-09-04', 'fecha_final_publicacion' => '2016-09-04', 'estado' => 'Cerrada'],
                [ 'id' => '111', 'id_cliente' => '5', 'nombre_prueba' => 'SUPERSOCIEDADES', 'fecha_inicio' => '2016-09-11', 'fecha_final' => '2016-09-11', 'fecha_publicacion' => '2016-09-11', 'fecha_final_publicacion' => '2016-09-11', 'estado' => 'Cerrada'],
                [ 'id' => '114', 'id_cliente' => '5', 'nombre_prueba' => 'SUPERFAMILIAR', 'fecha_inicio' => '2016-09-18', 'fecha_final' => '2016-09-18', 'fecha_publicacion' => '2016-09-18', 'fecha_final_publicacion' => '2016-09-18', 'estado' => 'Cerrada'],
                [ 'id' => '117', 'id_cliente' => '3', 'nombre_prueba' => 'Para borrar 5', 'fecha_inicio' => '2016-12-12', 'fecha_final' => '2016-12-16', 'fecha_publicacion' => '2016-11-21', 'fecha_final_publicacion' => '2017-01-31', 'estado' => 'Abierta'],
                [ 'id' => '118', 'id_cliente' => '3', 'nombre_prueba' => 'para borrar 239458', 'fecha_inicio' => '2016-11-30', 'fecha_final' => '2016-11-30', 'fecha_publicacion' => '2016-11-21', 'fecha_final_publicacion' => '2017-01-31', 'estado' => 'Abierta'],
                [ 'id' => '120', 'id_cliente' => '3', 'nombre_prueba' => 'Saber 11 b', 'fecha_inicio' => '2017-03-30', 'fecha_final' => '2017-03-30', 'fecha_publicacion' => '2017-03-16', 'fecha_final_publicacion' => '2017-05-30', 'estado' => 'Abierta'],
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
        Schema::dropIfExists('pruebas');
    }
}

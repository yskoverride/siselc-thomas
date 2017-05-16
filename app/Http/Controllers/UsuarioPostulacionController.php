<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Municipio;
use App\Vacante;
use App\Cargo;
use App\Banco_examen;
use App\Postulacion_cargo;
Use DB;
use Session;


class UsuarioPostulacionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function pruebasVigentes()
    {
        $user=User::find(Auth::user()->id);
        $resultArray = json_decode(json_encode($user), true);
        $mensage=  hv_completo($resultArray);
        $municipio = Municipio::find(Auth::user()->CiudadResidencia);
        if ($mensage[0]<30){
            Session::flash('secmesg', $mensage[1]);
        } 
        elseif (Auth::user()->estadoSeguridad == 'Nuevo' || Auth::user()->HVestado == 'Nuevo'){
            Session::flash('secmesg', array('Su hoja de vida aun no ha sido evaluda, una vez se haya realizado la revisión de la misma le será enviado un correo electrónico'));
        }
        elseif (Auth::user()->estadoSeguridad == 'Rechazado' || Auth::user()->estadoSeguridad == 'Información Incompleta' || Auth::user()->HVestado == 'HV_rechazadaHR'){
            Session::flash('secmesg', array('Lo sentimos, una vez revisada su Hoja de Vida, la misma no ha sido aceptada para continuar en el proceso de selección'));
        } 
        elseif (Auth::user()->HVestado == 'HV_suspendidaSIS'){
            Session::flash('secmesg', array('Lo sentimos, debido a errores encontrados en una de las aplicaciones por usted realizada, actualmente se encuentra en estado de suspendido, una vez se levante la suspensión le será notificado por correo electrónico'));
        }      
        $pruebas = DB::table('pruebas')
                    ->select('pruebas.id', 'pruebas.nombre_prueba', 'pruebas.fecha_inicio', 'clientes.nombreCliente' )
                    ->join('clientes', 'pruebas.id_cliente', '=', 'clientes.id')
                    ->where('fecha_publicacion', "<=", date('Y-m-d'))
                    ->where('fecha_final_publicacion', ">=", date('Y-m-d'))
                    ->get(); 
        $cargos=DB::table('cargos_habilidados')->select('id_cargos')->where('id_users', "=", Auth::user()->id)->get();
        $condition2="";
        $cont=0;        
        foreach ($cargos as $cargo){
            if($cont==0){
                $condition2.=" (`cargos`.`id`)=" . $cargo->id_cargos . " ";
                $cont++;
            }else{
                $condition2.="OR (`cargos`.`id`)=" . $cargo->id_cargos . " ";
            }    
        }                           
        $vacantes = DB::select("SELECT `cargos`.`id` as id_cargos, `cargos`.`nombreCargo`, `municipios`.`municipio`, `municipios`.`departamento`, `municipios`.`codigoMunicipio`, MIN(`vacantes`.`id_examen`) as `id_examen`, MIN(`vacantes`.`id`) as `id_vacante`, SUM(`vacantes`.`cant_vacantes`) AS cant_vacantes, SUM(`vacantes`.`cant_postulaciones`) AS cant_postulaciones, `vacantes`.`id_prueba` FROM `pruebas` LEFT JOIN `vacantes` ON `vacantes`.`id_prueba` = `pruebas`.`id` LEFT JOIN `cargos` ON `vacantes`.`id_cargos` = `cargos`.`id` LEFT JOIN `municipios` ON `vacantes`.`id_municipio` = `municipios`.`codigoMunicipio` LEFT JOIN `sucursals` ON `vacantes`.`id_sucursal` = `sucursals`.`id` WHERE  ((`pruebas`.`fecha_publicacion` <= Date(now())) AND (`pruebas`.`fecha_final_publicacion` >= Date(now())) AND (" . $condition2 . ") AND (`vacantes`.`id_sucursal`= ?)) GROUP BY `pruebas`.`id`, `cargos`.`id`, `municipios`.`codigoMunicipio`", array($municipio->id_sucursal));
        return view('users.pruebasVigentes', compact('pruebas'), compact('vacantes'));
    } 
    
    public function descripcionCargoVista($id_vacante)
    {
        $vacante=  Vacante::find($id_vacante);
        $cargos=DB::table('cargos_habilidados')->select('id_cargos')->where('id_users', "=", Auth::user()->id)->where('id_cargos', "=", $vacante->id_cargos)->get();
        $cargo=Cargo::find($cargos[0]->id_cargos); 
        if (count($cargo)==0){
            Session::flash('secmesg', array('No está habilitado para este cargo'));
            return back();
        }else{
            return view('users.descripcionCargoVista', compact('cargo', 'vacante'));
        }
    }
    
    public function aplicarCargo($id_vacante)
    {
        $vacante= Vacante::find($id_vacante);
        $cargos=DB::table('cargos_habilidados')->select('id_cargos')->where('id_users', "=", Auth::user()->id)->where('id_cargos', "=", $vacante->id_cargos)->get();
        $cargo=Cargo::find($cargos[0]->id_cargos); 
        $postulaicones=DB::table('postulacion_cargos')->select('id')->where('id_users', "=", Auth::user()->id)->where('id_prueba', "=", $vacante->id_cargos)->get();
        if (count($cargo)==0){
            Session::flash('secerror', array('No está habilitado para este cargo'));
            return redirect('/pruebasVigentes');
        }elseif(count($postulaicones)>=1){
            Session::flash('secerror', array('Ya se encuentra inscrito a un cargo de esta prueba'));
            return redirect('/pruebasVigentes');          
        }else{
            $postu = new Postulacion_cargo();
            $postu->id_users=Auth::user()->id;
            $postu->id_prueba=$vacante->id_prueba;
            $postu->id_cargos=$vacante->id_cargos;
            $postu->id_municipio=$vacante->id_municipio;
            $postu->id_examen=$vacante->id_examen;
            $postu->save();
            Session::flash('message', 'Aplicación Exitosa');
            return redirect('/pruebasVigentes');
        }        
    }
    
    public function estadoPostulaciones()
    {
        $postulaciones = DB::table('postulacion_cargos')
                    ->select('postulacion_cargos.id', 'cargos.nombreCargo', 'pruebas.nombre_prueba', 'pruebas.fecha_inicio', 'pruebas.fecha_final', 'municipios.Municipio', 'municipios.departamento', 'postulacion_cargos.resultadoTest', 'postulacion_cargos.estado', 'postulacion_cargos.estado2', 'postulacion_cargos.confirmacion', 'vacantes.nombreSitio', 'vacantes.direccionSitio')
                    ->leftJoin('municipios', 'postulacion_cargos.id_municipio', '=', 'municipios.codigoMunicipio')
                    ->leftJoin('pruebas', 'postulacion_cargos.id_prueba', '=', 'pruebas.id')
                    ->leftJoin('cargos', 'postulacion_cargos.id_cargos', '=', 'cargos.id')
                    ->leftJoin('vacantes', 'postulacion_cargos.id_vacantes', '=', 'vacantes.id')
                    ->where('id_users', Auth::user()->id)
                    ->get();         
        return view('users.estadoPostulaciones', compact('postulaciones'));
    }
    
    public function confirmarPostulacion($confirmacion)
    {
        if(Postulacion_cargo::where('id_users', Auth::user()->id)
                    ->where('confirmacion', $confirmacion)
                    ->update(['estado' => 'Confirmado Asistencia (Pendiente Asignación Sitio)'])==0){
                        Session::flash('secerror', array('No fue posible realizar la confirmación'));
                        return redirect('/estadoPostulaciones');
                    }else{
                        Session::flash('message', 'Confirmación Exitosa');
                        return redirect('/estadoPostulaciones');  
                    }       
    }
    
    public function examen($id_postulacion)
    {
        $user=User::find(Auth::user()->id);
        $postulacion=$user->postulacion_cargos()->find($id_postulacion);       
        if ($postulacion->estado === 'Pendiente Examen Cargo'){
            $postulacion->resultadoTest='Abandonado';
            $postulacion->estado='Rechazado';
            $postulacion->save();
            $preguntas=DB::table('banco_preguntas') 
                    ->select('banco_preguntas.id', 'banco_preguntas.categoria', 'banco_preguntas.pregunta', 'banco_preguntas.a', 'banco_preguntas.b', 'banco_preguntas.c', 'banco_preguntas.d', 'banco_preguntas.rta', 'banco_preguntas.id')
                    ->join('creacion_examens', 'banco_preguntas.id', '=', 'creacion_examens.id_pregunta')
                    ->where('creacion_examens.id_examen', $postulacion->id_examen)
                    ->orderBy('creacion_examens.orden')
                    ->get(); 
            $examen=  Banco_examen::find($postulacion->id_examen);
            $tiempo = ($examen->tiempoLimite)*60; 
            return view('users.examen', compact('preguntas', 'tiempo', 'postulacion'));
        }else{
            Session::flash('secerror', array('El examen ya no se encuentra disponible'));
            return redirect('/estadoPostulaciones');            
        }
            
    }
    public function abandonarPostulacion(Request $data)
    {
        $user=User::find(Auth::user()->id);
        $postulacion=$user->postulacion_cargos()->find($data->input('id_postulacion'));
        $postulacion->estado='Abandonado';
        $postulacion->estado2='Abandonado';
        $postulacion->asistencia=0;
        $postulacion->id_vacantes=NULL;
        $postulacion->abandono_razon=$data->input('abandono_razon');
        $postulacion->save();    
        return back()->with('message', 'Abandono Realizado'); 
    }  
    public function calificar(Request $data)
    {
        $user=User::find(Auth::user()->id);
        $postulacion=$user->postulacion_cargos()->find($data->input('id_postulacion'));           
        $respuestas=DB::table('banco_preguntas') 
                ->select('banco_preguntas.rta')
                ->join('creacion_examens', 'banco_preguntas.id', '=', 'creacion_examens.id_pregunta')
                ->where('creacion_examens.id_examen', $postulacion->id_examen)
                ->where('banco_preguntas.categoria', 'pregunta')
                ->orderBy('creacion_examens.orden')
                ->get();
        $rtaCorrecta=0;
        $examen=Banco_examen::find($postulacion->id_examen);
        $rta=$data->input('respuesta');
        for ($i=0;$i<count($respuestas);$i++){
            if ($rta[$i]== $respuestas[$i]->rta){
                $rtaCorrecta++;
            }
        }
        $resultado=round(($rtaCorrecta/count($respuestas))*100,1);
        $final= "% $resultado"; 
        if($resultado<$examen->porcentajeAceptacion){
            $estado='Rechazado';
        }else{
            /*$msg="<p>Cordial saludo</p><br>Nos permitimos informarle que el examen realizado para la vacante con consecutivo No. $id_postulacion Ha sido aprobado, en este orden su aplicación estará en espera de asignación de sitio, llegado el caso la cantidad de alicantes sea mayor a la cantidad necesaria para cubrir la Logística el sistema realizará la asignación aleatoria y le será informado por este medio si usted fue escogido o no. <br> Le solicitamos estar pendiente de es correo electrónico y el portal Web ya que en caso de ser favorecido por la selección aleatoria el sistema le solicitara confirmar voluntad de participar y en caso de no recibir respuesta después de 24, su aplicación será rechazada.<br><br>Nota: Correo generado automáticamente, por favor No responda a este mensaje";
            $asunto="Aprobación Test Postulación No.$id_postulacion  ";  
            $conf_email=new email_send();
            $conf_email->gmail_send($_SESSION["usuario"]['email'], $asunto, $msg);*/    
            $estado='En espera confirmación de selección';
        }
        $postulacion->resultadoTest=$final;
        $postulacion->estado=$estado;
        $postulacion->save();
        Session::flash('message', 'Examen Enviado con Éxito');
        return redirect('/estadoPostulaciones'); 
    }     
}

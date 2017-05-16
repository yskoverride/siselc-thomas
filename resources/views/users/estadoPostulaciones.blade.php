@extends('layouts.users')

@section('content')
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Estado de Postulaciones a Cargos</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">                                
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Cargo</th>
                                        <th>Prueba</th>
                                        <th>Fecha de Aplicación</th>
                                        <th>Municipio</th>
                                        <th>Resultado Examen</th>
                                        <th>Estado de la Postualción</th>
                                        <th>Abandonar Postulación</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($postulaciones as $postulacion)
                                    <?php 
                                        $disabled="";                                     
                                        if($postulacion->estado=='Seleccionado (Pendiente Confirmación Asistencia)'){
                                            $boton="<td class='bot'><a href='" . route('confirmarPostulacion', ['confirmacion' => $postulacion->confirmacion]) . "'" . ' onclick="return confirm(' . "'Está seguro?'" . ')"' . "><button value='" . $postulacion->id . "' type='button' class='btn btn-success' >Confirmar Asistencia</button></a><button type='button' class='btn btn-danger' data-toggle='modal' data-target='#myModal' onclick='setvalue(this.value)'>Abandonar</button></td>";
                                            $exa ="<td>". $postulacion->resultadoTest . "<a href='" . route('examen', ['postulacion' => $postulacion->id]) . "'" . ' onclick="return confirm(' . "'Antes de empezar, verifique que cuenta con disponibilidad de tiempo y buena concexión a internet que le permita visualizar videos en YOUTUBE, ¡¡RECUERDE!! una vez iniciado el examen no podrá retirarse'" . ')"' . ">   <p class='fa fa-edit'></p></a></td>"; 
                                        }elseif($postulacion->estado=='Abandonado'){
                                            $boton="<td class='bot'>Abandonado</td>";
                                            $exa ="<td>Abandonado</td>"; 
                                        }else{
                                            $boton="<td class='bot'><button value='" . $postulacion->id . "' type='button' class='btn btn-danger' data-toggle='modal' data-target='#myModal' onclick='setvalue(this.value);'>Abandonar</button></td>";
                                            $exa ="<td>". $postulacion->resultadoTest . "<a href='" . route('examen', ['postulacion' => $postulacion->id]) . "'" . ' onclick="return confirm(' . "'Antes de empezar, verifique que cuenta con disponibilidad de tiempo y buena concexión a internet que le permita visualizar videos en YOUTUBE, ¡¡RECUERDE!! una vez iniciado el examen no podrá retirarse'" . ')"' . ">   <p class='fa fa-edit'></p></a></td>"; 
                                        }
                                    ?>
                                    <tr class='odd gradeX'>
                                        <td>{{ $postulacion->id }}</td>
                                        <td>"{{ $postulacion->nombreCargo }}</td>
                                        <td>{{ $postulacion->nombre_prueba }}</td>
                                        <td>Del {{ $postulacion->fecha_inicio }} al {{ $postulacion->fecha_final }}</td>
                                        <td>{{ $postulacion->Municipio }} ({{ $postulacion->departamento }})</td>
                                        <?php echo $exa; ?>
                                        @if($postulacion->estado2=='confirmado')
                                            <td>Programado para el Sitio: {{ $postulacion->nombreSitio }} - {{ $postulacion->direccionSitio }}</td>
                                        @else
                                            <td>{{ $postulacion->estado }}</td>   
                                        @endif                                        
                                        <?php echo $boton; ?>
                                    </tr> 
                                    @endforeach
                                </tbody>
                            </table>
                            <script>
                                function setvalue(value){
                                    $("#id_postulacion").val(value);
                                }
                            </script>
                        </div>
                        <!-- /.panel-body -->

                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="{{ route('abandonarPostulacion') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">Abandonar</h4>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" name="id_postulacion" id="id_postulacion">
                                <div class="form-group">
                                   <label>Escriba la razon(es) por las cuales desea abandonar el proceso</label>
                                   <textarea name="abandono_razon" class="form-control" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary" onclick="return confirm('¿Está seguro? Luego de abandonar la postulación no podra inscribirse a otra vancante de la misma prueba')">Abandonar</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
@endsection 
        




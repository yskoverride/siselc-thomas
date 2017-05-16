@extends('layouts.users')

@section('content') 
            @if (session()->has('secmesg'))
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                    <b>Usted aún no ha completado de llenar su hoja de vida, por favor verifique los siguientes campos faltantes</b>
                  @foreach (session()->get('secmesg') as $error)
                  <li>{{ $error }}<br>
                  @endforeach                    
                </div>                      
            @else   
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Listado de Pruebas Vigentes</h1>
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
                            <table width="100%" class="table table-striped table-bordered table-hover" id="example">                                
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre Prueba</th>
                                        <th>Cliente</th>
                                        <th>Fecha de Aplicación</th>
                                        <th>Editar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $javaArray="["; $javaArray2="["; $cuenta=0;?>
                                @foreach ($pruebas as $prueba)
                                   <tr class='odd gradeX'>
                                    <td align='center'>{{ $prueba->id }}</td>
                                    <td align='center'>{{ $prueba->nombre_prueba }}</td>
                                    <td align='center'>{{ $prueba->nombreCliente }}</td>
                                    <td align='center'>{{ $prueba->fecha_inicio }}</td>
                                    <td align='center' class='bot'><button type='button' value="{{ $prueba->id }}" class='btn btn-success' onclick='filterTable(this.value);' data-toggle='modal' data-target='#myModal1'>Ver Vacantes</button></td>
                                    </tr>
                                    <?php 
                                    if ($cuenta==0){
                                        $javaArray.="'" . $prueba->id . "'";
                                        $javaArray2.="'Vacantes disponibles prueba: " . $prueba->nombre_prueba . "'";
                                    }else{
                                        $javaArray.=", '" . $prueba->id . "'";
                                        $javaArray2.=", 'Vacantes disponibles prueba: " . $prueba->nombre_prueba . "'";
                                    } 
                                    $cuenta++;
                                    ?>
                                @endforeach                               
                                <?php $javaArray.="]"; $javaArray2.="]";?>
                                </tbody>
                            </table>
                            <script>
                            function filterTable(value) { 
                                var lineaTabla = <?php echo $javaArray; ?>;
                                var nombrePrueba = <?php echo $javaArray2; ?>;
                                for (i=0;i<lineaTabla.length;i++){
                                    if (lineaTabla[i]==value){
                                       document.getElementById("myModalLabel").innerHTML=nombrePrueba[i];
                                       var a = document.getElementsByName(lineaTabla[i]);                                       
                                       for (j=0;j<a.length;j++){  
                                           a[j].style.display = '';                                       
                                       }
                                    }else{
                                       var b = document.getElementsByName(lineaTabla[i]);
                                       for (k=0;k<b.length;k++){
                                            b[k].style.display = 'none';
                                       }
                                    }
                                }                               
                            }                        
                            </script>                            
                            <!-- Modal -->
                            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <form action="#" method="POST">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"></h4>
                                        </div>
                                        <div class="modal-body">
                                                                                                                                       
                                                <table width="100%" class="table table-striped table-bordered table-hover" >                                
                                                    <thead>
                                                        <tr>
                                                            <th>Cargo</th>
                                                            <th>Municipio y Departamento de Aplicación</th>
                                                            <th>Vacantes Requeridas</th>
                                                            <th>Max. Aplicaciones</th>
                                                            <th>Editar</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach ($vacantes as $vacante)                              
                                                    <tr  name='{{ $vacante->id_prueba }}'>
                                                           <td align='center'>{{ $vacante->nombreCargo }}</td>
                                                           <td align='center'>{{ $vacante->municipio }} ({{ $vacante->departamento}})</td>
                                                           <td align='center'>{{ $vacante->cant_vacantes }}</td>
                                                           <td align='center'>{{ ceil($vacante->cant_postulaciones) }}</td>
                                                           <td align='center' class='bot'><a href='{{ route('descripcionCargoVista', ['vacante'=> $vacante->id_vacante]) }}'><button type='button' class='btn btn-success'>Postularse</button></a></td>
                                                        </tr>                                
                                                    @endforeach        
                                                    </tbody>
                                                </table>                                             
                                            
                                        </div>
                                    </form>
                                        
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                        </div>
                        <!-- /.panel-body -->
                    </div>                 
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        @endif
        
@endsection  

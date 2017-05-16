@extends('layouts.users')

@section('content')        

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Experiencia en Logística de Aplicación de Exámenes</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">
                            <form role="form" action="{{ route('updateExperienciaSIS') }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}                                
                                <div class="row">
                                    <div align="center" class="col-lg-4">                                       
                                        <div class="form-group">
                                            <label>Ha participado en logistica de aplicación de examenes.</label>
                                            {{ Form::select('experienciaSIS', ['Si' => 'Si', 'No' => 'No'], Auth::user()->experienciaSIS, ['class' => 'form-control', 'id' => 'experienciaSIS'])}}
                                        </div>
                                    </div>
                                    <?php $disabled = '';?>
                                    @if(Auth::user()->experienciaSIS=='No')
                                      <?php $disabled = 'disabled'; ?>
                                    @endif                                 
                                    <div align="center" class="col-lg-4">
                                        <div class="form-group">
                                            <br><label>Desde</label>
                                            <div class="controls input-append date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" >
                                                <input type="text" value="{{ Auth::user()->desdeExperienciaSIS }}" name="desdeExperienciaSIS" class="form-control" placeholder="YYYY-MM-DD" id="desdeExperienciaSIS" {{ $disabled }} pattern="[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])" title="Formato YYYY/MM/DD Ej: 1900/12/24" >
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <span class="add-on"><i class="icon-th"></i></span>
                                            </div>                                              
                                        </div>                                        
                                    </div>
                                    <div align="center" class="col-lg-4">
                                        <div class="form-group">
                                            <br><label>hasta</label>
                                            <div class="controls input-append date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" >
                                                <input type="text" value="{{ Auth::user()->hastaExperienciaSIS }}" name="hastaExperienciaSIS" class="form-control" placeholder="YYYY-MM-DD" id="hastaExperienciaSIS" {{ $disabled }} pattern="[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])" title="Formato YYYY/MM/DD Ej: 1900/12/24" >
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <span class="add-on"><i class="icon-th"></i></span>
                                            </div>                                                                                          
                                        </div>                                        
                                    </div>
                                    <div align="center" class="col-lg-12"> 
                                        <br><label>Describa las tres últimas pruebas en las que ha participado</label><br>
                                    </div>                                       
                                    <div class="col-lg-6">
                                        <div class="panel panel-success">
                                            <div class="panel-heading">
                                                Prueba 1
                                            </div>
                                            <div class="panel-body">                                                
                                                <div class="form-group">
                                                    <label>Cargo Desempeñado</label>
                                                    {{ Form::select('CargoSIS1',$cargos, Auth::user()->CargoSIS1, ['class' => 'form-control', 'id' => 'CargoSIS1', $disabled])}}
                                                </div>
                                                <label>Prueba</label>
                                                <div class="form-group input-group">                                                    
                                                    <input id="NombrePrueba1" name="NombrePrueba1"  value="{{ Auth::user()->NombrePrueba1 }}" class="form-control" readonly>
                                                    <span class="input-group-btn">
                                                        <button id="botonprueba1" value="1" class="btn btn-default" type="button" data-toggle="modal" data-target="#myModal1" {{ $disabled }} onclick='updateidprueba(this.value);'><i class="fa fa-search"></i>
                                                        </button>
                                                    </span>
                                                </div>                                                                                                
                                            </div>
                                        </div> 
                                    </div>    
                                    <div class="col-lg-6">
                                        <div class="panel panel-success">
                                            <div class="panel-heading">
                                                Prueba 2
                                            </div>
                                            <div class="panel-body">                                                
                                                <div class="form-group">
                                                    <label>Cargo Desempeñado</label>
                                                    {{ Form::select('CargoSIS2',$cargos, Auth::user()->CargoSIS2, ['class' => 'form-control', 'id' => 'CargoSIS2', $disabled])}}
                                                </div> 
                                                <label>Prueba</label>
                                                <div class="form-group input-group">                                                    
                                                    <input id="NombrePrueba2" name="NombrePrueba2"  value="{{ Auth::user()->NombrePrueba2 }}" class="form-control" readonly>
                                                    <span class="input-group-btn">
                                                        <button id="botonprueba2" value="2" class="btn btn-default" type="button" data-toggle="modal" data-target="#myModal1" {{ $disabled }} onclick='updateidprueba(this.value);'><i class="fa fa-search"></i>
                                                        </button>
                                                    </span>
                                                </div>                                                                                              
                                            </div>
                                        </div>
                                    </div>    
                                    <div class="col-lg-6">
                                        <div class="panel panel-success">
                                            <div class="panel-heading">
                                                Prueba 3
                                            </div>
                                            <div class="panel-body">                                        
                                                <div class="form-group">
                                                    <label>Cargo Desempeñado</label>
                                                    {{ Form::select('CargoSIS3',$cargos, Auth::user()->CargoSIS3, ['class' => 'form-control', 'id' => 'CargoSIS3', $disabled])}}
                                                </div> 
                                                <label>Prueba</label>
                                                <div class="form-group input-group">                                                    
                                                    <input id="NombrePrueba3" name="NombrePrueba3"  value="{{ Auth::user()->NombrePrueba3 }}" class="form-control" readonly>
                                                    <span class="input-group-btn">
                                                        <button id="botonprueba3" value="3" class="btn btn-default" type="button" data-toggle="modal" data-target="#myModal1" {{ $disabled }} onclick='updateidprueba(this.value);'><i class="fa fa-search"></i>
                                                        </button>
                                                    </span>
                                                </div>  
                                            </div>
                                        </div>       
                                    </div>    
                                    <div class="col-lg-6">                                        
                                        <div class="form-group">
                                            <label>Puede participar en pruebas entre semana?</label><br>
                                            {{ Form::select('PruebasEntreSemana', ['' => '', 'Si' => 'Si', 'No' => 'No'], Auth::user()->PruebasEntreSemana, ['class' => 'form-control', 'id' => 'PruebasEntreSemana', 'required'])}}
                                        </div>
                                        <div class="form-group">
                                            <label>Puede participar en pruebas fuera de la ciudad?</label><br>
                                            {{ Form::select('PruebasFueraBogota', ['' => '', 'Si' => 'Si', 'No' => 'No'], Auth::user()->PruebasFueraBogota, ['class' => 'form-control', 'id' => 'PruebasFueraBogota', 'required'])}}
                                        </div>
                                    </div>    
                                    <div align="center" class="col-lg-12">                                        
                                        <div align="center">
                                            <button type="submit" class="btn btn-success">Guardar</button>
                                            <a href="{{route('referencias')}}"><button type="button" class="btn btn-default">Siguiente</button></a>
                                        </div>
                                    </div>
                                </div>
                            <!-- /.row (nested) -->                                    
                            </form>
                            <script>
                            function inputdisable(value) {
                                if (value=='No'){
                                     document.getElementById("desdeExperienciaSIS").disabled = true;
                                     document.getElementById("hastaExperienciaSIS").disabled = true;
                                     document.getElementById("CargoSIS1").disabled = true;                                                                                              
                                     document.getElementById("CargoSIS2").disabled = true;                                                                                                
                                     document.getElementById("CargoSIS3").disabled = true;                                                 
                                     document.getElementById('botonprueba1').setAttribute("disabled","disabled"); 
                                     document.getElementById('botonprueba2').setAttribute("disabled","disabled"); 
                                     document.getElementById('botonprueba3').setAttribute("disabled","disabled");
                                     document.getElementById("desdeExperienciaSIS").value = "";
                                     document.getElementById("hastaExperienciaSIS").value = "";
                                     document.getElementById("CargoSIS1").value = "";                                                                                              
                                     document.getElementById("CargoSIS2").value = "";                                                                                                
                                     document.getElementById("CargoSIS3").value = "";                                                
                                     document.getElementById("NombrePrueba1").value = "";
                                     document.getElementById("NombrePrueba2").value = "";
                                     document.getElementById("NombrePrueba3").value = "";
                                }else{
                                     document.getElementById("desdeExperienciaSIS").disabled = false;
                                     document.getElementById("hastaExperienciaSIS").disabled = false;
                                     document.getElementById("CargoSIS1").disabled = false;                                                                                                  
                                     document.getElementById("CargoSIS2").disabled = false;                                                                                                
                                     document.getElementById("CargoSIS3").disabled = false;                                                 
                                     document.getElementById('botonprueba1').removeAttribute("disabled");
                                     document.getElementById('botonprueba2').removeAttribute("disabled");
                                     document.getElementById('botonprueba3').removeAttribute("disabled");
                                }
                            } 
                            var idnombreprueba;
                            function updateidprueba(value) {
                                idnombreprueba = value;
                            }   
                            function setprueba(value) {                           
                                if (idnombreprueba==1){
                                    document.getElementById("NombrePrueba1").value = value;
                                }else if(idnombreprueba==2){
                                    document.getElementById("NombrePrueba2").value = value;                                   
                                }else if(idnombreprueba==3){
                                    document.getElementById("NombrePrueba3").value = value;                                   
                                }                                
                            }   
                            $('#experienciaSIS').on('change', function(){ 
                                inputdisable(this.value);
                            });                             
                            </script>                               
                            <!-- Modal -->
                            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Listado de Pruebas</h4>
                                        </div>
                                        <div class="modal-body">
                                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">                                
                                                <thead>
                                                    <tr>
                                                        <th>Nombre Prueba</th>
                                                        <th>Cliente</th>
                                                        <th>Fecha de Aplicación</th>
                                                        <th>Insertar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($pruebas as $prueba)
                                                    <tr class='odd gradeX'>
                                                        <td>{{$prueba->nombre_prueba}}</td>
                                                        <td>{{$prueba->nombreCliente}}</td> 
                                                        <td>{{$prueba->fecha_inicio}}</td>
                                                        <td class='bot'><button type='button' value="{{$prueba->id}} - {{$prueba->nombre_prueba}} - {{$prueba->fecha_inicio}}" class='btn btn-success' onclick='setprueba(this.value);' data-dismiss='modal'>Insertar</button></td>
                                                    </tr>  
                                                @endforeach
                                                </tbody>
                                            </table>                                            
                                            
                                        </div>                            
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
@endsection
@extends('layouts.users')

@section('content')              
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Referencias Laborales/Personales</h1>
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
                            <div class="row">
                                <form role="form" action="{{ route('updateReferencias')}}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('PATCH') }}                                      
                                    <div class="col-lg-6"> 
                                        <div class="panel panel-success">
                                            <div class="panel-heading">
                                                Digite los datos de una referencia personal
                                            </div>
                                            <div class="panel-body">                                                                                 
                                                <div class="form-group">
                                                    <label>Nombres:</label>
                                                    <input name="NombreRefPersonal" value="{{ Auth::user()->NombreRefPersonal }}" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Apellidos</label>
                                                    <input name="ApellidosRefPersonal" value="{{ Auth::user()->ApellidosRefPersonal }}" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Dirección de Residencia</label>
                                                    <input name="direccionResidenciaRefPersonal" value="{{ Auth::user()->direccionResidenciaRefPersonal }}" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Teléfono de Residencia</label>
                                                    <input name="telefonoResidenciaRefPersonal" value="{{ Auth::user()->telefonoResidenciaRefPersonal }}" class="form-control" type='tel' pattern='[0-9]{7}' placeholder='Formato: 6333333' title='Formato EJ: 4333333' required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Número Celular</label>
                                                    <input name="celularRefPersonal" value="{{ Auth::user()->celularRefPersonal }}" class="form-control" type='tel' pattern='[3]{1}[0-9]{9}' placeholder='Formato: 3999999999' title='Formato EJ: 3153333333' required>
                                                </div>
                                            </div>
                                        </div>                                                                                      
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="panel panel-success">
                                            <div class="panel-heading">
                                                Digite los datos de un Contacto en caso de emergencias
                                            </div>
                                            <div class="panel-body">                                                                               
                                                 <div class="form-group">
                                                    <label>Nombres:</label>
                                                    <input name="NombreRefEmergencia" value="{{ Auth::user()->NombreRefEmergencia }}" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Apellidos</label>
                                                    <input name="ApellidosRefEmergencia" value="{{ Auth::user()->ApellidosRefEmergencia }}" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Dirección de Residencia</label>
                                                    <input name="direccionResidenciaRefEmergencia" value="{{ Auth::user()->direccionResidenciaRefEmergencia }}" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Teléfono de Residencia</label>
                                                    <input name="telefonoResidenciaRefEmergencia" value="{{ Auth::user()->telefonoResidenciaRefEmergencia }}" class="form-control" type='tel' pattern='[0-9]{7}' placeholder='Formato: 6333333' title='Formato EJ: 4333333' required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Número Celular</label>
                                                    <input name="celularRefEmergencia" value="{{ Auth::user()->celularRefEmergencia }}" class="form-control" type='tel' pattern='[3]{1}[0-9]{9}' placeholder='Formato: 3999999999' title='Formato EJ: 3153333333' required>
                                                </div>                                    
                                            </div>
                                        </div>                                                                                      
                                    </div>                                   
                                    <div class="col-lg-6">                                        
                                        <div class="panel panel-success">
                                            <div class="panel-heading">
                                                Recomendado de la Compañía
                                            </div>
                                            <div class="panel-body">  
                                                <div class="form-group">
                                                    <label>Conoce una persona dentro de la compañía que lo recomiende?</label>
                                                    {{ Form::select('RecomendadoTGS', ['Si' => 'Si', 'No' => 'No'], Auth::user()->RecomendadoTGS, ['class' => 'form-control', 'id' => 'RecomendadoTGS'])}}
                                                </div>  
                                                <?php $disabled = '';?>
                                                @if(Auth::user()->RecomendadoTGS=='No')
                                                  <?php $disabled = 'disabled'; ?>
                                                @endif                                                   
                                                <div class="form-group">
                                                    <label>Nombres:</label>
                                                    <input id="NombreRecomendado" name="NombreRecomendado" value="{{ Auth::user()->NombreRecomendado }}" class="form-control" {{ $disabled }}>
                                                </div>
                                                <div class="form-group">
                                                    <label>Apellidos</label>
                                                    <input id="ApellidosRecomendado" name="ApellidosRecomendado" value="{{ Auth::user()->ApellidosRecomendado }}" class="form-control" {{ $disabled }}>
                                                </div>
                                                <div class="form-group">
                                                    <label>Número Celular</label>
                                                    <input id="CelularRecomendado" name="CelularRecomendado" value="{{ Auth::user()->CelularRecomendado }}" class="form-control" {{ $disabled }} pattern='[3]{1}[0-9]{9}' placeholder='Formato: 3999999999' title='Formato EJ: 3153333333'>
                                                </div>
                                                <div class="form-group">
                                                    <label>Area donde Trabaja</label>
                                                    <input id="AreaRecomendado" name="AreaRecomendado" value="{{ Auth::user()->AreaRecomendado }}" class="form-control" {{ $disabled }}>
                                                </div>
                                            </div>                                            
                                        </div>                                                                                      
                                    </div>                                                   
                                    <div class="col-lg-12" align="center"><button type="submit" class="btn btn-success">Guardar</button></div>                                                                                                                                              
                                </form>
                                <script>                                   
                                function inputdisable(value) {
                                    if (value=='No'){
                                         document.getElementById("NombreRecomendado").disabled = true;
                                         document.getElementById("ApellidosRecomendado").disabled = true;
                                         document.getElementById("CelularRecomendado").disabled = true;
                                         document.getElementById("AreaRecomendado").disabled = true;
                                         document.getElementById("NombreRecomendado").value = "";
                                         document.getElementById("ApellidosRecomendado").value = "";
                                         document.getElementById("CelularRecomendado").value = "";
                                         document.getElementById("AreaRecomendado").value = "";
                                    }else{
                                         document.getElementById("NombreRecomendado").disabled = false;
                                         document.getElementById("ApellidosRecomendado").disabled = false;
                                         document.getElementById("CelularRecomendado").disabled = false;
                                         document.getElementById("AreaRecomendado").disabled = false;
                                    }
                                }
                                $('#RecomendadoTGS').on('change', function(){ 
                                    inputdisable(this.value);
                                });                                 
                                </script>                                 
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
@endsection
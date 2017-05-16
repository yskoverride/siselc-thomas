@extends('layouts.users')

@section('content')      

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Experiencia Laboral</h1>
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
                                <div class="col-lg-6">                                      
                                    <form role="form" action="{{ route('updateExperiencia') }}" method="POST">  
                                        {{ csrf_field() }}
                                        {{ method_field('PATCH') }}                                        
                                        <div class="form-group">
                                            <label>Cuenta usted con experiencia laboral</label>
                                            {{ Form::select('experienciaFormal', ['Si' => 'Si', 'No' => 'No'], Auth::user()->experienciaFormal, ['class' => 'form-control', 'id' => 'experienciaFormal'])}}
                                        </div> 
                                        <div class="form-group">
                                            <?php $disabled = ''; $readonly = '';?>
                                            @if(Auth::user()->experienciaFormal=='No')
                                              <?php $disabled = 'disabled'; ?>
                                            @endif
                                            @if(Auth::user()->empresaTGS!='No aplica')
                                              <?php $readonly = 'readonly'; ?>
                                            @endif
                                            <label>Trabaja Actualmente en alguna de las empresas de este listado</label>
                                            {{ Form::select('empresaTGS', $empresas, Auth::user()->empresaTGS, ['class' => 'form-control', 'id' => 'empresaTGS', $disabled])}} 
                                        </div>                                         
                                        <div class="form-group">
                                            <label>Ultima Empresa donde trabaja o trabajó</label>
                                            <input id="UltimaEmpresa" name="UltimaEmpresa" value="{{ Auth::user()->UltimaEmpresa }}" class="form-control" {{ $disabled }} {{ $readonly }} >
                                        </div>
                                        <div class="form-group">
                                            <label>Cargo</label>
                                            <input id="Cargo" name="Cargo" value="{{ Auth::user()->Cargo }}" class="form-control" {{ $disabled }}>
                                        </div>
                                        <div class="form-group">
                                            <label>Antiguedad</label>
                                            {{ Form::select('Antiguedad', ['' => '', 'Menos de 6 meses' => 'Menos de 6 meses', '6 meses' => '6 meses', '1 año' => '1 año', '2 años' => '2 años', '3 años' => '3 años', '4 años' => '4 años', '5 años' => '5 años', 'Mas de 5 años' => 'Mas de 5 años'], Auth::user()->Antiguedad, ['class' => 'form-control', 'id' => 'Antiguedad', $disabled])}}                                          
                                        </div>                                       
                                        <div class="form-group">
                                            <label>Dirección Empresa</label>
                                            <input id="DireccionEmpresa" name="DireccionEmpresa" value="{{ Auth::user()->DireccionEmpresa }}" class="form-control" {{ $disabled }}>
                                        </div>
                                        <div class="form-group">
                                            <label>Teléfono Empresa</label>
                                            <input id="TelefenoEmpresa" name="TelefenoEmpresa" value="{{ Auth::user()->TelefenoEmpresa }}" class="form-control" {{ $disabled }} type='tel' pattern='[0-9]{7,10}' placeholder='Formato: 6333333 o 3999999999' title='Formato EJ: 4666666 o 3153333333'>
                                        </div>

                                        <div align="center">
                                            <button type="submit" class="btn btn-success">Guardar</button>
                                            <a href="{{route('experienciaSIS') }}"><button type="button" class="btn btn-default">Siguiente</button></a>
                                        </div>                                          
                                    </form>
                                    <script>                                   
                                    function inputdisable(value) {
                                        if (value=='No'){
                                             document.getElementById("UltimaEmpresa").disabled = true;
                                             document.getElementById("Cargo").disabled = true;
                                             document.getElementById("Antiguedad").disabled = true;
                                             document.getElementById("DireccionEmpresa").disabled = true;
                                             document.getElementById("TelefenoEmpresa").disabled = true;
                                             document.getElementById("empresaTGS").disabled = true;
                                             document.getElementById("UltimaEmpresa").value = "";
                                             document.getElementById("Cargo").value = "";
                                             document.getElementById("Antiguedad").value = "";
                                             document.getElementById("DireccionEmpresa").value = "";
                                             document.getElementById("TelefenoEmpresa").value = "";
                                             document.getElementById("empresaTGS").value = "No aplica";
                                        }else{
                                             document.getElementById("UltimaEmpresa").disabled = false;
                                             document.getElementById("Cargo").disabled = false;
                                             document.getElementById("Antiguedad").disabled = false;
                                             document.getElementById("DireccionEmpresa").disabled = false;
                                             document.getElementById("TelefenoEmpresa").disabled = false;
                                             document.getElementById("empresaTGS").disabled = false;
                                        }
                                    }  
                                    function inputdisable2(value) {
                                        if (value=='No aplica'){
                                             document.getElementById("UltimaEmpresa").readOnly  = "";
                                             document.getElementById("UltimaEmpresa").value = "";
                                        }else{
                                             document.getElementById("UltimaEmpresa").readOnly = "true";
                                             document.getElementById("UltimaEmpresa").value = value;
                                        }
                                    }                                       
                                    $('#experienciaFormal').on('change', function(){ 
                                        inputdisable(this.value);
                                    });   
                                    $('#empresaTGS').on('change', function(){ 
                                        inputdisable2(this.value);
                                    });                                       
                                    </script>                                     
                                </div>
                                <!-- /.col-lg-6 (nested) -->
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
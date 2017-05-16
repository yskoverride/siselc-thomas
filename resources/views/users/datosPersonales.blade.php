@extends('layouts.users')

@section('content')    

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Datos Personales</h1>
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
                            <form role="form" action="{{ route('updateDatosPersonales') }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}
                                <div class="row">
                                    <div align="center">
                                        <label>Subir Foto</label>
                                        <input type="file" name="foto"><img width="100" src="{{ asset('img') }}\{{ Auth::user()->foto }}" />
                                    </div>
                                    
                                    <div class="col-lg-6">    
                                        <div class="form-group">
                                                <label for="disabledSelect">Nombres</label>
                                                <input class="form-control" value="{{ Auth::user()->name }}"  id="disabledInput" type="text" placeholder="Disabled input" disabled>
                                        </div>
                                    </div>    
                                    <div class="col-lg-6"> 
                                        <div class="form-group">
                                            <label for="disabledSelect">Apellidos</label>
                                            <input class="form-control" value="{{ Auth::user()->lastName }}" id="disabledInput" type="text" placeholder="Disabled input" disabled>
                                        </div>
                                    </div>                                                                            
                                    <div class="col-lg-6">     
                                        <div class="form-group">
                                                <label for="disabledSelect">Documento de Identidad</label>
                                                <input class="form-control" value="{{ Auth::user()->DocIdentidad }}"  id="disabledInput" type="text" placeholder="Disabled input" disabled>
                                        </div>
                                    </div>  
                                    <div class="col-lg-6">     
                                        <div class="form-group">
                                            <label>Lugar de Expedición del Documento:</label>
                                            <input name="DocExpedicion" value="{{ Auth::user()->DocExpedicion }}" class="form-control" placeholder="Lugar de Expedición" required>
                                        </div>
                                    </div>                                                        
                                    <div class="col-lg-6">                                       
                                        <div class="form-group">
                                            <label>Fecha de Nacimiento:</label>                                            
                                            <div class="controls input-append date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" >
                                                <input type="text" value="{{ Auth::user()->FechaNacimiento }}" name="FechaNacimiento" class="form-control" placeholder="YYYY-MM-DD" pattern="[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])" title="Formato YYYY/MM/DD Ej: 1900/12/24" required>
                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                <span class="add-on"><i class="icon-th"></i></span>
                                            </div>                                                                                    
                                        </div>
                                    </div> 
                                    <script>                                   
                                    function inputdisable(value) {
                                        if (value=='Femenino'){
                                             document.getElementById("LibretaMilitar").disabled = true;
                                             document.getElementById("LibretaMilitar").value = "";
                                        }else{
                                            document.getElementById("LibretaMilitar").disabled = false;
                                        }
                                    }                        
                                    </script>   
                                    <div class="col-lg-6">     
                                        <div class="form-group">
                                            <label>Sexo</label>
                                            {{ Form::select('sexo', ['Masculino' => 'Masculino', 'Femenino' => 'Femenino'], Auth::user()->sexo, ['class' => 'form-control', 'id' => 'sexo'])}}
                                        </div>
                                    </div>                                     
  	                            <div class="col-lg-6">     
                                        <div class="form-group">
                                            <label>Libreta Militar:</label>
                                            @if (Auth::user()->sexo == 'Femenino')
                                                <input id="LibretaMilitar" name="LibretaMilitar" value="{{ Auth::user()->LibretaMilitar }}" class="form-control" placeholder="Número Libreta Militar" disabled>
                                            @else
                                                <input id="LibretaMilitar" name="LibretaMilitar" value="{{ Auth::user()->LibretaMilitar }}" class="form-control" placeholder="Número Libreta Militar">
                                            @endif
                                        </div>
                                    </div>  
                                    <div class="col-lg-6">    
                                        <div class="form-group">
                                            <label>Dirección de Residencia:</label>
                                            <input name="DireccionResidencia" value="{{ Auth::user()->DireccionResidencia }}" class="form-control" placeholder="Dirección de Residencia" required>
                                        </div>
                                    </div>                                     
                                    <div class="col-lg-6">     
                                        <div class="form-group">
                                            <label>Departamento Residencia:</label>                                            
                                            {{ Form::select('DepartamentoResidencia', $departamentos, Auth::user()->DepartamentoResidencia, ['class' => 'form-control', 'id' => 'countrySelect'])}}                                           
                                        </div>
                                    </div>   
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Ciudad o municipio de Residencia:</label>                                            
                                            <select class="form-control" name="CiudadResidencia" id="citySelect" size="1" required>
                                                <option></option>
                                                @foreach ($municipios as $municipio)
                                                <option class="{{ $municipio->departamento }} muniopt" value="{{ $municipio->codigoMunicipio }}" <?php if ($municipio->codigoMunicipio==Auth::user()->CiudadResidencia){echo 'selected';}?>>{{ $municipio->municipio }}</option>
                                                @endforeach
                                            </select>                                            
                                        </div>
                                    </div>                                      
                                    .
                                    <script type="text/javascript">                                        
                                        function makeSubmenu(value) {
                                            $("#citySelect").val(null);
                                            $(".muniopt").hide();
                                            $('.'+value).show();
                                        }
                                        $('#countrySelect').on('change', function(){                                            
                                            makeSubmenu(this.value);
                                        });
                                        $('#sexo').on('change', function(){                                            
                                            inputdisable(this.value);
                                        });
                                    </script>                                     
                                    <div class="col-lg-6">     
                                        <div class="form-group">
                                            <label>Teléfono de Residencia:</label>
                                            <input name="TelefonoResidencia" value="{{ Auth::user()->TelefonoResidencia }}" class="form-control" type='tel' pattern='[0-9]{7}' placeholder='Formato: 6333333' title='Formato EJ: 4333333' required>
                                        </div>
                                    </div> 
                                    <div class="col-lg-6">     
                                        <div class="form-group">
                                            <label>Celular:</label>
                                            <input name="movilPersonal" value="{{ Auth::user()->movilPersonal }}" class="form-control" type='tel' pattern='[3]{1}[0-9]{9}' placeholder='Formato: 3999999999' title='Formato EJ: 3153333333' required>
                                        </div>
                                    </div>  
                                    <div class="col-lg-6">     
                                        <div class="form-group">
                                            <label>Nivel de Educación</label>
                                            {{ Form::select('NivelEducacion', ['Bachiller' => 'Bachiller','Técnico' => 'Técnico', 'Tecnólogo' => 'Tecnólogo', 'Pregrado' => 'Pregrado', 'Posgrado' => 'Posgrado'], Auth::user()->NivelEducacion, ['class' => 'form-control']) }}               
                                        </div>
                                    </div>  
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        <label>Soportes Educacion</label><input type="file" name="SoporteEducacion">
                                                @if (!empty(Auth::user()->SoporteEducacion))
                                                    <a href="{{ asset('img') }}\{{ Auth::user()->SoporteEducacion }}" download><p>Ver Documento Cargado</p></a>
                                                @else
                                                    <p class="help-block">Cargue los soportes en un solo archivo pdf.</p>
                                                @endif
                                        </div> 
                                    </div>                                    
                                    <div class="col-lg-6">     
                                        <div class="form-group">
                                            <label>Nombre del título obtenido:</label>
                                            <input name="tituloEducacion" value="{{ Auth::user()->tituloEducacion }}" class="form-control" placeholder="Nombre del título obtenido:" required>
                                        </div>
                                    </div>  
                                    <div class="col-lg-6">     
                                        <div class="form-group">
                                            <label>EPS a la que Pertenece:</label>
                                            <input name="eps" value="{{ Auth::user()->eps }}" class="form-control" placeholder="Nombre EPS:" required>
                                        </div>
                                    </div>                                     
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        <label>Certificado EPS</label><input type="file" name="certificadoEps">        
                                                @if (!empty(Auth::user()->certificadoEps))
                                                    <a href="{{ asset('img') }}\{{ Auth::user()->certificadoEps }}" download><p>Ver Documento Cargado</p></a>
                                                @else
                                                   <p class="help-block">Cargue los soportes en un solo archivo pdf.</p>                                                
                                                @endif                                                
                                        </div> 
                                    </div> 
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Subir Fotocopia Cedula</label><input type="file" name="ImagenDoc">                                           
                                            @if (!empty(Auth::user()->ImagenDoc))
                                                <a href="{{ asset('img') }}\{{ Auth::user()->ImagenDoc }}" ><p>Ver documento cargado</p></a>
                                            @else
                                                 <p class="help-block">Suba una imgen .JPG, JPEG, PNG y GIF no mayor a 500Kb</p>
                                            @endif
                                        </div>
                                    </div>   
                                </div>
                                <!-- /.row (nested) -->
                                <div align="center">
                                    <button type="submit" class="btn btn-success">Guardar</button>
                                    <a href='{{ route('experiencia') }}'><button type="button" class="btn btn-default">Siguiente</button></a>
                                </div>
                            </form>

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
@endsection                 
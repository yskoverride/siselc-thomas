@extends('layouts.users')

@section('content')
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"></h1>
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
                            <p class='lead' id="txt"></p>
                            <script>
                            startTime()
                            var s = {{$tiempo}};
                            function startTime() {                          
                                s--;
                                var min = Math.floor(s/60);
                                var h = Math.floor(min/60);
                                var m = min - (h*60);
                                var se = s - (m*60) - (h*60*60);
                                h=checkTime(h);
                                m=checkTime(m);
                                se=checkTime(se);
                                if (s==0){
                                    salir();
                                }
                                document.getElementById("txt").innerHTML =h+ ":" + m + ":" + se;
                                var t = setTimeout(function(){ startTime() }, 1000);
                            }
                            function salir(){
                                alert ("Se ha cumplido el tiempo limite para subir sus respuestas");
                                location.href="estadoPostulacion.php";
                            }
                            function checkTime(i) {
                                if (i<10) {
                                    i = "0" + i;
                                }
                                return i;
                            }
                            </script>

                            <form method="post" action="{{route('calificar')}}">
                                {{ csrf_field() }}                              
                                <?php $pregunta=1; ?>                                
                                @foreach ($preguntas as $registro)                                    
                                    @if($registro->categoria=='texto')                                        
                                       <div class='col-lg-12'><p><?php echo $registro->pregunta; ?></p></div><br><br><br><br>                                        
                                    @elseif($registro->categoria=='presentacion')                                        
                                       <div class='col-lg-12' align='center'><iframe width='900' height='500' src='{{$registro->pregunta}}'></iframe></div><br><br><br><br>                                                                               
                                    @elseif($registro->categoria=='video')                                        
                                       <div class='col-lg-12' align='center'><iframe width='600' height='400' src='{{asset('files/')}}/{{$registro->pregunta}}'></iframe></div><br><br><br><br>
                                    @elseif($registro->categoria=='imagen')
                                       <div class='col-lg-12' align='center'><img src='{{$registro->pregunta}}'></div> 
                                    @else
                                        <div class='col-lg-12'>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    Pregunta No. {{ $pregunta }}:
                                                </div>
                                                <div class="panel-body">
                                                    <p>{{$registro->pregunta}}</p>
                                                    <h4>Opciones de Respuesta:</h4>
                                                        <ul class='list-unstyled'>
                                                        <li>A) {{$registro->a}}</li>
                                                        <li>B) {{$registro->b}}</li>
                                                        <li>C) {{$registro->c}}</li>
                                                        <li>D) {{$registro->d}}</li>
                                                    </ul>     
                                                    <select name="respuesta[]" class='form-control'>
                                                        <option>-</option>
                                                        <option>A</option>
                                                        <option>B</option>
                                                        <option>C</option>
                                                        <option>D</option>
                                                    </select>
                                                    <input type='hidden' name='id_cargo' value='{{$postulacion->id_cargos}}'>
                                                    <input type='hidden' name='id_postulacion' value='{{$postulacion->id}}'>                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <?php $pregunta++; ?>
                                    @endif                                                                
                                @endforeach  
                                <div class='col-lg-12' align='center'><button type="submit" class="btn btn-success">Enviar Examen</button></div>
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
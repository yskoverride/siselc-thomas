
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Crear Evaluación</h1>
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
                                <form role="form" action="../../controllers/e-learning/evaluaciones_create.php" method="POST">
                                    <div class="col-lg-12">   
                                        <div class="form-group">
                                            <label>Tipo de Prueba</label>
                                            <select id="tipo" name="tipo" class="form-control" required>
                                                <option></option>
                                                <option>examen</option>
                                                <option>encuesta</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Nombre de la Prueba</label>
                                            <input name="nombreExamen" class="form-control cambioTipo" placeholder="Nombre de la Prueba">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                  	<div class="form-group">
                                            <label>Porcentaje Minimo de Aprobación</label>
                                            <input name="porcentajeAceptacion" class="form-control cambioTipoE" placeholder="Escriba un número entero del 0 a 100">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Tiempo Limite de la Prueba</label>
                                            <input name="tiempoLimite" class="form-control cambioTipoE" placeholder="Escriba un número entero con la cantidad de minutos">
                                        </div>                                                                              
                                    </div>
                                    <div class="col-lg-12" align="middle">
                                        <button type="submit" class='btn btn-success'>Crear</button>                            
                                    </div>                                                                                                                                                      
                                </form> 
                                <script>
                                    $('.cambioTipo').attr('readonly', true); 
                                    $('.cambioTipoE').attr('readonly', true); 
                                    $('#tipo').change(function (){
                                        if ($('#tipo').val()=='examen'){
                                            $('.cambioTipo').attr('readonly', false);
                                            $('.cambioTipoE').val(''); 
                                            $('.cambioTipoE').attr('readonly', false);                                            
                                        }else if($('#tipo').val()=='encuesta'){
                                            $('.cambioTipo').attr('readonly', false); 
                                            $('.cambioTipoE').val(0);
                                            $('.cambioTipoE').attr('readonly', true);
                                        }else{
                                            $('.cambioTipo').attr('readonly', true); 
                                            $('.cambioTipoE').attr('readonly', true);
                                            $('.cambioTipo').val(''); 
                                            $('.cambioTipoE').val('');                                            
                                        }
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
        </div>
        <!-- /#page-wrapper -->

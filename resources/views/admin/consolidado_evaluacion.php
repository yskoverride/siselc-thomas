        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Evaluación Call Center</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" align="right">
                        </div>
                        <div class="panel-body"> 
                        <!-- /.panel-heading -->
   
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-exampl">                                
                                    <thead>
                                        <tr>
                                            <th>Ponderado</th>                                             
                                            <th>Municipio</th>
                                            <th>Cargo</th>
                                            <th>Sitio</th>
                                            <th>Nombre Delegado</th>
                                            <th>Teléfonos</th>
                                            <th>D.I.</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php                                                 
                                    while ($personal=$resultado->fetch(PDO::FETCH_ASSOC)){                                                   
                                        echo "<tr class='odd gradeX'>";
                                            echo "<td align='center' class='bot'><button type='button' value='". $personal['id'] . " ' class='btn btn-success btn-circle' onclick='filterInputs(this.value);' data-toggle='modal' data-target='#myModal1' data-toggle='tooltip' data-placement='top' title='Agregar manualmente'>" . $personal['calificacionPonderado'] . "</button></td>";                                            
                                            echo "<td>". $personal['Municipio'] . " - " . $personal['departamento'] . "</td>";
                                            echo "<td>". $personal['nombreCargo'] . "</td>";
                                            echo "<td>". $personal['nombreSitio'] . "</td>";
                                            echo "<td>". $personal['name'] . " ". $personal['lastName'] . "</td>";
                                            echo "<td>". $personal['movilPersonal'] . " / ". $personal['TelefonoResidencia'] . "</td>";                                                                                                                                    
                                            echo "<td>". $personal['DocIdentidad'] . "</td>";
                                        echo "</tr>";                               
                                    }
                                    ?>
                                    </tbody>
                                </table>                                     
                                <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#myModal2">Generar Sanciones</button>                                              
                                                                                
                            <!-- Modal -->
                            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">                                        
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Calificaciones</h4>
                                        </div>  
                                        <div class="modal-body">
                                            <?php  while ($personal2=$resultado2->fetch(PDO::FETCH_ASSOC)): ?>
                                            <div class="postulacionHide" id="postulacion<?php echo $personal2['id'];?>">
                                                <div class="form-group">
                                                    <label for="disabledSelect">calificación Call: </label>
                                                    <input type="text" class="form-control" value="<?php echo $personal2['calificacionCall']; ?>" disabled/>
                                                </div>  
                                                <div class="form-group">
                                                   <label>Observaciones Call: </label>
                                                   <textarea name="observacionesCall" class="form-control" rows="3" disabled><?php echo $personal2['observacionesCall']; ?></textarea>
                                                </div>      
                                                <div class="form-group">
                                                    <label for="disabledSelect">calificación Jefe: </label>
                                                    <input type="text" class="form-control" value="<?php echo $personal2['calificacionJefe']; ?>" disabled/>
                                                </div>  
                                                <div class="form-group">
                                                   <label>Observaciones Jefe: </label>
                                                   <textarea name="observacionesCall" class="form-control" rows="3" disabled><?php echo $personal2['observacionesJefe']; ?></textarea>
                                                </div>  
                                                <div class="form-group">
                                                    <label for="disabledSelect">calificación HR: </label>
                                                    <input type="text" class="form-control" value="<?php echo $personal2['calificacionHR']; ?>" disabled/>
                                                </div>  
                                                <div class="form-group">
                                                   <label>Observaciones HR: </label>
                                                   <textarea name="observacionesCall" class="form-control" rows="3" disabled><?php echo $personal2['observacionesHR']; ?></textarea>
                                                </div>  
                                                <div class="form-group">
                                                    <label for="disabledSelect">calificación Cuadernillos: </label>
                                                    <input type="text" class="form-control" value="<?php echo $personal2['calificacionCUAD']; ?>" disabled/>
                                                </div>  
                                                <div class="form-group">
                                                   <label>Observaciones Cuad: </label>
                                                   <textarea name="observacionesCall" class="form-control" rows="3" disabled><?php echo $personal2['observacionesCUAD']; ?></textarea>
                                                </div>                                                  
                                            </div>
                                            <?php endwhile; ?>                                                
                                        </div>                                                                                                                                                                                                                                                                     
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>                                            
                                        </div>                                                                                                                        
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal --> 
                            
                            <!-- Modal -->
                            <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">  
                                        <form action="sancionar.php" method="POST">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel">Generar sanciones</h4>
                                            </div>  
                                            <div class="modal-body">
                                                <p>Los delegados por debajo de la nota escogida para esta prueba serán enviados al listado de sancionados y no podrán aplicar a pruebas futuras hasta tanto no sean retirados</p>
                                                <div class="form-group">
                                                    <label>Nota minima: </label>
                                                    <input type="number" step="0.1" min="1" max="5" name="notaMinima" id="notaMinima" class="form-control" value=3.5>
                                                    <input type="hidden" name="id_prueba" id="id_prueba" value="<?php echo $id_prueba; ?>">
                                                </div>  
                                            </div>                                                                                                                                                                                                                                                                     
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-success" >Sancionar</button> 
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>                                            
                                            </div> 
                                        </form>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->                             
                            <script>
                                function filterInputs(value){
                                    $('.postulacionHide').hide();
                                    $('#postulacion'+value).show();
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
        </div>

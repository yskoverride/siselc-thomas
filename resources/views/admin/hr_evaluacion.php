        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Evaluación Desempaque HR</h1>
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
                            <form action="asitencia_confirm.php" method="POST">    
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-exampl">                                
                                    <thead>
                                        <tr>
                                            <th>Evaluación HR</th>                                             
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
                                            echo "<td align='center' class='bot'><button type='button' value='". $personal['id'] . " ' class='btn btn-success btn-circle' onclick='filterInputs(this.value);' data-toggle='modal' data-target='#myModal1' data-toggle='tooltip' data-placement='top' title='Agregar manualmente'>" . $personal['calificacionHR'] . "</button></td>";                                            
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
                            </form>
                              
                            <div>
                                <a href="javascript:history.go(-1)"><button type="button" class="btn btn-default">Regresar</button></a>
                            </div>                                                   
                            <!-- Modal -->
                            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">                                        
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Calificación</h4>
                                        </div>  
                                        <div class="modal-body">
                                            <?php  while ($personal2=$resultado2->fetch(PDO::FETCH_ASSOC)): ?>
                                            <div class="postulacionHide" id="postulacion<?php echo $personal2['id'];?>">
                                            <form method="POST" action="evaluacionHR_update.php">
                                                <input class="form-control" value="<?php echo $personal2['id']; ?>"  name="id" type="hidden">  
                                                <div class="form-group">
                                                    <label for="disabledSelect">Calificación</label>
                                                    <select class="form-control postulacion1" name="calificacionHR" >
                                                        <option <?php if ($personal2['calificacionHR']==1){echo 'selected';} ?>>1</option>
                                                        <option <?php if ($personal2['calificacionHR']==2){echo 'selected';} ?>>2</option>
                                                        <option <?php if ($personal2['calificacionHR']==3){echo 'selected';} ?>>3</option>
                                                        <option <?php if ($personal2['calificacionHR']==4){echo 'selected';} ?>>4</option>
                                                        <option <?php if ($personal2['calificacionHR']==5){echo 'selected';} ?>>5</option>
                                                    </select>
                                                </div>  
                                                <div class="form-group">
                                                   <label>Observaciones</label>
                                                   <textarea name="observacionesHR" class="form-control" rows="3"><?php echo $personal2['observacionesHR']; ?></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Actualizar</button>
                                            </form>
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

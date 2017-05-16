        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Asistencia Personal</h1>
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
                            <div class="panel-group" id="accordion">
                            <?php
                            $i=0;
                            while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)): ?>                            
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>">Ruta: <?php echo $registro['ruta']; ?></a>
                                        </h4>
                                    </div>
                                    <div id="collapse<?php echo $i; $i++; ?>" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <form action="asitencia_confirm.php" method="POST">    
                                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">                                
                                                <thead>
                                                    <tr>
                                                        <th>Asist</th>
                                                        <th>Lider</th>
                                                        <th>Nombre Delegado</th>                                                        
                                                        <th>Municipio</th>
                                                        <th>Cargo</th>
                                                        <th>Sitio</th>
                                                        <th>Dierección</th>
                                                        <th>Email Delegado</th>
                                                        <th>Teléfonos Delegado</th>
                                                        <th>Mover</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php 
                                                $query->postulacion_asistencia_sucursal_ruta($id_prueba, $_SESSION["usuarioAdmin"]['id_sucursal'], $registro['ruta']);
                                                $personalRuta=$query->resultado;
                                                echo "<div hidden>";
                                                echo "<input type='text' name='id_prueba' value='" . $id_prueba . "' />"; 
                                                echo "<input type='text' name='ruta' value='" . $registro['ruta'] . "' />";
                                                echo "</div>";
                                                $lideres=0;
                                                while ($personal=$personalRuta->fetch(PDO::FETCH_ASSOC)){
                                                    $checked="";
                                                    
                                                    if ($personal['asistencia']!=0){$checked="checked";}
                                                    $checked2="";
                                                    if ($personal['lider']!=0){$checked2="checked"; $lideres++;}  
                                                    else if ($personal['cargoLider']==1){
                                                        if ($lideres==0){
                                                            $checked2="checked";
                                                            $lideres++;                                                        
                                                        }                                                       
                                                    }  
                                                    echo "<tr class='odd gradeX'>";
                                                        echo "<td align='center'><input name=" . '"listado[]"' . " type='checkbox' value=" . $personal['id'] . " $checked></td>";                                                  
                                                        echo "<td align='center'><input type='radio' name='lider' id='lider" . $personal['id'] . "' value=" . $personal['id'] . " $checked2></td>";
                                                        echo "<td>". $personal['name'] . " ". $personal['lastName'] . "</td>";                                                        
                                                        echo "<td>". $personal['Municipio'] . " - " . $personal['departamento'] . "</td>";
                                                        echo "<td>". $personal['nombreCargo'] . "</td>";
                                                        echo "<td>". $personal['nombreSitio'] . "</td>";
                                                        echo "<td>". $personal['direccionSitio'] . "</td>";
                                                        echo "<td>". $personal['email'] . "</td>";
                                                        echo "<td>". $personal['movilPersonal'] . " / ". $personal['TelefonoResidencia'] . "</td>";                                                                                        
                                                        echo "<td><button type='button' value='". $personal['id'] . "' class='btn btn-primary btn-sm' onclick='setvalue(this.value);' data-toggle='modal' data-target='#myModal1' data-toggle='tooltip' data-placement='top' title='Cambiar Cargo y/o Sitio'>Cambiar</button></td>";
                                                    echo "</tr>";                               
                                                }
                                                ?>
                                                </tbody>
                                            </table>
                                                <button type="submit" class="btn btn-primary btn-xs">Actualizar</button>    
                                            </form>
                                        </div>
                                    </div>
                                    <script>                                       
                                        function setvalue(value){
                                            $('#id_postulacion').val(value);                                                                                       
                                        }
                                        function setvalue2(value){
                                            $('#id_vacante').val(value);                                                                                       
                                        }                                        
                                    </script>    
                                    <!-- Modal -->
                                    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">                                        
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="myModalLabel">Mover a Vacante</h4>
                                                </div>
                                                <form action='vacante_change.php' method='POST'>
                                                <div class="modal-body">                                                    
                                                    <input id='id_postulacion' name='id_postulacion' type='hidden'/>                                                                              
                                                    <div class="form-group input-group">                                                    
                                                        <input id="id_vacante" name="id_vacante"  class="form-control" readonly>
                                                        <span class="input-group-btn">
                                                            <button id="botonprueba1" value="1" class="btn btn-default" type="button" data-toggle="modal" data-target="#myModal2" ><i class="fa fa-search"></i>
                                                            </button>
                                                        </span>
                                                    </div>                                                                                                                                                                  
                                                </div>                                                                                                                                                                                                                                                                     
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-success" >Cambiar</button>   
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>                                                                                                      
                                                </div>  
                                                </form>
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
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="myModalLabel">Mover a Vacante</h4>
                                                </div>  
                                                <div class="modal-body">
                                                    <table width="100%" class="table table-striped table-bordered table-hover" id="changetable">                                
                                                        <thead>
                                                            <tr>
                                                                <th>Ruta</th>                                        
                                                                <th>Cargo</th>
                                                                <th>Sitio</th>
                                                                <th>Cod. Sitio</th>
                                                                <th>Cambiar</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>                                                    
                                                        <?php  
                                                        $query->vacantes_prueba_sucursal($id_prueba, $_SESSION["usuarioAdmin"]['id_sucursal']);
                                                        $vacantes=$query->resultado;
                                                        while ($vacante=$vacantes->fetch(PDO::FETCH_ASSOC)){                              
                                                            echo "<tr class='odd gradeX'>";                                                                   
                                                                echo "<td align='center'>Ruta ". $vacante['ruta'] . "</td>";
                                                                echo "<td align='center'>". $vacante['nombreCargo'] . "</td>";
                                                                echo "<td align='center'>". $vacante['nombreSitio'] . "</td>";
                                                                echo "<td align='center'>". $vacante['codigoSitio'] . "</td>";
                                                                echo "<td align='center'>";
                                                                echo "<input name='id_vacante' type='hidden' value='". $vacante['id'] . "'/>";
                                                                echo "<input name='id_cargo' type='hidden' value='". $vacante['id_cargo'] . "'/>";
                                                                echo "<button class='btn btn-success' value='". $vacante['id'] . "' onclick='setvalue2(this.value);' data-dismiss='modal'>Seleccionar</button>";
                                                                echo "</td>";
                                                            echo "</tr>";                                         
                                                        }?>        
                                                        </tbody>
                                                    </table>                                                          
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
                                </div>                                                            
                            <?php endwhile; ?>
                            </div>
                            <div>
                                <a href="javascript:history.go(-1)"><button type="button" class="btn btn-default">Regresar</button></a>                                
                            </div> 
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->                    
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>

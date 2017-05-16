        <div id="page-wrapper">
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
                        <div class="panel-heading" align="right">

                        </div>
                        <div class="panel-body"> 
                        <!-- /.panel-heading -->
                            <form action="asitencia_confirm.php" method="POST">    
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-exampl">                                
                                    <thead>
                                        <tr>
                                            <th>Sucursal</>
                                            <th>Ruta</th>
                                            <th>Lider</th>
                                            <th>Cargo</th>
                                            <th>Contacto</th> 
                                            <th>Pendiente Evaluar</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
                                        $query->postulacion_rutas_lider($id_prueba, $registro['ruta'], $registro['id_sucursal']);
                                        $personalRuta=$query->resultado;                                        
                                        $lider=$personalRuta->fetch(PDO::FETCH_ASSOC);
                                        $cuentaLider=$query->cuentaRegistro;
                                        $query->postulacion_asistencia_sucursal_lider($id_prueba, $registro['id_sucursal'], $registro['ruta']);
                                        $pendiente=$query->cuentaRegistro;
                                        if ($pendiente==0){
                                            continue;
                                        } 
                                        if ($cuentaLider==1){
                                            echo "<tr class='odd gradeX'>";
                                                echo "<td>". $lider['agencia'] . "</td>";                                            
                                                echo "<td>". $registro['ruta'] . "</td>";
                                                echo "<td>" . $lider['name'] . " " .  $lider['lastName'] . "</td>";
                                                echo "<td>". $lider['nombreCargo'] . "</td>";
                                                echo "<td>" . $lider['email'] . " / " . $lider['movilPersonal'] . " / " . $lider['TelefonoResidencia'] . "</td>";
                                                echo "<td>". $pendiente . "</td>";
                                                echo "<td align='center' class='bot' width='10%'>"
                                                . "<button type='button' value='" . $registro['id_sucursal'] . $registro['ruta'] . "' class='btn btn-success btn-circle' onclick='filterTable(this.value);' data-toggle='modal' data-target='#myModal1' data-toggle='tooltip' data-placement='top' title='Agregar manualmente'><i class='fa fa-th-list'></i></button>"                                                   
                                                        . " <a href='correo_evaluacion?id_prueba=" . $id_prueba . "&id_sucursal=" . $registro['id_sucursal'] . "&ruta=" . $registro['ruta'] . "&email=" . $lider['email'] . "'><button type='button' class='btn btn-primary btn-circle' data-toggle='tooltip' data-placement='left' title='Definir selección y notificar via e-mail'><i class='fa fa-envelope'></i></button></a>"
                                                        . "</td>";                                                                                                                        
                                            echo "</tr>";                                            
                                        }else{
                                            $query->user_admin_sucursal($registro['id_sucursal']);
                                            $liderSucursal=$query->registro;
                                           
                                            echo "<tr class='odd gradeX'>";
                                                echo "<td>" . $liderSucursal['agencia'] . "</td>";                                            
                                                echo "<td>". $registro['ruta'] . "</td>";
                                                echo "<td>" . $liderSucursal['name'] . " " .  $liderSucursal['lastName'] . "</td>";
                                                echo "<td> Director Sucursal </td>";
                                                echo "<td>" . $liderSucursal['email'] . " / " . $liderSucursal['celular'] . " / " . $liderSucursal['telefono'] . "</td>";
                                                echo "<td>". $pendiente . "</td>";
                                                echo "<td align='center' class='bot' width='10%'>"
                                                . "<button type='button' value='" . $registro['id_sucursal'] . $registro['ruta'] . "' class='btn btn-success btn-circle' onclick='filterTable(this.value);' data-toggle='modal' data-target='#myModal1' data-toggle='tooltip' data-placement='top' title='Agregar manualmente'><i class='fa fa-th-list'></i></button>"                                                   
                                                        . " <a href='correo_evaluacion?id_prueba=" . $id_prueba . "&id_sucursal=" . $registro['id_sucursal'] . "&ruta=" . $registro['ruta'] . "&email=" . $liderSucursal['email'] .  "'><button type='button' class='btn btn-primary btn-circle' data-toggle='tooltip' data-placement='left' title='Definir selección y notificar via e-mail'><i class='fa fa-envelope'></i></button></a>"
                                                        . "</td>";                                                                                                                        
                                            echo "</tr>";                                               
                                        }                               
                                    }                                    
                                    ?>
                                    </tbody>
                                </table>                                     
                            </form>
                              
                            <div>
                                <a href="javascript:history.go(-1)"><button type="button" class="btn btn-default">Regresar</button></a>
                            </div>                                                   
                            <script>
                                function filterTable(value){                                   
                                    $('.hideTable').hide();
                                    $('.ruta'+value).show();
                                }
                            </script>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">                                        
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Calificación</h4>
                                        </div>  
                                        <div class="modal-body">
                                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-exampl">                                
                                                <thead>
                                                    <tr>
                                                        <th>Cargo</th>
                                                        <th>Sitio</th>
                                                        <th>Dierección</th>
                                                        <th>Nombre Delegado</th>
                                                    </tr>
                                                </thead>
                                                <tbody> 
                                                <?php 
                                                while ($personal=$personalAll->fetch(PDO::FETCH_ASSOC)){
                                                    echo "<tr class='odd gradeX hideTable ruta" . $personal['id_sucursal'] . $personal['ruta'] ."'>";
                                                        echo "<td>". $personal['nombreCargo'] . "</td>";
                                                        echo "<td>". $personal['nombreSitio'] . "</td>";
                                                        echo "<td>". $personal['direccionSitio'] . "</td>";
                                                        echo "<td>". $personal['name'] . " ". $personal['lastName'] . "</td>";                                                                                       
                                                    echo "</tr>";                                                    
                                                }                                                                                                        
                                                ?>
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
                        <!-- /.panel-body -->                    
                    </div>
                    <!-- /.panel -->                    
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
        </div>
  




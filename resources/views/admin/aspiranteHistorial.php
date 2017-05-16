        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Historial <?php echo $user['name'] . " " . $user['lastName'];?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">                                
                                <thead>
                                    <tr>
                                        <th>Prueba</th>
                                        <th>Fecha</th>
                                        <th>Calificacion Call</th>
                                        <th>Calificación Jefe</th>
                                        <th>Calificación HR</th>
                                        <th>Calificación CUAD</th>
                                        <th>Ponderado Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
                                    echo "<tr class='odd gradeX'>";
                                        echo "<td>". $registro['nombre_prueba'] . "</td>";
                                        echo "<td> <b>Del</b> ". $registro['fecha_inicio'] . " <b>al</b> " . $registro['fecha_final'] ."</td>";
                                        echo "<td> <b>Nota:</b> ". $registro['calificacionCall'] . " <b>Observ:</b> " . $registro['observacionesCall'] ."</td>";   
                                        echo "<td> <b>Nota:</b> ". $registro['calificacionJefe'] . " <b>Observ:</b> " . $registro['observacionesJefe'] ."</td>";  
                                        echo "<td> <b>Nota:</b> ". $registro['calificacionHR'] . " <b>Observ:</b> " . $registro['observacionesHR'] ."</td>"; 
                                        echo "<td> <b>Nota:</b> ". $registro['calificacionCUAD'] . " <b>Observ:</b> " . $registro['observacionesCUAD'] ."</td>"; 
                                        echo "<td align='center'><b>". $registro['calificacionPonderado'] . "</b></td>";
                                    echo "</tr>";                               
                                }
                                ?>
                                </tbody>
                            </table>
                                <div>
                                    <a href="javascript:history.go(-1)"><button type="button" class="btn btn-default">Cancelar</button></a>
                                    <a href="suspensionRetirar.php?id_user=<?php echo $user['id']; ?>"><button type="button" class="btn btn-danger" onclick="return confirm('Está Seguro?')">Retirar Suspención</button></a>
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





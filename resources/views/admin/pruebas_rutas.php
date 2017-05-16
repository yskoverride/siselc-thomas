        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Listado de Pruebas Asignación de Rutas</h1>
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
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-exampl">                                
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre Prueba</th>
                                        <th>Cliente</th>
                                        <th>Fecha de Aplicación</th>
                                        <th>Estado</th>
                                        <th>Selección</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
                                    echo "<tr class='odd gradeX'>";
                                        echo "<td>". $registro['id'] . "</td>";
                                        echo "<td>". $registro['nombre_prueba'] . "</td>";
                                        echo "<td>". $registro['nombreCliente'] . "</td>"; 
                                        echo "<td>". $registro['fecha_inicio'] . "</td>";
                                        echo "<td>". $registro['estado'] . "</td>";
                                        echo "<td class='bot'><a href='sitios_rutas.php?id_prueba=" . $registro['id'] . "'><button type='button' class='btn btn-success'>Asignar Rutas</button></a></td>";
                                    echo "</tr>";                               
                                }
                                ?>
                                </tbody>
                            </table>        
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
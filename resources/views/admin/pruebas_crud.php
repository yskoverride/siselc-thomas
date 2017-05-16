        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Listado de Pruebas</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1">Crear Prueba</button>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">               
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">                                
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre Prueba</th>
                                        <th>Cliente</th>
                                        <th>Fecha de Aplicación</th>
                                        <th>Estado</th>
                                        <th>Editar</th>
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
                                        echo "<td class='bot'><a href='pruebas_editar.php?id_pruebas=" . $registro['id'] . "'><button type='button' class='btn btn-success'>Editar</button></a></td>";
                                    echo "</tr>";                               
                                }
                                ?>
                                </tbody>
                            </table>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <form action="pruebas_create.php" method="POST">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Crear Sucursal</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Nombre Prueba</label>
                                                        <input name="nombre_prueba" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Cliente</label>
                                                        <select name="id_cliente" class="form-control">                             
                                                            <?php while ($registro=$resultado2->fetch(PDO::FETCH_ASSOC)){ 
                                                                echo "<option value='" . $registro['id'] . "'>". $registro['id'] . " - " . $registro['nombreCliente'] . "</option>";                                                                
                                                            }?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Fecha de Aplicación Inicial</label>
                                                        <input type="date" name="fecha_inicio" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Fecha de Aplicación Final</label>
                                                        <input type="date" name="fecha_final" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Fecha de Publicación Inicial</label>
                                                        <input type="date" name="fecha_publicacion" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Fecha de Publicación Final</label>
                                                        <input type="date" name="fecha_final_publicacion" class="form-control">
                                                    </div>
                                                </div>                                                                                              
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-primary">Crear Prueba</button>
                                        </div>
                                    </form>
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
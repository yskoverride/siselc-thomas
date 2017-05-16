        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Listado de Sucursales</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1">Crear Sucursal</button>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">               
                            <table width="100%" class="table table-striped table-bordered table-hover" >                                
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Agencia</th>
                                        <th>Director</th>
                                        <th>Celular</th>
                                        <th>Correo</th>
                                        <th>Editar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
                                    echo "<tr class='odd gradeX'>";
                                        echo "<td>". $registro['id'] . "</td>";
                                        echo "<td>". $registro['agencia'] . "</td>";
                                        echo "<td>". $registro['director'] . "</td>"; 
                                        echo "<td>". $registro['celular'] . "</td>";
                                        echo "<td>". $registro['correo'] . "</td>"; 
                                        echo "<td class='bot'><a href='sucursal_editar.php?id_sucursal=" . $registro['id'] . "'><button type='button' class='btn btn-success'>Editar</button></a></td>";
                                    echo "</tr>";                               
                                }
                                ?>
                                </tbody>
                            </table>

                            
                            <!-- Modal -->
                            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <form action="sucursal_create.php" method="POST">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Crear Sucursal</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label>Código Sucursal</label>
                                                    <input name="id" class="form-control">
                                                </div>                                                
                                                <div class="col-lg-6">
                                                    <label>Nombre Agencia</label>
                                                    <input name="agencia" class="form-control">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label>Director</label>
                                                    <input name="director" class="form-control">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label>Ind</label>
                                                    <input name="ind" class="form-control">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label>Teléfono</label>
                                                    <input name="telefono" class="form-control">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label>Fax</label>
                                                    <input name="fax" class="form-control">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label>Celular</label>
                                                    <input name="celular" class="form-control">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label>Correo</label>
                                                    <input name="correo" class="form-control">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label>Dirección</label>
                                                    <input name="direccion" class="form-control">
                                                </div>                                                                                               
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-primary">Crear Sucursal</button>
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
        






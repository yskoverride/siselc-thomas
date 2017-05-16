        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Cargos Creados</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="cargos_crear.php"><button type="button" class="btn btn-success">Crear Cargo</button></a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <form>
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                
                                <thead>
                                    <tr>
                                        <th>Id Cargo</th>
                                        <th>Nombre del Cargo</th>
                                        <th>Id Examen</th>
                                        <th>Editar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)){                              
                                    echo "<tr class='odd gradeX'>";
                                        echo "<td>". $registro['id'] . "</td>";
                                        echo "<td>". $registro['nombreCargo'] . "</td>";
                                        echo "<td>". $registro['id_examen'] . "</td>";
                                        echo "<td class='bot'><a href='cargos_editar.php?id=" . $registro['id'] . "'><button type='button' class='btn btn-success'>Editar</button></a></td>";
                                    echo "</tr>";                               
                                }
                                ?>
                                </tbody>
                            </table>
                        </form>
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




        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Listado de Evaluaciones</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="evaluaciones_crear.php"><button type="button" class="btn btn-success">Crear Evaluación</button></a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <form>
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">                                
                                <thead>
                                    <tr>
                                        <th>Id Evaluación</th>
                                        <th>Nombre Evaluación</th>
                                        <th>Tipo</th>
                                        <th>% min de Aporbación</th>
                                        <th>Tiempo Limite(min)</th>
                                        <th>Editar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)){                              
                                    echo "<tr class='odd gradeX'>";
                                        echo "<td>". $registro['id'] . "</td>";
                                        echo "<td>". $registro['nombreExamen'] . "</td>";
                                        echo "<td>". $registro['tipo'] . "</td>";
                                        echo "<td>". $registro['porcentajeAceptacion'] . "</td>";
                                        echo "<td>". $registro['tiempoLimite'] . "</td>";
                                        echo "<td class='bot'><a href='evaluaciones_editar.php?id_examen=" . $registro['id'] . "'><button type='button' class='btn btn-success'>Editar</button></a></td>";
                                    echo "</tr>";                               
                                }
                                ?>
                                </tbody>
                            </table>
                        <form>
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




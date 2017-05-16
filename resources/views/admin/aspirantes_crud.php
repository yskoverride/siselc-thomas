        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Estado de Postulaciones a Cargos</h1>
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
                        <form>
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Cargo</th>
                                        <th>Resultado Examen</th>
                                        <th>Nombre del Aspirante</th>
                                        <th>Verificar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php while ($registro=$resultado->fetch(PDO::FETCH_NUM)){
                                    echo "<tr class='odd gradeX'>";
                                        echo "<td>". $registro['0'] . "</td>";
                                        echo "<td>". $registro['1'] . "</td>";
                                        echo "<td>". $registro['2'] . "</td>";   
                                        echo "<td>". $registro['3'] . " " . $registro['4'] . "</td>";  
                                        echo "<td class='bot'><a href='aspirante_aceptar.php?id_user=" . $registro['5'] . "&id_postulacion=" . $registro['0'] . "'><button type='button' class='btn btn-success'>Verficar</button></a></td>";
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
        






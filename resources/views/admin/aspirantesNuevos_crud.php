        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Listado de Aspirantes Nuevos</h1>
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
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Correo</th>
                                        <th>Verificar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
                                    echo "<tr class='odd gradeX'>";
                                        echo "<td>". $registro['id'] . "</td>";
                                        echo "<td>". $registro['name'] . "</td>";
                                        echo "<td>". $registro['lastName'] . "</td>";   
                                        echo "<td>". $registro['email'] . "</td>";  
                                        echo "<td class='bot'><a href='aspiranteNuevo_aceptar.php?id_user=" . $registro['id'] . "'><button type='button' class='btn btn-success'>Habilitar Cargos</button></a></td>";
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
        






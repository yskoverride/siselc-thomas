        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Listado de Items</h1>
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
                                        <th>Id Item</th>
                                        <th>tipo de Item</th>
                                        <th>Título</th>
                                        <th>Insertar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)){                              
                                    echo "<tr class='odd gradeX ". $registro['categoria'] . "'>";
                                        echo "<td align='center' width='10%'>". $registro['id'] . "</td>";
                                        echo "<td align='center' width='20%'>". $registro['categoria'] . "</td>";
                                        echo "<td align='center' width='60%'>". $registro['titulo'] . "</td>";
                                        echo "<td align='center' width='10%' class='bot'><a href='preguntas_insert.php?id_pregunta=" . $registro['id'] . "&id_examen=" . $id_examen . "'><button type='button' class='btn btn-success'>Insertar</button></a></td>";
                                    echo "</tr>";                               
                                }
                                ?>
                                </tbody>
                            </table>
                           
                        
                        </div>
                        <!-- /.panel-body -->
                        <script>
                            if ('<?php echo $examen['tipo']; ?>'=='examen'){
                                $('.pregEncuesta').hide();
                                $('.pregAbierta').hide();
                            }else{
                                $('.pregunta').hide();
                                $('.video').hide();
                                $('.presentacion').hide();
                                $('.texto').hide();
                            }
                        </script>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->





x|        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Editar Evaluación</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="evaluaciones_vista.php?id_examen=<?php echo $examen['id'] ?>"><button type="button" class="btn btn-default">Vista Previa</button></a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <form action="evaluaciones_update.php" method="POST">
                            <table width="100%" class="table table-striped table-bordered table-hover">                                
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Nombre Evaluación</th>
                                        <th>% min de Aporbación</th>
                                        <th>Tiempo Limite(min)</th>
                                        <th>Actualizar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php                               
                                    echo "<tr class='odd gradeX'>";
                                        echo "<td>". $examen['id'] . "</td>";
                                        echo "<td><input id='nombreExamen' name='nombreExamen' class='form-control' value='". $examen['nombreExamen'] . "'></td>";
                                        echo "<td><input name='porcentajeAceptacion' class='form-control encuesta' value='". $examen['porcentajeAceptacion'] . "'></td>";
                                        echo "<td><input name='tiempoLimite' class='form-control encuesta' value='". $examen['tiempoLimite'] . "'></td>";  
                                        echo "<td><button type='submit' class='btn btn-success'>Actualizar</button></a></td>";
                                        echo "<td class='bot'><a href='evaluaciones_delete.php?id_examen=" . $examen['id'] . "'" . ' onclick="return confirm(' . "'Está seguro?'" . ')"' . "><button type='button' class='btn btn-danger'>Eliminar</button></a></td>";
                                    echo "</tr>";                               
                                ?>
                                </tbody>
                            </table>
                            <input name="id_examen" type="hidden" value="<?php echo $examen['id'] ?>">
                        <!--</form>-->
                        <!--<form action="evaluaciones_reorder.php" method="POST">-->
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">                                
                                <thead>
                                    <tr>
                                        <th style='display:none;'></th>
                                        <th>id Item</th>
                                        <th>Tipo de Item</th>
                                        <th>Titulo</th>
                                        <th>Orden</th>
                                        <th>Eliminar</th>
                                        <th style='display:none;'></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)){                              
                                    echo "<tr class='odd gradeX'>";
                                        echo "<td align='center' style='display:none;'>". $registro['orden'] . "</td>";
                                        echo "<td align='center' width='10%'>". $registro['id_pregunta'] . "</td>";
                                        echo "<td align='center' width='10%'>". $registro['categoria'] . "</td>";
                                        echo "<td align='center' width='55%'>". $registro['titulo'] . "</td>";
                                        echo "<td align='center' width='10%'><input name=" . '"orden[]"' . " class='form-control input-sm' value='". $registro['orden'] . "'></td>"; 
                                        echo "<td align='center' width='10%' class='bot'><a href='evaluaciones_qDelete.php?id=" . $registro['id'] . "'><button type='button' class='btn btn-warning'>Eliminar</button></a></td>";
                                        echo "<td align='center' style='display:none;'><input type='hidden' name=" . '"id_creacion_examen[]"' . " class='form-control input-sm' value='". $registro['id'] . "'></td>";
                                    echo "</tr>";                                 
                                }
                                ?>       
                                </tbody>
                            </table>
                            <input name="id_examen" type="hidden" value="<?php echo $examen['id'] ?>">
                        </form>
                            <a href='preguntas_insertar.php?id_examen=<?php echo $examen['id'] ?>'><button type="button" class="btn btn-primary btn-lg btn-block">Agregar Item a la Evaluación</button></a>
                         </div>
                        <!-- /.panel-body -->
                        <script>
                            if ('<?php echo $examen['tipo']?>'=='encuesta'){
                                $('.encuesta').attr('readonly', true);
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




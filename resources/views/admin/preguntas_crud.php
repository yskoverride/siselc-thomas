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
                             <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1">Crear Pregunta</button>
                             <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal2">Crear Texto</button>
                             <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal3">Crear Video</button>
                             <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal4">Crear Presentación</button>                             
                             <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal5">Crear Pregunta (E)</button>
                             <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal6">Crear Pregutna Abierta(E)</button>
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
                                    echo "<tr class='odd gradeX'>";
                                        echo "<td align='center' width='10%'>". $registro['id'] . "</td>";
                                        echo "<td align='center' width='20%'>". $registro['categoria'] . "</td>";
                                        echo "<td align='center' width='60%'>". $registro['titulo'] . "</td>";
                                        echo "<td align='center' width='10%' class='bot'><a href='preguntas_editar.php?id_pregunta=" . $registro['id'] . "'><button type='button' class='btn btn-success'>Editar</button></a></td>";
                                    echo "</tr>";                               
                                }
                                ?>
                                </tbody>
                            </table>                                                  
                       

                            <!-- Modal -->
                            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <form action="preguntas_create.php" method="POST">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Crear Pregunta</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group"><label>Título</label><input name="titulo"   class="form-control" placeholder="Titulo del Item"></div>
                                            <div class="form-group"><label>Pregunta:</label><textarea name="pregunta" class="form-control" rows="4" placeholder="Postule en este campo la pregunta"></textarea></div>
                                            <div class="col-lg-6"><div class="form-group"><label>A)</label><br><textarea name="a" class="form-coescripción de cargntrol" rows="4" cols="35" placeholder="Escriba en este campo la opcion de respuesta 'A'"></textarea></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>B)</label><br><textarea name="b" class="form-coescripción de cargntrol" rows="4" cols="35" placeholder="Escriba en este campo la opcion de respuesta 'B'"></textarea></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>C)</label><br><textarea name="c" class="form-coescripción de cargntrol" rows="4" cols="35" placeholder="Escriba en este campo la opcion de respuesta 'C'"></textarea></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>D)</label><br> <textarea name="d" class="form-coescripción de cargntrol" rows="4" cols="35" placeholder="Escriba en este campo la opcion de respuesta 'D'"></textarea></div></div>
                                            <div class="form-group"><label>Respuesta Correcta</label><select name="rta"  class="form-control">
                                                        <option>A</option>
                                                        <option>B</option>
                                                        <option>C</option>  
                                                        <option>D</option>  
                                                    </select>
                                                </div>
                                            <input type="hidden" name="categoria" value="pregunta">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-primary">Crear Pregunta</button>
                                        </div>
                                    </form>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->


                            
                            <!-- Modal -->
                            <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <form action="preguntas_create.php" method="POST">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Crear Texto</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group"><label>Título</label><input name="titulo"   class="form-control" placeholder="Titulo del Item"></div>
                                            <div class="form-group"><label>Texto:</label><textarea name="pregunta" class="form-control" rows="13" placeholder="Ingrese el texto"></textarea></div>
                                            <input type="hidden" name="a" value="NA">
                                            <input type="hidden" name="b" value="NA">
                                            <input type="hidden" name="c" value="NA">
                                            <input type="hidden" name="d" value="NA">
                                            <input type="hidden" name="rta" value="NA">
                                            <input type="hidden" name="categoria" value="texto">
                                        </div>                       
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-primary">Crear Texto</button>
                                        </div>
                                    </form>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->


                            <!-- Modal -->
                            <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <form action="preguntas_create.php" method="POST">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Crear Video</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group"><label>Título</label><input name="titulo"   class="form-control" placeholder="Titulo del Item"></div>
                                            <div class="form-group"><label>Link Video YOUTUBE</label><textarea name="pregunta" class="form-control" rows="2" placeholder="Ingrese el Link del Video"></textarea></div>
                                            <input type="hidden" name="a" value="NA">
                                            <input type="hidden" name="b" value="NA">
                                            <input type="hidden" name="c" value="NA">
                                            <input type="hidden" name="d" value="NA">
                                            <input type="hidden" name="rta" value="NA">
                                            <input type="hidden" name="categoria" value="video">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-primary">Crear Video</button>
                                        </div>
                                    </form>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
 
                            <!-- Modal -->
                            <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <form action="preguntas_create.php" method="POST" enctype="multipart/form-data">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Crear Presentación</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group"><label>Título</label><input name="titulo"   class="form-control" placeholder="Titulo del Item"></div>
                                            <div class="form-group"><label>Insertar Presentación</label><input name="pregunta" type="file"></div>
                                            <input type="hidden" name="a" value="NA">
                                            <input type="hidden" name="b" value="NA">
                                            <input type="hidden" name="c" value="NA">
                                            <input type="hidden" name="d" value="NA">
                                            <input type="hidden" name="rta" value="NA">
                                            <input type="hidden" name="categoria" value="presentacion">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-primary">Crear Presentación</button>
                                        </div>
                                    </form>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                            
                            <!-- Modal -->
                            <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <form action="preguntas_create.php" method="POST">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Crear Pregunta (Encuestas)</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group"><label>Título</label><input name="titulo"   class="form-control" placeholder="Titulo del Item"></div>
                                            <div class="form-group"><label>Pregunta:</label><textarea name="pregunta" class="form-control" rows="4" placeholder="Postule en este campo la pregunta"></textarea></div>
                                            <div class="form-group col-lg-6"><label>Ponderado (1)</label><br><textarea name="a" class="form-coescripción de cargntrol" rows="4" cols="35" placeholder="Escriba en este campo la opcion ponderada '1'"></textarea></div>
                                            <div class="form-group col-lg-6"><label>Ponderado (2)</label><br><textarea name="b" class="form-coescripción de cargntrol" rows="4" cols="35" placeholder="Escriba en este campo la opcion de ponderada '2'"></textarea></div>
                                            <div class="form-group col-lg-6"><label>Ponderado (3)</label><br><textarea name="c" class="form-coescripción de cargntrol" rows="4" cols="35" placeholder="Escriba en este campo la opcion de ponderada '3'"></textarea></div>
                                            <div class="form-group col-lg-6"><label>Ponderado (4)</label><br> <textarea name="d" class="form-coescripción de cargntrol" rows="4" cols="35" placeholder="Escriba en este campo la opcion de ponderada '4'"></textarea></div>
                                            <div class="form-group col-lg-12"><label>Ponderado (5)</label><br> <textarea name="rta" class="form-coescripción de cargntrol" rows="4" cols="35" placeholder="Escriba en este campo la opcion de ponderada '5'"></textarea></div>                                                                                    
                                            <input type="hidden" name="categoria" value="pregEncuesta" />                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-primary">Crear Pregunta</button>
                                        </div>
                                    </form>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->                            
                            

                            <!-- Modal -->
                            <div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <form action="preguntas_create.php" method="POST">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Crear Pregutna Abierta (Encuestas)</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group"><label>Título</label><input name="titulo"   class="form-control" placeholder="Titulo del Item"></div>
                                            <div class="form-group"><label>Texto Pregunta:</label><textarea name="pregunta" class="form-control" rows="7" placeholder="Ingrese el texto de la pregunta abierta"></textarea></div>
                                            <input type="hidden" name="a" value="NA">
                                            <input type="hidden" name="b" value="NA">
                                            <input type="hidden" name="c" value="NA">
                                            <input type="hidden" name="d" value="NA">
                                            <input type="hidden" name="rta" value="NA">
                                            <input type="hidden" name="categoria" value="pregAbierta">
                                        </div>                       
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-primary">Crear Pregunta</button>
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
        <!-- /#page-wrapper -->





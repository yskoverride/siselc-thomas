     

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Actualizar ITEM</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
               
                        </div>
                        <div class="panel-body">
                            <div class="row"> 
                                <?php if($registro['categoria']=='pregunta') : ?>
                                    <form action="preguntas_edit.php" method="POST">
                                        <div class="col-lg-12"><div class="form-group"><label>Título</label><input name="titulo"   class="form-control" placeholder="Titulo del Item" value="<?php echo $registro['titulo'];?>"></div></div>
                                            <div class="col-lg-12"><div class="form-group"><label>Pregunta:</label><textarea name="pregunta" class="form-control" rows="4" placeholder="Postule en este campo la pregunta"><?php echo $registro['pregunta'];?></textarea></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>A)</label><br><textarea name="a" class="form-coescripción de cargntrol" rows="4" cols="60" placeholder="Escriba en este campo la opcion de respuesta 'A'"><?php echo $registro['a'];?></textarea></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>B)</label><br><textarea name="b" class="form-coescripción de cargntrol" rows="4" cols="60" placeholder="Escriba en este campo la opcion de respuesta 'B'"><?php echo $registro['b'];?></textarea></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>C)</label><br><textarea name="c" class="form-coescripción de cargntrol" rows="4" cols="60" placeholder="Escriba en este campo la opcion de respuesta 'C'"><?php echo $registro['c'];?></textarea></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>D)</label><br> <textarea name="d" class="form-coescripción de cargntrol" rows="4" cols="60" placeholder="Escriba en este campo la opcion de respuesta 'D'"><?php echo $registro['d'];?></textarea></div></div>
                                            <div class="form-group"><label>Respuesta Correcta</label><select name="rta"  class="form-control">
                                                        <option <?php if ($registro['rta']=='A'){echo 'selected';}?>>A</option>
                                                        <option <?php if ($registro['rta']=='B'){echo 'selected';}?>>B</option>
                                                        <option <?php if ($registro['rta']=='C'){echo 'selected';}?>>C</option>  
                                                        <option <?php if ($registro['rta']=='D'){echo 'selected';}?>>D</option>  
                                                    </select>
                                                </div>
                                            <input type="hidden" name="categoria" value="pregunta">
                                            <input type="hidden" name="id_pregunta" value="<?php echo $registro['id']; ?>">                                               
                                            <button type="submit" class="btn btn-primary">Editar Pregunta</button>
                                            <a href='preguntas_delete.php?id_pregunta=<?php echo $registro['id'];?>' onclick="return confirm('Está seguro?')"><button type='button' class='btn btn-danger'>Eliminar</button></a>
                                    </form>   
                                <?php elseif($registro['categoria']=='pregEncuesta') : ?>
                                    <form action="preguntas_edit.php" method="POST">
                                        <div class="col-lg-12"><div class="form-group"><label>Título</label><input name="titulo"   class="form-control" placeholder="Titulo del Item" value="<?php echo $registro['titulo'];?>"></div></div>
                                            <div class="col-lg-12"><div class="form-group"><label>Pregunta:</label><textarea name="pregunta" class="form-control" rows="4" placeholder="Postule en este campo la pregunta"><?php echo $registro['pregunta'];?></textarea></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Ponderado (1)</label><br><textarea name="a" class="form-coescripción de cargntrol" rows="4" cols="60" placeholder="Escriba en este campo la opcion ponderada '1'"><?php echo $registro['a'];?></textarea></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Ponderado (2)</label><br><textarea name="b" class="form-coescripción de cargntrol" rows="4" cols="60" placeholder="Escriba en este campo la opcion ponderada '2'"><?php echo $registro['b'];?></textarea></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Ponderado (3)</label><br><textarea name="c" class="form-coescripción de cargntrol" rows="4" cols="60" placeholder="Escriba en este campo la opcion ponderada '3'"><?php echo $registro['c'];?></textarea></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Ponderado (4)</label><br> <textarea name="d" class="form-coescripción de cargntrol" rows="4" cols="60" placeholder="Escriba en este campo la opcion ponderada '4'"><?php echo $registro['d'];?></textarea></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Ponderado (5)</label><br> <textarea name="rta" class="form-coescripción de cargntrol" rows="4" cols="60" placeholder="Escriba en este campo la opcion ponderada '5'"><?php echo $registro['d'];?></textarea></div></div>
                                            <input type="hidden" name="categoria" value="pregunta">
                                            <input type="hidden" name="id_pregunta" value="<?php echo $registro['id']; ?>">
                                            <div class="col-lg-12">                                                
                                                <button type="submit" class="btn btn-primary">Editar Pregunta</button>
                                                <a href='preguntas_delete.php?id_pregunta=<?php echo $registro['id'];?>' onclick="return confirm('Está seguro?')"><button type='button' class='btn btn-danger'>Eliminar</button></a>
                                            </div>
                                    </form>                                   
                                <?php elseif($registro['categoria']=='texto') : ?>    
                                    <form action="preguntas_edit.php" method="POST">
                                            <div class="form-group"><label>Título</label><input name="titulo"   class="form-control" placeholder="Titulo del Item" value="<?php echo $registro['titulo'];?>"></div>
                                            <div class="form-group"><label>Texto:</label><textarea name="pregunta" class="form-control" rows="13" placeholder="Ingrese el texto"><?php echo $registro['pregunta'];?></textarea></div>
                                            <input type="hidden" name="a" value="NA">
                                            <input type="hidden" name="b" value="NA">
                                            <input type="hidden" name="c" value="NA">
                                            <input type="hidden" name="d" value="NA">
                                            <input type="hidden" name="rta" value="NA">
                                            <input type="hidden" name="categoria" value="texto">
                                            <input type="hidden" name="id_pregunta" value="<?php echo $registro['id']; ?>">
                                            <button type="submit" class="btn btn-primary">Editar Texto</button>
                                            <a href='preguntas_delete.php?id_pregunta=<?php echo $registro['id'];?>' onclick="return confirm('Está seguro?')"><button type='button' class='btn btn-danger'>Eliminar</button></a>
                                    </form>                                    
                                <?php elseif($registro['categoria']=='pregAbierta') : ?>    
                                    <form action="preguntas_edit.php" method="POST">
                                            <div class="form-group"><label>Título</label><input name="titulo"   class="form-control" placeholder="Titulo del Item" value="<?php echo $registro['titulo'];?>"></div>
                                            <div class="form-group"><label>Texto Pregunta:</label><textarea name="pregunta" class="form-control" rows="6" placeholder="Ingrese el de la pregutna abierta"><?php echo $registro['pregunta'];?></textarea></div>
                                            <input type="hidden" name="a" value="NA">
                                            <input type="hidden" name="b" value="NA">
                                            <input type="hidden" name="c" value="NA">
                                            <input type="hidden" name="d" value="NA">
                                            <input type="hidden" name="rta" value="NA">
                                            <input type="hidden" name="categoria" value="pregAbierta">
                                            <input type="hidden" name="id_pregunta" value="<?php echo $registro['id']; ?>">
                                            <button type="submit" class="btn btn-primary">Editar Texto</button>
                                            <a href='preguntas_delete.php?id_pregunta=<?php echo $registro['id'];?>' onclick="return confirm('Está seguro?')"><button type='button' class='btn btn-danger'>Eliminar</button></a>
                                    </form>                                
                                <?php elseif($registro['categoria']=='video') : ?>
                                    <form action="preguntas_edit.php" method="POST">
                                            <div class="form-group"><label>Título</label><input name="titulo"   class="form-control" placeholder="Titulo del Item" value="<?php echo $registro['titulo'];?>"></div>
                                            <div class="form-group"><label>Link Video YOUTUBE</label><textarea name="pregunta" class="form-control" rows="2" placeholder="Ingrese el Link del Video"><?php echo $registro['pregunta'];?></textarea></div>
                                            <input type="hidden" name="a" value="NA">
                                            <input type="hidden" name="b" value="NA">
                                            <input type="hidden" name="c" value="NA">
                                            <input type="hidden" name="d" value="NA">
                                            <input type="hidden" name="rta" value="NA">
                                            <input type="hidden" name="categoria" value="video">
                                            <input type="hidden" name="id_pregunta" value="<?php echo $registro['id']; ?>">
                                            <button type="submit" class="btn btn-primary">Editar Video</button>
                                            <a href='preguntas_delete.php?id_pregunta=<?php echo $registro['id'];?>' onclick="return confirm('Está seguro?')"><button type='button' class='btn btn-danger'>Eliminar</button></a>
                                    </form> 
                                <?php else : ?>    
                                    <form action="preguntas_edit.php" method="POST" enctype="multipart/form-data">
                                            <div class="form-group"><label>Título</label><input name="titulo"   class="form-control" placeholder="Titulo del Item" value="<?php echo $registro['titulo'];?>"></div>
                                            <div class="form-group"><label>Insertar Presentación</label><input name="pregunta" type="file"><a href="<?php echo $registro['pregunta'];?>" download><img width="60" height="70" src="../../files/icopdf.png"></a></div>
                                            <input type="hidden" name="a" value="NA">
                                            <input type="hidden" name="b" value="NA">
                                            <input type="hidden" name="c" value="NA">
                                            <input type="hidden" name="d" value="NA">
                                            <input type="hidden" name="rta" value="NA">
                                            <input type="hidden" name="categoria" value="presentacion">
                                            <input type="hidden" name="id_pregunta" value="<?php echo $registro['id']; ?>">
                                            <button type="submit" class="btn btn-primary">Editar Presentación</button>
                                            <a href='preguntas_delete.php?id_pregunta=<?php echo $registro['id'];?>' onclick="return confirm('Está seguro?')"><button type='button' class='btn btn-danger'>Eliminar</button></a>
                                    </form>
                                <?php endif; ?>  
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
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

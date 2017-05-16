            <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Editar Prueba</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">

                            
                                    <form action="pruebas_edit.php" method="POST">
                                        <div class="panel panel-success">
                                            <div align="center" class="panel-heading">
                                                Dados Principales Prueba
                                            </div>
                                            <div class="panel-body">                                                                     
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Nombre Prueba</label>
                                                            <input name="nombre_prueba" class="form-control" value="<?php echo $registro['nombre_prueba']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Cliente</label>
                                                            <select name="id_cliente" class="form-control">                             
                                                                <?php 
                                                                $selected="";
                                                                while ($cliente=$clientes->fetch(PDO::FETCH_ASSOC)){                                                                     
                                                                    if ($registro['id_cliente']==$cliente['id']){
                                                                        $selected="selected";
                                                                    }
                                                                    echo "<option value='" . $cliente['id'] . "' $selected>". $cliente['id'] . " - " . $cliente['nombreCliente'] . "</option>";   
                                                                    $selected="";
                                                                }?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Fecha de Aplicación Inicial</label>
                                                            <input type="date" name="fecha_inicio" class="form-control" value="<?php echo $registro['fecha_inicio']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Fecha de Aplicación Final</label>
                                                            <input type="date" name="fecha_final" class="form-control" value="<?php echo $registro['fecha_final']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Fecha de Publicación Inicial</label>
                                                            <input type="date" name="fecha_publicacion" class="form-control" value="<?php echo $registro['fecha_publicacion']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Fecha de Publicación Final</label>
                                                            <input type="date" name="fecha_final_publicacion" class="form-control" value="<?php echo $registro['fecha_final_publicacion']; ?>">
                                                        </div>
                                                    </div>                                                                                              
                                                </div>
                                            <div class="col-lg-12" align="center">
                                                <button type="submit" class="btn btn-success">Actualizar</button>
                                                <a href="pruebas_delete.php?id_pruebas=<?php echo $registro['id'];?>"><button type="button" class="btn btn-danger">Eliminar</button></a>
                                            </div>
                                            </div>
                                            <input type="hidden" name="id_pruebas" value="<?php echo $registro['id']; ?>">

                                        </div>
                                        <!-- /.panel -->                                    
                                    </form>                            


                                        <div class="panel panel-success">
                                            <div align="center" class="panel-heading">
                                                Vacantes Requeridas para la Prueba                                                
                                            </div>
                                            <div class="panel-body">                     
                                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">                                
                                                    <thead>
                                                        <tr>
                                                            <th>Cargo</th>
                                                            <th>Municipio</th>
                                                            <th>Sucursal</th>
                                                            <th>Sitio</th>
                                                            <th>Cod. Sitio</th>
                                                            <th># Vacantes</th>
                                                            <th># Max Post</th>
                                                            <th>Editar</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php while ($vacante=$vacantes->fetch(PDO::FETCH_ASSOC)){                              
                                                        echo "<tr class='odd gradeX'>";
                                                            echo "<td align='center'>". $vacante['nombreCargo'] . "</td>";
                                                            echo "<td align='center'>". $vacante['Municipio'] . " (" . $vacante['departamento'] . ")" . "</td>";
                                                            echo "<td align='center'>". $vacante['agencia'] . "</td>";
                                                            echo "<td align='center'>". $vacante['nombreSitio'] . "</td>";
                                                            echo "<td align='center'>". $vacante['codigoSitio'] . "</td>";
                                                            echo "<td align='center'>". $vacante['cant_vacantes'] . "</td>";
                                                            echo "<td align='center'>". $vacante['cant_postulaciones'] . "</td>";
                                                            echo "<td align='center' width='10%' class='bot'><a href='vacantes_editar.php?id=" . $vacante['id'] . "&id_prueba=" . $registro['id'] . "'><button type='button' class='btn btn-success'>Editar</button></a></td>";
                                                        echo "</tr>";                                 
                                                    }?>        
                                                    </tbody>
                                                </table>                                   
                                                <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#myModal1">Crear una Vacante</button>                                              
                                            </div>
                                        </div>
                    
                    
                    
                            <!-- Modal -->
                            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <form action="vacantes_create.php" method="POST">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Crear Vacante</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Cargo</label>
                                                        <select name="id_cargos" class="form-control">
                                                            <option></option>
                                                            <?php while ($cargo=$cargos->fetch(PDO::FETCH_ASSOC)){ 
                                                                echo "<option value='" . $cargo['id'] . "'>". $cargo['id'] . " - " . $cargo['nombreCargo'] . "</option>";                                                                
                                                            }?>                                                                                                                        
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Municipio de Aplicación</label>
                                                        <select name="id_municipio" class="form-control">  
                                                            <option></option>
                                                            <?php while ($municipio=$municipios->fetch(PDO::FETCH_ASSOC)){ 
                                                                echo "<option value='" . $municipio['codigoMunicipio'] . "'>". $municipio['Municipio'] . " (" . $municipio['departamento'] . ")" .  " - " . $municipio['codigoMunicipio'] . "</option>";                                                                
                                                            }?>                                                                                                                        
                                                        </select>                                                        
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Sucursal Encargada</label>
                                                        <select name="id_sucursal" class="form-control">
                                                            <option></option>
                                                            <?php while ($sucursal=$sucursales->fetch(PDO::FETCH_ASSOC)){ 
                                                                echo "<option value='" . $sucursal['id'] . "'>". $sucursal['id'] . " - " . $sucursal['agencia'] . "</option>";                                                                
                                                            }?>                                                                                                                        
                                                        </select>                                                         
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Código Sitio</label>
                                                        <input name="codigoSitio" class="form-control">
                                                    </div>
                                                </div>  
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Nombre Sitio</label>
                                                        <input name="nombreSitio" class="form-control">
                                                    </div>
                                                </div>  
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Dirección Sitio</label>
                                                        <input name="direccionSitio" class="form-control">
                                                    </div>
                                                </div>                                                  
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Cantidad de Vacantes</label>
                                                        <input name="cant_vacantes" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Número Máximo de Postulaciones</label>
                                                        <input name="cant_postulaciones" class="form-control">
                                                    </div>
                                                </div>                                                 
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Examen Vacante</label>
                                                        <select name="id_examen" class="form-control">                             
                                                            <?php while ($examen=$examenes->fetch(PDO::FETCH_ASSOC)){ 
                                                                echo "<option value='" . $examen['id'] . "'>". $examen['id'] . " - " . $examen['nombreExamen'] . "</option>";                                                    
                                                            }?>
                                                        </select>
                                                    </div>
                                                </div>    
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Examen Vacante</label>
                                                        <select name="id_encuesta" class="form-control">                             
                                                            <?php while ($encuesta=$encuestas->fetch(PDO::FETCH_ASSOC)){ 
                                                                echo "<option value='" . $encuesta['id'] . "'>". $encuesta['id'] . " - " . $encuesta['nombreExamen'] . "</option>";                                                    
                                                            }?>
                                                        </select>
                                                    </div>
                                                </div>                                                   
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-primary">Crear Vacante</button>
                                        </div>
                                        <input type="hidden" name="id_prueba" value="<?php echo $registro['id']; ?>">
                                    </form>
                                                                               
                                    <form action="vacantesMasivo_create.php" method="POST" enctype="multipart/form-data">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Importar Archivo CSV</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">                                                
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Inserte el Archivo .csv (separado por comas)</label>
                                                        <input type="file" name="cuadroAplica" class="form-control">
                                                    </div>
                                                </div>                                                  
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-primary">Subir Archivo</button>
                                        </div>
                                        <input type="hidden" name="id_prueba" value="<?php echo $registro['id']; ?>">
                                    </form>
                                                                                
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                            
                            
                            
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->            
        </div>
        <!-- /#page-wrapper -->
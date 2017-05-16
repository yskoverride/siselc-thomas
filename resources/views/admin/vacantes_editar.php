        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Editar Vacante</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">       

                                    <form action="vacantes_edit.php" method="POST">
                                        <div class="panel panel-success">
                                            <div class="panel-heading">
                                                <button type="submit" class="btn btn-success">Actualizar</button>
                                                <a href="vacantes_delete.php?id_vacantes=<?php echo $registro['id']; ?>&id_prueba=<?php echo $id_prueba; ?>"><button class="btn btn-danger" type="button">Eliminar</button></a>
                                            </div>
                                            <div class="panel-body">                                                 
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Cargo</label>
                                                            <select name="id_cargos" class="form-control">
                                                                <option></option>
                                                                <?php 
                                                                $selected="";
                                                                while ($cargo=$cargos->fetch(PDO::FETCH_ASSOC)){
                                                                    if ($registro['id_cargos']==$cargo['id']){
                                                                        $selected="selected";
                                                                    }
                                                                    echo "<option value='" . $cargo['id'] . "' $selected>". $cargo['id'] . " - " . $cargo['nombreCargo'] . "</option>";                                                                                                                               
                                                                    $selected="";
                                                                }?>                                                                                                                        
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Municipio de Aplicación</label>
                                                            <select name="id_municipio" class="form-control">  
                                                                <option></option>
                                                                <?php 
                                                                $selected="";
                                                                while ($municipio=$municipios->fetch(PDO::FETCH_ASSOC)){ 
                                                                    if ($registro['id_municipio']==$municipio['codigoMunicipio']){
                                                                        $selected="selected";
                                                                    }                                                                    
                                                                    echo "<option value='" . $municipio['codigoMunicipio'] . "' $selected>". $municipio['Municipio'] . " (" . $municipio['departamento'] . ")" .  " - " . $municipio['codigoMunicipio'] . "</option>";                                                                
                                                                    $selected="";
                                                                }?>                                                                                                                        
                                                            </select>                                                        
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Sucursal Encargada</label>
                                                            <select name="id_sucursal" class="form-control">
                                                                <option></option>
                                                                <?php 
                                                                $selected="";
                                                                while ($sucursal=$sucursales->fetch(PDO::FETCH_ASSOC)){ 
                                                                    if ($registro['id_sucursal']==$sucursal['id']){
                                                                        $selected="selected";
                                                                    }                                                                      
                                                                    echo "<option value='" . $sucursal['id'] . "' $selected>". $sucursal['id'] . " - " . $sucursal['agencia'] . "</option>";                                                                
                                                                    $selected="";
                                                                }?>                                                                                                                        
                                                            </select>                                                         
                                                        </div>
                                                    </div> 
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Códigio Sitio</label>
                                                            <input name="codigoSitio" class="form-control" value="<?php echo $registro['codigoSitio'];?>">
                                                        </div>
                                                    </div>  
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Nombre Sitio</label>
                                                            <input name="nombreSitio" class="form-control" value="<?php echo $registro['nombreSitio'];?>">
                                                        </div>
                                                    </div> 
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Dirección Sitio</label>
                                                            <input name="direccionSitio" class="form-control" value="<?php echo $registro['direccionSitio'];?>">
                                                        </div>
                                                    </div>                                                     
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Cantidad de Vacantes</label>
                                                            <input name="cant_vacantes" class="form-control" value="<?php echo $registro['cant_vacantes'];?>">
                                                        </div>
                                                    </div>  
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Cantidad de Vacantes</label>
                                                            <input name="cant_postulaciones" class="form-control" value="<?php echo $registro['cant_postulaciones'];?>">
                                                        </div>
                                                    </div>                                                     
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Examen Vacante</label>
                                                            <select name="id_examen" class="form-control">                             
                                                                <?php 
                                                                $selected=""; 
                                                                while ($examen=$examenes->fetch(PDO::FETCH_ASSOC)){ 
                                                                    if ($registro['id_examen']==$examen['id']){
                                                                        $selected="selected";
                                                                    }                                                                      
                                                                    echo "<option value='" . $examen['id'] . "' $selected>". $examen['id'] . " - " . $examen['nombreExamen'] . "</option>";                                                    
                                                                    $selected="";
                                                                }?>
                                                            </select>
                                                        </div>
                                                    </div>   
                                                   <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Examen Vacante</label>
                                                            <select name="id_encuesta" class="form-control">                             
                                                                <?php 
                                                                $selected=""; 
                                                                while ($encuesta=$encuestas->fetch(PDO::FETCH_ASSOC)){ 
                                                                    if ($registro['id_encuesta']==$encuesta['id']){
                                                                        $selected="selected";
                                                                    }                                                                      
                                                                    echo "<option value='" . $encuesta['id'] . "' $selected>". $encuesta['id'] . " - " . $encuesta['nombreExamen'] . "</option>";                                                    
                                                                    $selected="";
                                                                }?>
                                                            </select>
                                                        </div>
                                                    </div>                                                     
                                                </div>
                                            </div>
                                            <input type="hidden" name="id_vacantes" value="<?php echo $registro['id']; ?>">
                                            <input type="hidden" name="id_prueba" value="<?php echo $id_prueba; ?>">
                                        </div>
                                    </form>

 
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->                                                    
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">   
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Editar Descripción de Cargo
                        </div>
                        <!-- .panel-heading -->
                        <div class="panel-body">
                            <form action="cargos_update.php" method="POST">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">IDENTIFICACIÓN DEL CARGO</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <div class="col-lg-6"><div class="form-group"><label>Nombre del Cargo</label><input name="nombreCargo"  value= "<?php echo $cargo['nombreCargo'];?>" class="form-control" placeholder="Requerido"></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Jefe Inmediato</label><input name="cargoJefe"  value= "<?php echo $cargo['cargoJefe'];?>" class="form-control" placeholder="Requerido"></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Proceso o Servicios a los que pertenece</label><input name="areaCargo"  value= "<?php echo $cargo['areaCargo'];?>" class="form-control" placeholder="Requerido"></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Unidad Organizativa</label><input name="unidadOrganizativa"  value= "<?php echo $cargo['unidadOrganizativa'];?>" class="form-control" placeholder="Requerido"></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Cargo Dependite 1</label><input name="cargoDependiente1"  value= "<?php echo $cargo['cargoDependiente1'];?>" class="form-control" placeholder="No obligatorio"></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Tipo de Relación 1</label><select name="tipoDependencia1" class="form-control" >
                                                        <option></option>
                                                        <option <?php if ($cargo['tipoDependencia1']=='Directo'){echo 'selected';}?>>Directo</option>
                                                        <option <?php if ($cargo['tipoDependencia1']=='Indirecto'){echo 'selected';}?>>Indirecto</option>                                                        
                                                    </select>
                                                </div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Cargo Dependite 2</label><input name="cargoDependiente2"  value= "<?php echo $cargo['cargoDependiente2'];?>" class="form-control" placeholder="No obligatorio"></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Tipo de Relación 2</label><select name="tipoDependencia2" class="form-control" >
                                                        <option></option>
                                                        <option <?php if ($cargo['tipoDependencia2']=='Directo'){echo 'selected';}?>>Directo</option>
                                                        <option <?php if ($cargo['tipoDependencia2']=='Indirecto'){echo 'selected';}?>>Indirecto</option>                                                        
                                                    </select>
                                                </div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Cargo Dependite 3</label><input name="cargoDependiente3"  value= "<?php echo $cargo['cargoDependiente3'];?>" class="form-control" placeholder="No obligatorio"></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Tipo de Relación 3</label><select name="tipoDependencia3" class="form-control" >
                                                        <option></option>
                                                        <option <?php if ($cargo['tipoDependencia3']=='Directo'){echo 'selected';}?>>Directo</option>
                                                        <option <?php if ($cargo['tipoDependencia3']=='Indirecto'){echo 'selected';}?>>Indirecto</option>                                                        
                                                    </select>
                                                </div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Cargo Dependite 4</label><input name="cargoDependiente4"  value= "<?php echo $cargo['cargoDependiente4'];?>" class="form-control" placeholder="No obligatorio"></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Tipo de Relación 4</label><select name="tipoDependencia4" class="form-control" >
                                                        <option></option>
                                                        <option <?php if ($cargo['tipoDependencia4']=='Directo'){echo 'selected';}?>>Directo</option>
                                                        <option <?php if ($cargo['tipoDependencia4']=='Indirecto'){echo 'selected';}?>>Indirecto</option>                                                        
                                                    </select>
                                                </div></div>                                            
                                            <div class="col-lg-6"><div class="form-group"><label>Examen Cargo</label><select name="id_examen" class="form-control">                             
                                                <?php while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)){ 
                                                    if ($cargo['id_examen']==$registro['id']){
                                                        $selected='selected';
                                                    }
                                                    echo "<option $selected value='" . $registro['id'] . "'>". $registro['id'] . " - " . $registro['nombreExamen'] . "</option>"; 
                                                    $selected='';
                                                }
                                                ?>
                                                    </select>
                                                </div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Lider</label><select name="lider" class="form-control" >
                                                        <option <?php if ($cargo['lider']==0){echo 'selected';}?> value="0">No</option>
                                                        <option <?php if ($cargo['lider']==1){echo 'selected';}?> value="1">Si</option>                                                        
                                                    </select>
                                                </div></div>                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">COMPETENCIAS REQUERIDAS PARA EL CARGO</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="col-lg-6"><div class="form-group"><label>Nivel Educativo Primario</label><select name="nivelPrimarioEduc" class="form-control">
                                                        <option <?php if ($cargo['nivelPrimarioEduc']=='Primaria'){echo 'selected';}?>>Primaria</option>
                                                        <option <?php if ($cargo['nivelPrimarioEduc']=='Secundaria'){echo 'selected';}?>>Secundaria</option>
                                                        <option <?php if ($cargo['nivelPrimarioEduc']=='Tecnico'){echo 'selected';}?>>Tecnico</option>
                                                        <option <?php if ($cargo['nivelPrimarioEduc']=='Tegonologico'){echo 'selected';}?>>Tegonologico</option>
                                                        <option <?php if ($cargo['nivelPrimarioEduc']=='Profesional'){echo 'selected';}?>>Profesional</option>
                                                    </select>
                                                </div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Nombre del programa educativo Primario</label><input name="nombreProgramaPrimario"  value= "<?php echo $cargo['nombreProgramaPrimario'];?>" class="form-control" placeholder="Requerido"></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Nivel Educativo Secundario</label><select name="nivelSecundarioEduc" class="form-control">
                                                        <option></option>
                                                        <option <?php if ($cargo['nivelSecundarioEduc']=='Especializacion'){echo 'selected';}?>>Especializacion</option>
                                                        <option <?php if ($cargo['nivelSecundarioEduc']=='Maestria'){echo 'selected';}?>>Maestria</option>
                                                        <option <?php if ($cargo['nivelSecundarioEduc']=='Doctorado'){echo 'selected';}?>>Doctorado</option>                                                        
                                                    </select>
                                                </div></div>                                                                                       
                                            <div class="col-lg-6"><div class="form-group"><label>Nombre del programa educativo secundario</label><input name="nombreProgramaSecundario"  value= "<?php echo $cargo['nombreProgramaSecundario'];?>" class="form-control" placeholder="No obligatorio"></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Formación Especifica 1</label><input name="formacionEspecifica" class="form-control" placeholder="Requerido" value="<?php echo $cargo['formacionEspecifica'];?>"></div></div>                                            
                                            <div class="col-lg-6"><div class="form-group"><label>Medicion Formación Especifica 1</label><select name="formacionEspecificaMedicion" class="form-control">                                                     
                                                        <option <?php if ($cargo['formacionEspecificaMedicion']=='No Aplica'){echo 'selected';}?>>No Aplica</option>
                                                        <option <?php if ($cargo['formacionEspecificaMedicion']=='Certificado Académico y/o Prueba Técnica y/o Certificado Laboral con Funciones'){echo 'selected';}?>>Certificado Académico y/o Prueba Técnica y/o Certificado Laboral con Funciones</option>
                                                        <option <?php if ($cargo['formacionEspecificaMedicion']=='Certificado Académico y/o Prueba Técnica'){echo 'selected';}?>>Certificado Académico y/o Prueba Técnica</option>
                                                        <option <?php if ($cargo['formacionEspecificaMedicion']=='Certificado Académico'){echo 'selected';}?>>Certificado Académico</option> 
                                                        <option <?php if ($cargo['formacionEspecificaMedicion']=='Prueba Técnica'){echo 'selected';}?>>Prueba Técnica</option>
                                                        <option <?php if ($cargo['formacionEspecificaMedicion']=='Certificado Laboral con Funciones'){echo 'selected';}?>>Certificado Laboral con Funciones</option>                                                        
                                                    </select>
                                                </div></div>    
                                            <div class="col-lg-6"><div class="form-group"><label>Formación Especifica 2</label><input name="formacionEspecifica2" class="form-control" placeholder="Requerido" value="<?php echo $cargo['formacionEspecifica'];?>"></div></div>                                            
                                            <div class="col-lg-6"><div class="form-group"><label>Medicion Formación Especifica 2</label><select name="formacionEspecificaMedicion2" class="form-control">                                                     
                                                        <option <?php if ($cargo['formacionEspecificaMedicion2']=='No Aplica'){echo 'selected';}?>>No Aplica</option>
                                                        <option <?php if ($cargo['formacionEspecificaMedicion2']=='Certificado Académico y/o Prueba Técnica y/o Certificado Laboral con Funciones'){echo 'selected';}?>>Certificado Académico y/o Prueba Técnica y/o Certificado Laboral con Funciones</option>
                                                        <option <?php if ($cargo['formacionEspecificaMedicion2']=='Certificado Académico y/o Prueba Técnica'){echo 'selected';}?>>Certificado Académico y/o Prueba Técnica</option>
                                                        <option <?php if ($cargo['formacionEspecificaMedicion2']=='Certificado Académico'){echo 'selected';}?>>Certificado Académico</option> 
                                                        <option <?php if ($cargo['formacionEspecificaMedicion2']=='Prueba Técnica'){echo 'selected';}?>>Prueba Técnica</option>
                                                        <option <?php if ($cargo['formacionEspecificaMedicion2']=='Certificado Laboral con Funciones'){echo 'selected';}?>>Certificado Laboral con Funciones</option>                                                        
                                                    </select>
                                                </div></div>  
                                            <div class="col-lg-6"><div class="form-group"><label>Formación Especifica 3</label><input name="formacionEspecifica3" class="form-control" placeholder="Requerido" value="<?php echo $cargo['formacionEspecifica'];?>"></div></div>                                            
                                            <div class="col-lg-6"><div class="form-group"><label>Medicion Formación Especifica 3</label><select name="formacionEspecificaMedicion3" class="form-control">                                                     
                                                        <option <?php if ($cargo['formacionEspecificaMedicion3']=='No Aplica'){echo 'selected';}?>>No Aplica</option>
                                                        <option <?php if ($cargo['formacionEspecificaMedicion3']=='Certificado Académico y/o Prueba Técnica y/o Certificado Laboral con Funciones'){echo 'selected';}?>>Certificado Académico y/o Prueba Técnica y/o Certificado Laboral con Funciones</option>
                                                        <option <?php if ($cargo['formacionEspecificaMedicion3']=='Certificado Académico y/o Prueba Técnica'){echo 'selected';}?>>Certificado Académico y/o Prueba Técnica</option>
                                                        <option <?php if ($cargo['formacionEspecificaMedicion3']=='Certificado Académico'){echo 'selected';}?>>Certificado Académico</option> 
                                                        <option <?php if ($cargo['formacionEspecificaMedicion3']=='Prueba Técnica'){echo 'selected';}?>>Prueba Técnica</option>
                                                        <option <?php if ($cargo['formacionEspecificaMedicion3']=='Certificado Laboral con Funciones'){echo 'selected';}?>>Certificado Laboral con Funciones</option>                                                        
                                                    </select>
                                                </div></div>  
                                            <div class="col-lg-6"><div class="form-group"><label>Formación Especifica 4</label><input name="formacionEspecifica4" class="form-control" placeholder="Requerido" value="<?php echo $cargo['formacionEspecifica'];?>"></div></div>                                            
                                            <div class="col-lg-6"><div class="form-group"><label>Medicion Formación Especifica 4</label><select name="formacionEspecificaMedicion4" class="form-control">                                                     
                                                        <option <?php if ($cargo['formacionEspecificaMedicion4']=='No Aplica'){echo 'selected';}?>>No Aplica</option>
                                                        <option <?php if ($cargo['formacionEspecificaMedicion4']=='Certificado Académico y/o Prueba Técnica y/o Certificado Laboral con Funciones'){echo 'selected';}?>>Certificado Académico y/o Prueba Técnica y/o Certificado Laboral con Funciones</option>
                                                        <option <?php if ($cargo['formacionEspecificaMedicion4']=='Certificado Académico y/o Prueba Técnica'){echo 'selected';}?>>Certificado Académico y/o Prueba Técnica</option>
                                                        <option <?php if ($cargo['formacionEspecificaMedicion4']=='Certificado Académico'){echo 'selected';}?>>Certificado Académico</option> 
                                                        <option <?php if ($cargo['formacionEspecificaMedicion4']=='Prueba Técnica'){echo 'selected';}?>>Prueba Técnica</option>
                                                        <option <?php if ($cargo['formacionEspecificaMedicion4']=='Certificado Laboral con Funciones'){echo 'selected';}?>>Certificado Laboral con Funciones</option>                                                        
                                                    </select>
                                                </div></div>    
                                            <div class="col-lg-6"><div class="form-group"><label>Experiencia General</label><select name="experienciaGeneral"   class="form-control">
                                                        <option <?php if ($cargo['experienciaGeneral']=='Sin Experiencia'){echo 'selected';}?>>Sin Experiencia</option>
                                                        <option <?php if ($cargo['experienciaGeneral']=='6 meses'){echo 'selected';}?>>6 meses</option>
                                                        <option <?php if ($cargo['experienciaGeneral']=='1 año'){echo 'selected';}?>>1 año</option>
                                                        <option <?php if ($cargo['experienciaGeneral']=='2 años'){echo 'selected';}?>>2 años</option>
                                                        <option <?php if ($cargo['experienciaGeneral']=='3 años'){echo 'selected';}?>>3 años</option>
                                                        <option <?php if ($cargo['experienciaGeneral']=='4 años'){echo 'selected';}?>>4 años</option>
                                                        <option <?php if ($cargo['experienciaGeneral']=='5 años'){echo 'selected';}?>>5 años</option>
                                                        <option <?php if ($cargo['experienciaGeneral']=='Mas de 5 años'){echo 'selected';}?>>Mas de 5 años</option>
                                                    </select>
                                                </div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Experiencia Especifica</label><select name="experienciaEspecifica"  class="form-control">
                                                        <option <?php if ($cargo['experienciaEspecifica']=='Sin Experiencia'){echo 'selected';}?>>Sin Experiencia</option>
                                                        <option <?php if ($cargo['experienciaEspecifica']=='6 meses'){echo 'selected';}?>>6 meses</option>
                                                        <option <?php if ($cargo['experienciaEspecifica']=='1 año'){echo 'selected';}?>>1 año</option>
                                                        <option <?php if ($cargo['experienciaEspecifica']=='2 años'){echo 'selected';}?>>2 años</option>
                                                        <option <?php if ($cargo['experienciaEspecifica']=='3 años'){echo 'selected';}?>>3 años</option>
                                                        <option <?php if ($cargo['experienciaEspecifica']=='4 años'){echo 'selected';}?>>4 años</option>
                                                        <option <?php if ($cargo['experienciaEspecifica']=='5 años'){echo 'selected';}?>>5 años</option>
                                                        <option <?php if ($cargo['experienciaEspecifica']=='Mas de 5 años'){echo 'selected';}?>>Mas de 5 años</option>
                                                    </select>
                                                </div></div>                                            
                                            <div class="col-lg-6"><div class="form-group"><label>Requeire Tarjeta Profesional</label><select name="tarjetaProfesional" class="form-control">                                                     
                                                        <option <?php if ($cargo['tarjetaProfesional']=='Si'){echo 'selected';}?>>Si</option>
                                                        <option <?php if ($cargo['tarjetaProfesional']=='No'){echo 'selected';}?>>No</option>
                                                    </select>
                                                </div></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">DESCRIPCIÓN DEL CARGO</a>
                                        </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="col-lg-6"><div class="form-group"><label>Descripción de cargo</label><textarea name="descripcionCargo" class="form-control" rows="8" placeholder="obligatorio"><?php echo $cargo['descripcionCargo'];?></textarea></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Objetivo Clave</label><textarea name="objetivoClaveCargo" class="form-control" rows="8" placeholder="obligatorio"><?php echo $cargo['objetivoClaveCargo'];?></textarea></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Que Hace 1</label><textarea name="queHace1"   class="form-control" rows="8" placeholder="obligatorio"><?php echo $cargo['queHace1'];?></textarea></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Como lo Hace 1</label><textarea name="comoHace1"  class="form-control" rows="8" placeholder="obligatorio"><?php echo $cargo['comoHace1'];?></textarea></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Que Hace 2</label><textarea name="queHace2" class="form-control" rows="8" placeholder="No obligatorio"><?php echo $cargo['queHace2'];?></textarea></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Como lo Hace 2</label><textarea name="comoHace2"  class="form-control" rows="8" placeholder="No obligatorio"><?php echo $cargo['comoHace2'];?></textarea></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Que Hace 3</label><textarea name="queHace3"  class="form-control" rows="8" placeholder="No obligatorio"><?php echo $cargo['queHace3'];?></textarea></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Como lo Hace 3</label><textarea name="comoHace3" class="form-control" rows="8" placeholder="No obligatorio"><?php echo $cargo['comoHace3'];?></textarea></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Que Hace 4</label><textarea name="queHace4"  class="form-control" rows="8" placeholder="No obligatorio"><?php echo $cargo['queHace4'];?></textarea></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Como lo Hace 4</label><textarea name="comoHace4" class="form-control" rows="8" placeholder="No obligatorio"><?php echo $cargo['comoHace4'];?></textarea></div></div>
                                        </div>
                                    </div>
                                </div>    
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">DEBERES, RESPONSABILIDADES, NIVEL DE AUTORIDAD Y ACTIVOS A CARGO</a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="col-lg-6"><div class="form-group"><label>Deberes</label><textarea name="deberes" class="form-control" rows="8" placeholder="obligatorio"><?php echo $cargo['deberes'];?></textarea></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Responsabilidades</label><textarea name="responsabilidades" class="form-control" rows="8" placeholder="obligatorio"><?php echo $cargo['responsabilidades'];?></textarea></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Nivel de Autoridad</label><textarea name="nivelAutoridad"   class="form-control" rows="8" placeholder="obligatorio"><?php echo $cargo['nivelAutoridad'];?></textarea></div></div>
                                            <div class="col-lg-12">
                                                <div class="col-lg-6"><div class="form-group"><label>Activo a Cargo 1</label><input name="activo1" class="form-control" placeholder="No obligatorio" value="<?php echo $cargo['activo1'];?>"></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Categoria Activo 1</label><select name="activoCategoria1" class="form-control">
                                                        <option <?php if ($cargo['activoCategoria1']=='No Aplica'){echo 'selected';}?>>No Aplica</option>
                                                        <option <?php if ($cargo['activoCategoria1']=='Físico'){echo 'selected';}?>>Físico</option>
                                                        <option <?php if ($cargo['activoCategoria1']=='Información'){echo 'selected';}?>>Información</option>
                                                        <option <?php if ($cargo['activoCategoria1']=='Tecnológico'){echo 'selected';}?>>Tecnológico</option> 
                                                    </select>
                                                </div></div>     
                                            <div class="col-lg-6"><div class="form-group"><label>Activo a Cargo 2</label><input name="activo2" class="form-control" placeholder="No obligatorio" value="<?php echo $cargo['activo2'];?>"></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Categoria Activo 2</label><select name="activoCategoria2" class="form-control">
                                                        <option <?php if ($cargo['activoCategoria2']=='No Aplica'){echo 'selected';}?>>No Aplica</option>
                                                        <option <?php if ($cargo['activoCategoria2']=='Físico'){echo 'selected';}?>>Físico</option>
                                                        <option <?php if ($cargo['activoCategoria2']=='Información'){echo 'selected';}?>>Información</option>
                                                        <option <?php if ($cargo['activoCategoria2']=='Tecnológico'){echo 'selected';}?>>Tecnológico</option>  
                                                    </select>
                                                </div></div>  
                                            <div class="col-lg-6"><div class="form-group"><label>Activo a Cargo 3</label><input name="activo3" class="form-control" placeholder="No obligatorio" value="<?php echo $cargo['activo3'];?>"></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Categoria Activo 3</label><select name="activoCategoria3" class="form-control">
                                                        <option <?php if ($cargo['activoCategoria3']=='No Aplica'){echo 'selected';}?>>No Aplica</option>
                                                        <option <?php if ($cargo['activoCategoria3']=='Físico'){echo 'selected';}?>>Físico</option>
                                                        <option <?php if ($cargo['activoCategoria3']=='Información'){echo 'selected';}?>>Información</option>
                                                        <option <?php if ($cargo['activoCategoria3']=='Tecnológico'){echo 'selected';}?>>Tecnológico</option>  
                                                    </select>
                                                </div></div> 
                                            <div class="col-lg-6"><div class="form-group"><label>Activo a Cargo 4</label><input name="activo4" class="form-control" placeholder="No obligatorio" value="<?php echo $cargo['activo4'];?>"></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Categoria Activo 4</label><select name="activoCategoria4" class="form-control">
                                                        <option <?php if ($cargo['activoCategoria4']=='No Aplica'){echo 'selected';}?>>No Aplica</option>
                                                        <option <?php if ($cargo['activoCategoria4']=='Físico'){echo 'selected';}?>>Físico</option>
                                                        <option <?php if ($cargo['activoCategoria4']=='Información'){echo 'selected';}?>>Información</option>
                                                        <option <?php if ($cargo['activoCategoria4']=='Tecnológico'){echo 'selected';}?>>Tecnológico</option> 
                                                    </select>
                                                </div></div> 
                                            </div>
                                            
                                            
                                            
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                                <input type="hidden" name="id" value="<?php echo $cargo['id'];?>">
                            <div class="col-lg-12" align="center">
                                <button type="submit" class="btn btn-success">Actualizar</button>
                                <?php echo "<a href='cargos_delete.php?id=" . $cargo['id'] . "'" . ' onclick="return confirm(' . "'Está seguro?'" . ')"' . "><button type='button' class='btn btn-danger'>  Eliminar  </button></a>";?>
                            </div>
                            </form>
                                
                        </div>
                        <!-- .panel-body -->
                    </div>
                    <!-- /.panel -->   
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->                                                    
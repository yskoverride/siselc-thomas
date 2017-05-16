        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">   
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Crear Cargo
                        </div>
                        <!-- .panel-heading -->
                        <div class="panel-body">
                            <form action="cargos_create.php" method="POST">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">IDENTIFICACIÓN DEL CARGO</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <div class="col-lg-6"><div class="form-group"><label>Nombre del Cargo</label><input name="nombreCargo"   class="form-control" placeholder="Requerido"></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Jefe Inmediato</label><input name="cargoJefe"   class="form-control" placeholder="Requerido"></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Proceso o Servicios a los que pertenece</label><input name="areaCargo"  class="form-control" placeholder="Requerido"></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Unidad Organizativa</label><input name="unidadOrganizativa"  class="form-control" placeholder="Requerido"></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Cargo Dependite 1</label><input name="cargoDependiente1"  class="form-control" placeholder="No obligatorio"></div></div>                                          
                                            <div class="col-lg-6"><div class="form-group"><label>Tipo de Relación 1</label><select name="tipoDependencia1"  class="form-control">
                                                        <option></option>
                                                        <option>Directo</option>
                                                        <option>Indirecto</option>                                                        
                                                    </select>
                                                </div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Cargo Dependite 2</label><input name="cargoDependiente2"  class="form-control" placeholder="No obligatorio"></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Tipo de Relación 2</label><select name="tipoDependencia2" class="form-control">
                                                        <option></option>
                                                        <option>Directo</option>
                                                        <option>Indirecto</option>                                                        
                                                    </select>
                                                </div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Cargo Dependite 3</label><input name="cargoDependiente3"  class="form-control" placeholder="No obligatorio"></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Tipo de Relación 3</label><select name="tipoDependencia3"  class="form-control">
                                                        <option></option>
                                                        <option>Directo</option>
                                                        <option>Indirecto</option>                                                        
                                                    </select>                                                                                                
                                                </div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Cargo Dependite 4</label><input name="cargoDependiente4"  class="form-control" placeholder="No obligatorio"></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Tipo de Relación 4</label><select name="tipoDependencia4"  class="form-control">
                                                        <option></option>
                                                        <option>Directo</option>
                                                        <option>Indirecto</option>                                                        
                                                    </select>                                                
                                                </div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Examen Cargo</label><select name="id_examen" class="form-control">                             
                                                <?php while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)){ 
                                                    echo "<option value='" . $registro['id'] . "'>". $registro['id'] . " - " . $registro['nombreExamen'] . "</option>";                                                    
                                                }
                                                ?>
                                                    </select>
                                                </div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Lider</label><select name="lider"  class="form-control">
                                                        <option value="0">No</option>
                                                        <option value="1">Si</option>                                                        
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
                                                        <option>Primaria</option>
                                                        <option>Secundaria</option>
                                                        <option>Tecnico</option>
                                                        <option>Tegonologico</option>
                                                        <option>Profesional</option>
                                                    </select>
                                                </div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Nombre del programa educativo primario</label><input name="nombreProgramaPrimario"  class="form-control" placeholder="Requerido"></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Nivel Educativo Secundario</label><select name="nivelSecundarioEduc" class="form-control">
                                                        <option></option>
                                                        <option>Especializacion</option>
                                                        <option>Maestria</option>
                                                        <option>Doctorado</option>                                                        
                                                    </select>
                                                </div></div>                                                                                       
                                            <div class="col-lg-6"><div class="form-group"><label>Nombre del programa educativo secundario</label><input name="nombreProgramaSecundario"  class="form-control" placeholder="No obligatorio"></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Formación Especifica 1</label><input name="formacionEspecifica" class="form-control" placeholder="No obligatorio"></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Medicion Formación Especifica 1</label><select name="formacionEspecificaMedicion" class="form-control">
                                                        <option>No Aplica</option>
                                                        <option>Certificado Académico y/o Prueba Técnica y/o Certificado Laboral con Funciones</option>
                                                        <option>Certificado Académico y/o Prueba Técnica</option>
                                                        <option>Certificado Académico</option> 
                                                        <option>Prueba Técnica</option>
                                                        <option>Certificado Laboral con Funciones</option>
                                                    </select>
                                                </div></div>                                             
                                            <div class="col-lg-6"><div class="form-group"><label>Formación Especifica 2</label><input name="formacionEspecifica2" class="form-control" placeholder="No obligatorio"></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Medicion Formación Especifica 2</label><select name="formacionEspecificaMedicion2" class="form-control">
                                                        <option>No Aplica</option>
                                                        <option>Certificado Académico y/o Prueba Técnica y/o Certificado Laboral con Funciones</option>
                                                        <option>Certificado Académico y/o Prueba Técnica</option>
                                                        <option>Certificado Académico</option> 
                                                        <option>Prueba Técnica</option>
                                                        <option>Certificado Laboral con Funciones</option>
                                                    </select>
                                                </div></div>                                             
                                            <div class="col-lg-6"><div class="form-group"><label>Formación Especifica 3</label><input name="formacionEspecifica3" class="form-control" placeholder="No obligatorio"></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Medicion Formación Especifica 3</label><select name="formacionEspecificaMedicion3" class="form-control">
                                                        <option>No Aplica</option>
                                                        <option>Certificado Académico y/o Prueba Técnica y/o Certificado Laboral con Funciones</option>
                                                        <option>Certificado Académico y/o Prueba Técnica</option>
                                                        <option>Certificado Académico</option> 
                                                        <option>Prueba Técnica</option>
                                                        <option>Certificado Laboral con Funciones</option>
                                                    </select>
                                                </div></div>                                             
                                            <div class="col-lg-6"><div class="form-group"><label>Formación Especifica 4</label><input name="formacionEspecifica4" class="form-control" placeholder="No obligatorio"></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Medicion Formación Especifica 4</label><select name="formacionEspecificaMedicion4" class="form-control">
                                                        <option>No Aplica</option>
                                                        <option>Certificado Académico y/o Prueba Técnica y/o Certificado Laboral con Funciones</option>
                                                        <option>Certificado Académico y/o Prueba Técnica</option>
                                                        <option>Certificado Académico</option> 
                                                        <option>Prueba Técnica</option>
                                                        <option>Certificado Laboral con Funciones</option>
                                                    </select>
                                                </div></div>                                             
                                            <div class="col-lg-6"><div class="form-group"><label>Experiencia General</label><select name="experienciaGeneral"   class="form-control">
                                                        <option>Sin Experiencia</option>
                                                        <option>6 meses</option>
                                                        <option>1 año</option>
                                                        <option>2 años</option>
                                                        <option>3 años</option>
                                                        <option>4 años</option>
                                                        <option>5 años</option>
                                                        <option>Mas de 5 años</option>
                                                    </select>
                                                </div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Experiencia Especifica</label><select name="experienciaEspecifica"  class="form-control">
                                                        <option>Sin Experiencia</option>
                                                        <option>6 meses</option>
                                                        <option>1 año</option>
                                                        <option>2 años</option>
                                                        <option>3 años</option>
                                                        <option>4 años</option>
                                                        <option>5 años</option>
                                                        <option>Mas de 5 años</option>
                                                    </select>
                                                </div></div>                                           
                                            <div class="col-lg-6"><div class="form-group"><label>Requeire Tarjeta Profesional</label><select name="tarjetaProfesional" class="form-control">                                                     
                                                        <option>Si</option>
                                                        <option>No</option>
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
                                            <div class="col-lg-6"><div class="form-group"><label>Descripción de cargo</label><textarea name="descripcionCargo" class="form-control" rows="8" placeholder="obligatorio"></textarea></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Objetivo Clave</label><textarea name="objetivoClaveCargo" class="form-control" rows="8" placeholder="obligatorio"></textarea></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Que Hace 1</label><textarea name="queHace1"   class="form-control" rows="8" placeholder="obligatorio"></textarea></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Como lo Hace 1</label><textarea name="comoHace1"  class="form-control" rows="8" placeholder="obligatorio"></textarea></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Que Hace 2</label><textarea name="queHace2" class="form-control" rows="8" placeholder="No obligatorio"></textarea></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Como lo Hace 2</label><textarea name="comoHace2"  class="form-control" rows="8" placeholder="No obligatorio"></textarea></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Que Hace 3</label><textarea name="queHace3"  class="form-control" rows="8" placeholder="No obligatorio"></textarea></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Como lo Hace 3</label><textarea name="comoHace3" class="form-control" rows="8" placeholder="No obligatorio"></textarea></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Que Hace 4</label><textarea name="queHace4"  class="form-control" rows="8" placeholder="No obligatorio"></textarea></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Como lo Hace 4</label><textarea name="comoHace4" class="form-control" rows="8" placeholder="No obligatorio"></textarea></div></div>
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
                                            <div class="col-lg-6"><div class="form-group"><label>Deberes</label><textarea name="deberes" class="form-control" rows="8" placeholder="obligatorio"></textarea></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Responsabilidades</label><textarea name="responsabilidades" class="form-control" rows="8" placeholder="obligatorio"></textarea></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Nivel de Autoridad</label><textarea name="nivelAutoridad"   class="form-control" rows="8" placeholder="obligatorio"></textarea></div></div>
                                            <div class="col-lg-12">
                                            <div class="col-lg-6"><div class="form-group"><label>Activo a Cargo 1</label><input name="activo1" class="form-control" placeholder="No obligatorio"></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Categoria Activo 1</label><select name="activoCategoria1" class="form-control">
                                                        <option>No Aplica</option>
                                                        <option>Físico</option>
                                                        <option>Información</option>
                                                        <option>Tecnológico</option> 
                                                    </select>
                                                </div></div>     
                                            <div class="col-lg-6"><div class="form-group"><label>Activo a Cargo 2</label><input name="activo2" class="form-control" placeholder="No obligatorio"></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Categoria Activo 2</label><select name="activoCategoria2" class="form-control">
                                                        <option>No Aplica</option>
                                                        <option>Físico</option>
                                                        <option>Información</option>
                                                        <option>Tecnológico</option> 
                                                    </select>
                                                </div></div>  
                                            <div class="col-lg-6"><div class="form-group"><label>Activo a Cargo 3</label><input name="activo3" class="form-control" placeholder="No obligatorio"></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Categoria Activo 3</label><select name="activoCategoria3" class="form-control">
                                                        <option>No Aplica</option>
                                                        <option>Físico</option>
                                                        <option>Información</option>
                                                        <option>Tecnológico</option> 
                                                    </select>
                                                </div></div> 
                                            <div class="col-lg-6"><div class="form-group"><label>Activo a Cargo 4</label><input name="activo4" class="form-control" placeholder="No obligatorio"></div></div>
                                            <div class="col-lg-6"><div class="form-group"><label>Categoria Activo 4</label><select name="activoCategoria4" class="form-control">
                                                        <option>No Aplica</option>
                                                        <option>Físico</option>
                                                        <option>Información</option>
                                                        <option>Tecnológico</option> 
                                                    </select>
                                                </div></div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                                <button type="submit" class="btn btn-success">Crear Cargo</button>
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
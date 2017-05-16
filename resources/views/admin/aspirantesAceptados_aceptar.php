        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Habilitación de Cargos</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <div class="row">
                <div class="col-lg-12">   
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <a href="aspirante_estado.php?estado=HV_rechazadaHR&id_users=<?php echo $datosUser['id']; ?>&cant_cargos=<?php echo $cant_cargos; ?>"><button type="button" class="btn btn-danger">Rechazar</button></a>
                        </div>            
                        <div class="panel-body">                             
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example2">                                
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Cargo</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
                                    echo "<tr class='odd gradeX'>";
                                        echo "<td>". $registro['id_cargos'] . "</td>";
                                        echo "<td>". $registro['nombreCargo'] . "</td>"; 
                                        echo "<td class='bot'><a href='cargosHabilitar_delete.php?id=" . $registro['id'] . "'><button type='button' class='btn btn-warning'>Eliminar</button></a></td>";
                                    echo "</tr>";                               
                                }
                                ?>
                                </tbody>
                            </table>                            
                            <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#myModal1">Insertar Cargo</button>
                        </div>   
                    </div>
                    <!-- /.panel -->   
                </div>
                <!-- /.col-lg-12 -->
            </div>   
            
            <div class="row">
                <div class="col-lg-12">   
                    <div class="panel panel-success">
                        <div align="center" class="panel-heading">                           
                           HOJA DE VIDA
                        </div>
                        <!-- .panel-heading -->
                        <div class="panel-body">                      
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">DATOS PERSONALES</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="row">                                                
                                                    <div align="center" class="form-group"> 
                                                        <img width="100" height="120" src="<?php echo $datosUser['foto'];?>"/>
                                                    </div>                                                
                                                    <div class="col-lg-6">                                                     
                                                        <div class="form-group">
                                                                <label for="disabledSelect">Nombres</label>
                                                                <input class="form-control" value="<?php echo $datosUser['name'];?>"  id="disabledInput" type="text" placeholder="Disabled input" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="disabledSelect">Apellidos</label>
                                                            <input class="form-control" value="<?php echo $datosUser['lastName'];?>" id="disabledInput" type="text" placeholder="Disabled input" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">    
                                                        <div class="form-group">
                                                                <label for="disabledSelect">Documento de Identidad</label>
                                                                <input class="form-control"value="<?php echo $datosUser['DocIdentidad'];?>"  id="disabledInput" type="text" placeholder="Disabled input" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6"> 
                                                        <div class="form-group">
                                                            <label>De:</label>
                                                            <input name="DocExpedicion" value="<?php echo $datosUser['DocExpedicion'];?>" class="form-control" placeholder="Lugar de Expedición" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Fecha de Nacimiento:</label>
                                                            <input type="date" value="<?php echo $datosUser['FechaNacimiento'];?>"  name="FechaNacimiento" class="form-control" placeholder="Fecha de Nacimiento" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Edad</label>
                                                            <input name="Edad" value="<?php echo $datosUser['Edad'];?>" class="form-control" placeholder="Edad" disabled>
                                                        </div>                                                
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Sexo</label>
                                                            <input name="Edad" value="<?php echo $datosUser['sexo'];?>" class="form-control" placeholder="Edad" disabled>
                                                        </div>                                                
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Libreta Militar:</label>
                                                            <input name="LibretaMilitar" value="<?php echo $datosUser['LibretaMilitar'];?>" class="form-control" placeholder="Número Libreta Militar" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Departamento Residencia:</label>
                                                            <input name="DepartamentoResidencia" value="<?php echo $datosUser['DepartamentoResidencia'];?>" class="form-control" placeholder="Departamento Residencia" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">    
                                                        <div class="form-group">
                                                            <label>Ciudad o municipio de Residencia:</label>
                                                            <input name="CiudadResidencia"  value="<?php echo $datosUser['CiudadResidencia'];?>" class="form-control" placeholder="Ciudad o municipio de Residencia" disabled>
                                                        </div>                                                
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Dirección de Residencia:</label>
                                                            <input name="DireccionResidencia" value="<?php echo $datosUser['DireccionResidencia'];?>" class="form-control" placeholder="Dirección de Residencia" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Celular:</label>
                                                            <input name="movilPersonal" value="<?php echo $datosUser['movilPersonal'];?>" class="form-control" placeholder="Número teléfono Celular" disabled>
                                                        </div>   
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Teléfono de Residencia:</label>
                                                            <input name="TelefonoResidencia" value="<?php echo $datosUser['TelefonoResidencia'];?>" class="form-control" placeholder="Teléfono de Residencia" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Nivel Educación</label><br>
                                                            <input name="movilPersonal" value="<?php echo $datosUser['NivelEducacion'];?>" class="form-control" placeholder="Número teléfono Celular" disabled>
                                                        </div>                                                
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Título</label><br>
                                                            <input name="movilPersonal" value="<?php echo $datosUser['tituloEducacion'];?>" class="form-control" placeholder="Número teléfono Celular" disabled>
                                                        </div>                                                
                                                    </div>   
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>EPS</label><br>
                                                            <input name="movilPersonal" value="<?php echo $datosUser['eps'];?>" class="form-control" placeholder="Número teléfono Celular" disabled>
                                                        </div>                                                
                                                    </div>                                                  
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Fotocopia Cedula</label><br>
                                                            <img width="350" height="200" src="<?php echo $datosUser['ImagenDoc'];?>"/>
                                                        </div>                                                                                
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="col-lg-3">
                                                            <label>Soportes Educacion</label>                                                                                    
                                                            <a href="<?php if (empty($datosUser['SoporteEducacion'])){echo 'empty';}else{echo $datosUser['SoporteEducacion'];} ?>" download><img src='../../public/img/pdf.png'/></a>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <label>EPS a la que Pertenece:</label>
                                                            <a href="<?php if (empty($datosUser['certificadoEps'])){echo 'empty';}else{echo $datosUser['certificadoEps'];} ?>" download><img src='../../public/img/pdf.png'/></a>
                                                        </div>
                                                    </div>    
                                            </div>                
                                        </div>                                                                                 
                                    </div>
                                </div>                                
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">EXPERIENCIA LABORAL</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">                                                                              
                                        <div class="panel-body">
                                            <div class="row">
                                            
                                                            <div class="col-lg-6">    
                                                                <div class="form-group">
                                                                    <label>Cuenta usted con experiencia laboral</label>
                                                                    <input name="UltimaEmpresa" value="<?php echo $datosUser['experienciaFormal'];?>" class="form-control" disabled>
                                                                </div>
                                                            </div>    
                                                            <div class="col-lg-6">     
                                                                <div class="form-group">
                                                                    <label>Ultima Empresa donde Trabaja o trabajó</label>
                                                                    <input name="UltimaEmpresa" value="<?php echo $datosUser['UltimaEmpresa'];?>" class="form-control" disabled>
                                                                </div>
                                                            </div>    
                                                            <div class="col-lg-6">     
                                                                <div class="form-group">
                                                                    <label>Cargo</label>
                                                                    <input name="Cargo" value="<?php echo $datosUser['Cargo'];?>" class="form-control" disabled>
                                                                </div>
                                                            </div>    
                                                            <div class="col-lg-6">     
                                                                <div class="form-group">
                                                                    <label>Antiguedad</label>
                                                                    <input name="Antiguedad" value="<?php echo $datosUser['Antiguedad'];?>" class="form-control" disabled>
                                                                </div>
                                                            </div>    
                                                            <div class="col-lg-6">     
                                                                <div class="form-group">
                                                                    <label>Dirección Empresa</label>
                                                                    <input name="DireccionEmpresa" value="<?php echo $datosUser['DireccionEmpresa'];?>" class="form-control" disabled>
                                                                </div>
                                                            </div>    
                                                            <div class="col-lg-6">     
                                                                <div class="form-group">
                                                                    <label>Teléfono Empresa</label>
                                                                    <input name="TelefenoEmpresa" value="<?php echo $datosUser['TelefenoEmpresa'];?>" class="form-control" disabled>
                                                                </div>                                                                
                                                            </div>
                                                            <!-- /.col-lg-6 (nested) -->                                   
                                            </div> 
                                        </div>    
                                    </div>
                                </div>
                                
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">EXPERIENCIA SIS</a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">                                                                              
                                        <div class="panel-body">
                                            <div class="row">
                                                <div align="center" class="col-lg-4">                                                                              
                                                    <div class="form-group">
                                                        <label>Ha participado en logistica de aplicación de examenes.</label>
                                                        <input value="<?php echo $datosUser['experienciaSIS']; ?>" class="form-control" disabled>                                         
                                                    </div>
                                                </div>
                                                <div align="center" class="col-lg-4">
                                                    <div class="form-group">
                                                        <br><label>Desde</label>
                                                        <input id="desdeExperienciaSIS" type="date" name="desdeExperienciaSIS" value="<?php echo $datosUser['desdeExperienciaSIS'];?>" class="form-control" disabled>
                                                    </div>                                        
                                                </div>
                                                <div align="center" class="col-lg-4">
                                                    <div class="form-group">
                                                        <br><label>hasta</label>
                                                        <input id="hastaExperienciaSIS" type="date" name="hastaExperienciaSIS" value="<?php echo $datosUser['hastaExperienciaSIS'];?>" class="form-control" disabled>
                                                    </div>                                        
                                                </div>
                                                <div align="center" class="col-lg-12"> 
                                                    <br><label>Describa las tres últimas pruebas en las que ha participado</label><br>
                                                </div>                                       
                                                <div class="col-lg-6">
                                                    <div class="panel panel-success">
                                                        <div class="panel-heading">
                                                            Prueba 1
                                                        </div>
                                                        <div class="panel-body">                                                
                                                            <div class="form-group">
                                                                <label>Cargo Desempeñado</label>
                                                                <input value="<?php echo $datosUser['CargoSIS1']; ?>" class="form-control" name="CargoSIS1" disabled>                                                    
                                                            </div>
                                                            <label>Prueba</label>
                                                            <div class="form-group">                                                    
                                                                <input id="NombrePrueba1" name="NombrePrueba1"  value="<?php echo $datosUser['NombrePrueba1'];?>" class="form-control" readonly>                                              
                                                            </div>                                                                                                
                                                        </div>
                                                    </div> 
                                                </div>    
                                                <div class="col-lg-6">
                                                    <div class="panel panel-success">
                                                        <div class="panel-heading">
                                                            Prueba 2
                                                        </div>
                                                        <div class="panel-body">                                                
                                                            <div class="form-group">
                                                                <label>Cargo Desempeñado</label>
                                                                <input value="<?php echo $datosUser['CargoSIS2']; ?>" class="form-control" name="CargoSIS2" disabled>
                                                            </div> 
                                                            <label>Prueba</label>
                                                            <div class="form-group">                                                    
                                                                <input id="NombrePrueba2" name="NombrePrueba2"  value="<?php echo $datosUser['NombrePrueba2'];?>" class="form-control" readonly>
                                                            </div>                                                                                              
                                                        </div>
                                                    </div>
                                                </div>    
                                                <div class="col-lg-6">
                                                    <div class="panel panel-success">
                                                        <div class="panel-heading">
                                                            Prueba 3
                                                        </div>
                                                        <div class="panel-body">                                        
                                                            <div class="form-group">
                                                                <label>Cargo Desempeñado</label>
                                                                <input value="<?php echo $datosUser['CargoSIS3']; ?>" class="form-control" name="CargoSIS3" disabled>                                                      
                                                            </div> 
                                                            <label>Prueba</label>
                                                            <div class="form-group">                                                    
                                                                <input id="NombrePrueba3" name="NombrePrueba3"  value="<?php echo $datosUser['NombrePrueba3'];?>" class="form-control" readonly>
                                                            </div>  
                                                        </div>
                                                    </div>       
                                                </div>    
                                                <div class="col-lg-6">                                        
                                                    <div class="form-group">
                                                        <label>Puede participar en pruebas entre semana?</label><br>
                                                        <input value="<?php echo $datosUser['PruebasEntreSemana']; ?>" class="form-control" disabled>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Puede participar en pruebas fuera de la ciudad?</label><br>
                                                        <input value="<?php echo $datosUser['PruebasFueraBogota']; ?>" class="form-control" disabled>
                                                    </div>
                                                </div>    
                                            </div>
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
                                            <div class="row">
                                                <div class="col-lg-6">                                                   
                                                    <label>Digite los datos de una referencia personal</label><br>
                                                        <div class="form-group">
                                                            <label>Nombres:</label>
                                                            <input name="NombreRefPersonal" value="<?php echo $datosUser['NombreRefPersonal'];?>" class="form-control" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Apellidos</label>
                                                            <input name="ApellidosRefPersonal" value="<?php echo $datosUser['ApellidosRefPersonal'];?>" class="form-control" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Dirección de Residencia</label>
                                                            <input name="direccionResidenciaRefPersonal" value="<?php echo $datosUser['direccionResidenciaRefPersonal'];?>" class="form-control" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Teléfono de Residencia</label>
                                                            <input name="telefonoResidenciaRefPersonal" value="<?php echo $datosUser['telefonoResidenciaRefPersonal'];?>" class="form-control" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Número Celular</label>
                                                            <input name="celularRefPersonal" value="<?php echo $datosUser['celularRefPersonal'];?>" class="form-control" disabled>
                                                        </div>
                                                        <hr>
                                                        <div class="form-group">
                                                            <label>Conoce una persona dentro de Compañía que lo recomiende?</label><br>
                                                            <input name="celularRefPersonal" value="<?php echo $datosUser['RecomendadoTGS'];?>" class="form-control" disabled>                                                            
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nombres:</label>
                                                            <input name="NombreRecomendado" value="<?php echo $datosUser['NombreRecomendado'];?>" class="form-control" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Apellidos</label>
                                                            <input name="ApellidosRecomendado" value="<?php echo $datosUser['ApellidosRecomendado'];?>" class="form-control" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Número Celular</label>
                                                            <input name="CelularRecomendado" value="<?php echo $datosUser['CelularRecomendado'];?>" class="form-control" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Area donde Trabaja</label>
                                                            <input name="AreaRecomendado" value="<?php echo $datosUser['AreaRecomendado'];?>" class="form-control" disabled>
                                                        </div>
                                       
                                                </div>
                                                <div class="col-lg-6"> 
                                                        <label>Digite los datos de una Contacto en caso de emergencias</label>
                                                        <div class="form-group">
                                                        <label>Nombres:</label>
                                                            <input name="NombreRefEmergencia" value="<?php echo $datosUser['NombreRefEmergencia'];?>" class="form-control" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Apellidos</label>
                                                            <input name="ApellidosRefEmergencia" value="<?php echo $datosUser['ApellidosRefEmergencia'];?>" class="form-control" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Dirección de Residencia</label>
                                                            <input name="direccionResidenciaRefEmergencia" value="<?php echo $datosUser['direccionResidenciaRefEmergencia'];?>" class="form-control" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Teléfono de Residencia</label>
                                                            <input name="telefonoResidenciaRefEmergencia" value="<?php echo $datosUser['telefonoResidenciaRefEmergencia'];?>" class="form-control" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Número Celular</label>
                                                            <input name="celularRefEmergencia" value="<?php echo $datosUser['celularRefEmergencia'];?>" class="form-control" disabled>
                                                        </div>
                                                </div>
                                                <!-- /.col-lg-6 (nested) -->
                                            </div>
                                        </div>
                                    </div>
                                </div>                                                              
                            </div>
                            
                            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">                               
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Listado de Cargos</h4>
                                        </div>
                                        <div class="modal-body">
                                            
                                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">

                                                <thead>
                                                    <tr>
                                                        <th>Id Cargo</th>
                                                        <th>Nombre del Cargo</th>                                                
                                                        <th>Insertar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php while ($registro=$resultado2->fetch(PDO::FETCH_ASSOC)){                              
                                                    echo "<tr class='odd gradeX'>";
                                                        echo "<td>". $registro['id'] . "</td>";
                                                        echo "<td>". $registro['nombreCargo'] . "</td>";                  
                                                        echo "<td class='bot'><a href='cargosHabiliar_crear.php?id_cargo=" . $registro['id'] . "&id_user=" . $id_user . "'><button type='button' class='btn btn-success'>Insertar</button></a></td>";
                                                    echo "</tr>";                               
                                                }
                                                ?>
                                                </tbody>
                                            </table>                                            
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                        </div> 
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>                                        
                            
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

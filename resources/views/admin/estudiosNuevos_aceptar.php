        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <div class="row">
                <div class="col-lg-12">   
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1">Emitir Concepto</button>
                        </div>            
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
                                                            <a href="<?php echo $datosUser['ImagenDoc'];?>" download><img width="350" height="200" src="<?php echo $datosUser['ImagenDoc'];?>"/></a>
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
                    <!-- /.panel -->   
                    
                            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="estudiosNuevos_accept.php" method="POST">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Emitir Concepto</h4>
                                        </div>
                                        <div class="modal-body">
                                            
                                            <div class="form-group">
                                                <label>Concepto:</label>
                                                <select name="estadoSeguridad"  class="form-control">
                                                    <option>Rechazado</option>
                                                    <option>Aprobado</option>
                                                    <option>Información Incompleta</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Observaciones:</label>
                                                <textarea name="observacionesSeguridad" class="form-control" rows="9" placeholder="Ingrese el texto"></textarea>
                                            </div>
                                            <input type="hidden" name="id_user" value="<?php echo $id_user; ?>">                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success">Enviar</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                        </div> 
                                        </form>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div> 
                    
                </div>
                <!-- /.col-lg-12 -->
            </div>   
            
        </div>
        <!-- /#page-wrapper -->                                                    

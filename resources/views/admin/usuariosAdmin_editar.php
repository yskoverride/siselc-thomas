     

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Actualizar Datos principales</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-success">
                        <div class="panel-heading">
               
                        </div>
                        <div class="panel-body">
                            <div class="row">                       
                                <form role="form" action="../../controllers/usuarios/usuariosAdmin_update.php" method="POST">
  	                            <div class="col-lg-6">    
                                        <div class="form-group">
                                            <label>Nombres</label>
                                            <input name="nombres" value="<?php echo $datosUser['name'];?>" class="form-control" placeholder="nombres">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                  	<div class="form-group">
                                            <label>Apellidos</label>
                                            <input name="apellidos" value="<?php echo $datosUser['lastName'];?>" class="form-control" placeholder="Apellidos">
                                        </div>
                                    </div>    
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Documento de identidad</label>
                                            <input name="docIdentidad" value="<?php echo $datosUser['DocIdentidad'];?>" class="form-control" placeholder="Apellidos">
                                        </div>
                                    </div>    
                                    <div class="col-lg-6">    
  	                                <div class="form-group">
                                            <label>Correo Electrónico</label>
                                            <input name="email" value="<?php echo $datosUser['email'];?>" class="form-control" placeholder="Correo Electrónico">
                                        </div>
                                    </div>   
                                    <div class="col-lg-6">        
  	                                    <div class="form-group">
                                            <label>Nueva Contraseña</label>
                                            <input type="password" name="newPassword" class="form-control" placeholder="Contraseña">
                                            <p class="help-block">Deje el espacio vacío si no va actualizar la contraseña.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Confirmar Nueva Contraseña</label>
                                            <input type="password" name="ConfirmNewPassword" class="form-control" placeholder="Enter text">
                                            <p class="help-block">Deje el espacio vacío si no va actualizar la contraseña.</p>
                                        </div>                                        
                                    </div>                                    
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Perfil</label>
                                            <select class="form-control" name="perfil" onChange="inputdisable(this.value)">
                                                <option <?php if ($datosUser['perfil']=='superadmin'){echo 'selected';}?>>superadmin</option>
                                                <option <?php if ($datosUser['perfil']=='admin'){echo 'selected';}?>>admin </option>                                                
                                                <option <?php if ($datosUser['perfil']=='director'){echo 'selected';}?>>director</option>
                                            </select>
                                        </div>                                                                                                                       
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Sucursal</label>
                                            <select class="form-control" name="id_sucursal" id="id_sucursal" <?php if ($datosUser['perfil']!='director'){echo 'disabled'; }?>>
                                                <option value=NULL></option>
                                                <?php while($sucursal=$sucursales->fetch(PDO::FETCH_ASSOC)):?>
                                                <option value="<?php echo $sucursal['id']; ?>" <?php if ($datosUser['id_sucursal']==$sucursal['id']){echo 'selected';}?>><?php echo $sucursal['id']  . "-" . $sucursal['agencia']; ?></option>
                                                <?php endwhile; ?>
                                            </select>
                                        </div>                                                                                                                       
                                    </div> 
                                    <script>                                   
                                    function inputdisable(value) {
                                        if (value=='admin' || value=='superadmin'){
                                             document.getElementById("id_sucursal").disabled = true;
                                             document.getElementById("id_sucursal").value = "";
                                        }else{
                                            document.getElementById("id_sucursal").disabled = false;
                                        }
                                    }                        
                                    </script>                                     
                                    <input type="hidden" name="id" value="<?php echo $datosUser['id'];?>"> 
                                    <div class="col-lg-12" align="center">
                                        <button type="submit" class='btn btn-success'>Actualizar</button> 
                                        <?php echo "<a href='usuariosAdmin_delete.php?id=" . $datosUser['id'] . "'" . ' onclick="return confirm(' . "'Está seguro?'" . ')"' . "><button type='button' class='btn btn-danger'>  Eliminar  </button></a>";?>
                                    </div>
                                </form>                                   
                            </div>
                            <!-- /.row (nested) -->
                             
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-success">
                        <div class="panel-heading">
               
                        </div>
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-exampl">                                
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>modulo</th>
                                        <th>eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    while ($privilegio=$privilegios->fetch(PDO::FETCH_ASSOC)){ 
                                        echo "<tr>";
                                        echo "<td align='center'>" . $privilegio['id'] . "</td>";
                                        echo "<td align='center'>" . $privilegio['modulo'] . "</td>";                                   
                                        echo "<td align='center' class='bot'><a href='privilegio_delete.php?id=" . $privilegio['id'] . "'><button type='button' class='btn btn-warning' >Eliminar</i></button></td>";                                        
                                        echo "</tr>";   
                                    }?>        
                                </tbody>
                            </table>                             
                            <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle='modal' data-target='#myModal1'>Agregar Privilegios</button>
                        </div>
                        <!-- /.panel-body -->
                        <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">                                    
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel"></h4>
                                    </div>
                                    <form method="POST" action="usuariosAdmin_update.php">
                                    <div class="modal-body">
                                                                                                                                   
                                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">                                
                                                <thead>
                                                    <tr>
                                                        <th>id</th>
                                                        <th>Modulo</th>
                                                        <th>Agregar</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php while ($modulo=$modulos->fetch(PDO::FETCH_ASSOC)){                              
                                                    echo "<tr>";
                                                        echo "<td align='center'>". $modulo['id'] . "</td>";
                                                        echo "<td align='center'>". $modulo['modulo'] . "</td>";
                                                        echo "<td align='center'><input name=" . '"listado[]"' . " type='checkbox' value=" . $modulo['id'] . "></td>";
                                                    echo "</tr>";                                 
                                                }?>                                                       
                                                </tbody>
                                            </table>                                             
                                            <input type="hidden" name="id" value="<?php echo $datosUser['id'];?>"> 
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-primary">Seleccionar</button>
                                    </div>                                        
                                    </form>
                                    
                                </div>
                                <!-- /.modal-content -->
                            </div>
                                <!-- /.modal-dialog -->
                        </div>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
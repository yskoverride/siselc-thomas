     

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
                    <div class="panel panel-default">
                        <div class="panel-heading">
               
                        </div>
                        <div class="panel-body">
                            <div class="row">                       
                                <form role="form" action="../../controllers/usuarios/usuariosAdmin_create.php" method="POST">
  	                            <div class="col-lg-6">    
                                        <div class="form-group">
                                            <label>Nombres</label>
                                            <input name="nombres" class="form-control" placeholder="nombres">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                  	<div class="form-group">
                                            <label>Apellidos</label>
                                            <input name="apellidos" class="form-control" placeholder="Apellidos">
                                        </div>
                                    </div>    
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Documento de identidad</label>
                                            <input name="docIdentidad" class="form-control" placeholder="Apellidos">
                                        </div>
                                    </div>    
                                    <div class="col-lg-6">    
  	                                <div class="form-group">
                                            <label>Correo Electrónico</label>
                                            <input name="email" class="form-control" placeholder="Correo Electrónico">
                                        </div>
                                    </div>   
                                    <div class="col-lg-6">        
  	                                <div class="form-group">
                                            <label>Contraseña</label>
                                            <input type="password" name="password" class="form-control" placeholder="Contraseña">
                                            <p class="help-block">Deje el espacio vacío si no va actualizar la contraseña.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Confirmar Contraseña</label>
                                            <input type="password" name="confirmPassword" class="form-control" placeholder="Enter text">
                                            <p class="help-block">Deje el espacio vacío si no va actualizar la contraseña.</p>
                                        </div>                                        
                                    </div>                              
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Perfil</label>
                                            <select class="form-control" name="perfil">
                                                <option>admin</option>
                                                <option>superadmin</option>
                                                <option>director</option>
                                            </select>
                                        </div>                                                                              
                                        <button type="submit" class='btn btn-success'>Actualizar</button> 
                                    </div>                                                                                
                                </form>                                   
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
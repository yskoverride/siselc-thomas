     

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Editar Sucursal</h1>
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
                            
                            <form role="form" action="sucursal_edit.php" method="POST">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Código Agencia</label>
                                                        <input name="id" class="form-control" value="<?php echo $registro['id']; ?>">                                                
                                                    </div>
                                                </div>                                                
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Nombre Agencia</label>
                                                        <input name="agencia" class="form-control" value="<?php echo $registro['agencia']; ?>">                                                
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Director</label>
                                                        <input name="director" class="form-control" value="<?php echo $registro['director']; ?>">                                                
                                                    </div>
                                                </div>    
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Ind</label>
                                                        <input name="ind" class="form-control" value="<?php echo $registro['ind']; ?>">                                                
                                                    </div>
                                                </div>    
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Teléfono</label>
                                                        <input name="telefono" class="form-control" value="<?php echo $registro['telefono']; ?>">                                                
                                                    </div>
                                                </div>    
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Fax</label>
                                                        <input name="fax" class="form-control" value="<?php echo $registro['fax']; ?>">                                                
                                                    </div>
                                                </div>    
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Celular</label>
                                                        <input name="celular" class="form-control" value="<?php echo $registro['celular']; ?>">                                                
                                                    </div>
                                                </div>    
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Correo</label>
                                                        <input name="correo" class="form-control" value="<?php echo $registro['correo']; ?>">                                                
                                                    </div>
                                                </div>    
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Dirección</label>
                                                        <input name="direccion" class="form-control" value="<?php echo $registro['direccion']; ?>">                                                
                                                    </div> 
                                                </div>
                                                <input type="hidden" name="id_sucursal" class="form-control" value="<?php echo $registro['id']; ?>"> 
                                            </div>                                 
                                            <div class="row">
                                                <div align="center" class="col-lg-12">
                                                    <button type="submit" class="btn btn-success">Actualizar</button>
                                                    <a href="sucursal_delete.php?id_sucursal=<?php echo $registro['id']; ?>"><button type="button" class="btn btn-danger">Eliminar</button></a>
                                                </div>
                                            </div>
                            </form>
                            
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

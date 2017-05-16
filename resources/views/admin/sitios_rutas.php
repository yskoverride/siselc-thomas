        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Definir Rutas</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-success">
                        <div align="center" class="panel-heading">
                            Vacantes Requeridas para la Prueba                                                
                        </div>
                        <div class="panel-body"> 
                            <form action="rutas_update.php" method="POST">
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">                                
                                    <thead>
                                        <tr>
                                            <th>Ruta</th>                                        
                                            <th>Cargo</th>
                                            <th>Municipio</th>
                                            <th>Sucursal</th>
                                            <th>Sitio</th>
                                            <th>Cod. Sitio</th>
                                            <th># Personas</th>
                                            <th  style='display:none;'>id_vacante</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php while ($vacante=$vacantes->fetch(PDO::FETCH_ASSOC)){                              
                                        echo "<tr class='odd gradeX'>";
                                            echo "<td align='center' width='2%'><input type='text' value='". $vacante['ruta'] . "' name=" . '"rutas[]"' . "/><p style='display:none;'>" . $vacante['ruta'] . "</p></td>";
                                            echo "<td align='center'>". $vacante['nombreCargo'] . "</td>";
                                            echo "<td align='center'>". $vacante['Municipio'] . " (" . $vacante['departamento'] . ")" . "</td>";
                                            echo "<td align='center'>". $vacante['agencia'] . "</td>";
                                            echo "<td align='center'>". $vacante['nombreSitio'] . "</td>";
                                            echo "<td align='center'>". $vacante['codigoSitio'] . "</td>";
                                            echo "<td align='center'>". $vacante['cant_vacantes'] . "</td>";
                                            echo "<td align='center' style='display:none;'><input type='hidden' name=" . '"rutas2[]"' . " class='form-control input-sm' value='". $vacante['id'] . "'></td>";
                                        echo "</tr>";                                         
                                    }?>        
                                    </tbody>
                                </table>                              
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Crear Rutas</button>                                              
                            </form>
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

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-primary">Crear Vacante</button>
                                        </div>                           
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
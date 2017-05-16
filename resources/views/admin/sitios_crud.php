        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Asignación Sitios </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">                                        
                    <div class="panel panel-success">
                        <div align="center" class="panel-heading">                                                              
                        </div>
                        <div class="panel-body">             
                            <table width="100%" class="table table-striped table-bordered table-hover" >                                
                                <thead>
                                    <tr>
                                        <th>Cargo</th>
                                        <th>Departamento</th>
                                        <th>Municipio</th>
                                        <th>Sitio</th>
                                        <th>Código Sitio</th>
                                        <th>Personal Disponible</th>
                                        <th>Editar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $javaArray="[";    
                                    $javaArray2="["; 
                                    $cuenta=0;
                                    while ($vacante=$vacantes->fetch(PDO::FETCH_ASSOC)){ 
                                        $disabled1="";
                                        $disabled2="";
                                        $nombre="" . $vacante['id'] . "";
                                        $nombre3="" . $vacante['id_cargos'] . "" . $vacante['codigoMunicipio'] . ""; 
                                        echo "<tr>";
                                        echo "<td align='center'>" . $vacante['nombreCargo'] . "</td>";
                                        echo "<td align='center'>" . $vacante['departamento'] . "</td>";
                                        echo "<td align='center'>" . $vacante['Municipio'] . "</td>";
                                        echo "<td align='center'>" . $vacante['nombreSitio'] . "</td>";
                                        echo "<td align='center'>" . $vacante['codigoSitio'] . "</td>";
                                        if (isset($post4[$nombre3])) {
                                            echo "<td align='center'>$post4[$nombre3]</td>";
                                        }else{
                                            echo "<td align='center'>0</td>";
                                        }                                           
                                        if (isset($post3[$nombre])) {
                                            $cant_falt=$vacante['cant_vacantes'] - $post3[$nombre]; 
                                            $cant_sel=$post3[$nombre];
                                            if($cant_falt==0){
                                                $disabled1="disabled";
                                            }
                                        }else{
                                            $cant_falt=$vacante['cant_vacantes'];
                                            $cant_sel=0;
                                            $disabled2="disabled";
                                        }                                          
                                        echo "<td align='center' class='bot' width='10%'>"
                                        . "<button type='button' value='" . $nombre3 . "' class='btn btn-success btn-circle' onclick='filterTable(this.value, $nombre);' data-toggle='modal' data-target='#myModal1' data-toggle='tooltip' data-placement='top' title='Agregar manualmente' $disabled1>" . $cant_falt . "</button>"
                                                . " <button type='button' value='" . $nombre . "' class='btn btn-danger btn-circle' onclick='filterTable2(this.value);' data-toggle='modal' data-target='#myModal2' data-toggle='tooltip' data-placement='left' title='Eliminar manualmente' $disabled2>" . $cant_sel . "</button>"                                                
                                                . "</td>";                                        
                                        echo "</tr>";  
                                        if ($cuenta==0){
                                            $javaArray2.="'" . $nombre . "'"; 
                                            $javaArray.="'" . $nombre3 . "'";                                            
                                        }else{
                                            $javaArray2.=", '" . $nombre . "'";
                                            $javaArray.=", '" . $nombre3 . "'";                                           
                                        } 
                                        $cuenta++;
                                    }
                                    $javaArray.="]";  
                                    $javaArray2.="]"; 
                                    ?>        
                                </tbody>
                            </table>  
                            
                            <script>
                            function filterTable(value, sitio) { 
                                var lineaTabla = <?php echo $javaArray; ?>;
                                for (i=0;i<lineaTabla.length;i++){
                                    if (lineaTabla[i]==value){        
                                       var a = document.getElementsByName(lineaTabla[i]);                                       
                                       for (j=0;j<a.length;j++){  
                                           a[j].style.display = '';                                       
                                       }
                                    }else{
                                       var b = document.getElementsByName(lineaTabla[i]);
                                       for (k=0;k<b.length;k++){
                                            b[k].style.display = 'none';
                                       }
                                    }
                                }
                                var a = document.getElementsByName('temporal[]');                                       
                                for (j=0;j<a.length;j++){  
                                    a[j].value = sitio;                                       
                                }                                
                            }  
                            function filterTable2(value) { 
                                var lineaTabla = <?php echo $javaArray2; ?>;
                                for (i=0;i<lineaTabla.length;i++){
                                    if (lineaTabla[i]==value){        
                                       var a = document.getElementsByName(lineaTabla[i]);                                       
                                       for (j=0;j<a.length;j++){  
                                           a[j].style.display = '';                                       
                                       }
                                    }else{
                                       var b = document.getElementsByName(lineaTabla[i]);
                                       for (k=0;k<b.length;k++){
                                            b[k].style.display = 'none';
                                       }
                                    }
                                }                               
                            }                             
                            </script>
                            
                            <div class="col-lg-4" align="right">
                                <a class="btn btn-block btn-social btn-google-plus" href="asignacion_sitio.php?id_prueba=<?php echo $id_prueba; ?>">
                                <i class="fa fa-random"></i> Selecion General Aleatoria
                            </a>
                            </div>
                            <div class="col-lg-4" align="right">
                            <a class="btn btn-block btn-social btn-instagram" href="asignacion_sitio.php?id_prueba=<?php echo $id_prueba; ?>&key=true">
                                <i class="fa fa-envelope"></i> Confirmación general 
                            </a>
                            </div>                          
                            <div class="col-lg-4" align="right">
                                <a class="btn btn-block btn-social btn-linkedin" href="cuadro_final.php?id_prueba=<?php echo $id_prueba; ?>">
                                <i class="fa  fa-stack-overflow"></i> Cuadro de Asignación Final
                            </a>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">                                    
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"></h4>
                                        </div>
                                        <form method="POST" action="asignacion_sitio.php">
                                        <div class="modal-body">                                                                                                                                   
                                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">                                
                                                <thead>
                                                    <tr>
                                                        <th>Nombre</th>
                                                        <th>Apellido</th>
                                                        <th>C.C.</th>
                                                        <th>Email</th>
                                                        <th>Agregar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php while ($aspirante=$aspirantes->fetch(PDO::FETCH_ASSOC)){                              
                                                    echo "<tr  name='" . $aspirante['id_cargos'] . ""  . $aspirante['id_municipio'] . "'>";
                                                        echo "<td align='center'>". $aspirante['name'] . "</td>";
                                                        echo "<td align='center'>". $aspirante['lastName'] . "</td>";
                                                        echo "<td align='center'>". $aspirante['DocIdentidad'] . "</td>";
                                                        echo "<td align='center'>". $aspirante['email'] . "</td>";
                                                        echo "<td align='center'><input name=" . '"listado[]"' . " type='checkbox' value=" . $aspirante['id'] . "></td>";
                                                        echo "<input name=" . '"temporal[]"' . "  type='hiden' value=''>";
                                                    echo "</tr>";                                 
                                                }?>                                                       
                                                </tbody>
                                            </table>                                                                                        
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
                            <!-- /.modal -->                        
  
                            <!-- Modal -->
                            <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">                                    
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"></h4>
                                        </div>
                                        <form method="POST" action="asignacion_sitio.php">
                                        <div class="modal-body">                                                                                                                                       
                                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">                                
                                                <thead>
                                                    <tr>
                                                        <th>Nombre</th>
                                                        <th>Apellido</th>
                                                        <th>C.C.</th>
                                                        <th>Email</th>
                                                        <th>Agregar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php while ($aceptado=$aceptados->fetch(PDO::FETCH_ASSOC)){                              
                                                    echo "<tr  name='" . $aceptado['id_vacantes'] . "'>";
                                                        echo "<td align='center'>". $aceptado['name'] . "</td>";
                                                        echo "<td align='center'>". $aceptado['lastName'] . "</td>";
                                                        echo "<td align='center'>". $aceptado['DocIdentidad'] . "</td>";
                                                        echo "<td align='center'>". $aceptado['email'] . "</td>";
                                                        echo "<td align='center'><input name=" . '"listado2[]"' . " type='checkbox' value=" . $aceptado['id'] . "></td>";
                                                    echo "</tr>";                                 
                                                }?>        
                                                </tbody>
                                            </table>                                                                                        
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
                            <!-- /.modal -->                             
                        </div>
                        
                    </div>       
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->            
        </div>
        <!-- /#page-wrapper -->

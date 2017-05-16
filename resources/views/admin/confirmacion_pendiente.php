        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Listado de Pruebas Vigentes</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" align="right">

                        </div>
                        <!-- /.panel-heading -->
                        <form method="POST" action="postulacion_accept.php" name="myForm">
                            <div class="panel-body">               
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">                                
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Correo</th>
                                            <th>Telefono</th>
                                            <th>Ciudad</th>
                                            <th>Cargo</th>
                                            <th>Fecha envío</th>
                                            <th>
                                                <button type="button" class="btn btn-info btn-circle" onclick="SetAllCheckBoxes('myForm', 'listado3[]', true);" data-toggle='tooltip' data-placement='top' title='Seleccionar todo'><i class="fa fa-check"></i></button>
                                                <button type="button" class="btn btn-warning btn-circle" onclick="SetAllCheckBoxes('myForm', 'listado3[]', false);" data-toggle='tooltip' data-placement='top' title='deshacer selección'><i class="fa fa-times"></i></button>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
                                        echo "<tr class='odd gradeX'>";
                                            echo "<td>". $registro['name'] . " ". $registro['lastName'] . "</td>";
                                            echo "<td>". $registro['email'] . "</td>";
                                            echo "<td>". $registro['movilPersonal'] . "/". $registro['TelefonoResidencia'] . "</td>"; 
                                            echo "<td>". $registro['nombreCargo'] . "</td>";
                                            echo "<td>". $registro['Municipio'] . " (". $registro['departamento'] . ")</td>";
                                            echo "<td>". $registro['solicitudConfirmacion'] . "</td>";
                                            echo "<td align='center'><input name=" . '"listado3[]"' . " type='checkbox' value=" . $registro['id'] . "></td>";
                                        echo "</tr>";                               
                                    }
                                    ?>
                                    </tbody>
                                </table> 
                                
                                <div>
                                    <a href="javascript:history.go(-1)"><button type="button" class="btn btn-default">Cancelar</button></a>
                                    <button type="submit" class="btn btn-danger">Rechazar</button>
                                </div> 
                            </div>
                        <!-- /.panel-body -->
                        </form>
                    </div>
                    <!-- /.panel -->                    
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>

        <script type="text/javascript">
        <!--
        function SetAllCheckBoxes(FormName, FieldName, CheckValue)
        {

                if(!document.forms[FormName])
                        return;
                var objCheckBoxes = document.forms[FormName].elements[FieldName];
                if(!objCheckBoxes)
                        return;
                var countCheckBoxes = objCheckBoxes.length;
                if(!countCheckBoxes)
                        objCheckBoxes.checked = CheckValue;
                else
                        // set the check value for all check boxes
                        for(var i = 0; i < countCheckBoxes; i++)
                                objCheckBoxes[i].checked = CheckValue;
        }
        // -->
        </script>
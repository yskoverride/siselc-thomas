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
                        
                        <div class="panel-body">               
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">                                
                                <thead>
                                    <tr>
                                        <th>departamento</th>
                                        <th>Municipio</th>
                                        <th>Cargo</th>
                                        <th>Codigo Sitio</th>
                                        <th>Sitio</th>
                                        <th>Dierección</th>
                                        <th>Nombre Delegado</th>
                                        <th>Email</th>
                                        <th>Teléfonos</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
                                    echo "<tr class='odd gradeX'>";
                                        echo "<td>". $registro['departamento'] . "</td>";
                                        echo "<td>". $registro['Municipio'] . "</td>";
                                        echo "<td>". $registro['nombreCargo'] . "</td>";
                                        echo "<td>". $registro['codigoSitio'] . "</td>";
                                        echo "<td>". $registro['nombreSitio'] . "</td>";
                                        echo "<td>". $registro['direccionSitio'] . "</td>";
                                        echo "<td>". $registro['name'] . " ". $registro['lastName'] . "</td>";
                                        echo "<td>". $registro['email'] . "</td>";
                                        echo "<td>". $registro['movilPersonal'] . " / ". $registro['TelefonoResidencia'] . "</td>";                                                                                        
                                    echo "</tr>";                               
                                }
                                ?>
                                </tbody>
                            </table> 
                            
                            <div>
                                <a href="javascript:history.go(-1)"><button type="button" class="btn btn-default">Regresar</button></a>
                                <button id="btnExport" onclick="fnExcelReport();" class="btn btn-success"> EXPORT </button>
                            </div> 
                        </div>
                        <!-- /.panel-body -->
                        <script>
                        function fnExcelReport()
                        {
                            var tab_text="<table border='2px'><tr bgcolor='#87AFC6'>";
                            var textRange; var j=0;
                            tab = document.getElementById('dataTables-example'); // id of table

                            for(j = 0 ; j < tab.rows.length ; j++) 
                            {     
                                tab_text=tab_text+tab.rows[j].innerHTML+"</tr>";
                                //tab_text=tab_text+"</tr>";
                            }

                            tab_text=tab_text+"</table>";
                            tab_text= tab_text.replace(/<A[^>]*>|<\/A>/g, "");//remove if u want links in your table
                            tab_text= tab_text.replace(/<img[^>]*>/gi,""); // remove if u want images in your table
                            tab_text= tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params

                            var ua = window.navigator.userAgent;
                            var msie = ua.indexOf("MSIE "); 

                            if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer
                            {
                                txtArea1.document.open("txt/html","replace");
                                txtArea1.document.write(tab_text);
                                txtArea1.document.close();
                                txtArea1.focus(); 
                                sa=txtArea1.document.execCommand("SaveAs",true,"Say Thanks to Sumit.xls");
                            }  
                            else                 //other browser not tested on IE 11
                                sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));  

                            return (sa);
                        }     
                        </script> 
                        <iframe id="txtArea1" style="display:none"></iframe>
                        
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
     

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"></h1>
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
                            <p class='lead' id="txt"></p>
                            <?php if ($examen['tipo']=='examen'): ?>
                            <script>
                            startTime()
                            var s = <?php echo $tiempo?>;
                            function startTime() {                          
                                s--;
                                var min = Math.floor(s/60);
                                var h = Math.floor(min/60);
                                var m = min - (h*60);
                                var se = s - (m*60) - (h*60*60);
                                h=checkTime(h);
                                m=checkTime(m);
                                se=checkTime(se);
                                if (s==0){
                                    salir();
                                }
                                document.getElementById("txt").innerHTML =h+ ":" + m + ":" + se;
                                var t = setTimeout(function(){ startTime() }, 1000);
                            }
                            function salir(){
                                alert ("Se ha cumplido el tiempo limite para subir sus respuestas");
                                location.href="estadoPostulacion.php";
                            }
                            function checkTime(i) {
                                if (i<10) {
                                    i = "0" + i;
                                }
                                return i;
                            }
                            </script>
                            <?php endif; ?>
                            <form method="post" action="evaluaciones_calificar.php">
                                <?php 
                                $pregunta=1;
                                while ($registro=$resultado->fetch(PDO::FETCH_NUM)){
                                    
                                    if($registro[1]=='texto'){                                        
                                        echo "<div class='col-lg-12'><p>$registro[3]</p></div><br><br><br><br>";                                        
                                    }elseif($registro[1]=='presentacion'){                                        
                                       echo "<div class='col-lg-12' align='center'><iframe width='900' height='500' src='" . $registro[3] ."'></iframe></div><br><br><br><br>";                                                                                 
                                    }elseif($registro[1]=='video'){                                        
                                       echo "<div class='col-lg-12' align='center'><iframe width='600' height='345' src='" . $registro[3] . "'></iframe></div><br><br><br><br>";
                                    }elseif($registro[1]=='imagen'){
                                       echo "<div class='col-lg-12' align='center'><img src='" . $registro[3] . "'><br><br></div>"; 
                                    }elseif($registro[1]=='pregunta'){
                                        
                                        echo "<div class='col-lg-12'>";
                                            echo '<div class="panel panel-default">';
                                                echo '<div class="panel-heading">';
                                                    echo "Pregunta No.$pregunta:";
                                                echo '</div>';
                                                echo '<div class="panel-body">';
                                                    echo "<p> $registro[3]</p>";
                                                    echo "<h4>Opciones de Respuesta:</h4>";
                                                        echo "<ul class='list-unstyled'>";
                                                        echo "<li>A) $registro[4]</li>";
                                                        echo "<li>B) $registro[5]</li>";
                                                        echo "<li>C) $registro[6]</li>";
                                                        echo "<li>D) $registro[7]</li>";
                                                    echo "</ul>";      
                                                    echo "<select name=" . '"respuesta[]"' . "class='form-control'>";
                                                        echo "<option>-</option>";
                                                        echo "<option>A</option>";
                                                        echo "<option>B</option>";
                                                        echo "<option>C</option>";
                                                        echo "<option>D</option>";
                                                    echo "</select>";                                                   
                                                echo '</div>';
                                            echo '</div>'; 
                                        echo "</div>";
                                        $pregunta++;
                                    }elseif($registro[1]=='pregEncuesta'){
                                        
                                        echo "<div class='col-lg-12'>";
                                            echo '<div class="panel panel-default">';
                                                echo '<div class="panel-heading">';
                                                    echo "Pregunta No.$pregunta:";
                                                echo '</div>';
                                                echo '<div class="panel-body">';
                                                    echo "<p> $registro[3]</p>";     
                                                    echo "<select name=" . '"reEncuesta[]"' . "class='form-control' required>";
                                                        echo "<option>-</option>";
                                                        echo "<option value='1'>$registro[4]</option>";
                                                        echo "<option value='2'>$registro[5]</option>";
                                                        echo "<option value='3'>$registro[6]</option>";
                                                        echo "<option value='4'>$registro[7]</option>";
                                                        echo "<option value='5'>$registro[8]</option>";
                                                    echo "</select>";                                                   
                                                echo '</div>';
                                            echo '</div>'; 
                                        echo "</div>";
                                        $pregunta++;
                                    }elseif($registro[1]=='pregAbierta'){
                                        
                                        echo "<div class='col-lg-12'>";
                                            echo '<div class="panel panel-default">';
                                                echo '<div class="panel-heading">';
                                                    echo "Pregunta No.$pregunta:";
                                                echo '</div>';
                                                echo '<div class="panel-body">';
                                                    echo "<p> $registro[3]</p>"; 
                                                    echo "<textarea class='form-control' rows='3' name=" . '"reAbierta[]"' . " required></textarea>";                                                  
                                                echo '</div>';
                                            echo '</div>'; 
                                        echo "</div>";
                                        $pregunta++;
                                    }                                                                 
                                }                                                                 
                                ?> 
                                <input type="hidden" name="id_examen" value="<?php echo $id_examen; ?>">
                                 <input type="hidden" name="tipo_examen" value="<?php echo $examen['tipo']; ?>">
                                <div class='col-lg-12' align='center'><button type="submit" class="btn btn-success">Enviar Examen</button></div>
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
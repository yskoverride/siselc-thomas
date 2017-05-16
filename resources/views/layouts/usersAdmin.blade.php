
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SISELC</title>
    
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/sb-admin-2.css') }}" rel="stylesheet">    

    <!-- Custom Fonts -->
    <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    
    <!-- Social Buttons CSS -->
    <link href="{{ asset('vendor/bootstrap-social/bootstrap-social.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="../../controllers/usuarios/index.php" class="navbar-brand" >SISELC ADMIN</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <?php //echo $_SESSION["usuarioAdmin"]['name'];?><i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesión</a>
                        <form id="logout-form" action="{{ route('adminLogout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>                             
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <?php //if($_SESSION["usuarioAdmin"]['perfil']=='superadmin'){
                        //echo '<li>';
                            //echo '<a href="../../controllers/usuarios/usuariosAdmin_crud.php"><i class="fa fa-list fa-fw"></i> Usuarios Admin</a>';
                        //echo '</li>';
                        //}?>
                        <?php //if (in_array(1,$_SESSION["usuarioPrivilegios"])):?>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Admin Vacantes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level"> 
                                <li>
                                    <a href="../cargos/sucursal_crud.php">Sucursales</a>
                                </li>
                                <li>
                                    <a href="../cargos/cargos_crud.php">Cargos</a>
                                </li>                                
                                <li>
                                    <a href="../cargos/pruebas_crud.php">Pruebas</a>
                                </li>                               
                            </ul>
                        </li>
                        <?php //endif;?>
                        <?php //if (in_array(2,$_SESSION["usuarioPrivilegios"])):?>
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> E-Learning<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../e-learning/evaluaciones_crud.php">Banco de Evaluaciones</a>
                                </li>
                                <li>
                                    <a href="../e-learning/preguntas_crud.php">Banco de Items</a>
                                </li>                                                                                                                       
                            </ul>
                        </li>
                        <?php //endif;?>
                        <?php //if (in_array(3,$_SESSION["usuarioPrivilegios"])):?>
                        <li>
                            <a href="#"><i class="fa fa-eye fa-fw"></i> Estudio de Seguridad<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../seguridad/estudiosNuevos_crud.php">Estudio Primera Vez</a>
                                </li>                                                                                                                    
                            </ul>                            
                        </li> 
                        <?php //endif;?>
                        <?php //if (in_array(4,$_SESSION["usuarioPrivilegios"])):?>
                        <li>
                            <a href="#"><i class="fa fa-group fa-fw"></i> Gestión de Personal<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../aspirantes/aspirantesNuevos_crud.php">Aspirantes Nuevos</a>
                                </li>
                                <li>
                                    <a href="../aspirantes/aspirantesAceptados_crud.php">Aspirantes Aceptados</a>
                                </li>  
                                <li>
                                    <a href="../aspirantes/aspirantesRechazados_crud.php">Aspirantes Rechazados</a>
                                </li>                                 
                            </ul>
                        </li>
                        <?php //endif;?>
                        <?php //if (in_array(5,$_SESSION["usuarioPrivilegios"])):?>
                        <li>
                            <a href="#"><i class="fa fa-check-square-o"></i> Selección y Asginación<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../seleccion/pruebas_crud.php">Selección de Aspirantes</a>
                                </li>
                                <li>
                                    <a href="../seleccion/pruebas_sitios.php">Asignación de Sitios</a>
                                </li>                                  
                            </ul>
                        </li> 
                        <?php //endif;?>
                        <?php //if (in_array(6,$_SESSION["usuarioPrivilegios"])):?>
                        <li>
                            <a href="#"><i class="fa fa-truck"></i> Logística día-D<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../logistica/pruebas_rutas.php">Definición de Rutas</a>
                                </li>
                                <li>
                                    <a href="../logistica/pruebas_asistencia.php">Verificación Asistencia</a>
                                </li>                                  
                            </ul>
                        </li> 
                        <?php //endif;?>                        
                        <li>
                        <?php //if (in_array(7,$_SESSION["usuarioPrivilegios"])):?>
                        <li>
                            <a href="#"><i class="fa fa-thumbs-o-up"></i> Evaluación de Personal<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../evaluacion/pruebas_evaluacion.php">Evaluaciones</a>
                                </li>   
                                <li>
                                    <a href="../evaluacion/pruebas.php">Consolidado</a>
                                </li>
                                <li>
                                    <a href="../evaluacion/aspirantesSuspendidos.php">Suspendidos</a>
                                </li>                                 
                            </ul>
                        </li> 
                        <?php //endif;?>    
                        <li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
            @if (count($errors))
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  @foreach ($errors->all() as $error)
                     {{ $error }}
                  @endforeach                      
                </div>                      
            @endif 
            @if (session()->has('message'))
                <div class="alert alert-success alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                     {{ session()->get('message') }}                    
                </div>                      
            @endif  
            @if (session()->has('secerror'))
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>                    
                  @foreach (session()->get('secerror') as $error)
                  <li>{{ $error }}<br>
                  @endforeach                    
                </div>                      
            @endif            
            @yield('content')
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('vendor/metisMenu/metisMenu.min.js') }}"></script>
    
    <!-- DataTables JavaScript -->
    <script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables-plugins/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables-responsive/dataTables.responsive.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('dist/js/sb-admin-2.js') }}"></script>

    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    $(document).ready(function() { $('.table').dataTable(); });
    </script>

</body>

</html>
        
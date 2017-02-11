<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Bienvenido</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="css/pe-icon-7-stroke.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
        <!-- Morris chart -->
        <link rel="stylesheet" href="plugins/morris/morris.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
        <!-- Date Picker -->
        <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
        <!-- Logo Empresa en la pestaña del navegador -->
        <link href='imagenes/empresa/molinstec.ico' rel='shortcut icon' type='image/x-icon'>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <link rel="stylesheet" href="css/sistemacalibracion.css">
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition skin-purple-light sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="#" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b><img src="imagenes/empresa/molinstec.png"></b></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>MOLINSTEC</b></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->

                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <?php if($usuario->foto==""){ $usuario->foto="imagenes/usuarios/perfil.png"; }  ?>
                                    <img src="<?=  $usuario->foto;  ?>"  alt="User Image"  style="width:20px;height:20px;">
                                    <span class="hidden-xs"><?=  $usuario->name;  ?> <?=  $usuario->apellido_paterno;  ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?=  $usuario->foto;  ?>"  alt="User Image"  style="width:50px;height:50px;">
                                        <p>
                                            Usuario Admin
                                            <small>Member since Nov. 2012</small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <li class="user-body">
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Followers</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Sales</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Friends</a>
                                        </div>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Perfil</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="logout" class="btn btn-default btn-flat">Salir</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <?php if($usuario->foto==""){ $usuario->foto="imagenes/usuarios/perfil.png"; }  ?>
                            <img src="<?=  $usuario->foto;  ?>"  alt="User Image"  style="width:50px;height:50px;">
                        </div>
                        <div class="pull-left info">
                            <p>Usuario: <?=  $usuario->name;  ?></p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Buscar...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MENÚ</li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-users"></i> <span>Usuarios</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active"><a href="javascript:void(0);" onclick="listas(1);"><i class="fa fa-list"></i>Lista Usuarios</a></li>
                                <li><a href="#"><i class="fa fa-lock"></i>Permisos Usuarios</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-briefcase"></i> <span>Equipos</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active"><a href="javascript:void(0);" onclick="listas(2);"><i class="fa fa-file-word-o"></i>Ficha Equipos</a></li>
                                <li class="active"><a href="javascript:void(0);" onclick="#"><i class="fa fa-calendar"></i>Calendario de actividades</a></li>


                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-wrench"></i> <span>Mantenedores</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active"><a href="javascript:void(0);" onclick="listas(3);"><i class="fa fa-briefcase"></i>Equipos</a></li>
                                <li class="active"><a href="javascript:void(0);" onclick="listas(4);"><i class="fa fa-barcode"></i>Marcas</a></li>
                                <li class="active"><a href="javascript:void(0);" onclick="listas(5);"><i class="fa fa-map-marker"></i>Ubicaciones</a></li>
                                <li class="active"><a href="javascript:void(0);" onclick="listas(7);"><i class="fa fa-bar-chart"></i>Actividades</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-file-o"></i> <span>Informes</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="active"><a href="javascript:void(0);" onclick="listas(6);"><i class="fa fa-file-word-o"></i>Listado de equipos</a></li>
                            </ul>
                        </li>
                        </ul>
                            <li class="treeview">
                            <a href="#">
                                <i class="fa fa-file-excel-o"></i> <span>Solicitud de cotización</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                        </li>
                        </ul>
                </section>
            <!-- /.sidebar -->
            </aside>
        <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper" style="min-height:2000px;">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Bienvenido al sistema de calibración de masas y balanzas de la empresa MOLINSTEC
                    </h1>
                </section>

                <section>
                    <div id="capa_modal" class="div_modal" ></div>
                    <div id="capa_para_edicion" class="div_contenido" > </div>
                </section>

                <!-- Main content -->
                <section class="content" id="contenido_principal">
                    <!-- Small boxes (Stat box) -->

                </section><!-- /.content -->

                <!-- cargador -->
                <div style="display: none;" id="cargador" align="center">
                    <br>

                    <label style="color:#FFF; background-color:#ABB6BA; text-align:center"></label>
                    <center>
                        <img src="imagenes/empresa/espera.gif" alt="cargador" width="200" height="100"><label style="color:#ABB6BA"></label>
                    </center>
                    <br>
                    <hr style="color:#003" width="50%">
                    <br>
                </div>
            </div><!-- /.content-wrapper -->
        </div><!-- ./wrapper -->

        <!-- jQuery 2.1.4 -->
        <script src="plugins/jQuery/jQuery-2.2.3.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>  $("#content-wrapper").css("min-height","2000px"); </script>
        <!-- Bootstrap 3.3.5 -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- Morris.js charts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="plugins/morris/morris.min.js"></script>
        <!-- Sparkline -->
        <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
        <!-- jvectormap -->
        <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="plugins/knob/jquery.knob.js"></script>
        <!-- daterangepicker -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
        <script src="plugins/daterangepicker/daterangepicker.js"></script>
        <!-- datepicker -->
        <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <!-- Slimscroll -->
        <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="plugins/fastclick/fastclick.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/app.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="dist/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
        <!-- javascript del sistema de calibracion -->
        <script src="js/sistemacalibracion.js"></script>
    </body>
</html>

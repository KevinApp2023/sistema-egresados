<?php

  session_start();

  if (!isset($_SESSION['id'])) {

    header('Location: /pages/examples/login.php');

  }

  $nombre = $_SESSION['nombre'];
  $tipo_usuario = $_SESSION['tipo_usuario'];

?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
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
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="hold-transition skin-blue sidebar-mini">


    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="index2.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>P</b>A</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Panel Admin</b></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->

                        <!-- Notifications: style can be found in dropdown.less -->

                        <!-- Tasks: style can be found in dropdown.less -->

                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                <span class="hidden-xs">Alexander Pierce</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                    <p>
                                        Alexander Pierce - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="row">
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Followers</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Sales</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Friends</a>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Perfil</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="cerrar_session.php" class="btn btn-default btn-flat">Cerrar</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
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
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>Alexander Pierce</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- search form -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                    </div>
                </form>
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active treeview">
                        <a href="">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                        </a>

                    </li>

                    <li class="treeview">
                        <a href="pages/crud.php">
                            <i class="fa fa-pie-chart"></i>
                            <span>Crud Datos</span>

                        </a>
                    </li>

                    <li class="treeview">
                        <a href="">
                            <i class="fa fa-pie-chart"></i>
                            <span>Charts</span>

                        </a>
                    </li>



                    <li>
                        <a href="/pages/calendar.php">
                            <i class="fa fa-calendar"></i> <span>Calendar</span>
                            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
                        </a>
                    </li>
                    <li>
                        <a href="pages/mailbox/mailbox.php">
                            <i class="fa fa-envelope"></i> <span>Mailbox</span>
                            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
                        </a>
                    </li>

                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>










        <?php if ($tipo_usuario == 1) ?>















        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Dashboard
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </section>









            <section>
                <div id="contenedor">
                    <div id="primeracoluma" style="margin:30px;">



                        <!-- general form elements -->
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Registrar Egresado</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form action="subir.php" method="post" enctype="multipart/form-data">
                                <div class=" box-body ">
                                    <div class="form-group ">
                                        <label>Identificación</label>
                                        <input type="text " class="form-control " placeholder="Identificación ... " name="identificacion" required>
                                    </div>

                                    <div class="form-group ">
                                        <label>Nombres</label>
                                        <input type="text " class="form-control " placeholder="Nombres ... " name="nombres" required>
                                    </div>

                                    <div class="form-group ">
                                        <label>Apellidos</label>
                                        <input type="text " class="form-control " placeholder="Apellidos ... " name="apellidos" required>
                                    </div>

                                    <div class="form-group ">
                                        <label>Programa/Curso</label>
                                        <input type="text " class="form-control " placeholder="Programa/Curso ... " name="programa" required>
                                    </div>

                                    <div class="form-group ">
                                        <label>Fecha De Inicio</label>

                                        <div class="input-group date ">
                                            <div class="input-group-addon ">
                                                <i class="fa fa-calendar "></i>
                                            </div>
                                            <input type="text " class="form-control pull-right " id="datepicker " name="fecha_inicio" required>
                                        </div>
                                        <!-- /.input group -->
                                    </div>

                                    <div class="form-group ">
                                        <label>Fecha De Finalizacion</label>

                                        <div class="input-group date ">
                                            <div class="input-group-addon ">
                                                <i class="fa fa-calendar "></i>
                                            </div>
                                            <input type="text " class="form-control pull-right " id="datepicker " name="fecha_final" required>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="exampleInputFile">DOCUMENTO PDF</label>
                                            <input type="file" id="exampleInputFile" name="archivo" required>

                                            <p class="help-block ">Adjuntar archivos de certificacion del egresado.</p>
                                        </div>
                                        <!-- /.input group -->
                                    </div>



                                </div>
                                <!-- /.box-body -->

                                <div class="box-footer ">
                                    <button type="submit " class="btn btn-primary ">Registrar</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.box -->
                   





                    </div>
                    <div id="segundacolumna " style="margin-top: 30px; margin-right: 30px;">
                        <center>

                            <div class="info-box bg-yellow">
                                <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Inventory</span>
                                    <span class="info-box-number">5,200</span>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 50%"></div>
                                    </div>
                                    <span class="progress-description">
                                      50% Increase in 30 Days
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                            <div class="info-box bg-green">
                                <span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Mentions</span>
                                    <span class="info-box-number">92,050</span>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 20%"></div>
                                    </div>
                                    <span class="progress-description">
                                      20% Increase in 30 Days
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                            <div class="info-box bg-red">
                                <span class="info-box-icon"><i class="ion ion-ios-cloud-download-outline"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Downloads</span>
                                    <span class="info-box-number">114,381</span>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 70%"></div>
                                    </div>
                                    <span class="progress-description">
                                      70% Increase in 30 Days
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                            <div class="info-box bg-aqua">
                                <span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Direct Messages</span>
                                    <span class="info-box-number">163,921</span>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 40%"></div>
                                    </div>
                                    <span class="progress-description">
                                      40% Increase in 30 Days
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->


                            <!-- /.box -->

                            <!-- PRODUCT LIST -->
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Recently Added Products</h3>

                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                  </button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <ul class="products-list product-list-in-box">
                                        <li class="item">
                                            <div class="product-img">
                                                <img src="dist/img/default-50x50.gif" alt="Product Image">
                                            </div>
                                            <div class="product-info">
                                                <a href="javascript:void(0)" class="product-title">Samsung TV
                                        <span class="label label-warning pull-right">$1800</span></a>
                                                <span class="product-description">
                                            Samsung 32" 1080p 60Hz LED Smart HDTV.
                                          </span>
                                            </div>
                                        </li>
                                        <!-- /.item -->
                                        <li class="item">
                                            <div class="product-img">
                                                <img src="dist/img/default-50x50.gif" alt="Product Image">
                                            </div>
                                            <div class="product-info">
                                                <a href="javascript:void(0)" class="product-title">Bicycle
                                        <span class="label label-info pull-right">$700</span></a>
                                                <span class="product-description">
                                            26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                                          </span>
                                            </div>
                                        </li>
                                        <!-- /.item -->
                                        <li class="item">
                                            <div class="product-img">
                                                <img src="dist/img/default-50x50.gif" alt="Product Image">
                                            </div>
                                            <div class="product-info">
                                                <a href="javascript:void(0)" class="product-title">Xbox One <span class="label label-danger pull-right">$350</span></a>
                                                <span class="product-description">
                                            Xbox One Console Bundle with Halo Master Chief Collection.
                                          </span>
                                            </div>
                                        </li>
                                        <!-- /.item -->
                                        <li class="item">
                                            <div class="product-img">
                                                <img src="dist/img/default-50x50.gif" alt="Product Image">
                                            </div>
                                            <div class="product-info">
                                                <a href="javascript:void(0)" class="product-title">PlayStation 4
                                        <span class="label label-success pull-right">$399</span></a>
                                                <span class="product-description">
                                            PlayStation 4 500GB Console (PS4)
                                          </span>
                                            </div>
                                        </li>
                                        <!-- /.item -->
                                    </ul>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer text-center">
                                    <a href="javascript:void(0)" class="uppercase">View All Products</a>
                                </div>
                                <!-- /.box-footer -->
                            </div>

                        </center>

                    </div>
                </div>
                <style>
                    #contenedor {
                        display: flex;
                        flex-direction: row;
                        flex-wrap: wrap;
                    }
                    
                    #contenedor>div {
                        width: 46%;
                    }
                </style>









            <!-- jQuery 2.2.3 -->
            <script src="plugins/jQuery/jquery-2.2.3.min.js "></script>
            <!-- jQuery UI 1.11.4 -->
            <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js "></script>
            <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
            <script>
                $.widget.bridge('uibutton', $.ui.button);
            </script>
            <!-- Bootstrap 3.3.6 -->
            <script src="bootstrap/js/bootstrap.min.js "></script>
            <!-- Morris.js charts -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js "></script>
            <script src="plugins/morris/morris.min.js "></script>
            <!-- Sparkline -->
            <script src="plugins/sparkline/jquery.sparkline.min.js "></script>
            <!-- jvectormap -->
            <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js "></script>
            <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js "></script>
            <!-- jQuery Knob Chart -->
            <script src="plugins/knob/jquery.knob.js "></script>
            <!-- daterangepicker -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js "></script>
            <script src="plugins/daterangepicker/daterangepicker.js "></script>
            <!-- datepicker -->
            <script src="plugins/datepicker/bootstrap-datepicker.js "></script>
            <!-- Bootstrap WYSIHTML5 -->
            <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js "></script>
            <!-- Slimscroll -->
            <script src="plugins/slimScroll/jquery.slimscroll.min.js "></script>
            <!-- FastClick -->
            <script src="plugins/fastclick/fastclick.js "></script>
            <!-- AdminLTE App -->
            <script src="dist/js/app.min.js "></script>
            <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
            <script src="dist/js/pages/dashboard.js "></script>
            <!-- AdminLTE for demo purposes -->
            <script src="dist/js/demo.js "></script>


</body>

</html>
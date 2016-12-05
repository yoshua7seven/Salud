<?php namespace Views;
	
	$template = new Template();

	class Template
	{
		
		public function __construct(){
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Suite | Salud</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  	<link rel="stylesheet" type="text/css" href= "<?= URL; ?>Views/template/css/font-awesome.css">
  	<link rel="stylesheet" type="text/css" href= "<?= URL; ?>Views/template/css/AdminLTE.min.css">
  	<link rel="stylesheet" type="text/css" href= "<?= URL; ?>Views/template/css/_all-skins.min.css">
  	<link rel="stylesheet" type="text/css" href= "<?= URL; ?>Views/template/img/apple-touch-icon.png">

  	<link rel="stylesheet" type="text/css" href= "<?= URL; ?>Views/template/css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href= "<?= URL; ?>Views/template/js/jquery-ui-1.12.1.custom/jquery-ui.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= URL; ?>Views/template/css/ionicons.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= URL; ?>Views/template/css/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?= URL; ?>Views/template/css/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?= URL; ?>Views/template/css/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?= URL; ?>Views/template/css/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= URL; ?>Views/template/css/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?= URL; ?>Views/template/css/bootstrap3-wysihtml5.css">

    <script src="<?= URL; ?>Views/template/js/bootstrap.min.js"></script>
    <script src="<?= URL; ?>Views/template/js/miajax.js.js"></script>
    <script src="<?= URL; ?>Views/template/js/jquery.js"></script>
    <script src="<?= URL; ?>Views/template/js/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="<?= URL; ?>Views/template/js/npm.js"></script>

      <!-- Morris.js charts -->
    <script src="<?= URL; ?>Views/js/raphael-min.js"></script>
    <script src="<?= URL; ?>/template/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="<?= URL; ?>Views/template/js/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="<?= URL; ?>Views/template/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?= URL; ?>Views/template/js/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?= URL; ?>Views/template/js/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="<?= URL; ?>Views/template/js/moment.min.js"></script>
    <script src="<?= URL; ?>Views/template/js/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="<?= URL; ?>Views/template/js/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?= URL; ?>Views/template/js/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="<?= URL; ?>Views/template/js/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?= URL; ?>Views/template/js/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= URL; ?>Views/template/js/app.min.js"></script>



  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="<?= URL ?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>P</b>TILLA</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Salud</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <small class="bg-red">Online</small>
                  <span class="hidden-xs">user</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    
                    <p>
                      --..--..--
                      <small>----asd---</small>
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Cerrar</a>
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
                    
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-user"></i>
                <span>Personas</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?= URL; ?>personas/registrar"><i class="fa fa-circle-o"></i> Registrar</a></li>
                <li><a href="<?= URL; ?>personas"><i class="fa fa-circle-o"></i> Lista </a></li>
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i>
                <span>Solicitudes</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?= URL; ?>solicitudes/crear"><i class="fa fa-circle-o"></i> Crear nueva solicitud</a></li>
                <li><a href="<?= URL; ?>solicitudes"><i class="fa fa-circle-o"></i> Lista por fecha</a></li>
              </ul>
            </li>
           
            <li class="treeview">
              <a href="#">   
                <i class="fa fa-bar-chart"></i>
                <span>Estadistica</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?= URL; ?>estadisticas"><i class="fa fa-circle-o"></i>Ver estadisticas</a></li>
              </ul>
            </li>
                        
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>










<?php	} public function __destruct(){ ?>
	
	<footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Suite | Modulo Salud</b>
        </div>
        <strong><a>Alcaldia del Municipio Sucre</a>.</strong>
      </footer>

      
    
  


<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  //$.widget.bridge('uibutton', $.ui.button);
</script>


  </body>
</html>

<?php

		}
	}

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>INABIF | Sistema Administrativo</title>
    <meta name="description" content="INABIF | Sistema Administrativo">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="../apple-icon.png">
    <link rel="shortcut icon" href="../images/inabif.jpg">
    <link href="../assets/css/datepicker.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../assets/css/kpi.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="../assets/scss/style.css">
    <link href="../assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="../images/inabif.jpg" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="../images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Pantalla Principal </a>
                    </li>
                    <h3 class="menu-title">Diagnóstico Basal o de Ingreso</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="datos_centro_servicios.php" class=""  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Datos del Centro de Servicios</a>
                       </li>

                       <li class="menu-item-has-children dropdown">
                        <a href="datos_identificacion_inicial_inscripcion_residente.php" class=""  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Datos de Identificación Inicial o a la Inscripción del Residente</a>
                       </li>

                
                       <li class="menu-item-has-children dropdown">
                        <a href="datos_admision_residente.php" class=""  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Datos de Admisión Del Residente </a>
                       </li>


                       <li class="menu-item-has-children dropdown">
                        <a href="datos_condiciones_ingreso_residente.php" class=""  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Datos de Condiciones de Ingreso del Residente  </a>
                       </li>
                       <li class="menu-item-has-children dropdown">
                        <a href="datos_familiares_sociales_residente.php" class=""  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Datos Familiares y Sociales del Residente  </a>
                       </li>
                       <li class="menu-item-has-children dropdown">
                        <a href="datos_salud_residente.php" class=""  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Datos de Salud del Residente   </a>
                       </li>
                       <h3 class="menu-title">Seguimiento a cada NNA (Mensual)</h3>
                       <li class="menu-item-has-children dropdown">
                        <a href="Trabajo_SocialNNA.php" class=""  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Trabajo Social   </a>
                       </li>
                       <li class="menu-item-has-children dropdown">
                        <a href="Actividades_Sociorecreativas.php" class=""  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Actividades Sociorecreativas   </a>
                       </li>
                       <li class="menu-item-has-children dropdown">
                        <a href="Seguimiento_Salud.php" class=""  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Salud</a>
                       </li>
                       <li class="menu-item-has-children dropdown">
                        <a href="Seguimiento_Nutricion.php" class=""  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Nutrición</a>
                       </li>
                       <li class="menu-item-has-children dropdown">
                        <a href="Seguimiento_TerapiaOcupacional.php" class=""  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Terapia ocupacional y del lenguaje</a>
                       </li>
                       <li class="menu-item-has-children dropdown">
                        <a href="Seguimiento_Educacion.php" class=""  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Educación </a>
                       </li>
                       <li class="menu-item-has-children dropdown">
                        <a href="Seguimiento_FortalecimientoHabilidades.php" class=""  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Fortalecimiento de habilidades </a>
                       </li>
                       <li class="menu-item-has-children dropdown">
                        <a href="Seguimiento_Psicologico.php" class=""  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Psicológico</a>
                       </li>
                       <h3 class="menu-title">Seguimiento (Semestral)</h3>

                       <li class="menu-item-has-children dropdown">
                        <a href="seguimientoS_Psicologico.php" class=""  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Psicológico</a>
                       </li>
                       <li class="menu-item-has-children dropdown">
                        <a href="SeguimientoS_Salud.php" class=""  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Salud</a>
                       </li>
                       <li class="menu-item-has-children dropdown">
                        <a href="SeguimientoS_Nutricion.php" class=""  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Nutrición</a>
                       </li>
                       <li class="menu-item-has-children dropdown">
                        <a href="SeguimientoS_Educacion.php" class=""  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Educación </a>
                       </li>
                       <li class="menu-item-has-children dropdown">
                        <a href="SEguimientoS_TrabajoSocial.php" class=""  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Trabajo Social   </a>
                       </li>
                       <h3 class="menu-title">Salida</h3>
                       <li class="menu-item-has-children dropdown">
                        <a href="Egreso_Usuario.php" class=""  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Datos Egreso del Usuario   </a>
                       </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                  <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                  <div class="header-left">
                      
                      
                  </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="../images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="perfil-usuario.php"><i class="fa fa- user"></i>Mi Perfil</a>

                                <a class="nav-link" href="page-login.php"><i class="fa fa-power -off"></i>Cerrar Sesión</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="fa-fa-user-circle">Lesly Villalobos </i>
                        </a>

                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

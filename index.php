<?php
//configuración y conexión
require_once("include/config/config.php");
require_once($CONFIG['pathinclude']."config/cx.php");

//Consultar en esta página los anuncios 
require_once($CONFIG['pathinclude']."cls/notas.php");
$objNotas = new notas;
$notas = $objNotas->consultarNotas(1); //1 para que muestre solo las 5 primeras 
unset($objNotas);

?>
<!DOCTYPE html>
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <head>
        <title>Transparencia Sonora</title>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="The Dream Multipurpose HTML5 Template">
        <meta name="author" content="CraftDzine">

        <!-- Favicon -->
        <link rel="shortcut icon" href="img/istai/iconoistai.ico">

       
        <!-- CSS Global -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="plugins/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="plugins/owl-carousel/owl.theme.css">

    </head>
    <body>
        <!-- Start Main Wrapper -->
        <div class="wrapper">

        <link rel="stylesheet" href="plugins/FlexSlider/jquery.flexslider.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">

        <!-- WEB FONTS -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/css?family=Raleway:500,800" rel="stylesheet" property="stylesheet" type="text/css" media="all" />

        <!-- REVOLUTION STYLE ICON/FONT -->
        <link rel="stylesheet" type="text/css" href="plugins/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
        <link rel="stylesheet" type="text/css" href="plugins/revolution/fonts/font-awesome/css/font-awesome.min.css">

        <!-- REVOLUTION STYLE SHEETS -->
        <link rel="stylesheet" type="text/css" href="plugins/revolution/css/settings.css">
        <!-- REVOLUTION LAYERS STYLES -->
        <link rel="stylesheet" type="text/css" href="plugins/revolution/css/layers.css">

        <!-- REVOLUTION NAVIGATION STYLES -->
        <link rel="stylesheet" type="text/css" href="plugins/revolution/css/navigation.css">
            <!-- Start Slidingbar -->
            <section class="slidingbar-fixed top-slidingbar-wrapper">
                <div class="top-slidingbar" style="display: none;">
                    <div class="container">
                        <div class="row">
                          <div class="col col-md-4 col-sm-4">
                                <h3 class="cv-theme-widget-title">
                                    <span class="main-border">Información</span>
                                </h3>
                                <p>Insituto Sonorense de Transparencia Acceso a la Información y Protección de Datos Personales.</p>
                                <ul class="header-social-icons pull-left">
                                    <li class="social-icons"><a data-toggle="tooltip" data-placement="top" title="Facebook!" href="https://www.facebook.com/TransparenciaSonora/"><i class="fa fa-facebook"></i></a></li>
                                    <li class="social-icons"><a data-toggle="tooltip" data-placement="top" title="Twitter!" href="https://twitter.com/transparenteSon?lang=es"><i class="fa fa-twitter"></i></a></li>           
                                </ul>
                            </div>
                            <div class="col col-md-4 col-sm-4">
                                <h3 class="cv-theme-widget-title">
                                    <span class="main-border">Contacto</span>
                                </h3>
                                <ul class="contact-list-unstyled">
                                    <li><i class="fa fa-home"></i>Dr. Hoeffer # 65 Col. Centenario, Hermosillo, Sonora</li>
                                    <li><i class="fa fa-phone"></i>Teléfono : (662) 2131543</li>
                                    <li><i class="fa fa-envelope-o"></i>Email:  <a href="#">contacto@transparenciasonora.org</a></li>
                                    <li><i class="fa fa-connectdevelop"></i>Web :  <a href="#">soporte@transparenciasonora.org</a></li>
                                </ul>
                            </div>
                             <div class="col col-md-4 col-sm-4">
                                <h3 class="cv-theme-widget-title">
                                    <span class="main-border">Login</span>
                                </h3>
                                <ul class="contact-list-unstyled">
                                    <li><i class="fa fa-info-circle" ></i>En esta Liga Podras Ingresar al Panel Administrativo </li>
                                    <li><i class="fa fa fa-users"></i><a href="#" id="MosOcu" >Acceso al Panel</a></li>
                                    <div id="uno" style="display:none;">
                                        <form action=“ingresar.php” method=“POST”>
                                            <div  class="input-group margin-bottom-sm" >
                                                  <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                                  <input class="form-control" type="text" placeholder="User" name="nnombre">
                                            </div>
                                            <div class="input-group">
                                                  <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                                                  <input class="form-control" type="password" placeholder="Password" name="">
                                            </div>
                                            
                                            <div align="center" style="padding:5px;top-align:8px; align-content: center; position: center;" >

                                                  <a type="submit" class="btn-custom btn-mini border-btn btn-gray" ><i class="fa fa-sign-in"></i> Ingresar</a>
                                            </div>
                                        </form>
                                    </div>
                                </ul>
                            </div>
                          <!-- <div class="col col-md-6 col-sm-6 footer-links">
                                <h3 class="cv-theme-widget-title">
                                    <span class="main-border">Contáctanos</span>
                                </h3>

                                <ul class="contact-list-unstyled">
                                    <li><i class="fa fa-home"></i>Dr. Hoeffer #65 Col. Centenario, Hermosillo, Sonora</li>
                                    <li><i class="fa fa-phone"></i> Teléfono : 01(662) 213 15 43 </li>
                                    <li><i class="fa fa-envelope-o"></i>Email:  <a href="#">unidaddeenlace@transparenciasonora.org</a></li>
                                    <li><i class="fa fa-connectdevelop"></i>Web :  <a href="http://www.transparenciasonora.org.mx">www.transparenciasonora.org.mx</a></li>
                                     <ul class="header-social-icons pull-left">
                                    <li class="social-icons"><a data-toggle="tooltip" data-placement="top" title="Facebook!" href="https://www.facebook.com/TransparenciaSonora"><i class="fa fa-facebook"></i></a></li>
                                    <li class="social-icons"><a data-toggle="tooltip" data-placement="top" title="Twitter!" href="https://twitter.com/transparenteSon"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                                </ul>
                                <div class="footer-copyright">
                                    <p>&copy; All Rights Reserved @ <a target="_blank" href="http://www.transparenciasonora.org.mx">ISTAI</a></p>
                                </div>
                            </div> -->
                            
                            <!-- End Contact --> 

                            <!-- Start Quick Links -->  
                            <!-- <div class="col-md-6 col-sm-6 col-xs-12 footer-links  category sidebar-category-block">
                                <h3 class="cv-theme-widget-title">
                                    <span class="main-border">ISTAI</span>
                                </h3>

                                <ul class="list-unstyled">
                                    <li><a href="about_us.html">Quienes Somos</a></li>
                                    <li><a href="team.html">Transparencia</a></li>
                                    <li><a href="price.html">Servicios</a></li>
                                    <li><a href="services.html">Sujetos Obligados</a></li>
                                    <li><a href="contact_us.html">Contáctanos</a></li>
                                </ul>

                            </div> -->
                            <!-- End  Quick Links -->   
                           <!--
                            <div class="col col-md-4 col-sm-4">
                                <h3 class="cv-theme-widget-title">
                                    <span class="main-border">Information</span>
                                </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt uteralis labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <ul class="header-social-icons pull-left">
                                    <li class="social-icons"><a data-toggle="tooltip" data-placement="top" title="Facebook!" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="social-icons"><a data-toggle="tooltip" data-placement="top" title="Twitter!" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="social-icons"><a data-toggle="tooltip" data-placement="top" title="Linkedin!" href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li class="social-icons"><a data-toggle="tooltip" data-placement="top" title="Dribbble!" href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li class="social-icons"><a data-toggle="tooltip" data-placement="top" title="Linkedin!" href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li class="social-icons"><a  data-toggle="tooltip" data-placement="top" title="Pinterest!" href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                            -->

                        </div>
                    </div>
                </div> 
                <div class="top-slidingbar-trigger-wrapper"><span class="top-slidingbar-trigger">+</span></div>
            </section>
            <!-- End Slidingbar -->

            <!-- Start Header -->
            <div class="header cd-header-block ">
                <!--Start Navbar -->
                <div class="navbar mega-menu" role="navigation">
                    <div class="container">
                        <!-- Start Brand and Mobile Display -->
                        <div class="menu-container">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".cd-navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <!-- Start Navbar Brand -->
                            <div class="navbar-brand" style="width:100%; max-width:150px;" >
                                <a href="index.html" >
                                    <img class="header-logo"  src="img/istai/istai_logo.jpg" alt="Logo">
                                </a>
                            </div>
                            <!-- End Navbar Brand -->
                       </div>

                        <!-- Nav Links -->
                        <div class="collapse navbar-collapse cd-navbar slidingbar-fixed top-slidingbar-wrapper">
                            <div class="menu-container">
                                <ul class="nav navbar-nav">
                                    <!-- Start Home -->
                                    <li class="dropdown">
                                        <a href="index11.html;" class="dropdown-toggle" data-toggle="dropdown">
                                            Inicio
                                        </a>
                                    </li>
                                    <!-- End Home -->

                                    <!-- Start Pages -->
                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                           Nuestra Institucion
                                        </a>
                                        <ul class="dropdown-menu">
                                            <!-- About Pages -->
                                            <li >
                                                <a href="paginas/NuestroInst/AcercaNos.html"  ><i class="fa fa-caret-right"  ></i>Acerca de Nosotros</a>
                                                <!--ul class="dropdown-menu">
                                                    
                                                </ul-->
                                            </li>
                                            <!-- End About Pages -->

                                            <!-- Service Pages -->
                                            <li >
                                                <a href="paginas/NuestroInst/comisionados.html"><i class="fa fa-caret-right"></i>Comisionados</a>
                                                <!--ul class="dropdown-menu">
                                                  
                                                </ul-->
                                            </li>
                                            <!-- End Service Pages -->

                                            <!-- Contacts -->
                                            <li >
                                                <a href="paginas/NuestroInst/directorio.html" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-right"></i>Directorio</a>
                                                <!-- <ul class="dropdown-menu">
                                                    <li><a href="contact_us.html"><i class="fa fa-caret-right"></i>Contacts 1</a></li>
                                                    <li><a href="contact_us2.html"><i class="fa fa-caret-right"></i>Contacts 2</a></li>

                                                </ul> -->
                                            </li>
                                            <!-- End Contacts -->
                                            <!-- Pricing Tables -->
                                            <li >
                                                <a href="paginas/NuestroInst/estrucOrgan.html"><i class="fa fa-caret-right"></i>Estructura Organica</a>
                                                <!--<ul class="dropdown-menu">
                                                    <li><a href="price.html"><i class="fa fa-caret-right"></i>Pricing Tables 1</a></li>
                                                    <li><a href="price2.html"><i class="fa fa-caret-right"></i>Pricing Tables 2</a></li>
                                                </ul> -->
                                            </li>
                                            <!-- End Pricing Tables -->

                                            <!-- Pricing Tables -->
                                            <li >
                                                <a href="paginas/NuestroInst/filoInstituc.html"><i class="fa fa-caret-right"></i>Filosofia Institucional</a>
                                            </li>
                                            <!-- End Pricing Tables -->

                                            <!-- Pricing Tables -->
                                            <li >
                                                <a href="paginas/NuestroInst/marcoNormativo.html"><i class="fa fa-caret-right"></i>Marco Normativo</a>
                                            </li>
                                            <!-- End Pricing Tables -->

                                        </ul>
                                    </li>
                                    <!-- End Pages -->

                                    <!-- Start Transparencia -->
                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                            Transparencia
                                        </a>
                                        <ul class="dropdown-menu ">
                                            <!-- Solicitud de Informacion -->
                                            <li class="dropdown-submenu">
                                                <a href="javascript:void(0);"><i class="fa fa-caret-right"></i>Solicitud de Informacion</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="http://www.plataformadetransparencia.org.mx/" target="_blank"><i class="fa fa-caret-right"></i>Plataforma Nacional de Transparencia</a></li>
                                                    <li><a href="http://infomex.sonora.gob.mx/" target="_blank"><i class="fa fa-caret-right"></i>Infomex</a></li>
                                                </ul> 
                                            </li>
                                            <!-- Fin de Solicitud de Informacion -->

                                            <!-- Rendicion de Cuentas -->
                                            <li><a href="paginas/Transparencia/rendiCuentas.html"><i class="fa fa-caret-right"></i>Rendicion de Cuentas</a></li>
                                            <!-- Fin de Obligacion de Transparencia-->

                                            <!-- Unidades de Transparencia-->
                                            <li><a href="paginas/Transparencia/unidadTrans.html" ><i class="fa fa-caret-right"></i>Unidades de Transparencia</a></li>
                                            <!-- Fin Unidades de Transparencia-->
                                        </ul>
                                    </li>
                                    <!-- End Transparencia -->

                                    <!-- Start Servicios -->
                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                           Servicios
                                        </a>
                                        <ul class="dropdown-menu ">
                                            <!-- Start Difusion-->
                                            <li class="dropdown-submenu"><a href="javascript:void(0);"><i class="fa fa-caret-right"></i>Difusion</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="paginas/Servicios/conferencias.html" ><i class="fa fa-caret-right"></i>Conferencias</a></li>
                                                        <li><a href="paginas/Servicios/convYcur.html"><i class="fa fa-caret-right"></i>Convocatorias y Cursos</a></li>
                                                    </ul>
                                            </li>
                                            <!-- End Difusion-->

                                            <!-- Start Capacitacion-->
                                            <li class="dropdown-submenu"><a href="javascript:void(0);"><i class="fa fa-caret-right"></i>Capacitacion</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="paginas/Servicios/capaSO.html" ><i class="fa fa-caret-right"></i>Sujetos Obligados</a></li>
                                                        <li><a href="paginas/Servicios/capaCiudada.html"><i class="fa fa-caret-right"></i>Ciudadanos</a></li>
                                                        <li><a href="paginas/Servicios/capaEmpre.html"><i class="fa fa-caret-right"></i>Organizaciones y Empresas</a></li>
                                                    </ul>
                                            </li>
                                            <!-- End Capacitacion-->
                                            <!-- Start Asesorias-->
                                            <li><a href="paginas/Servicios/asesoria.html"><i class="fa fa-caret-right"></i>Asesorias</a></li>
                                            <!-- End Asesorias-->
                                            
                                            <!-- Start Transparencia en tu comunidad-->
                                            <li><a href="paginas/Servicios/transpaComunidad.html"><i class="fa fa-caret-right"></i>Transparencia en tu Comunidad</a></li>
                                            <!-- End Transparencia en tu comunidad-->
                                        </ul>
                                    </li>
                                    <!-- End Servicios -->

                                    <!-- Start Acceso a la Informacion -->
                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                            Acceso a la Información
                                        </a>
                                        <ul class="dropdown-menu ">
                                            <!-- Start Como Preguntar-->
                                            <li><a href="paginas/AccesoInfo/preguntar.html"><i class="fa fa-caret-right"></i>¿Como Preguntar?</a></li>
                                            <!-- End Como PReguntar-->

                                            <!-- Start Plataforma NAcional-->
                                            <li><a href="paginas/AccesoInfo/plataformaNac.html"><i class="fa fa-caret-right"></i>Plataforma Nacional</a></li>
                                            <!-- End Plataforma Nacional-->

                                            <!-- Start Estadistica-->
                                            <li><a href="paginas/AccesoInfo/estadistica.html"><i class="fa fa-caret-right"></i>Estadistica</a></li>
                                            <!-- End Estadistica-->
                                        </ul>
                                    </li>
                                    <!-- End Acceso a la informacion -->



                                    <!-- Start Sujetos Obligados-->
                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                            Sujetos Obligados
                                        </a>
                                        <ul class="dropdown-menu">
                                           <!-- Start Directorio-->
                                            <li><a href="paginas/SujeObliga/directorioObliga.html"><i class="fa fa-caret-right"></i>Directorio</a></li>
                                            <!-- End Directorio-->

                                            <!-- Start Puente-->
                                            <li><a href=""><i class="fa fa-caret-right"></i>Puente</a></li>
                                            <!-- End Puente-->

                                            <!-- Start Plataforma Nacional-->
                                            <li><a href="http://www.plataformadetransparencia.org.mx/" target="_blank"><i class="fa fa-caret-right"></i>Plataforma Nacional</a></li>
                                            <!-- End Plataforma Nacional-->

                                            <!-- Start REd de Municipios Transparentes-->
                                            <li><a href="http://ities.org/redmunicipios/index.htm" target="_blank"><i class="fa fa-caret-right"></i>Red de Municipio Transparente</a></li>
                                            <!-- End REd de Municipio Trnasparente-->
                                        </ul>
                                    </li>
                                    <!-- End Shortcodes -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Navbar -->
            </div>
            <!-- End Header -->
           

            <!-- Start Blog-->
            <section class="home-main-contant-style blog-page-blog-style">
                <div class="container">
                    <div class="row">
                        <!-- Start Sidebar -->
                        <aside>
                            <div class="sidebar col-md-4 col-sm-4">

                               <!-- Start Sidebar Recent Blogs -->  
                                <div class="sidebar-block sidebar-recentpost-block cv-theme-30">
                                    <h3 class="cv-theme-widget-title">
                                        <span class="main-border">Sesiones de Pleno</span>
                                    </h3>
                                    <ul class="sidebar-recent-post">
                                        <li><a href="paginas/Pleno/pln_Convo.html"><img src="img/blog/recent1.jpg" title="Convocatorias" /></a></li>
                                        <li><a href="paginas/Pleno/pln_act.html"><img src="img/blog/recent2.jpg" title="Actas" /></a></li>
                                        <li><a href="paginas/Pleno/pln_acu.html"><img src="img/blog/recent3.jpg" title="Listas de Acuerdos" /></a></li>
                                        <li><a href="paginas/Pleno/pln_resol.html"><img src="img/blog/recent4.jpg" title="Resoluciones" /></a></li>
                                        <li><a href="paginas/Pleno/pln_sesion.html"><img src="img/blog/recent5.jpg" title="Sesion en Vivo" /></a></li>
                                        <li><a href="paginas/Pleno/pln_rr.html"><img src="img/blog/recent6.jpg" title="Recurso de Revision" /></a></li>
                                    </ul>
                                </div>
                                <!-- End Sidebar Recent Blogs -->		
								
                                <div class=" page-bg-color sidebar-block category sidebar-category-block cv-theme-30">
                                        <h3 class="cv-theme-widget-title">
                                            <span class="main-border">Ejerce tus Derechos</span>
                                        </h3>
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingOne">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                            <i class="more-less glyphicon glyphicon-plus"></i>
                                                           ¿Cómo pedir Información?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
                                                    <div class="panel-body">
                                                        <img class="img-responsive img-rounded img-thumbnail" src="img/istai/Logo PNT.jpg">
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingTwo">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                            <i class="more-less glyphicon glyphicon-plus"></i>
                                                          Proteger tus Datos Personales
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                    <div class="panel-body">
                                                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ante sem, consequat a lectus sed, hendrerit fermentum quam. Duis luctus pretium sapien eu maximus. Donec vehicula scelerisque efficitur. Ut pulvinar tristique purus at vulputate. Ut et ullamcorper libero, ut semper nisi. Donec lacus lacus, rutrum accumsan mattis sit amet, aliquet eu risus.</p>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ante sem, consequat a lectus sed, hendrerit fermentum quam. Duis luctus pretium sapien eu maximus. Donec vehicula scelerisque efficitur. Ut pulvinar tristique purus at vulputate. Ut et ullamcorper libero, ut semper nisi. Donec lacus lacus, rutrum accumsan mattis sit amet, aliquet eu risus.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingThree">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                            <i class="more-less glyphicon glyphicon-plus"></i>
                                                            Quejas o Inconformidades
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                    <div class="panel-body">
                                                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ante sem, consequat a lectus sed, hendrerit fermentum quam. Duis luctus pretium sapien eu maximus. Donec vehicula scelerisque efficitur. Ut pulvinar tristique purus at vulputate. Ut et ullamcorper libero, ut semper nisi. Donec lacus lacus, rutrum accumsan mattis sit amet, aliquet eu risus.</p>
                                                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ante sem, consequat a lectus sed, hendrerit fermentum quam. Duis luctus pretium sapien eu maximus. Donec vehicula scelerisque efficitur. Ut pulvinar tristique purus at vulputate. Ut et ullamcorper libero, ut semper nisi. Donec lacus lacus, rutrum accumsan mattis sit amet, aliquet eu risus.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>

                              <!-- Start Sidebar Colateral -->
                                <div class="sidebar-block sidebar-coments-block cv-theme-30">
                                    <h3 class="cv-theme-widget-title">
                                        <span class="main-border">Colateral</span>
                                    </h3>

                                    <iframe src="http://transparenciasonora.org/colateral/scroll.php" width="320" height="300"></iframe>

                                </div> 
                                <!-- End Sidebar Colateral -->  


                                <!-- Start Left Sidebar Categories -->
                                <div class="sidebar-block category sidebar-category-block cv-theme-30">
                                    <h3 class="cv-theme-widget-title">
                                        <span class="main-border">Servicios</span>
                                    </h3>
                                    <ul class="list-unstyled">
                                        <li><a href="paginas/Servicios/difusion.html">Difusion</a></li>
                                        <li><a href="paginas/Servicios/capacitacion.html">Capacitación</a></li>
                                        <li><a href="paginas/Servicios/asesoria.html">Asesorias</a></li>
                                        <li><a href="paginas/Servicios/transpaComunidad.html">Transparencia en tu Comunidad</a></li>
                                    </ul>
                                </div>
                                <!-- End Sidebar Categories -->

                                <!-- Start Sidebar Archives -->
                                <div class="sidebar-block archive cv-theme-30">
                                    <h3 class="cv-theme-widget-title">
                                        <span class="main-border">Sitios de Interés</span>
                                    </h3>
                                    <ul class="list-unstyled">
                                        <li> <a href="http://inicio.ifai.org.mx/" target="_blank">INAI</a></li>
                                        <li> <a href="http://snt.org.mx/" target="_blank">Sistema Nacional de Transparencia</a></li>
                                        <li> <a href="http://www.sonora.gob.mx/" target="_blank">Gobierno del Estado de Sonora</a></li>
                                        <li> <a href="http://www.congresoson.gob.mx/" target="_blank">Congreso del Estado de Sonora</a></li> 
                                        <li> <a href="http://www.stjsonora.gob.mx/" target="_blank">Poder Judicial del Estado de Sonora</a> </li>
                                        <li> <a href="http://www.sonoraciudadana.org.mx/" target="_blank">Sonora Ciudadana</a></li>
                                    </ul>

                                </div>
                                <!-- End Sidebar Archives -->

                                <!-- Start Sidebar Tags -->
                                <div class="sidebar-block tag sidebar-tag-block">
                                    <h3 class="cv-theme-widget-title">
                                        <span class="main-border">Tags</span>
                                    </h3>
                                    <div class="box-content">
                                        <div class="tags"> 
                                           <!-- <a href="#">Free</a> 
                                            <a href="#a">Fashion</a> 
                                            <a href="#a">Best sale</a> 
                                            <a href="#a">Popular</a>
                                            <a href="#a">Design</a> 
                                            <a href="#a">Layout</a> 
                                            <a href="#a">Wordpress</a> 
                                            <a href="#a">HTML</a> 
                                            <a href="#a">CSS</a>
                                            <a href="#a">Design</a> 
                                            <a href="#a">PHP</a> 
                                            -->
                                        </div>
                                    </div>
                                </div>

                                <!-- End Sidebar Tags -->


                            </div>
                        </aside>
                        <!-- End Sidebar -->

                        <div class="col-md-8 col-sm-8">
                            <div class="row">

                                    <div class="col-md-9 col-sm-9 col-xs-9 margin-bottom30">
                                            <h3 class="cv-theme-widget-title">
                                                <span class="main-border">Noticias</span>
                                            </h3>
                                        <div class="standard-post-thumbnail">
                                            <div class="post-image-block">
                                                <div id="owl-blog" class="owl-carousel owl-theme">
                                                     <?php
													 foreach($notas as $id => $nota){ //Notas consultadas
                                                     ?>
                                                     <div class="item">
                                                        <a href="#">
                                                            <img src="<?=$CONFIG['sitioimgnotas'].$nota['nts_imagen']?>" alt="" class="img-responsive">
                                                        </a>
                                                        <div class="blog-dis">
                                                            <h4 class="entry-title"><a href="blog_signal.html"><?=$nota['nts_titulo']?> </a></h4>
                                                        </div>
                                                     </div>
                                                     <?php
													 } //termina las notas consultadoas 
													 ?>
                                                    
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
								
                                <!--  Inicio Imagenes de lado--> 
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <div class="product">
                                            </ul-->
                                            <div class="product-image">
                                                <a class="product-link" href="img/home/sujetoobligados/docs/listasujetosobligados2014.pdf" target="_blank">
                                                <img class="product-img-pri" title="Image" alt="Image" src="img/product/pro1.jpg">
                                                <img class="product-img-second" title="Image" alt="Image" src="img/product/pro2.jpg">
                                            </a>
                                                </div>
                                        </div>

                                        <div class="product-sidePrin">                                        
                                            <div class="product-image">
                                                <a class="product-link" href="http://www.plataformadetransparencia.org.mx/" target="_blank">
                                                <img src="img/home/logo_pnt.jpg" class="product-img-pri" style="border-color:gray;">
                                                <!--<img class="product-img-pri" title="Image" alt="Image" src="img/product/pro1.jpg">
                                                <img class="product-img-second" title="Image" alt="Image" src="img/product/pro2.jpg">-->
                                                </a>
                                            </div>                                  
                                        </div>
                                        <div class="product-sidePrin">                                        
                                            <div class="product-image">
                                                <a class="product-link" href="http://ities.org/redmunicipios/" target="_blank">
                                                <img src="img/home/imageside1.jpg" class="product-img-pri">
                                                <!--<img class="product-img-pri" title="Image" alt="Image" src="img/product/pro1.jpg">
                                                <img class="product-img-second" title="Image" alt="Image" src="img/product/pro2.jpg">-->
                                                </a>
                                            </div>                                  
                                        </div>
                                    </div>   
                                    
                                <!-- Fin de Imagenes de lado-->

                                <!-- Inicio Parte centro abajo de noticias-->
                                    <div class="col-md-4 col-sm-6 col-xs-12 margin-Center20">
                                        <div class="standar-margin-centerblock">
                                            <div class="post-image-block">
                                                <a href="http://transparenciasonora.org/jovenes_ninos/jovenes_ities.swf" target="_blanck"><img src="img/home/baner2.jpg" alt="" class="img-responsive"></a>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-4 col-sm-6 col-xs-12 margin-Center20">
                                        <div class="standar-margin-centerblock">
                                            <div class="post-image-block">
                                                <a href="http://www.transparenciasonora.org/jovenes_ninos/infantil_ities.swf" target="_blanck"><img src="img/home/baner3.jpg" alt="" class="img-responsive"></a>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-4 col-sm-6 col-xs-12 margin-Center20">
                                        <div class="standar-margin-centerblock">
                                            <div class="post-image-block">
                                                <a href="http://snt.org.mx/" target="_blanck"><img src="img/home/logo_SNT.jpg" alt="" class="img-responsive"></a>
                                            </div>
                                        </div>
                                    </div>
                                <!-- Fin Parte centro abajo de noticias-->

                                <!-- INICIO -->
                                <div class="tabs-section col-md-12 col-sm-12">
                                    <!-- Nav Tabs -->
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#technology" data-toggle="tab">Sujetos Obligados</a></li>
                                        <li><a href="#fashion" data-toggle="tab">Org. de Trans.</a></li>
                                        <li><a href="#business" data-toggle="tab">Aso. PRO Trans.</a></li>
                                        <li><a href="#" data-toggle="tab">See all</a></li>
                                    </ul>

                                    <!-- Tab panels -->
                                    <div class="tab-content row">
                                        <!-- Tab Content 1 -->
                                             <div class="tab-pane fade in active" id="technology">
                                               
                                                <!-- imagenes-->
                                                    
                                                    <div class="margin-bottom30 col-md-4 col-sm-6 col-xs-12 ">                                        
                                                        <div class="product-image imagen-median" style="padding-bottom: 20px;">
                                                            <div class="blog-dis" style="text-align:center;">
                                                                <h4 class="entry-title"><a >Poder Ejecutivo</a></h4>
                                                            </div>
                                                            <a class="product-link " href="img/home/sujetoobligados/docs/Poder Ejecutivo 30 agosto 16.pdf" target="_blank">
                                                            <img src="img/home/sujetoobligados/carpe/gobiernoson-bicubic.jpg" class="img-responsive" >
                                                           
                                                            </a>
                                                           
                                                        </div>     

                                                        <div class="product-image imagen-median" style="padding-bottom: 20px;">
                                                             <div class="blog-dis" style="text-align:center;">
                                                                <h4 class="entry-title"><a>Organismo Autonomo</a></h4>
                                                            </div>
                                                            <a class="product-link" href="img/home/sujetoobligados/docs/Organismo autonomos 30 agosto 16.pdf" target="_blank">
                                                            <img src="img/home/sujetoobligados/carpe/sindicato-bell.jpg" class="img-responsive" >
                                                            
                                                            </a>
                                                           
                                                        </div>   

                                                        <div class="product-image imagen-median" style="padding-bottom: 20px;">
                                                             <div class="blog-dis" style="text-align:center;">
                                                                <h4 class="entry-title"><a>Sindicatos</a></h4>
                                                            </div>
                                                            <a class="product-link " href="#" title="">
                                                            <img src="img/home/sujetoobligados/carpe/Sindicatos-1-bicubic.jpg" class="img-responsive" >
                                                            
                                                            </a>
                                                           
                                                        </div>                                
                                                    </div>
                                                    
                                                    <div class="margin-bottom30 col-md-4 col-sm-6 col-xs-12 ">                                        
                                                        <div class="product-image imagen-median" style="padding-bottom: 20px;">
                                                            <div class="blog-dis" style="text-align:center;">
                                                                <h4 class="entry-title"><a >Poder Judicial</a></h4>
                                                            </div>
                                                            <a class="product-link " href="img/home/sujetoobligados/docs/Poder Judicial.pdf" title="" target="_blank">
                                                            <img src="img/home/sujetoobligados/carpe/poderjudicial-bicubic.jpg" class="img-responsive" >
                                                            
                                                            </a>
                                                           
                                                        </div>     

                                                        <div class="product-image imagen-median" style="padding-bottom: 20px;">
                                                             <div class="blog-dis" style="text-align:center;">
                                                                <h4 class="entry-title"><a>Municipios</a></h4>
                                                            </div>
                                                            <a class="product-link " href="img/home/sujetoobligados/docs/Municipios.pdf"  target="_blank">
                                                            <img src="img/home/sujetoobligados/carpe/sonora-bell.jpg"  class="img-responsive" >
                                                           
                                                            </a>
                                                           
                                                        </div>   

                                                        <div class="product-image imagen-median" style="padding-bottom: 20px;">
                                                             <div class="blog-dis" style="text-align:center;">
                                                                <h4 class="entry-title"><a>Asociaciones Civiles</a></h4>
                                                            </div>
                                                            <a class="product-link " href="#" title="">
                                                            <img src="img/home/sujetoobligados/carpe/asociacion-civil-mitchell.jpg" class="img-responsive" >
                                                            
                                                            </a>
                                                           
                                                        </div>                                
                                                    </div>

                                                   
                                                    <div class="margin-bottom30 col-md-4 col-sm-6 col-xs-12 ">                                        
                                                        <div class="product-image imagen-median" style="padding-bottom: 20px;">
                                                            <div class="blog-dis" style="text-align:center;">
                                                                <h4 class="entry-title"><a >Poder Legislativo</a></h4>
                                                            </div>
                                                            <a class="product-link " href="img/home/sujetoobligados/docs/Poder Legislativo.pdf" target="_blank" title="">
                                                            <img src="img/home/sujetoobligados/carpe/congreso-bicubic.jpg" class="img-responsive" >
                                                            
                                                            </a>
                                                           
                                                        </div>     

                                                        <div class="product-image imagen-median" style="padding-bottom: 20px;">
                                                             <div class="blog-dis" style="text-align:center;">
                                                                <h4 class="entry-title"><a>Partidos Politicos</a></h4>
                                                            </div>
                                                            <a class="product-link " href="#" >
                                                            <img src="img/home/sujetoobligados/carpe/partidospoliticos-bicubic.jpg" class="img-responsive">
                                                            
                                                            </a>
                                                           
                                                        </div>   
                                   
                                                    </div>
                                                    
                                                <!-- imagenes    -->
                                            </div>

                                        <!-- Tab Content 2 -->
                                           <div class="tab-pane fade "  id="fashion">

                                                <div class="col-md-2 col-sm-6 col-xs-12" >
                                                    
                                                    <div class="imagen-chicas">
                                                        <a href="http://www.inai.org.mx" target="_blank" title="INSTITUTO NACIONAL DE ACCESO A LA INFORMACIÓN Y PROTECCIÓN DE DATOS ">
                                                            <img src="img/home/organismos/inai.jpg" class="product-img-pri">
                                                        </a>
                                                    </div>

                                                    <div class="imagen-chicas">
                                                        <a href="http://www.ichitaip.org.mx" title="Instituto Chihuahuense para la Transparencia y Acceso a la Información Pública" target="_blank">
                                                            <img src="img/home/organismos/instituto_chihuahua.jpg" class="product-img-pri">
                                                        </a>
                                                    </div>

                                                    <div class="imagen-chicas">
                                                        <a href="http://www.iacip-gto.org.mx" title="Instituto de Acceso a la Información Pública de Guanajuato " target="_blank">
                                                            <img src="img/home/organismos/instituto_guanajuato.jpg" class="product-img-pri">
                                                        </a>
                                                    </div>

                                                    <div class="imagen-chicas">
                                                        <a href="http://www.itainayarit.org.mx" title="Instituto de Transparencia y Acceso a la Información Pública del Estado de Nayarit" target="_blank">
                                                            <img src="img/home/organismos/instituto_nayarit.jpg" class="product-img-pri">
                                                        </a>
                                                    </div>

                                                    <div class="imagen-chicas">
                                                        <a href="http://www.cegaipslp.org.mx/" title="Comisión Estatal de Garanta de Acceso a la Información de San Luis Potosí" target="_blank">
                                                            <img src="img/home/organismos/instituto_sanluisptsi.jpg" class="product-img-pri">
                                                        </a>
                                                    </div>

                                                    <div class="imagen-chicas">
                                                        <a href="http://www.ivai.org.mx/" title="Instituto Veracruzano de Acceso a la Información" target="_blank">
                                                            <img src="img/home/organismos/instituto_veracruz.jpg" class="product-img-pri">
                                                        </a>
                                                    </div>
                                                </div>
                                               
                                                <div class="col-md-2 col-sm-6 col-xs-12" >
                                                                                                        
                                                    <div class="imagen-chicas">
                                                        <a href="http://www.itea.org.mx" title="Instituto de Transparencia del Estado de Aguascalientes" target="_blank">
                                                            <img src="img/home/organismos/instituto_aguascalientes.jpg" class="product-img-pri">
                                                        </a>
                                                    </div>

                                                    <div class="imagen-chicas">
                                                        <a href="http://www.icai.org.mx" title="Instituto Coahuilense de Acceso a la Información Pública" target="_blank">
                                                            <img src="img/home/organismos/insituto_coahuila.jpg" class="product-img-pri">
                                                        </a>
                                                    </div>

                                                    <div class="imagen-chicas">
                                                        <a href="http://transparencia.guerrero.gob.mx/" title="Instituto de Transparencia y Acceso a la Información Pública del Estado de Guerrero" target="_blank">
                                                            <img src="img/home/organismos/instituto_guerrero.jpg" class="product-img-pri">
                                                        </a>
                                                    </div>

                                                    <div class="imagen-chicas">
                                                        <a href="http://www.ctainl.org.mx" title="Comisión de Transparencia y Acceso a la Información de Nuevo León " target="_blank">
                                                            <img src="img/home/organismos/instituto_nuevoleon.jpg" class="product-img-pri">
                                                        </a>
                                                    </div>

                                                    <div class="imagen-chicas">
                                                        <a href="http://www.ceaipsinaloa.org.mx/" target="_blank" title="Comisión Estatal para el Acceso a la Información Pública del Estado de Sinaloa">
                                                            <img src="img/home/organismos/instituto_sinaloa.jpg" class="product-img-pri">
                                                        </a>
                                                    </div>

                                                    <div class="imagen-chicas">
                                                        <a href="http://inaipyucatan.org.mx" target="_blank" title="Instituto de Acceso a la Información Pública del Estado de Yucatán ">
                                                            <img src="img/home/organismos/instituto_yucatan.jpg" class="product-img-pri">
                                                        </a>
                                                    </div>
                                                </div>
                                                                                 
                                                <div class="col-md-2 col-sm-6 col-xs-12" >
                                                    
                                                    <div class="imagen-chicas">
                                                         <a href="http://www.itaipbc.org.mx/" title="Instituto de Transparencia y Acceso a la Información Pública del Estado de Baja California" target="_blank">
                                                            <img src="img/home/organismos/instituto_bc.jpg" class="product-img-pri">
                                                        </a>
                                                    </div>

                                                    <div class="imagen-chicas">
                                                        <a href="http://infocol.org.mx/" title="Instituto de Transparencia, Acceso a la Informacion Publica y Proteccion de Datos del Estado de Colima" target="_blank">
                                                            <img src="img/home/organismos/instituto_aguascalientes.jpg" class="product-img-pri">
                                                        </a>
                                                    </div>

                                                    <div class="imagen-chicas">
                                                        <a href="http://www.iaipgh.org.mx/" title="Instituto de Acceso a la Información Pública Gubernamental de Hidalgo" target="_blank">
                                                            <img src="img/home/organismos/instituto_hidalgo.jpg" class="product-img-pri">
                                                        </a>
                                                    </div>

                                                    <div class="imagen-chicas">
                                                        <a href="http://iaipoaxaca.org.mx/" title="Instituto Estatal de Acceso a la Información Pública de Oaxaca " target="_blank">
                                                            <img src="img/home/organismos/instituto_oaxaca.jpg" class="product-img-pri">
                                                        </a>
                                                    </div>

                                                    <div class="imagen-chicas">
                                                        <a href="http://www.transparenciasonora.org/" title="Instituto de Sonorense de Transparencia acceso a la Informacion Publica" target="_blank">
                                                            <img src="img/home/organismos/instituto_bc.jpg" class="product-img-pri">
                                                        </a>
                                                    </div>

                                                    <div class="imagen-chicas">
                                                        <a href="http://www.izai.org.mx/" title="Comisión Estatal para el Acceso a la Información Pública de Zacatecas " target="_blank">
                                                            <img src="img/home/organismos/instituto_zacateca.jpg" class="product-img-pri">
                                                        </a>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-2 col-sm-6 col-xs-12" >
                                                   
                                                    <div class="imagen-chicas">
                                                        <a href="http://www.itai.org.mx" title="Instituto de Transparencia y Acceso a la Información Pública de Baja California Sur " target="_blank">
                                                            <img src="img/home/organismos/instituto_bcs.jpg" class="product-img-pri">
                                                        </a>
                                                    </div>

                                                    <div class="imagen-chicas">
                                                        <a href="http://www.infodf.org.mx/" title="Instituto de Acceso a la Información Pública del Distrito Federal" target="_blank">
                                                            <img src="img/home/organismos/instituto_df.jpg" class="product-img-pri">
                                                        </a>
                                                    </div>

                                                    <div class="imagen-chicas">
                                                        <a href="http://www.itei.org.mx" title="Instituto de Transparencia e Información Pública de Jalisco" target="_blank">
                                                            <img src="img/home/organismos/instituto_jalisco.jpg" class="product-img-pri">
                                                        </a>
                                                    </div>

                                                    <div class="imagen-chicas">
                                                        <a href="http://www.caip.org.mx" title="Comisión para el Acceso a la Información Pública y Protección de Datos Personales del Estado (PUEBLA) " target="_blank">
                                                            <img src="img/home/organismos/instituto_puebla2.jpg" class="product-img-pri">
                                                        </a>
                                                    </div>

                                                    <div class="imagen-chicas">
                                                        <a href="http://www.itaip.org.mx" title="Instituto Tabasqueño de Transparencia y Acceso a la Información Pública" target="_blank">
                                                            <img src="img/home/organismos/instituto_tabasco.jpg" class="product-img-pri">
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="col-md-2 col-sm-6 col-xs-12" >
                                                    
                                                    <div class="imagen-chicas">
                                                        <a href="http://www.cotaipec.org.mx/" title="Comisión de Transparencia y Acceso a la Información Pública del Estado de Campeche" target="_blank">
                                                            <img src="img/home/organismos/instituto_campeche.jpg" class="product-img-pri">
                                                        </a>
                                                    </div>

                                                    <div class="imagen-chicas">
                                                        <a href="http://www.idaip.org.mx/" title="Instituto Duranguense de Acceso a la Información Pública y Protección de Datos Personales " target="_blank">
                                                            <img src="img/home/organismos/instituto_durango.jpg" class="product-img-pri">
                                                        </a>
                                                    </div>

                                                    <div class="imagen-chicas">
                                                        <a href="http://www.itaimich.org.mx/" title="Instituto para la Transparencia y Acceso a la Información Pública del Estado de Michoacán " target="_blank">
                                                            <img src="img/home/organismos/instituto_michoacan.jpg" class="product-img-pri">
                                                        </a>
                                                    </div>

                                                    <div class="imagen-chicas">
                                                        <a href="http://www.infoqro.mx/" title="Comisión Estatal de Información Gubernamental de Queretaro " target="_blank">
                                                            <img src="img/home/organismos/instituto_queretaro.jpg" class="product-img-pri">
                                                        </a>
                                                    </div>

                                                    <div class="imagen-chicas">
                                                        <a href="www.itait.org.mx" title="Instituto de Transparencia y Acceso a la Información de Tamaulipas" target="_blank">
                                                            <img src="img/home/organismos/instituto_tamaulipas.jpg" class="product-img-pri">
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="col-md-2 col-sm-6 col-xs-12" >
                                                    
                                                    <div class="imagen-chicas">
                                                        <a href="http://www.iaipchiapas.org.mx/" title="Instituto de Acceso a la Información Pública de la Administración Pública Del Estado de Chiapas" target="_blank">
                                                            <img src="img/home/organismos/instituto_chiapas.jpg" class="product-img-pri">
                                                        </a>
                                                    </div>

                                                    <div class="imagen-chicas">
                                                        <a href="http://www.infoem.org.mx/" title="Instituto de Transparencia y Acceso a la Información Pública del Estado de México" target="_blank">
                                                            <img src="img/home/organismos/instituto_estadomexico.jpg" class="product-img-pri">
                                                        </a>
                                                    </div>

                                                    <div class="imagen-chicas">
                                                        <a href="http://www.imipe.org.mx" target="_blank" title="Instituto Morelense de Información Pública y Estadística">
                                                            <img src="img/home/organismos/instituto_morelia.jpg" class="product-img-pri">
                                                        </a>
                                                    </div>

                                                    <div class="imagen-chicas">
                                                        <a href="http://www.idaipqroo.org.mx/" target="_blank" title="Instituto de Transparencia y Acceso a la Información Pública de Quintana Roo">
                                                            <img src="img/home/organismos/instituto_qroo.jpg" class="product-img-pri">
                                                        </a>
                                                    </div>

                                                    <div class="imagen-chicas">
                                                        <a href="http://www.caip-tlax.org.mx/" title="Comisión de Transparencia del Estado de Tlaxcala " target="_blank">
                                                            <img src="img/home/organismos/instituto_tlaxcala.jpg" class="product-img-pri">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        <!-- Tab Content 3 -->
                                            <div class="tab-pane fade" id="business">
                                                 <div class="margin-bottom30 col-md-4 col-sm-6 col-xs-12 ">                                        
                                                        <div class="product-image imagen-median" style="padding-bottom: 20px;">
                                                            <div class="blog-dis" style="text-align:center;">
                                                                <h4 class="entry-title"><a ></a></h4>
                                                            </div>
                                                            <a class="product-link " href="http://articulo19.org/" target="_blank" title="">
                                                            <img src="img/home/empresas/article19-bicubic.jpg" class="img-responsive" >
                                                           
                                                            </a>
                                                           
                                                        </div>     

                                                        <div class="product-image imagen-median" style="padding-bottom: 20px;">
                                                             <div class="blog-dis" style="text-align:center;">
                                                                <h4 class="entry-title"><a> </a></h4>
                                                            </div>
                                                            <a class="product-link" href="http://www.cimtra.org.mx/" target="_blank" >
                                                            <img src="img/home/empresas/cimtra-mitchell.jpg" class="img-responsive" >
                                                            
                                                            </a>
                                                           
                                                        </div>   

                                                        <div class="product-image imagen-median" style="padding-bottom: 20px;">
                                                             <div class="blog-dis" style="text-align:center;">
                                                                <h4 class="entry-title"><a> </a></h4>
                                                            </div>
                                                            <a class="product-link " href="http://fundar.org.mx/" target="_blank" title="">
                                                            <img src="img/home/empresas/fundar-bicubic.jpg" class="img-responsive" >
                                                            
                                                            </a>
                                                           
                                                        </div>                                
                                                    </div>
                                                    
                                                    <div class="margin-bottom30 col-md-4 col-sm-6 col-xs-12 ">                                        
                                                        <div class="product-image imagen-median" style="padding-bottom: 20px;">
                                                            <div class="blog-dis" style="text-align:center;">
                                                                <h4 class="entry-title"><a >   </a></h4>
                                                            </div>
                                                            <a class="product-link " href="http://www.colectivoporlatransparencia.org/" target="_blank" title="">
                                                            <img src="img/home/empresas/colectivo-lanczos3.jpg" class="img-responsive" >
                                                            
                                                            </a>
                                                           
                                                        </div>     

                                                        <div class="product-image imagen-median" style="padding-bottom: 20px;">
                                                             <div class="blog-dis" style="text-align:center;">
                                                                <h4 class="entry-title"><a> </a></h4>
                                                            </div>
                                                            <a class="product-link " href="http://www.contraloriaciudadana.org.mx/"  target="_blank">
                                                            <img src="img/home/empresas/ong-bicubic.jpg" class="img-responsive" >
                                                           
                                                            </a>
                                                           
                                                        </div>   

                                                                                      
                                                    </div>

                                                   
                                                    <div class="margin-bottom30 col-md-4 col-sm-6 col-xs-12 ">                                        
                                                        <div class="product-image imagen-median" style="padding-bottom: 20px;">
                                                            <div class="blog-dis" style="text-align:center;">
                                                                <h4 class="entry-title"><a >   </a></h4>
                                                            </div>
                                                            <a class="product-link " href="http://www.sonoraciudadana.org.mx/" target="_blank" title="">
                                                            <img src="img/home/empresas/sonoraciudadana-mitchell.jpg" class="img-responsive" >
                                                            
                                                            </a>
                                                           
                                                        </div>     

                                                        <div class="product-image imagen-median" style="padding-bottom: 20px;">
                                                             <div class="blog-dis" style="text-align:center;">
                                                                <h4 class="entry-title"><a>   </a></h4>
                                                            </div>
                                                            <a class="product-link " href="http://www.tm.org.mx/" target="_blank" >
                                                            <img src="img/home/empresas/transparenciamexicana-mitchell.jpg" class="img-responsive">
                                                            
                                                            </a>
                                                           
                                                        </div>   
                                   
                                                    </div>
                                            </div> 
                                    </div>
                                    <!-- End Tab Panels -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Blog-->

            <!-- Start Foooter-->
            <footer>
                <div class="main-footer">
                    <div class="container">
                        <div class="row">

                            <!-- Start Contact --> 
                            <div class="col col-md-4 col-sm-6 footer-links">
                                <h3 class="cv-theme-widget-title">
                                    <span class="main-border">Contáctanos</span>
                                </h3>

                                <ul class="contact-list-unstyled">
                                    <li><i class="fa fa-home"></i>Dr. Hoeffer #65 Col. Centenario, Hermosillo, Sonora</li>
                                    <li><i class="fa fa-phone"></i> Teléfono : 01(662) 213 15 43 </li>
                                    <li><i class="fa fa-envelope-o"></i>Email:  <a href="#">unidaddeenlace@transparenciasonora.org</a></li>
                                    <li><i class="fa fa-connectdevelop"></i>Web :  <a href="http://www.transparenciasonora.org.mx">www.transparenciasonora.org.mx</a></li>
                                    <li class="social-icons"><a data-toggle="tooltip" data-placement="top" title="Facebook!" href="https://www.facebook.com/TransparenciaSonora"><i class="fa fa-facebook"></i></a></li>
                                    <li class="social-icons"><a data-toggle="tooltip" data-placement="top" title="Twitter!" href="https://twitter.com/transparenteSon"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                                <div class="footer-copyright">
                                    <p>&copy; All Rights Reserved @ <a target="_blank" href="http://www.transparenciasonora.org.mx">ISTAI</a></p>
                                </div>
                            </div>
                            <!-- End Contact --> 

                            <!-- Start Quick Links -->  
                            <div class="col-md-4 col-sm-6 col-xs-12 footer-links  category sidebar-category-block">
                                <h3 class="cv-theme-widget-title">
                                    <span class="main-border">ISTAI</span>
                                </h3>

                                <ul class="list-unstyled">
                                    <li><a href="about_us.html">Quienes Somos</a></li>
                                    <li><a href="team.html">Transparencia</a></li>
                                    <li><a href="price.html">Servicios</a></li>
                                    <li><a href="services.html">Sujetos Obligados</a></li>
                                    <li><a href="contact_us.html">Contáctanos</a></li>
                                </ul>

                            </div>
                            <!-- End  Quick Links -->	


                            <!-- Start Recent Works -->  
                            <div class="col col-md-4 col-sm-6 footer-links">
                                <h3 class="cv-theme-widget-title">
                                    <span class="main-border">Ubicacion</span>
                                </h3>
                            
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d435.8853018494193!2d-110.95990618267824!3d29.07370951579229!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x216b3a2475197705!2sTransparencia+Sonora!5e0!3m2!1ses-419!2smx!4v1473355604198" width="100%" height="auto" align="center" lang="es" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                            <!-- End  Recent Works -->

                            <!-- Start Tags -->
                            <!--div class="col-md-3 col-sm-6 footer-links">
                                <h3 class="cv-theme-widget-title">
                                    <span class="main-border">Tags</span>
                                </h3>
                                <div class="box-content">
                                    <div class="tags"> 
                                        <a href="#">Free</a> 
                                        <a href="#a">Fashion</a> 
                                        <a href="#a">Best sale</a> 
                                        <a href="#a">Popular</a>
                                        <a href="#a">Design</a> 
                                        <a href="#a">Layout</a> 
                                        <a href="#a">Wordpress</a> 
                                        <a href="#a">HTML</a> 
                                        <a href="#a">CSS</a>
                                        <a href="#a">Design</a> 
                                        <a href="#a">PHP</a> 
                                        <a href="#">Free</a> 
                                        <a href="#a">Fashion</a> 
                                        <a href="#a">Best sale</a> 
                                        <a href="#a">Popular</a>
                                        <a href="#a">Design</a> 
                                        <a href="#a">Layout</a> 
                                        <a href="#a">Wordpress</a> 
                                        <a href="#a">HTML</a> 
                                        <a href="#a">CSS</a>
                                        <a href="#a">Design</a> 
                                        <a href="#a">PHP</a> 
                                        <a href="#a">Fashion</a> 
                                        <a href="#a">Best sale</a> 
                                        <a href="#a">Popular</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Tags -->

                        </div>

                    </div>
                </div>
            </footer>
            <!-- End Foooter-->

        </div>  
        <!-- End Main Wrapper -->
        <!-- jquery libs -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

        
        <!-- REVOLUTION JS FILES -->
        <script type="text/javascript" src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>

        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
        (Load Extensions only on Local File Systems ! 
        The following part can be removed on Server for On Demand Loading) -->
        <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
       
        <!-- SLIDER REVOLUTION SCRIPT  -->
        <script type="text/javascript">
                    var tpj = jQuery;
                    var revapi34;
                    tpj(document).ready(function () {
                        if (tpj("#rev_slider_34_1").revolution == undefined) {
                            revslider_showDoubleJqueryError("#rev_slider_34_1");
                        } else {
                            revapi34 = tpj("#rev_slider_34_1").show().revolution({
                                sliderType: "standard",
                                jsFileLocation: "/revolution/js/",
                                sliderLayout: "fullwidth",
                                dottedOverlay: "none",
                                delay: 9000,
                                navigation: {
                                    keyboardNavigation: "on",
                                    keyboard_direction: "horizontal",
                                    mouseScrollNavigation: "off",
                                    onHoverStop: "on",
                                    touch: {
                                        touchenabled: "on",
                                        swipe_threshold: 75,
                                        swipe_min_touches: 1,
                                        swipe_direction: "horizontal",
                                        drag_block_vertical: false
                                    }
                                    ,
                                    arrows: {
                                        style: "gyges",
                                        enable: true,
                                        hide_onmobile: false,
                                        hide_over: 778,
                                        hide_onleave: false,
                                        tmp: '',
                                        left: {
                                            h_align: "right",
                                            v_align: "bottom",
                                            h_offset: 40,
                                            v_offset: 0
                                        },
                                        right: {
                                            h_align: "right",
                                            v_align: "bottom",
                                            h_offset: 0,
                                            v_offset: 0
                                        }
                                    }
                                    ,
                                    tabs: {
                                        style: "erinyen",
                                        enable: true,
                                        width: 250,
                                        height: 100,
                                        min_width: 250,
                                        wrapper_padding: 0,
                                        wrapper_color: "transparent",
                                        wrapper_opacity: "0",
                                        tmp: '<div class="tp-tab-title">{{title}}</div><div class="tp-tab-desc">{{description}}</div>',
                                        visibleAmount: 3,
                                        hide_onmobile: true,
                                        hide_under: 778,
                                        hide_onleave: false,
                                        hide_delay: 200,
                                        direction: "vertical",
                                        span: false,
                                        position: "inner",
                                        space: 10,
                                        h_align: "right",
                                        v_align: "center",
                                        h_offset: 30,
                                        v_offset: 0
                                    }
                                },
                                viewPort: {
                                    enable: true,
                                    outof: "pause",
                                    visible_area: "80%"
                                },
                                responsiveLevels: [1240, 1024, 778, 480],
                                gridwidth: [1240, 1024, 778, 480],
                                gridheight: [500, 450, 400, 350],
                                lazyType: "none",
                                parallax: {
                                    type: "scroll",
                                    origo: "enterpoint",
                                    speed: 400,
                                    levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50],
                                },
                                shadow: 0,
                                spinner: "off",
                                stopLoop: "off",
                                stopAfterLoops: -1,
                                stopAtSlide: -1,
                                shuffle: "off",
                                autoHeight: "off",
                                hideThumbsOnMobile: "off",
                                hideSliderAtLimit: 0,
                                hideCaptionAtLimit: 0,
                                hideAllCaptionAtLilmit: 0,
                                debugMode: false,
                                fallbacks: {
                                    simplifyAll: "off",
                                    nextSlideOnWindowFocus: "off",
                                    disableFocusListener: false,
                                }
                            });
                        }
                    });	/*ready*/
                </script>	
                <script >
                    $(document).ready(function(){ 
                        $('#MosOcu').on('click',function(){
                        $('#uno').toggle();
                       });
                    });
                    function mostrar(){
                        document.getElementById('uno').style.display='block';
                    }
                    function ocultar(){
                        document.getElementById('uno').style.display='none';
                    }
                   </script>
        <!-- JS Global Compulsory -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="plugins/owl-carousel/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/filter.js"></script>
        <script type="text/javascript" src="plugins/waypoints/waypoints.min.js"></script>
        <script type="text/javascript" src="plugins/counterup/jquery.counterup.min.js"></script>
        <script type="text/javascript" src="plugins/FlexSlider/jquery.flexslider-min.js"></script>
        <script type="text/javascript" src="js/magnific-popup.min.js"></script>
        <script type="text/javascript" src="js/jquery.selectBox.js"></script>
        <script type="text/javascript" src="js/custom.js"></script>

        <!--[if lt IE 9]>
        <script src="respond.js"></script>
        <script src="html5shiv.js"></script>
        <![endif]-->

    </body>
</html>

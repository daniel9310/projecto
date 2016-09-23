<?php session_start(); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Panel Administrativo</title>
	<!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Global -->
    	<link href="<?=$CONFIG['sitio']?>assets/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?=$CONFIG['sitio']?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=$CONFIG['sitio']?>css/style.css">
        <link rel="stylesheet" href="<?=$CONFIG['sitio']?>plugins/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="<?=$CONFIG['sitio']?>plugins/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="<?=$CONFIG['sitio']?>plugins/FlexSlider/jquery.flexslider.css">
        <link rel="stylesheet" href="<?=$CONFIG['sitio']?>css/animate.css">
        <link rel="stylesheet" href="<?=$CONFIG['sitio']?>css/font-awesome.min.css">
        <link rel="stylesheet" href="<?=$CONFIG['sitio']?>css/magnific-popup.css">       
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


    <!-- WEB FONTS -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/css?family=Raleway:500,800" rel="stylesheet" property="stylesheet" type="text/css" media="all" />
       


          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
          <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
           <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
            <script type="text/javascript">
                jQuery(document).ready(function($) {
                    $('#contenido').load('inicio.php'); // La primera vez que se carga la página se mostrará el index.html

                    $('#navegacion ul li a').click(function(e) {
                        e.preventDefault();
                        var href = $(this).attr('href');
                        $('#contenido').php(''); // Borra el contenido
                        $('#contenido').load(href + '.php');
                    });
                });
            </script>

</head>
<body>
        <link rel="stylesheet" href="<?=$CONFIG['sitio']?>plugins/FlexSlider/jquery.flexslider.css">
        <link rel="stylesheet" href="<?=$CONFIG['sitio']?>css/animate.css">
        <link rel="stylesheet" href="<?=$CONFIG['sitio']?>css/font-awesome.min.css">
        <link rel="stylesheet" href="<?=$CONFIG['sitio']?>css/magnific-popup.css">

        <!-- WEB FONTS -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/css?family=Raleway:500,800" rel="stylesheet" property="stylesheet" type="text/css" media="all" />

        <!-- REVOLUTION STYLE ICON/FONT -->
        <link rel="stylesheet" type="text/css" href="<?=$CONFIG['sitio']?>plugins/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
        <link rel="stylesheet" type="text/css" href="plugins/revolution/fonts/font-awesome/css/font-awesome.min.css">

        <!-- REVOLUTION STYLE SHEETS -->
        <link rel="stylesheet" type="text/css" href="<?=$CONFIG['sitio']?>plugins/revolution/css/settings.css">
        <!-- REVOLUTION LAYERS STYLES -->
        <link rel="stylesheet" type="text/css" href="<?=$CONFIG['sitio']?>plugins/revolution/css/layers.css">

        <!-- REVOLUTION NAVIGATION STYLES -->
        <link rel="stylesheet" type="text/css" href="<?=$CONFIG['sitio']?>plugins/revolution/css/navigation.css">


        <!-- Start Header -->
            <div class="header cd-header-block col-md-12 col-sm-12" style="background: #DEDEDE; color:steelblue; padding: 8px; border: 1px solid #CCCCCC">
                <aside class="col-md-9 col-sm-9">
                    <h3 class="cv-theme-widget-title">
                        <span class="main-border">Panel Administrativo</span>
                    </h3>
                </aside>
                <aside class="rigth-side col-md-3 col-sm-3">
                <form action="<?=$CONFIG['sitio']?>cerrarsesion.php" name="form_logout">
                    
                    <div class="list-group" style="text-align:right; align:right;">  
                       <a type="submit" class="btn-custom btn-mini border-btn btn-gray" ><i class="fa fa-user fa-fw fa-2x"></i> <?php echo  $_SESSION['usr_nombre']?></a> 
                      <a type="submit" class="btn-custom btn-mini border-btn btn-gray"  href="javascript: form_logout.submit();"><i class="fa fa-sign-out fa-2x"></i> Cerrar Sesion</a>                  
                  </div>
                </form>
                            

                </aside>
            </div>
        <!-- End Header -->

<!-- Cuerpo -->
    <aside class="left-side sidebar-offcanvas" >
       
         <div class="sidebar-block" id="navegacion">
             
            <ul class="nav nav-pills nav-stacked sidebar col-md-1 col-sm-1" >
              <li class="<?php echo $pagina == 'inicio' ? 'active' : ''; ?>">   <a data-toggle="pill" href='inicio'>Inicio</a></li>
              <li class="<?php echo $pagina == 'transparencia' ? 'active' : ''; ?>">    <a data-toggle="pill" href='transparencia'>Transparencia</a></li>
              <li class="<?php echo $pagina == 'difusion' ? 'active' : ''; ?>"> <a data-toggle="pill" href='difusion'>Difusion</a></li>
              <li class="<?php echo $pagina == 'capacitacion' ? 'active' : ''; ?>"> <a data-toggle="pill" href='capacitacion'>Capacitacion</a></li>
              <li class="<?php echo $pagina == 'pleno' ? 'active' : ''; ?>">    <a data-toggle="pill" href='pleno'>Pleno</a></li>
              <li class="<?php echo $pagina == 'evaluacion' ? 'active' : ''; ?>">   <a data-toggle="pill" href='evaluacion'>Evaluacion</a></li>
              <li class="<?php echo $pagina == 'galeria' ? 'active' : ''; ?>">  <a data-toggle="pill" href='galeria'>Galerias</a></li>
            </ul> 
        </div>
    </aside>
    <aside class="right-side">
        <!-- 
            ***Trasnparencia
                -Obligaciones
                -Unidades
            ***Difusion
                -notas
                -convocatorias
                -material
            ***Capacitacion
                -programa
                -solicitudes
            ***Pleno
                -convocatorias
                -lista de acuerdos
                -resoluciones
                -actas
                -informes
            ***Evaluacion
                -registrar evaluaciones
            ***Galerias
                -abc
            -->

        <section>
        	<div class="tab-content col-md-11 col-sm-11 home-main-contant-style blog-page-blog-style sidebar row"  id="contenido">
        
           
           
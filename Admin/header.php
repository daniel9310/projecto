  <?php session_start(); 
    //print_r($_SESSION);
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
    <!-- Materialize-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="<?=$CONFIG['sitio']?>materialize/css/materialize.min.css"  media="screen,projection"/>


   


    <!-- WEB FONTS -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/css?family=Raleway:500,800" rel="stylesheet" property="stylesheet" type="text/css" media="all" />
       


          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
          <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

          <script>
$(document).ready(function(){
   $("#enlaceajax").click(function(evento){
      evento.preventDefault();
      $("#txtHint").load("http://materializecss.com/tabs.html");
   });
})
</script>
          

</head>
<body>
        <script src="//cdn.ckeditor.com/4.5.11/full/ckeditor.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="<?=$CONFIG['sitio']?>materialize/js/materialize.min.js"></script>

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

      <?php  

      require_once("../include/config/config.php");
      require_once("../include/cls/usuario.php");
      $objUser =  new datos;
      $revision = $objUser->Consultar_usuario($_SESSION['id_usr']);
       ?>

<!-- Cuerpo -->
    <aside class="left-side sidebar-offcanvas" >
        <div class="sidebar-block">
             
            <ul class="nav nav-pills nav-stacked sidebar col-md-1 col-sm-1" >

              <li id="inicio" class="<?php echo $pagina == 'inicio' ? 'active' : ''; ?>">    <a data-toggle="pill" href="#" onclick="window.location='?p=inicio'">Inicio</a></li>
  
                <?php 
                if ($revision['TIPO'] != 2 && $revision['TIPO'] != 3 && $revision['TIPO'] != 4 && $revision['TIPO'] != 6){ 
                  ?>
                  
                
              <li id="transparencia" class="<?php echo $pagina == 'transparencia' ? 'active' : ''; ?>"> <a data-toggle="pill" href="#" onclick="window.location='?p=transparencia'">Transparencia</a></li>
               <?php } 
                if ($revision['TIPO'] != 3 & $revision['TIPO'] != 4 & $revision['TIPO'] != 6) {
                
               ?>
               
              <li id="difusion" class="<?php echo $pagina == 'difusion' ? 'active' : ''; ?>">   <a data-toggle="pill" href="#" onclick="window.location='paneladm.php?p=difusion'">Difusion</a></li>
                <?php }
                  if ($revision['TIPO'] != 2 & $revision['TIPO'] != 3 & $revision['TIPO'] != 6) {
                   
                 ?>
           
               
              <li class="<?php echo $pagina == 'capacitacion' ? 'active' : ''; ?>"> <a data-toggle="pill" href="#" onclick="window.location='paneladm.php?p=capacitacion'">Capacitacion</a></li>
              <?php }
                if ($revision['TIPO'] != 4) {
                 
               ?>
              
              <li id="pleno" class="<?php echo $pagina == 'pleno' ? 'active' : ''; ?>"> <a data-toggle="pill" href="#" onclick="window.location='paneladm.php?p=pleno'">Pleno</a></li>
             <?php  }
                if ($revision['TIPO'] != 2  & $revision['TIPO'] != 3 & $revision['TIPO'] != 4 & $revision['TIPO'] != 6) {
                
                
              ?>
             
              <li id="evaluacion" class="<?php echo $pagina == 'evaluacion' ? 'active' : ''; ?>">   <a data-toggle="pill" href="#" onclick="window.location='paneladm.php?p=evaluacion'">Evaluacion</a></li>
                  <?php }
                    if ($revision['TIPO'] != 3 & $revision['TIPO'] != 4 & $revision['TIPO'] != 6) {
                    
                   ?>          
              
              <li id="galerias" class="<?php echo $pagina == 'galeria' ? 'active' : ''; ?>">    <a data-toggle="pill" href="#" onclick="window.location='paneladm.php?p=galeria'">Galerias</a></li>
                <?php }
                  if ($revision['TIPO'] != 2  & $revision['TIPO'] != 3 & $revision['TIPO'] != 4 & $revision['TIPO'] != 6) {
                   
                 ?>                
               
                
              <li id="usuarios" class="<?php echo $pagina == 'usuarios' ? 'active' : ''; ?>">    <a data-toggle="pill" href="#" onclick="window.location='paneladm.php?p=usuarios'">Usuarios</a></li>
             <?php 
              } 
             ?>
                
             
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
        	<div class="tab-content col-md-10 col-sm-10 home-main-contant-style blog-page-blog-style sidebar row" >
        
           
           
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
        <link rel="stylesheet" href="plugins/FlexSlider/jquery.flexslider.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

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

       
    </head>
    <body>
        <!-- Start Main Wrapper -->
        <div class="wrapper">

            <!-- Incluimos el header con los menus -->
        <?php
        require_once($CONFIG['path']."/include/cod/header.php");
		?>
          
            
              <!-- Start Revolution Slider -->
         <article class="content">
            
            <div id="rev_slider_213_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="woocommercebig" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                
                <!-- START REVOLUTION SLIDER 5.1.1RC auto mode -->
                <div id="rev_slider_213_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.1.1RC">
                    <ul>
                        <?php
						 foreach($notas as $id => $nota){ //Notas consultadas
						 ?>
                        <!-- SLIDE  -->
                        <li data-index="rs-867<?=$id?>" data-transition="slideremovehorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="plugins/revolution/assets/img/woo1-100x50.jpg" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1000" data-fsslotamount="7" data-saveperformance="off" data-title="<?=$nota['nts_titulo']?>" data-description="">
                       <!-- MAIN IMAGE -->
                           
                           <img src="plugins/revolution/assets/img/dummy.png" alt="" style="width: 100%;"   data-lazyload="<?=$CONFIG['sitioimgnotas'].$nota['nts_imagen']?>" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="img-responsive w3-container" data-no-retina>
                          
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-8678-layer-1" data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']" data-y="['top','top','top','top']" data-voffset="['30','30','30','30']" data-width="['430','430','430','420']" data-height="380" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="x:left;s:1200;e:Power3.easeInOut;s:1200;e:Power3.easeInOut;" data-start="500" data-responsive_offset="on" style="z-index: 5;background-color:rgba(255, 255, 255, 0.6); border-color:rgba(0, 0, 0, 0);">
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption Woo-TitleLarge   tp-resizeme" id="slide-8678-layer-2" data-x="['left','left','left','left']" data-hoffset="['60','60','60','55']" data-y="['top','top','top','top']" data-voffset="['60','60','60','60']" data-width="370" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="600" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; min-width: 370px; max-width: 370px; white-space: normal;text-align:center;"><?=$nota['nts_titulo']?>
                            </div>

                            <!-- LAYER NR. 3 -->
                            <!--div class="tp-caption Woo-Rating   tp-resizeme" id="slide-8678-layer-6" data-x="['left','left','left','left']" data-hoffset="['60','60','60','55']" data-y="['top','top','top','top']" data-voffset="['160','160','160','160']" data-width="370" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="700" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; min-width: 370px; max-width: 370px; white-space: normal; line-height: 22px;text-align:center;">
                                <div class="rs-starring">
                                    <div class="star-rating" title="Rated 3.67 out of 5"></div>
                                </div> (3 customer reviews)
                            </div-->

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption Woo-Rating   tp-resizeme" id="slide-8678-layer-9" data-x="['left','left','left','left']" data-hoffset="['60','60','60','55']" data-y="['top','top','top','top']" data-voffset="['225','225','225','225']" data-width="370" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="800" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 8; min-width: 370px; max-width: 370px; white-space: normal; line-height: 22px;text-align:center;"><?=$nota['nts_descripcioncorta']?>
                            </div>

                            <!-- LAYER NR. 5 -->
                            <!--div class="tp-caption Woo-SubTitle   tp-resizeme" id="slide-8678-layer-10" data-x="['left','left','left','left']" data-hoffset="['60','59','59','55']" data-y="['top','top','top','top']" data-voffset="['350','350','350','350']" data-width="370" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="900" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; min-width: 370px; max-width: 370px; white-space: normal;text-align:center;">STARTING FROM
                            </div-->

                            <!-- LAYER NR. 6 -->
                            <!--div class="tp-caption Woo-PriceLarge   tp-resizeme" id="slide-8678-layer-11" data-x="['left','left','left','left']" data-hoffset="['60','60','60','55']" data-y="['top','top','top','top']" data-voffset="['380','380','380','380']" data-width="370" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 10; min-width: 370px; max-width: 370px; white-space: normal; font-size: 40px; line-height: 40px;text-align:center;"><span class="amount">&#36;399.00</span>
                            </div-->

                            <!-- LAYER NR. 7 -->
                            <a class="tp-caption Woo-ProductInfo rev-btn  tp-resizeme" href="#" target="_self" id="slide-8678-layer-14" data-x="['left','left','left','left']" data-hoffset="['139','139','139','132']" data-y="['top','top','top','top']" data-voffset="['360','360','360','370']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:200;e:Power1.easeInOut;" data-style_hover="c:rgba(0, 0, 0, 1.00);bg:rgba(221, 221, 221, 1.00);cursor:pointer;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1100" data-splitin="none" data-splitout="none" data-actions='' data-responsive_offset="on" style="z-index: 11; white-space: nowrap;background-color:rgba(238, 238, 238, 1.00);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"><i class="pe-7s-look" style="font-size:25px; float: left; margin-top: -6px; margin-right: 6px;"></i> Mas Información
		</a>

                            <!-- LAYER NR. 8 -->
                            <!--a class="tp-caption Woo-AddToCart rev-btn  tp-resizeme" href="#" target="_self" id="slide-8678-layer-13" data-x="['left','left','left','left']" data-hoffset="['142','142','142','137']" data-y="['top','top','top','top']" data-voffset="['500','500','500','500']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:200;e:Power1.easeInOut;" data-style_hover="c:rgba(0, 0, 0, 1.00);bg:rgba(243, 168, 71, 1.00);cursor:pointer;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="x:left;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1200" data-splitin="none" data-splitout="none" data-actions='' data-responsive_offset="on" style="z-index: 12; white-space: nowrap;padding:12px 75px 12px 50px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"><i class="pe-7s-cart" style="font-size:25px; float: left; margin-top: -6px; margin-right: 6px;"></i>Mas Información
		</a-->
                        </li>
                        <?php
						 }
						?>
                        
                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                </div>
            </div>
            
            <!-- END REVOLUTION SLIDER -->
        </article>
            <!-- End Revolution Slider -->
		 <!-- Start Call To Action -->
            <section class="call-to-action-style1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <a href="">
                            <h2>Solicitudes de Acceso a la Información</h2>
                            <p>Pregunta lo que desees saber por medio de la Plataforma Nacional de Transparencia.</p>
                        	                            
                            </a>
                        </div>
                        <div class="col-md-2 col-sm-2">
                            <img src="img/istai/Logo PNT.jpg" align="middle" class=" imagen-median img-responsive img-rounded">
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <a href="">
                            
                        	<h2>¿No te respondieron lo que preguntaste?</h2>
                            <p>Interpon una queja o inconformidad a traves de nuestros sistemas electrónicos</p>
                            
                            </a>
                        </div>
                        <div class="col-md-2 col-sm-2">
                           
                            <img src="img/home/rrlogo.jpg" class=" imagen-median img-responsive img-rounded">
                        </div>
                        <!--div class="col-md-3 col-sm-3">
                            <h2>Sujetos Obligados</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquam justo et nibh venenatis aliquet.</p>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <h2>Estadísticas</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquam justo et nibh venenatis aliquet.</p>
                        </div-->
                        
                    </div>
                </div>
            </section>  
           <!-- End Call To Action -->
            <!--services-->
         <section class="info_service home-main-contant-style">
                <div class="container">
                    <!--div class="text-center welcome-block">
                        <h1 class="welcome-title">WHAT WE DO</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquam justo et nibh venenatis aliquet. Morbi mollis mollis pellentesque. Aenean vitae erat velit. Maecenas urna sapien, dignissim a augue vitae, porttitor luctus urna.</p>
                    </div-->
                    <div class="row sub_content">
                        <div class="col-sm-4 col-md-4 cv-theme-30">
                            <div class="serviceBox_2">
                                <i class="fa fa-users"></i>
                                <h3>Consejo General</h3>
                                <p>
                                	<u>
                                    	<li>Convocatorias </li>
                                        <li>Actas de Sesiones </li>
                                        <li>Acuerdos </li>
                                       
                                    </u>
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 cv-theme-30">
                            <div class="serviceBox_2">
                                <i class="fa fa-hand-o-up"></i>
                                <h3>Ejerce tus derechos</h3>
                                 <p>
                                	<u>
                                    	<li>Acceso a la información </li>
                                        <li>Protección de Datos Personales </li>
                                        <li>Queja o Denuncia </li>
                                    </u>
                                </p>
                
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 cv-theme-30">
                            <div class="serviceBox_2">
                                <i class="fa fa-slideshare"></i>
                                <h3>Transparencia en tu comunidad</h3>
                                 <p>
                                	<u>
                                    	<li>Jovenes Preguntando </li>
                                        <li>Creciendo con Transparencia</li>
                                        <li>Gobierno Abierto</li>
                                    </u>
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 cv-theme-30">
                            <div class="serviceBox_2">
                                <i class="fa fa-university"></i>
                                <h3>Servicios</h3>
                                <p>
                                	<u>
                                    	<li>Capacitación</li>
                                        <li>Vinculación</li>
                                        <li>Difusión</li>
                                        <li>Asesorias</li>
                                    </u>
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 cv-theme-30">
                            <div class="serviceBox_2">
                                <i class="fa fa-user-secret"></i>
                                <h3>¿Eres Funcionario Público? </h3>
                                <p>
                                	<u>
                                    	<li>Información de tus Obligaciones</li>
                                        <li>Capacitate en Nuevas Leyes</li>
                                        <li>Certificate como Unidad de Transparencia</li>
                                        <li>Servidores Públicos Capacitados</li>
                                    </u>
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 cv-theme-30">
                            <div class="serviceBox_2">
                                <i class="fa fa-mouse-pointer"></i>
                                <h3>Consulta</h3>
                                 <p>
                                	<u>
                                    	<li>Obligaciones de Transparencia del ISTAI</li>
                                        <li>Solicitudes Realizadas</li>
                                        <li>Estadísticas sobre el derecho de acceso</li>
                                        <li>Evaluación a Sujetos Obligados</li>
                                    </u>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--services-->
			<!--Panels-->
            
            <div class="tabs-section col-md-12 col-sm-12">
           	<div class="container page-bg-color cv-theme-30"> 
            <!-- Nav Tabs -->
            <ul class="nav nav-tabs">
                <li class="active"><a href="#so" data-toggle="tab">Sujetos Obligados</a></li>
                <li><a href="#og" data-toggle="tab">Organos Garantes</a></li>
                <li><a href="#pt" data-toggle="tab">Pro Transparencia</a></li>
                
            </ul>

            <!-- Tab panels -->
            <div class="tab-content row">
                <!-- Tab Content 1 -->
                     <div class="tab-pane fade in active" id="so">
                       <div class="row">
                        <!-- imagenes-->
                            
                            <div align="center" class="margin-bottom30 col-md-2 col-sm-2 col-xs-4 ">                                        
                                <div class="product-image" style="padding-bottom: 20px;">
                                    <div class="blog-dis" style="text-align:center;">
                                        <h6 class="entry-title"><a >Poder Ejecutivo</a></h6>
                                    </div>
                                    <a class="product-link " href="img/home/sujetoobligados/docs/Poder Ejecutivo 30 agosto 16.pdf" target="_blank">
                                    <img src="img/home/sujetoobligados/carpe/gobiernoson-bicubic.jpg" class=" imagen-chicas img-responsive" >
                                   
                                    </a>
                                   
                                </div>     
 

                                                            
                            </div>
                            
                            <div align="center" class="margin-bottom30 col-md-2 col-sm-2 col-xs-4  ">                                        
                                <div class="product-image" style="padding-bottom: 20px;">
                                    <div class="blog-dis" style="text-align:center;">
                                        <h6 class="entry-title"><a >Poder Judicial</a></h6>
                                    </div>
                                    <a class="product-link " href="img/home/sujetoobligados/docs/Poder Judicial.pdf" title="" target="_blank">
                                    <img src="img/home/sujetoobligados/carpe/poderjudicial-bicubic.jpg" class="imagen-chicas img-responsive" >
                                    
                                    </a>
                                   
                                </div>     
                            </div>
                            <div align="center" class="margin-bottom30 col-md-2 col-sm-2 col-xs-4  ">                                        
                                <div class="product-image" style="padding-bottom: 20px;">
                                    <div class="blog-dis" style="text-align:center;">
                                        <h6 class="entry-title"><a >Poder Legislativo</a></h6>
                                    </div>
                                    <a class="product-link " href="img/home/sujetoobligados/docs/Poder Legislativo.pdf" target="_blank" title="">
                                    <img src="img/home/sujetoobligados/carpe/congreso-bicubic.jpg" class="imagen-chicas img-responsive" >
                                    
                                    </a>
                                </div>     
                            </div>
                            <div align="center" class="margin-bottom30 col-md-2 col-sm-2 col-xs-4 ">                                        
                                <div class="product-image" style="padding-bottom: 20px;">
                                     <div class="blog-dis" style="text-align:center;">
                                        <h6 class="entry-title"><a>Municipios</a></h6>
                                    </div>
                                    <a class="product-link " href="img/home/sujetoobligados/docs/Municipios.pdf"  target="_blank">
                                    <img src="img/home/sujetoobligados/carpe/sonora-bell.jpg"  class=" imagen-chicas img-responsive" >
                                    </a>
                                </div>
                            </div>
                            <div align="center" class="margin-bottom30 col-md-3 col-sm-3 col-xs-6 center-block ">                                        
                                <div class="product-image" style="padding-bottom: 20px;">
                                     <div class="blog-dis" style="text-align:center;">
                                        <h6 class="entry-title"><a>Organismos Autónomo</a></h6>
                                    </div>
                                    <a class="product-link" href="img/home/sujetoobligados/docs/Organismo autonomos 30 agosto 16.pdf" target="_blank">
                                    <img src="img/home/sujetoobligados/carpe/sindicato-bell.jpg" class="imagen-chicas img-responsive" >
                                    </a>
                            	 </div>  
                             </div>
                           </div>
                           <div class="row">
                           <div align="right" class="margin-bottom30 col-md-4 col-sm-4 col-xs-4  ">                                        
                                 <div class="product-image imagen-median" style="padding-bottom: 20px;">
                                     <div class="blog-dis">
                                        <h6 class="entry-title"><a>Sindicatos</a></h6>
                                    </div>
                                    <a class="product-link " href="#" title="">
                                    <img src="img/home/sujetoobligados/carpe/Sindicatos-1-bicubic.jpg" class="imagen-chicas img-responsive" >
                                    </a>
                                </div>   
                            </div>
                            <div align="center" class="margin-bottom30 col-md-4 col-sm-4 col-xs-4  ">                                        
                                <div class="product-image" style="padding-bottom: 20px;">
                                     <div class="blog-dis" style="text-align:center;">
                                        <h6 class="entry-title"><a>Partidos Politicos</a></h6>
                                    </div>
                                    <a class="product-link " href="#" >
                                    <img src="img/home/sujetoobligados/carpe/partidospoliticos-bicubic.jpg" class="imagen-chicas img-responsive">
                                    </a>
                                </div>   
                            </div>
                            <div align="left" class="margin-bottom30 col-md-4 col-sm-4 col-xs-4 ">                                        
                                <div class="product-image" style="padding-bottom: 20px;">
                                     <div class="blog-dis" >
                                        <h6 class="entry-title"><a>Asociaciones Civiles</a></h6>
                                    </div>
                                    <a class="product-link " href="#" title="">
                                    <img src="img/home/sujetoobligados/carpe/asociacion-civil-mitchell.jpg" class="imagen-chicas img-responsive" >
                                    </a>
                                </div>     
                            </div>
                           </div>  
                        <!-- imagenes    -->
                    </div>

                <!-- Tab Content 2 -->
                   <div class="tab-pane fade "  id="og">
						
                        <div class="col-md-2 col-sm-6 col-xs-12" >
                            
                            <div class="imagen-chicas">
                                <a href="http://www.inai.org.mx" target="_blank" title="INSTITUTO NACIONAL DE ACCESO A LA INFORMACIÓN Y PROTECCIÓN DE DATOS ">
                                    <img src="img/home/organismos/inai.jpg" class=" imagen-chicas ">
                                </a>
                            </div>

                            <div class="imagen-chicas">
                                <a href="http://www.ichitaip.org.mx" title="Instituto Chihuahuense para la Transparencia y Acceso a la Información Pública" target="_blank">
                                    <img src="img/home/organismos/instituto_chihuahua.jpg" class="imagen-chicas ">
                                </a>
                            </div>

                            <div class="imagen-chicas">
                                <a href="http://www.iacip-gto.org.mx" title="Instituto de Acceso a la Información Pública de Guanajuato " target="_blank">
                                    <img src="img/home/organismos/instituto_guanajuato.jpg" class="imagen-chicas">
                                </a>
                            </div>

                            <div class="imagen-chicas">
                                <a href="http://www.itainayarit.org.mx" title="Instituto de Transparencia y Acceso a la Información Pública del Estado de Nayarit" target="_blank">
                                    <img src="img/home/organismos/instituto_nayarit.jpg" class="imagen-chicas">
                                </a>
                            </div>

                            <div class="imagen-chicas">
                                <a href="http://www.cegaipslp.org.mx/" title="Comisión Estatal de Garanta de Acceso a la Información de San Luis Potosí" target="_blank">
                                    <img src="img/home/organismos/instituto_sanluisptsi.jpg" class="imagen-chicas">
                                </a>
                            </div>

                            <div class="imagen-chicas">
                                <a href="http://www.ivai.org.mx/" title="Instituto Veracruzano de Acceso a la Información" target="_blank">
                                    <img src="img/home/organismos/instituto_veracruz.jpg" class="imagen-chicas">
                                </a>
                            </div>
                        </div>
                       
                        <div class="col-md-2 col-sm-6 col-xs-12" >
                                                                                
                            <div class="imagen-chicas">
                                <a href="http://www.itea.org.mx" title="Instituto de Transparencia del Estado de Aguascalientes" target="_blank">
                                    <img src="img/home/organismos/instituto_aguascalientes.jpg" class="imagen-chicas">
                                </a>
                            </div>

                            <div class="imagen-chicas">
                                <a href="http://www.icai.org.mx" title="Instituto Coahuilense de Acceso a la Información Pública" target="_blank">
                                    <img src="img/home/organismos/insituto_coahuila.jpg" class="imagen-chicas">
                                </a>
                            </div>

                            <div class="imagen-chicas">
                                <a href="http://transparencia.guerrero.gob.mx/" title="Instituto de Transparencia y Acceso a la Información Pública del Estado de Guerrero" target="_blank">
                                    <img src="img/home/organismos/instituto_guerrero.jpg" class="imagen-chicas">
                                </a>
                            </div>

                            <div class="imagen-chicas">
                                <a href="http://www.ctainl.org.mx" title="Comisión de Transparencia y Acceso a la Información de Nuevo León " target="_blank">
                                    <img src="img/home/organismos/instituto_nuevoleon.jpg" class="imagen-chicas">
                                </a>
                            </div>

                            <div class="imagen-chicas">
                                <a href="http://www.ceaipsinaloa.org.mx/" target="_blank" title="Comisión Estatal para el Acceso a la Información Pública del Estado de Sinaloa">
                                    <img src="img/home/organismos/instituto_sinaloa.jpg" class="imagen-chicas">
                                </a>
                            </div>

                            <div class="imagen-chicas">
                                <a href="http://inaipyucatan.org.mx" target="_blank" title="Instituto de Acceso a la Información Pública del Estado de Yucatán ">
                                    <img src="img/home/organismos/instituto_yucatan.jpg" class="imagen-chicas">
                                </a>
                            </div>
                        </div>
                                                         
                        <div class="col-md-2 col-sm-6 col-xs-12" >
                            
                            <div class="imagen-chicas">
                                 <a href="http://www.itaipbc.org.mx/" title="Instituto de Transparencia y Acceso a la Información Pública del Estado de Baja California" target="_blank">
                                    <img src="img/home/organismos/instituto_bc.jpg" class="imagen-chicas">
                                </a>
                            </div>

                            <div class="imagen-chicas">
                                <a href="http://infocol.org.mx/" title="Instituto de Transparencia, Acceso a la Informacion Publica y Proteccion de Datos del Estado de Colima" target="_blank">
                                    <img src="img/home/organismos/infocol.png" class="imagen-chicas">
                                </a>
                            </div>

                            <div class="imagen-chicas">
                                <a href="http://www.iaipgh.org.mx/" title="Instituto de Acceso a la Información Pública Gubernamental de Hidalgo" target="_blank">
                                    <img src="img/home/organismos/instituto_hidalgo.jpg" class="imagen-chicas">
                                </a>
                            </div>

                            <div class="imagen-chicas">
                                <a href="http://iaipoaxaca.org.mx/" title="Instituto Estatal de Acceso a la Información Pública de Oaxaca " target="_blank">
                                    <img src="img/home/organismos/instituto_oaxaca.jpg" class="imagen-chicas">
                                </a>
                            </div>

                             

                            <div class="imagen-chicas">
                                <a href="http://www.izai.org.mx/" title="Comisión Estatal para el Acceso a la Información Pública de Zacatecas " target="_blank">
                                    <img src="img/home/organismos/instituto_zacateca.jpg" class="imagen-chicas">
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-md-2 col-sm-6 col-xs-12" >
                           
                            <div class="imagen-chicas">
                                <a href="http://www.itai.org.mx" title="Instituto de Transparencia y Acceso a la Información Pública de Baja California Sur " target="_blank">
                                    <img src="img/home/organismos/instituto_bcs.jpg" class="imagen-chicas">
                                </a>
                            </div>

                            <div class="imagen-chicas">
                                <a href="http://www.infodf.org.mx/" title="Instituto de Acceso a la Información Pública del Distrito Federal" target="_blank">
                                    <img src="img/home/organismos/instituto_df.jpg" class="imagen-chicas">
                                </a>
                            </div>

                            <div class="imagen-chicas">
                                <a href="http://www.itei.org.mx" title="Instituto de Transparencia e Información Pública de Jalisco" target="_blank">
                                    <img src="img/home/organismos/instituto_jalisco.jpg" class="imagen-chicas">
                                </a>
                            </div>

                            <div class="imagen-chicas">
                                <a href="http://www.caip.org.mx" title="Comisión para el Acceso a la Información Pública y Protección de Datos Personales del Estado (PUEBLA) " target="_blank">
                                    <img src="img/home/organismos/instituto_puebla2.jpg" class="imagen-chicas">
                                </a>
                            </div>

                            <div class="imagen-chicas">
                                <a href="http://www.itaip.org.mx" title="Instituto Tabasqueño de Transparencia y Acceso a la Información Pública" target="_blank">
                                    <img src="img/home/organismos/instituto_tabasco.jpg" class="imagen-chicas">
                                </a>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-6 col-xs-12" >
                            
                            <div class="imagen-chicas">
                                <a href="http://www.cotaipec.org.mx/" title="Comisión de Transparencia y Acceso a la Información Pública del Estado de Campeche" target="_blank">
                                    <img src="img/home/organismos/instituto_campeche.jpg" class="imagen-chicas">
                                </a>
                            </div>

                            <div class="imagen-chicas">
                                <a href="http://www.idaip.org.mx/" title="Instituto Duranguense de Acceso a la Información Pública y Protección de Datos Personales " target="_blank">
                                    <img src="img/home/organismos/instituto_durango.jpg" class="imagen-chicas">
                                </a>
                            </div>

                            <div class="imagen-chicas">
                                <a href="http://www.itaimich.org.mx/" title="Instituto para la Transparencia y Acceso a la Información Pública del Estado de Michoacán " target="_blank">
                                    <img src="img/home/organismos/instituto_michoacan.jpg" class="imagen-chicas">
                                </a>
                            </div>

                            <div class="imagen-chicas">
                                <a href="http://www.infoqro.mx/" title="Comisión Estatal de Información Gubernamental de Queretaro " target="_blank">
                                    <img src="img/home/organismos/instituto_queretaro.jpg" class="imagen-chicas">
                                </a>
                            </div>

                            <div class="imagen-chicas">
                                <a href="www.itait.org.mx" title="Instituto de Transparencia y Acceso a la Información de Tamaulipas" target="_blank">
                                    <img src="img/home/organismos/instituto_tamaulipas.jpg" class="imagen-chicas">
                                </a>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-6 col-xs-12" >
                            
                            <div class="imagen-chicas">
                                <a href="http://www.iaipchiapas.org.mx/" title="Instituto de Acceso a la Información Pública de la Administración Pública Del Estado de Chiapas" target="_blank">
                                    <img src="img/home/organismos/instituto_chiapas.jpg" class="imagen-chicas">
                                </a>
                            </div>

                            <div class="imagen-chicas">
                                <a href="http://www.infoem.org.mx/" title="Instituto de Transparencia y Acceso a la Información Pública del Estado de México" target="_blank">
                                    <img src="img/home/organismos/instituto_estadomexico.jpg" class="imagen-chicas">
                                </a>
                            </div>

                            <div class="imagen-chicas">
                                <a href="http://www.imipe.org.mx" target="_blank" title="Instituto Morelense de Información Pública y Estadística">
                                    <img src="img/home/organismos/instituto_morelia.jpg" class="imagen-chicas">
                                </a>
                            </div>

                            <div class="imagen-chicas">
                                <a href="http://www.idaipqroo.org.mx/" target="_blank" title="Instituto de Transparencia y Acceso a la Información Pública de Quintana Roo">
                                    <img src="img/home/organismos/instituto_qroo.jpg" class="imagen-chicas">
                                </a>
                            </div>

                            <div class="imagen-chicas">
                                <a href="http://www.caip-tlax.org.mx/" title="Comisión de Transparencia del Estado de Tlaxcala " target="_blank">
                                    <img src="img/home/organismos/instituto_tlaxcala.jpg" class="imagen-chicas">
                                </a>
                            </div>
                        </div>
                    </div>

                <!-- Tab Content 3 -->
                    <div class="tab-pane fade" id="pt">
                         <div class="margin-bottom30 col-md-3 col-sm-3 col-xs-6 ">                                        
                                <div class="product-image" >
                                    <div class="blog-dis" style="text-align:center;">
                                        <h4 class="entry-title"><a ></a></h4>
                                    </div>
                                    <a class="product-link " href="http://articulo19.org/" target="_blank" title="">
                                    <img src="img/home/empresas/art19.png" class=" imagen-median img-responsive" >
                                   
                                    </a>
                                   
                                </div>     

                                <div class="product-image" >
                                     <div class="blog-dis" style="text-align:center;">
                                        <h4 class="entry-title"><a> </a></h4>
                                    </div>
                                    <a class="product-link" href="http://www.cimtra.org.mx/" target="_blank" >
                                    <img src="img/home/empresas/LOGO-cimtra.jpg" class="imagen-median img-responsive" >
                                    
                                    </a>
                                   
                                </div>   

                                                            
                            </div>
                            <div class="margin-bottom30 col-md-3 col-sm-3 col-xs-6 ">                                        
                                <div class="product-image">
                                     <div class="blog-dis" style="text-align:center;">
                                        <h4 class="entry-title"><a> </a></h4>
                                    </div>
                                    <a class="product-link " href="http://fundar.org.mx/" target="_blank" title="">
                                    <img src="img/home/empresas/fundar.jpg" class="imagen-median img-responsive" >
                                    
                                    </a>
                                   
                                </div> 
                                <div class="product-image">
                                     <div class="blog-dis" style="text-align:center;">
                                        <h4 class="entry-title"><a>   </a></h4>
                                    </div>
                                    <a class="product-link " href="http://www.tm.org.mx/" target="_blank" >
                                    <img src="img/home/empresas/Transparencia_Mexicana.jpg" class=" imagen-median img-responsive">
                                    
                                    </a>
                                   
                                </div>                                
                            </div>
                            
                            <div class="margin-bottom30 col-md-3 col-sm-3 col-xs-6 ">                                        
                                <div class="product-image" >
                                    <div class="blog-dis" style="text-align:center;">
                                        <h4 class="entry-title"><a >   </a></h4>
                                    </div>
                                    <a class="product-link " href="http://www.colectivoporlatransparencia.org/" target="_blank" title="">
                                    <img src="img/home/empresas/logo-Colectivo.png" class="imagen-median img-responsive" >
                                    
                                    </a>
                                   
                                </div>     

                                <div class="product-image" >
                                     <div class="blog-dis" style="text-align:center;">
                                        <h4 class="entry-title"><a> </a></h4>
                                    </div>
                                    <a class="product-link " href="http://www.contraloriaciudadana.org.mx/"  target="_blank">
                                    <img src="img/home/empresas/ong_contraloria.png" class="imagen-median img-responsive" >
                                   
                                    </a>
                                   
                                </div>   

                                                              
                            </div>

                           
                            <div class="margin-bottom30 col-md-3 col-sm-3 col-xs-6 ">                                        
                                <div class="product-image" >
                                    <div class="blog-dis" style="text-align:center;">
                                        <h4 class="entry-title"><a >   </a></h4>
                                    </div>
                                    <a class="product-link " href="http://www.sonoraciudadana.org.mx/" target="_blank" title="">
                                    <img src="img/home/empresas/SonoraCiudadana.png" class="imagen-median img-responsive" >
                                    
                                    </a>
                                   
                                </div>     

                                  
           
                            </div>
                    </div> 
            </div>
            <!-- End Tab Panels -->
           </div>

           <!-- Start Home Product -->
            <section class="home-main-contant-style">
                <div class="container">
                     <h3 class="cv-theme-widget-title">
                                    <span class="main-border">Eventos Recientes</span>
                                </h3>
                    <div class="row">
                         <div class="main-product-block">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="product">
                                        <!--ul class="product-labels">
                                            <li>New</li>
                                            <li>Sale</li>
                                        </ul-->
                                        <div class="product-image">
                                            <iframe class="product-img-pri" src="http://transparenciasonora.org/colateral/scroll.php" height="460"></iframe>
                                            <!--a class="product-link" href="product_signal.html">
                                            <img class="product-img-pri" title="Image" alt="Image" src="img/product/pro1.jpg">
                                            <img class="product-img-second" title="Image" alt="Image" src="img/product/pro2.jpg"-->
                                        </a>
                                            </div>
                                        <!--div class="product-contain">
                                            <div class="main-product-details">
                                                <h6 class="main-product-title"><a href="product_signal.html">Printed Summer Dress</a></h6>
                                                <div class="price">$760.00</div>
                                            </div>
                                            <div class="product-buttons">
                                                <a class="ajax_add_to_cart" href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                <a class="show_details pull-right" href="#"><i class="fa fa-bars"></i>Details</a>
                                            </div>
                                        </div-->

                                    </div>
                                </div>
                                  <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="product">
                                        <ul class="product-labels">
                                            <li>21 de Septiembre</li>
                                        </ul>
                                        <div class="product-image">
                                            <a class="product-link" href="product_signal.html">
                                            <img class="product-img-pri" title="Image" alt="Image" src="img/promopag.png" height="460">
                                            
                                        </a>
                                            </div>
                                        <!--div class="product-contain">
                                            <div class="main-product-details">
                                                <h6 class="main-product-title"><a href="product_signal.html">Printed Summer Dress</a></h6>
                                                <div class="price">$879.00</div>
                                            </div>
                                            <div class="product-buttons">
                                                <a class="ajax_add_to_cart" href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                <a class="show_details pull-right" href="#"><i class="fa fa-bars"></i>Details</a>
                                            </div>
                                        </div-->

                                    </div>
                                </div>
                                  <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="product">
                                        <ul class="product-labels">
                                            <li>Proximo Evento!!</li>
                                        </ul>
                                        <div class="product-image">
                                            <a class="product-link" href="product_signal.html">
                                            <img class="product-img-pri" title="Image" alt="Image" src="img/product/pro5.jpg">
                                            <img class="product-img-second" title="Image" alt="Image" src="img/product/pro6.jpg">
                                        </a>
                                            </div>
                                        <!--div class="product-contain">
                                            <div class="main-product-details">
                                                <h6 class="main-product-title"><a href="product_signal.html">Printed Summer Dress</a></h6>
                                                <div class="price">$330.00</div>
                                            </div>
                                            <div class="product-buttons">
                                                <a class="ajax_add_to_cart" href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                <a class="show_details pull-right" href="#"><i class="fa fa-bars"></i>Details</a>
                                            </div>
                                        </div-->

                                    </div>
                                </div>
                                 
                                  
                    </div>
                    </div>
                    
                </div>
            </section>
          <!-- End Home Product -->
      
            <?php // incluimos el footer
		 require_once($CONFIG['path']."/include/cod/footer.php");
		 ?>
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

        <script type="text/javascript">
                var tpj = jQuery;

                var revapi213;
                tpj(document).ready(function() {
                    if (tpj("#rev_slider_213_1").revolution == undefined) {
                        revslider_showDoubleJqueryError("#rev_slider_213_1");
                    } else {
                        revapi213 = tpj("#rev_slider_213_1").show().revolution({
                            sliderType: "standard",
                            jsFileLocation: "/revolution/js/",
                            sliderLayout: "auto",
                            dottedOverlay: "none",
                            delay: 9000,
                            navigation: {
                                keyboardNavigation: "off",
                                keyboard_direction: "horizontal",
                                mouseScrollNavigation: "off",
                                onHoverStop: "on",
                                touch: {
                                    touchenabled: "on",
                                    swipe_threshold: 75,
                                    swipe_min_touches: 50,
                                    swipe_direction: "horizontal",
                                    drag_block_vertical: false
                                },
                                arrows: {
                                    style: "gyges",
                                    enable: true,
                                    hide_onmobile: false,
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
                            },
                            responsiveLevels: [1240, 1024, 778, 480],
                            visibilityLevels: [1240, 1024, 778, 480],
                            gridwidth: [1200, 1024, 778, 480],
                            gridheight: [450, 450, 450, 450],
                            lazyType: "single",
                            parallax: {
                                type: "scroll",
                                origo: "slidercenter",
                                speed: 400,
                                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                                type: "scroll",
                            },
                            shadow: 0,
                            spinner: "off",
                            stopLoop: "off",
                            stopAfterLoops: -1,
                            stopAtSlide: -1,
                            shuffle: "off",
                            autoHeight: "off",
                            disableProgressBar: "on",
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
                }); /*ready*/
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

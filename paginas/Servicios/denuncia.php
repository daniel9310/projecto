<?php
//configuración y conexión
require_once("../../include/config/config.php");
require_once("../../include/config/cx.php");
//require_once($CONFIG['pathpuente']."inc/cls/so.php");
//$objSO = new so;
$s//ujetos = $objSO->sujetosObligados();

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
        <link rel="shortcut icon" href="<?=$CONFIG['sitio']?>img/istai/iconoistai.ico">

       
        <!-- CSS Global -->
        <link rel="stylesheet" href="<?=$CONFIG['sitio']?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=$CONFIG['sitio']?>css/style.css">
        <link rel="stylesheet" href="<?=$CONFIG['sitio']?>plugins/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="<?=$CONFIG['sitio']?>plugins/owl-carousel/owl.theme.css">
		<!-- Funciones de rrfacil-->
        <script language="javascript">
		function imprimir(){
			frmRrfacil.target="_blank";
			frmRrfacil.action = 'rrfacil/print.php';
			frmRrfacil.submit();
			}
		
		function ValidateSubmit( form ){
			//alert("Entre a validar");
			/*cambiar('NumActa');*/
			document.getElementById('divSO').style.display = 'none';
			document.getElementById('divQueja').style.display = 'none';
			document.getElementById('divDenunciante').style.display = 'none';
			document.getElementById('divemail').style.display = 'none';
							
			form.elements['btnSubmit'].disabled = true;
			form.target = 'ifrmHddnValidate';
			form.action = 'denuncia/valida.php';
			form.submit();
		}
		
		function submitNoValid(error){
			alert("Favor de proporcionar los datos obligatorios requeridos para el trámite");
			for (index = 0; index < error.length; ++index) {
				//alert(error[index]+'');
				cambiar(error[index]);
				
			}	
			form = document.forms['frmRrfacil'];
			form.target="_self";
			form.elements['btnSubmit'].disabled = false;
			form.action = "denuncia.php";
			
		}
		
		function submitValid(){
			var form = document.forms['frmRrfacil'];
			form.target="_self";	
			form.elements['btnSubmit'].disabled = false;
			form.action = "denuncia/send.php";
			form.submit();
		}
		function cambiar(name){  
			//alert(name);
			document.getElementById(name).style.display = 'block';
			
		}
		</script>
        <!-- fin-->
    </head>
    <body>
        <!-- Start Main Wrapper -->
        <div class="wrapper">

        <!-- Incluimos el header con los menus -->
        <?php
        require_once($CONFIG['path']."/include/cod/header1.php");
		?>
		  <section class="progress-style main-contain">
                <div class="container">
                  <div class="row">
                        <div class="col-md-12">
                            <div class="page-bg-color">
                            	<div class="row">
                                    <div class="text-center">
                                        <h2>Denuncia</h2>
                                        <h6>Por incumplimiento a las obligaciones de transparencia</h6>
                                    </div>
                                    <div class="text-center">
                                        <ul class="breadcrumbs">
                                            <li><a href="<?=$CONFIG['sitio']?>index.php">Inicio</a></li>
                                            <li>Denuncia</li>
                                        </ul>
                                    	
                                    </div>
                                    <div class="page-bg-color"><hr style="background-color:#dedede;height:2px;"></div>	
                                </div>
                              <div>
                             <!-- Contenido de la página-->  
                         
                    <div class="alert alert-info">  
                              <p>Este es un formato para que usted denuncie fácilmente cualquier incumplimiento de obligaciones de transparencia de los sujetos obligados de rendir cuentas.</p>
								<p>	Si requiere saber mas de este procedimiento puede consultar el Artículo 95 de la <a href="">Ley Estatal de Transparencia</a></p>
                            
                           
                            <p>* Datos Obligatorios</p>
                            </div>
                            <form name="frmRrfacil" method="post" action="" enctype="multipart/form-data">
                              <h3 class="cv-theme-widget-title">
                                 <span class="main-border">1. A quien Denuncia </span>
                              </h3>
                              
                              <table>
                                <tr>
                                  <td><label>*Sujeto Obligado a Denunciar:</label></td>
                                  <td></td>
                                  
                                </tr>
                                <tr>
                                	<td colspan="2"><input type="text" size="60" name="so" /><div id="divSO"  style="display:none"><font color="#FF0000">Se requiere el nombre del Sujeto Obligado</font></div></td>
                                </tr>
                                
                              </table>
                             <hr>
                             <h3 class="cv-theme-widget-title">
                                 <span class="main-border">2. ¿Qué Denuncia?</span>
                              </h3>
                               <table width="100%">
                                <tr>
                                  <td colspan="2">
                                  <label>*Descripción clara y precisa del incumplimiento.<label></td>
                                  
                                </tr>
                                <tr>
                                  <td colspan="2"><textarea cols="80" rows="8" name="queja"></textarea><div id="divQueja"  style="display:none"><font color="#FF0000">Especifique el incumplimiento denunciado</font></div></td>
                                  
                                </tr>
                             </table>
                              <hr>
                              <h3 class="cv-theme-widget-title">
                                 <span class="main-border">3. Desea Agregar Pruebas</span>
                              </h3> 
                             
                             <table>
                                <tr>
                                  <td colspan="2">
                                   Adjuntar pruebas en caso de existir .
                     			</td>
                                  
                                </tr>
                                <tr>
                                  <td><label>Archivo de prueba 1:<label></td>
                                  <td><input type="file" name="prueba1" /></td>
                                  
                                </tr>
                                
                                </table>
                              
                              <hr>
                              <h3 class="cv-theme-widget-title">
                                 <span class="main-border">4. Datos del Denunciante </span>
                              </h3>
                              <table>
                                <tr>
                                  <td colspan="2">
                                  <label>*Nombre del denunciante:</label></td>
                                </tr><tr>
                                  <td ><input type="text" size="60" name="denunciante" /><div id="divDenunciante"  style="display:none"><font color="#FF0000">Debe de especificar el nombre</font> </div></td>
                                  <td><em>*puede ser un pseudonimo</em></td>  
                                  </tr>
                                  <td colspan="2">
                                  <label>Perfil:</label></td>
                                </tr>
                                  <tr>
                                  <td ><input type="text" size="60" name="perfil" /><div id="divPerfil"  style="display:none"><font color="#FF0000">Debe de especificar el perfil</font> </div></td>
                                  <td><em>para fines estadísticos</em></td>  
                                  </tr>
                                
                                
                               </table>
                               <hr>
                              <h3 class="cv-theme-widget-title">
                                 <span class="main-border">5. Notificaciones </span>
                              </h3>
                              
                                 	<div id="mail">
                                	<label>Correo Electrónico</label>: <input type="text" size="60" name="email" /><div id="divemail"  style="display:none"><font color="#FF0000">Debe de especificar correo para notificaciones</font> </div>
                                	</div>
                                                            
                                
                              
                              
                              
                              
                               <hr>
                              <table>
                                
                                <tr>
                                  <td colspan="2" align="center"><br /><br /><input class="btn-custom btn-large border-btn" type="button" value="Enviar" name="btnSubmit" id="btnSubmit" onclick="javascript: ValidateSubmit(this.form)"/></td>
                                  
                                </tr>
                              </table>
                            </form> 
                                                    

                            
                        </div>
                    </div>
                </div>
            </section>    
            <?php // incluimos el footer
			 require_once($CONFIG['path']."/include/cod/footer1.php");
			 ?>

        </div>  
        <iframe src="" height="0" width="0" name="ifrmHddnValidate"/> 
        <!-- End Main Wrapper -->
        <!-- jquery libs -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

        
        <!-- REVOLUTION JS FILES -->
        <script type="text/javascript" src="<?=$CONFIG['sitio']?>plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="<?=$CONFIG['sitio']?>plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>

        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
        (Load Extensions only on Local File Systems ! 
        The following part can be removed on Server for On Demand Loading) -->
        <script type="text/javascript" src="<?=$CONFIG['sitio']?>plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="<?=$CONFIG['sitio']?>plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="<?=$CONFIG['sitio']?>plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="<?=$CONFIG['sitio']?>plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="<?=$CONFIG['sitio']?>plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="<?=$CONFIG['sitio']?>plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="<?=$CONFIG['sitio']?>plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="<?=$CONFIG['sitio']?>plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="<?=$CONFIG['sitio']?>plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
       
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
        <!-- JS Global Compulsory -->
        <script type="text/javascript" src="<?=$CONFIG['sitio']?>js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?=$CONFIG['sitio']?>plugins/owl-carousel/owl.carousel.min.js"></script>
        <script type="text/javascript" src="<?=$CONFIG['sitio']?>js/filter.js"></script>
        <script type="text/javascript" src="<?=$CONFIG['sitio']?>plugins/waypoints/waypoints.min.js"></script>
        <script type="text/javascript" src="<?=$CONFIG['sitio']?>plugins/counterup/jquery.counterup.min.js"></script>
        <script type="text/javascript" src="<?=$CONFIG['sitio']?>plugins/FlexSlider/jquery.flexslider-min.js"></script>
        <script type="text/javascript" src="<?=$CONFIG['sitio']?>js/magnific-popup.min.js"></script>
        <script type="text/javascript" src="<?=$CONFIG['sitio']?>js/jquery.selectBox.js"></script>
        <script type="text/javascript" src="<?=$CONFIG['sitio']?>js/custom.js"></script>

        <!--[if lt IE 9]>
        <script src="respond.js"></script>
        <script src="html5shiv.js"></script>
        <![endif]-->
		<iframe name="hiddenFrame" frameborder="0" width="400" height="400"></iframe>
        
    </body>
</html>

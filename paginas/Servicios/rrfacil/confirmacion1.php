<?php
require_once("../../inc/config.php");
$id_rr = $_GET['id_rr'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/subpage.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>ITIES</title>
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="../../css/main.css"/ charset="ISO-8859-1">
<script type="text/javascript" src="<?=$CONFIG['sitio']?>scripts/jquery-2.0.3.js"></script>
<!-- InstanceBeginEditable name="head" -->
<script language="javascript">
function imprimir(){
	frmRrfacil.action = 'print.php';
	frmRrfacil.submit();
	}

</script>

<!-- InstanceEndEditable -->
</head>

<body>
<div id="wrapper">
	<div id="header">
    	<div id="header_left">
            <img src="<?=$CONFIG['sitio']?>images/ities_logo.png" />
            <ul id="left_menu">
            	<li><a href="<?=$CONFIG['sitio']?>secciones/transparencia/ipublica/"  style="font-weight:bold">Informaci&oacute;n P&uacute;blica B&aacute;sica</a></li>
                <li><a href="<?=$CONFIG['sitio']?>secciones/difusion/">Difusi&oacute;n</a></li>
                <li><a href="<?=$CONFIG['sitio']?>secciones/vinculacion/">Vinculaci&oacute;n</a></li>
                <li><a href="<?=$CONFIG['sitio']?>secciones/capacitacion/">Capacitaci&oacute;n</a></li>
                <!--li><a href="<?=$CONFIG['sitio']?>secciones/investigacion/">Investigación</a></li-->
                <!--li><a href="<?=$CONFIG['sitio']?>secciones/transparencia/solicitudes/">Solicitudes de Acceso a la Información</a></li-->
                <li><a href="<?=$CONFIG['sitio']?>secciones/transparencia/informesso/">Informes de Sujetos Obligados</a></li>
                <li><a href="<?=$CONFIG['sitio']?>secciones/archivo/">Archivo</a></li>
                <li><a href="<?=$CONFIG['sitio']?>secciones/preguntas/">Preguntas frecuentes</a></li>
                <li><a href="<?=$CONFIG['sitio']?>secciones/transparencia/directorio/">Directorio de Unidades de Enlace</a></li>
                <li><a href="<?=$CONFIG['sitio']?>secciones/transparencia/solicitar/">Solicitar Informaci&oacute;n P&uacute;blica</a></li>
                <li><a href="<?=$CONFIG['sitio']?>secciones/datospersonales/">Protecci&oacute;n de datos personales</a></li>
                <li><a href="<?=$CONFIG['sitio']?>secciones/contacto/">Cont&aacute;ctenos</a></li>
            </ul>
        </div>
        <div id="header_right">
        	<ul id="top_menu">
            	<li><a href="<?=$CONFIG['sitio']?>secciones/transparencia/solicitar/">SOLICITUDES</a></li>
                <li><a href="<?=$CONFIG['sitio']?>secciones/datospersonales/">DATOS PERSONALES</a></li>
                <li><a href="<?=$CONFIG['sitio']?>secciones/transparencia/ipublica/">PORTAL DE TRANSFERENCIA</a></li>
                <li><a href="<?=$CONFIG['sitio']?>secciones/transparencia/directorio/">UNIDADES DE ENLACE</a></li>
            </ul>
            <div id="header_icons"> <a href="https://www.facebook.com/transparenciasonora.ities?fref=ts" target="_blank"><img src="<?=$CONFIG['sitio']?>images/icon_mini_fb.png" border="0"  /></a>
                <a href="http://www.youtube.com/user/ities100" target="_blank"><img src="<?=$CONFIG['sitio']?>images/icon_mini_yt.png" border="0"  /></a>
                <a href="https://twitter.com/transparenteSon" target="_blank"><img src="<?=$CONFIG['sitio']?>images/icon_mini_tw.png" border="0" /></a>
</div>
            <div align="center"><img src="<?=$CONFIG['sitio']?>images/informacion_transparencia_txt.png" /></div>
           <div id="header_search">
            	<span>
				
				<script languaje="JavaScript"> 

				var mydate=new Date() 
				var year=mydate.getYear() 
				if (year < 1000) 
				year+=1900 
				var day=mydate.getDay() 
				var month=mydate.getMonth() 
				var daym=mydate.getDate() 
				if (daym<10) 
				daym="0"+daym 
				var dayarray=new Array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado")
				 var montharray=new Array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre")
				 document.write(dayarray[day]+" "+daym+" de "+montharray[month]+" de "+year)
				 
				</script> 
				<div id="bsqG">
                <script>
				  (function() {
					var cx = '006267283707159954728:rufcl0ngq3g';
					var gcse = document.createElement('script');
					gcse.type = 'text/javascript';
					gcse.async = true;
					gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
						'//www.google.com/cse/cse.js?cx=' + cx;
					var s = document.getElementsByTagName('script')[0];
					s.parentNode.insertBefore(gcse, s);
				  })();
				</script>
				<gcse:search></gcse:search>
				</div>
				</span>
            </div>
            <div id="banner">
            	<div id="banner_top">
                	<a href="<?=$CONFIG['sitio']?>">Inicio</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href="<?=$CONFIG['sitio']?>secciones/pleno/">Pleno</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href="<?=$CONFIG['sitio']?>secciones/quienes.php">Qui&eacute;nes somos</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href="<?=$CONFIG['sitio']?>secciones/filosofia.php">Filosof&iacute;a Institucional</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href="<?=$CONFIG['sitio']?>secciones/contacto/">Contacto</a>
                </div>
            	<!-- InstanceBeginEditable name="EditRegion6" -->
<div id="banner_pictures">
           	<img src="../../images/rrfacil.png" width="750" height="358" />
        </div>
                
              <!-- InstanceEndEditable --> 
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    
    <div id="main_content_outer">

        <div id="main_content">
           	<a href="http://infomex.sonora.gob.mx/" target="_blank" style="border:hidden"><img id="infomex" src="<?=$CONFIG['sitio']?>images/infomex.png"  /></a>
           	
            <div class="seccion_title"><!-- InstanceBeginEditable name="EditRegion3" -->Recurso de Revisión<!-- InstanceEndEditable -->
      </div>	
           
            <div class="clearfix"></div>
            <div class="divider">
            </div>
            
            
          
            
            
            <!-- AREA CENTRAL -->
          <div id="center_side_large"><!-- InstanceBeginEditable name="EditRegion4" -->
          <div class="article">  
            <p> Se ha enviado su recurso de revisión espere correo de parte de personal del ITIES</p>
			<p> Descargue el archivo de recurso de revision <a href="<?=$CONFIG['pathrrfacil'].$id_rr.".pdf"?>"> <img src="../../images/descargar pdf.jpg" height="50" width="50" /></a><br /><br /><br /></p>
        </div>
       
                <!-- InstanceEndEditable -->
			</div>
           
            
            
            <!-- AREA LATERAL DERECHA -->
			<div id="right_side"><!-- InstanceBeginEditable name="EditRegion5" -->
                <!--div id="galeria">
                    <div id="photo_container"></div>
                </div-->
                <img src="<?=$CONFIG['sitio']?>images/right_lista_acuerdos.jpg" border="0" usemap="#Map5" />
                <map name="Map5" id="Map5">
                  <area shape="rect" coords="78,62,183,75" href="<?=$CONFIG['sitio']?>secciones/pleno/acuerdos/index.php" />
                  <area shape="rect" coords="97,76,184,89" href="<?=$CONFIG['sitio']?>secciones/pleno/acuerdos/index.php?actual=1" />
                  <area shape="rect" coords="65,150,166,209" href="<?=$CONFIG['sitio']?>secciones/pleno/convocatorias/index.php" />
                  <area shape="rect" coords="91,274,131,287" href="<?=$CONFIG['sitio']?>secciones/pleno/actas/index.php" />
                  <area shape="rect" coords="69,288,158,305" href="<?=$CONFIG['sitio']?>secciones/pleno/resoluciones/index.php" />
                </map>
                <div class="clearfix"></div>
           		<iframe src="http://transparenciasonora.org/colateral/scroll.php" width="231" height="200" frameborder="0"></iframe> <br />
                <div class="clearfix"></div>
                <!-- InstanceEndEditable -->
            </div>
            <div class="clearfix"></div>
		</div>
	</div>
  
	<footer>
        <a href="<?=$CONFIG['sitio']?>files/listasujetosobligados.pdf" target="_blank"><div id="footer_logo1"></div></a>
        <a href="<?=$CONFIG['sitio']?>files/OrganismosdeTransparenciaenMexico.pdf" target="_blank"><div id="footer_logo2"></div></a>
        <a href="<?=$CONFIG['sitio']?>secciones/asociaciones.php" target="_blank"><div id="footer_logo3"></div></a>
        <div id="footer_logo4"><span>
        	<a href="http://infomex.sonora.gob.mx/" target="_blank">El sistema INFOMEX le proporciona un
            folio autom&aacute;tico para dar seguimiento a su	
            solicitud; pero si prefiere utilizar el correo electr&oacute;nico directo:<br /></a>
            <a href="mailto:unidaddeenlace@transparenciasonora.org">unidaddeenlace@transparenciasonora.org</a>
        	</span>
        </div>
        <div class="clearfix"></div>
    </footer>
    	
    <div id="footer_last">
        	<div id="footer_icons">
            	<a href="https://www.facebook.com/transparenciasonora.ities?fref=ts" target="_blank"><img src="<?=$CONFIG['sitio']?>images/footer_icon_fb.png" /></a>
                <a href="http://www.youtube.com/user/ities100" target="_blank"><img src="<?=$CONFIG['sitio']?>images/footer_icon_yt.png" /></a>
                <a href="https://twitter.com/transparenteSon" target="_blank"><img src="<?=$CONFIG['sitio']?>images/footer_icon_tw.png" /></a>
            </div>
            <div id="footer_center">
            	<div id="info_solicitudes_acceso">
                	<span>
                    	Para solicitudes de acceso a la informaci&oacute;n dirigidas al ITIES
                        utilizar INFOMEX o, si prefiere este correo electr&oacute;nico: 
                        <a href="mailto:unidaddeenlace@transparenciasonora.org">unidaddeenlace@transparenciasonora.org</a>
                    </span>
                </div>
            </div>
            
            <div id="footer_info">
            	<a href="mailto:contacto@transparenciasonora.org">unidaddeenlace@transparenciasonora.org</a> <br />
				Tels. (662) 213-15-43, 212-43-08  SIN COSTO: 01 800 701 65 66<br />
				Calle Dr. Hoeffer N&deg; 65, esq. calle Bravo, colonia Centenario.<br />
				Hermosillo, Sonora, M&eacute;xico<br />
            </div>
            <div class="clearfix"></div>
        </div>
    
</div>

</body>
<!-- InstanceEnd --></html>

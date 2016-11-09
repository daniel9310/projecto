<?php 
	session_start();
	$vid = $_POST['cnv_id'];
	
	require_once("../../../include/config/config.php");
	require_once($CONFIG['pathinclude']."config/cx.php");
	require_once($CONFIG['pathinclude']."cls/pleno.php");
	$objres = new convocatorias;
	
	if (!empty($vid)) {
		$Borrar = $objres->delete($vid);
			echo '<script type="text/javascript">
				          alert("El Usuario Fue Borrado Satisfactoriamente");
				          window.parent.location="../../paneladm.php?p=pleno&j=convocatorias&crud=read"
				          </script>';
				          
		}	

 ?>
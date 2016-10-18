<?php 
	session_start();
	$vidusr = $_POST['id_leyes'];
	
	require_once("../../../include/config/config.php");
	require_once($CONFIG['pathinclude']."config/cx.php");
	require_once($CONFIG['pathinclude']."cls/transparencia.php");
	$objTrans = new leyes;
	$BorrarUsr = $$objTrans->delete($vidusr);
	if (!empty($vidusr)) {
			echo '<script type="text/javascript">
				          alert("El Usuario Fue Borrado Satisfactoriamente");
				          window.parent.location="Admin/paneladm.php?p=transparencia&j=leyes"
				          
				          </script>';
		}	

 ?>
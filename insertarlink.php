<?php 
	session_start();
	//$vidusr = $_POST['idusr'];
	$vnombre = $_POST['name'];
	$vapellido = $_POST['lastname'];
	$vnombreusuario = $_POST['usrname'];
	$vcontra = $_POST['password'];
	$vperfil = $_POST['perfil'];
	$vtipousr = $_POST['tipo'];

	require_once("include/config/config.php");
	require_once($CONFIG['pathinclude']."config/cx.php");
	require_once($CONFIG['pathinclude']."cls/usuario.php");
	$objUsr = new Datos;
	
	
		if (empty($vnombreusuario) and empty($vnombre) and empty($vapellido) and empty($vcontra) and empty($vperfil) and empty($vtipousr)) {
			echo '<script type="text/javascript">
				          alert("Todos los Campos son Requeridos");
				          window.parent.location="Admin/paneladm.php?p=usuarios&j=agregar"
				          </script>';
		}else{
			$Usr = $objUsr->ingresar_datos($vnombreusuario, $vcontra, $vperfil,$vnombre, $vapellido,  $vtipousr);
		echo '<script type="text/javascript">
				          alert("Usuario Guardado Satisfactoriamente");
				          
				          window.parent.location="Admin/paneladm.php?p=usuarios&j=consulta"
				          </script>';
		}
	
 ?>
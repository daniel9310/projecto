<?php 
	session_start();
	$vidusr = $_POST['idusr'];
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
	$Usr = $objUsr->ingresar_datos($vnombreusuario, $vcontra, $vperfil,$vnombre, $vapellido,  $vtipousr);
	
	if ($Usr[nombre] == $vnombre) {
		if (empty($vnombreusuario) and empty($vnombre) and empty($vapellido) and empty($vcontra) and empty($vperfil) and empty($vtipousr)) {
			echo '<script type="text/javascript">
				          alert("Todos los Campos son Requeridos");
				          
				          </script>';
		}else{
		echo '<script type="text/javascript">
				          alert("Usuario Guardado Satisfactoriamente");
				          
				          </script>';
		}
	}elseif (empty($vidusr)) {
		$idusr=0;
		if (!preg_match("/^[0-9]$/",$vtipousr)) {
			echo '<script type="text/javascript">
				          alert("El campo admite solamente Digitos");
				          
				          </script>';
		}		
		if (empty($vnombreusuario) and empty($vnombre) and empty($vapellido) and empty($vcontra) and empty($vperfil)) {
			echo '<script type="text/javascript">
				          alert("Todos los Campos son Requeridos");
				          
				          </script>';
		}else{
		echo '<script type="text/javascript">
				          alert("Usuario Guardado Satisfactoriamente");
				          
				          </script>';
		}
	}

 ?>
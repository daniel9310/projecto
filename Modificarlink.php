<?php 
	session_start();
	//$vidusr = $_POST['idusr'];
	$vid_usr = $_POST['idusr'];
	$vnombre = $_POST['named'];
	$vapellido = $_POST['APELLIDO'];
	$vnombreusuario = $_POST['USUARIO'];
	$vperfil = $_POST['PERFIL'];
	$vtipousr = $_POST['DEPARTAMENTO'];

	require_once("include/config/config.php");
	require_once($CONFIG['pathinclude']."config/cx.php");
	require_once($CONFIG['pathinclude']."cls/usuario.php");
	$objUsr = new Datos;
	$Usr = $objUsr->Modificar_datos($vid_usr,$vnombreusuario, $vperfil,$vnombre, $vapellido,  $vtipousr);
	
	if ($Usr[nombre] == $vnombre) {
		if (empty($vnombreusuario) and empty($vnombre) and empty($vapellido) and empty($vperfil) and empty($vtipousr)) {
			echo '<script type="text/javascript">
				          alert("Todos los Campos son Requeridos");
				          window.location="Admin/paneladm.php?p=usuarios&j=consulta"
				          
				          </script>';
		}else{
		echo '<script type="text/javascript">
				          alert("Usuario Guardado Satisfactoriamente");
				          window.location="Admin/paneladm.php?p=usuarios&j=consulta"
				          
				          </script>';
		}
	}elseif (empty($vidusr)) {
		$idusr=0;
		if (!preg_match("/^[0-9]$/",$vtipousr)) {
			echo '<script type="text/javascript">
				          alert("El campo admite solamente Digitos");
				          window.location="Admin/paneladm.php?p=usuarios&j=consulta"
				          
				          </script>';
		}		
		if (empty($vnombreusuario) and empty($vnombre) and empty($vapellido) and empty($vperfil)) {
			echo '<script type="text/javascript">
				          alert("Todos los Campos son Requeridos");
				          window.location="Admin/paneladm.php?p=usuarios&j=consulta"
				          
				          </script>';
		}else{
		echo '<script type="text/javascript">
				          alert("Usuario Guardado Satisfactoriamente");
				          window.location="Admin/paneladm.php?p=usuarios&j=consulta"
				          
				          </script>';
		}
	}

 ?>
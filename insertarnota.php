<?php 
	session_start();
	$vfecha = $_POST['fecha_nts'];
	$vptitulo = $_POST['ptitulo_nts'];
	$vtitulo = $_POST['titulo_nts'];
	$vdescripcion = $_POST['descripcion_nts'];
	$vdescripcioncorta = $_POST['descripcioncorta_nts'];
	$vdescripcioninterior = $_POST['descripcioninterior_nts'];
	$vnota = $_POST['nota_nts'];
	$vpieimagen = $_POST['pie_nts'];
	$vrotativo = $_POST['rotativo_nts'];
	$vurl = $_POST['url_nts'];
	$varchivo = $_FILES['Arch']["name"];
	$vimagen = $_FILES["archivo"]["name"];

	require_once("include/config/config.php");
	require_once($CONFIG['pathinclude']."config/cx.php");
	require_once($CONFIG['pathinclude']."cls/notas.php");
	$objNts = new notas;
	$Nts = $objNts->agregarnota($vfecha, $vptitulo, $vtitulo, $vrotativo, $vdescripcioncorta, $vdescripcion, $vdescripcioninterior, $vnota, $vpieimagen, $vimagen, $varchivo, $vurl);
	
		if (empty($vfecha) and empty($vtitulo) and empty($vptitulo) and empty($vdescripcion) and empty($vdescripcioncorta) and empty($vnota) and empty($vimagen)) {
			echo '<script type="text/javascript">
				          alert("Todos los Campos son Requeridos");
				          window.location="Admin/paneladm.php?p=difusion&j=notas&k=agregar"
				          </script>';
		}else{
		echo '<script type="text/javascript">
				          alert("Usuario Guardado Satisfactoriamente");
				          
				          window.location="Admin/paneladm.php?p=difusion&j=notas&k=consulta"
				          </script>';
		}
	
 ?>
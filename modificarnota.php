<?php 
	session_start();
	//$vidusr = $_POST['idusr'];
	$v_idnota = $_POST['id_nts'];
	$v_fecha = $_POST['fecha_nts'];
	$v_titulop = $_POST['ptitulo_nts'];
	$v_titulo = $_POST['titulo_nts'];
	$v_descripcion = $_POST['descripcion_nts'];
	$v_descripcioncorta = $_POST['descripcioncorta_nts'];
	$v_descripcioninterior = $_POST['descripcioninterior_nts'];
	$v_nota = $_POST['nota_nts'];
	$v_pienota = $_POST['pie_nts'];
	$v_rotativo = $_POST['rotativo_nts'];
	$varchivo =  $_FILES['Arch']["name"];
	$vimagen = $_FILES["archiv"]["name"];
	$vimagen2 = $_POST['path'];
	$v_url = $_POST['url_nts'];
	var_dump($vimagen2);

	require_once("include/config/config.php");
	require_once($CONFIG['pathinclude']."config/cx.php");
	require_once($CONFIG['pathinclude']."cls/notas.php");
	$objNts = new notas;	
	$mod = $objNts->consultarnotaModif($v_idnota);
	$imagenan = $mod['nts_imagen'];

	var_dump($imagenan);

	//$UsrCon = $objNts->Consulta_All();
	
	
		
		if (empty($v_fecha) and empty($v_titulo) and empty($v_titulop) and empty($v_descripcion) and empty($vimagen)) {
			echo '<script type="text/javascript">
				          alert("Todos los Campos son Requeridos");	
				          window.parent.location="Admin/paneladm.php?p=difusion&j=notas&k=consulta"			          
				          </script>';
		}else{
			if (!preg_match("/^[0-9]$/",$v_rotativo)) {
			echo '<script type="text/javascript">
				          alert("El campo de tipo de usuario admite solamente Digitos");
				          window.parent.location="Admin/paneladm.php?p=difusion&j=notas&k=consulta"				          
				          </script>';
			}else{
				
				echo '<script type="text/javascript">
				          alert("Usuario Guardado Satisfactoriamente");
				          window.parent.location="Admin/paneladm.php?p=difusion&j=notas&k=consulta"				          
				          </script>';
				$NtsMod = $objNts->modificarNota($v_idnota,$v_fecha, $v_titulop,$v_titulo, $v_rotativo,  $v_descripcioncorta, $v_descripcion , $v_descripcioninterior, $v_nota,$v_pienota ,$vimagen , $varchivo ,$v_url);
				
				
			}	
		
		}
		
			
		
	
	
?>
<?php
session_start();
	
require_once("../include/config/config.php");
require_once($CONFIG['pathinclude']."config/cx.php");
require_once($CONFIG['pathinclude']."cls/usuario.php");
/*$objUsr = new Datos;
$user = $objUsr->Consultar_usuario($_SESSION['id_usr']);
var_dump($user['ID']);
if ($user['ID'] != $_SESSION['id_usr']) {
  echo '<script type="text/javascript">
                alert("Usuario Inexistente");
                window.location="../index.php"
                </script>';
}*/

if ($_SESSION['id_usr']  < 1) {
  echo '<script type="text/javascript">
                alert("Usuario Inexistente");
                window.location="../index.php"
                </script>';
}
	// Pequeña lógica para capturar la pagina que queremos abrir
    $pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'inicio';


    $inactivo = 1200;
    if (isset($_SESSION['tiempo'])) {
    	$vida_sesion = time() - $_SESSION['tiempo'];
    		if ($vida_sesion > $inactivo) {
    			echo '<script type="text/javascript">
			          alert("Tiempo de Sesion Agotado");
			          window.location="../index.php"
			          </script>';

			    session_destroy();
    		}
    }
    $_SESSION['tiempo'] = time();
    // El fragmento de html que contiene la cabecera de nuestra web
    require_once 'header.php';


    /* Estamos considerando que el parámetro enviando tiene el mismo nombre del archivo a cargar, si este no fuera así
    se produciría un error de archivo no encontrado */
    //print_r($pagina);
    //require_once  $pagina . '.php';
    //require_once ('capacitacion.php');
    
    switch ($pagina) {
    	case 'capacitacion':
    		//include("capacitacion.php");
    		require_once  $pagina . '.php';
    		break;
    	
    	case 'difusion':
    		require_once  'difusion' . '.php';
    		# code...
    		break;

    	case 'evaluacion':
    		require_once  'evaluacion' . '.php';
    		# code...
    		break;

    	case 'galeria':
    		require_once  'galeria' . '.php';
    		# code...
    		break;

    	case 'pleno':
    		require_once  'pleno' . '.php';
    		# code...
    		break;

    	case 'transparencia':
   		 	require_once  'transparencia' . '.php';
    		# code...
    		break;

    	case 'usuarios':
   		 	require_once  'usuarios' . '.php';
    		# code...
    		break;

    	default:
    		require_once  'inicio' . '.php';
    		break;
    }
     

    // Otra opción es validar usando un switch, de esta manera para el valor esperado le indicamos que página cargar


    // El fragmento de html que contiene el pie de página de nuestra web
    require_once 'footer.php';


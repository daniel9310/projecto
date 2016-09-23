<?php
session_start();
	
require_once("../include/config/config.php");
	// Pequeña lógica para capturar la pagina que queremos abrir
    $pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'inicio';


    $inactivo = 900;
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
     	/*	<section >
                <div class="tab-content col-md-11 col-sm-11 home-main-contant-style blog-page-blog-style sidebar row" >
                  <div id="home" class="tab-pane fade in active">
        			<h3>Inicio</h3>
                    <p>Informacion necesaria</p>
                  </div class="tab-pane fade">

                  <div id="Tran" class="tab-pane fade">
                    <div class="">
                      <ul class="nav nav-pills">
                        <li><a data-toggle="pill" href="#trans1">Obligaciones</a></li>
                        <li><a data-toggle="pill" href="#trans2">Unidades</a></li>
                      </ul>
                      
                      <div class="tab-content">
                        <div id="trans1" class="tab-pane fade in active">
                          <h3>Obligaciones</h3>
                          <p> </p>
                        </div>
                        <div id="trans2" class="tab-pane fade">
                          <h3>Unidades</h3>
                          <p></p>
                        </div>                      
                      </div>
                    </div>
                  </div>

                  <div id="Dif" class="tab-pane fade">
                    <div class="">
                      <ul class="nav nav-pills">
                        <li><a data-toggle="pill" href="#difu1">Notas</a></li>
                        <li><a data-toggle="pill" href="#difu2">Convocatorias</a></li>                        
                        <li><a data-toggle="pill" href="#difu3">Material</a></li>
                      </ul>
                      <div class="tab-content">
                        <div id="difu1" class="tab-pane fade in active">
                          <h3>Notas</h3>
                          <p></p>
                        </div>
                        <div id="difu2" class="tab-pane fade">
                          <h3>Convocatorias</h3>
                          <p></p>
                        </div> 
                        <div id="difu3" class="tab-pane fade">
                          <h3>Material</h3>
                          <p></p>
                        </div>                      
                      </div>
                    </div>
                  </div>

                   <div id="Cap" class="tab-pane fade">
                    <div class="">
                      <ul class="nav nav-pills">
                        <li><a data-toggle="pill" href="#capa1">Programa</a></li>
                        <li><a data-toggle="pill" href="#capa2">Solicitudes</a></li>
                      </ul>
                      
                      <div class="tab-content">
                        <div id="capa1" class="tab-pane fade in active">
                          <h3>Programa</h3>
                          <p></p>
                        </div>
                        <div id="capa2" class="tab-pane fade">
                          <h3>Solicitudes</h3>
                          <p></p>
                        </div>                      
                      </div>
                    </div>                  
                  </div>

                  <div id="Pln" class="tab-pane fade">
                    <div class="">
                      <ul class="nav nav-pills">
                        <li><a data-toggle="pill" href="#pleno1">Convocatorias</a></li>
                        <li><a data-toggle="pill" href="#pleno2">Lista de Acuerdos</a></li>
                        <li><a data-toggle="pill" href="#pleno3">Resoluciones</a></li>
                        <li><a data-toggle="pill" href="#pleno4">Actas</a></li>
                        <li><a data-toggle="pill" href="#pleno5">Informes</a></li>
                      </ul>
                      
                      <div class="tab-content">
                        <div id="pleno1" class="tab-pane fade in active">
                          <h3>Convocatorias</h3>
                          <p></p>
                        </div>
                        <div id="pleno2" class="tab-pane fade">
                          <h3>Listas de Acuerdos</h3>
                          <p></p>
                        </div>    
                        <div id="pleno3" class="tab-pane fade">
                          <h3>Programa</h3>
                          <p></p>
                        </div>
                        <div id="pleno4" class="tab-pane fade">
                          <h3>Actas</h3>
                          <p></p>
                        </div>     
                        <div id="pleno5" class="tab-pane fade">
                          <h3>Informes</h3>
                          <p></p>
                        </div>               
                      </div>
                    </div> 
                  </div>

                  <div id="Eva" class="tab-pane fade">
                    <div class="">
                      <ul class="nav nav-pills">
                        <li><a data-toggle="pill" href="#evalu1">Registrar Evaluaciones</a></li>
                        
                      </ul>
                      
                      <div class="tab-content">
                        <div id="evalu1" class="tab-pane fade in active">
                          <h3>Registrar Evaluaciones</h3>
                          <p></p>
                        </div>                                          
                      </div>
                    </div>
                  </div>

                  <div id="Gal" class="tab-pane fade">
                    <div class="">
                      <ul class="nav nav-pills">
                        <li><a data-toggle="pill" href="#gale1">abc</a></li>
                        
                      </ul>
                      
                      <div class="tab-content">
                        <div id="gale1" class="tab-pane fade in active">
                          <h3>abc</h3>
                          <p></p>
                        </div>                                          
                      </div>
                    </div>
                  </div>
	            </div>
	        </section>*/

    // Otra opción es validar usando un switch, de esta manera para el valor esperado le indicamos que página cargar


    // El fragmento de html que contiene el pie de página de nuestra web
    require_once 'footer.php';


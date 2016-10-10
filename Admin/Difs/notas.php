<?php 
	$pagina = isset($_GET['k']) ? strtolower($_GET['k']) : 'agregar';

 ?>
 	<div>
 		<ul class="nav nav-pills">
 			 <li class="<?php echo $pagina == 'agregar' ? 'active' : ''; ?>">	<a data-toggle="pill" href="#" onclick="window.location='?p=difusion&j=notas&k=agregar'">Agregar</a></li>
 			  <li class="<?php echo $pagina == 'consulta' ? 'active' : ''; ?>">	<a data-toggle="pill" href="#" onclick="window.location='?p=difusion&j=notas&k=consulta'">Consulta</a></li>
 		</ul>
 	</div>
 	<?php 
 		switch ($pagina) {
 			case 'agregar':
 				require_once 'agregar'.'.php';
 				break;
 			case 'consulta': 				
 				require_once 'consulta'.'.php';
 				break;
 			
 			case 'modificar': 				
 				require_once 'modificar'.'.php';
 				break;
 			
 			default:
 				require_once 'agregar'.'.php';
 				break;
 		}
 	 ?>
							<?php  
								$pagina = isset($_GET['j']) ? strtolower($_GET['j']) : 'agregar';
							?>            
		                    <div class="">
		                      <ul class="nav nav-pills">
		                        <li class="<?php echo $pagina == 'agregar' ? 'active' : ''; ?>">	<a data-toggle="pill" href="#" onclick="window.location='?p=usuarios&j=agregar'">Agregar</a></li>
              					<li class="<?php echo $pagina == 'eliminar' ? 'active' : ''; ?>">	<a data-toggle="pill" href="#" onclick="window.location='?p=usuarios&j=eliminar'">Eliminar</a></li>
              
		                      </ul>
		                      <div>
		                      	<?php 
				            	switch ($pagina) {
							    	case 'agregar':
							    		//include("capacitacion.php");
							    		require_once 'user/' . 'agregar'. '.php';
							    		break;
							    	
							    	case 'eliminar':
							    		require_once  'user/' . 'eliminar' . '.php';
							    		# code...
							    		break;			    	

							    	default:
							    		require_once 'user/' . 'agregar'. '.php';
							    		break;
							    }
				             ?>
		                      </div>
		                      
		                      
		                    </div>
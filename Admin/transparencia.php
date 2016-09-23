							<?php  
								$pagina = isset($_GET['j']) ? strtolower($_GET['j']) : 'obligaciones';
							?>            
		                    <div class="">
		                      <ul class="nav nav-pills">
		                        <li class="<?php echo $pagina == 'obligaciones' ? 'active' : ''; ?>">	<a data-toggle="pill" href="#" onclick="window.location='?p=transparencia&j=obligaciones'">Obligaciones</a></li>
              					<li class="<?php echo $pagina == 'unidades' ? 'active' : ''; ?>">	<a data-toggle="pill" href="#" onclick="window.location='?p=transparencia&j=unidades'">Unidades</a></li>
              
		                      </ul>
		                      <div>
		                      	<?php 
				            	switch ($pagina) {
							    	case 'obligaciones':
							    		//include("capacitacion.php");
							    		require_once 'Trans/' . 'obligaciones'. '.php';
							    		break;
							    	
							    	case 'unidades':
							    		require_once  'Trans/' . 'unidades' . '.php';
							    		# code...
							    		break;			    	

							    	default:
							    		require_once 'Trans/' . 'obligaciones'. '.php';
							    		break;
							    }
				             ?>
		                      </div>
		                      
		                      
		                    </div>
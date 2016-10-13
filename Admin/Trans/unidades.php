<?php  
								$pagina = isset($_GET['k']) ? strtolower($_GET['k']) : 'Ley';
							?>            
		                    <div class="">
		                      <ul class="nav nav-pills">
		                        <li class="<?php echo $pagina == 'Ley' ? 'active' : ''; ?>">	<a data-toggle="pill" href="#" onclick="window.location='?p=transparencia&j=unidades&k=Ley'">Leyes</a></li>
              					
              					<li class="<?php echo $pagina == 'Art' ? 'active' : ''; ?>">	<a data-toggle="pill" href="#" onclick="window.location='?p=transparencia&j=unidades&k=Art'">Articulos</a></li>
              					
              					<li class="<?php echo $pagina == 'Frac' ? 'active' : ''; ?>">	<a data-toggle="pill" href="#" onclick="window.location='?p=transparencia&j=unidades&k=Frac'">Fracciones</a></li>
              					
              					<li class="<?php echo $pagina == 'Inc' ? 'active' : ''; ?>">	<a data-toggle="pill" href="#" onclick="window.location='?p=transparencia&j=unidades&k=Inc'">Incisos</a></li>
              					
              					<li class="<?php echo $pagina == 'Formato' ? 'active' : ''; ?>">	<a data-toggle="pill" href="#" onclick="window.location='?p=transparencia&j=unidades&k=Formato'">Formatos</a></li>
              					
              					<li class="<?php echo $pagina == 'CampoFo' ? 'active' : ''; ?>">	<a data-toggle="pill" href="#" onclick="window.location='?p=transparencia&j=unidades&k=CampoFo'">Campos Formatos</a></li>
              					
              					<li class="<?php echo $pagina == 'Llenar' ? 'active' : ''; ?>">	<a data-toggle="pill" href="#" onclick="window.location='?p=transparencia&j=unidades&k=Llenar'">Llenar Campos</a></li>
              
		                      </ul>
		                      <div>
		                      	<?php 
				            	switch ($pagina) {
							    	case 'Ley':
							    		//include("capacitacion.php");
							    		require_once 'Ley'. '.php';
							    		break;
							    	
							    	case 'Art':
							    		require_once  'Art' . '.php';
							    		# code...
							    		break;		

							    	case 'Frac':
							    		//include("capacitacion.php");
							    		require_once 'Frac'. '.php';
							    		break;
							    	
							    	case 'Inc':
							    		require_once  'Inc' . '.php';
							    		# code...
							    		break;		

							    	case 'Formato':
							    		//include("capacitacion.php");
							    		require_once 'Formato'. '.php';
							    		break;
							    	
							    	case 'CampoFo':
							    		require_once  'CampoFo' . '.php';
							    		# code...
							    		break;		

							    	case 'Llenar':
							    		//include("capacitacion.php");
							    		require_once 'Llenar'. '.php';
							    		break;	    	

							    	default:
							    		require_once 'Ley'. '.php';
							    		break;
							    }
				             ?>
		                      </div>
		                      
		                      
		                    </div>
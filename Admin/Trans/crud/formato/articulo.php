 <?php  
                $pagina = isset($_GET['format']) ? strtolower($_GET['format']) : 'create';
              ?>    
               <h2>Formato Articulos</h2>
                        <div class="" align="center" style="text-align: center;">
                          <ul class="nav nav-pills">
                            <li class="<?php echo $pagina == 'create' ? 'active' : ''; ?>"> <a data-toggle="pill" href="#" onclick="window.location='?p=transparencia&j=formatos&crud=articulo&format=create'">Agregar</a></li>
                            <li class="<?php echo $pagina == 'read' ? 'active' : ''; ?>"> <a data-toggle="pill" href="#" onclick="window.location='?p=transparencia&j=formatos&crud=articulo&format=read'">Consulta</a></li>
                            
                          </ul>
                          <div>
                            <?php 
                                switch ($pagina) {
                              case 'create':
                                //include("capacitacion.php");
                                require_once 'articulos/' . 'create'. '.php';
                                break;
                              
                              case 'read':
                                //include("capacitacion.php");
                                require_once 'articulos/' . 'read'. '.php';
                                break;
                              
                              case 'update':
                                //include("capacitacion.php");
                                require_once 'articulos/'  . 'update'. '.php';
                                break;
                              
                              case 'delete':
                                //include("capacitacion.php");
                                require_once 'articulos/'  . 'create'. '.php';
                                break;
                                     

                              default:
                                require_once 'articulos/' . 'create'. '.php';
                                break;
                            }
                           ?>
                          </div>
                          
                          
                        </div>
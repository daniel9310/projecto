 <?php  
                $pagina = isset($_GET['format']) ? strtolower($_GET['format']) : 'create';
              ?>    
               
                        <div class="" align="center" style="text-align: center;"><h4>Fracciones</h4>
                          <ul class="nav nav-pills">
                            <li class="<?php echo $pagina == 'create' ? 'active' : ''; ?>"> <a data-toggle="pill" href="#" onclick="window.location='?p=transparencia&j=formatos&crud=fraccion&format=create'">Agregar</a></li>
                            <li class="<?php echo $pagina == 'read' ? 'active' : ''; ?>"> <a data-toggle="pill" href="#" onclick="window.location='?p=transparencia&j=formatos&crud=fraccion&format=read'">Consulta</a></li>
                            
                          </ul>
                          <div>
                            <?php 
                                switch ($pagina) {
                              case 'create':
                                //include("capacitacion.php");
                                require_once 'fraccion/' . 'create'. '.php';
                                break;
                              
                              case 'read':
                                //include("capacitacion.php");
                                require_once 'fraccion/' . 'read'. '.php';
                                break;
                              
                              case 'update':
                                //include("capacitacion.php");
                                require_once 'fraccion/'  . 'update'. '.php';
                                break;
                                     

                              default:
                                require_once 'fraccion/' . 'create'. '.php';
                                break;
                            }
                           ?>
                          </div>
                          
                          
                        </div>
 <?php  
                $pagina = isset($_GET['crud']) ? strtolower($_GET['crud']) : 'create';
              ?>            
                        <div class="">
                          <ul class="nav nav-pills">
                            <li class="<?php echo $pagina == 'create' ? 'active' : ''; ?>"> <a data-toggle="pill" href="#" onclick="window.location='?p=transparencia&j=leyes&crud=create'">Agregar</a></li>
                            <li class="<?php echo $pagina == 'read' ? 'active' : ''; ?>"> <a data-toggle="pill" href="#" onclick="window.location='?p=transparencia&j=leyes&crud=read'">Consulta</a></li>
                            
                          </ul>
                          <div>
                            <?php 
                                switch ($pagina) {
                              case 'create':
                                //include("capacitacion.php");
                                require_once 'crud/' .'ley/' . 'create'. '.php';
                                break;
                              
                              case 'read':
                                //include("capacitacion.php");
                                require_once 'crud/' .'ley/' . 'read'. '.php';
                                break;
                              
                              case 'update':
                                //include("capacitacion.php");
                                require_once 'crud/' .'ley/' . 'update'. '.php';
                                break;
                              
                              case 'delete':
                                //include("capacitacion.php");
                                require_once 'crud/' .'ley/' . 'create'. '.php';
                                break;
                                     

                              default:
                                require_once 'crud/' .'ley/' . 'create'. '.php';
                                break;
                            }
                           ?>
                          </div>
                          
                          
                        </div>




                        
                            <!-- -->

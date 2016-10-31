 <?php  
                $pagina = isset($_GET['format']) ? strtolower($_GET['format']) : 'create';
              ?>    
              
                        <div class="" align="center" style="text-align: center;"> <h4 >Inicisos</h4>
                          <ul class="nav nav-pills">
                            <li class="<?php echo $pagina == 'create' ? 'active' : ''; ?>"> <a data-toggle="pill" href="#" onclick="window.location='?p=transparencia&j=formatos&crud=inciso&format=create'">Agregar</a></li>
                            <li class="<?php echo $pagina == 'read' ? 'active' : ''; ?>"> <a data-toggle="pill" href="#" onclick="window.location='?p=transparencia&j=formatos&crud=inciso&format=read'">Consulta</a></li>
                            
                          </ul>
                          <div>
                            <?php 
                                switch ($pagina) {
                              case 'create':
                                //include("capacitacion.php");
                                require_once 'inciso/' . 'create'. '.php';
                                break;
                              
                              case 'read':
                                //include("capacitacion.php");
                                require_once 'inciso/' . 'read'. '.php';
                                break;
                              
                              case 'update':
                                //include("capacitacion.php");
                                require_once 'inciso/'  . 'update'. '.php';
                                break;

                              default:
                                require_once 'inciso/' . 'create'. '.php';
                                break;
                            }
                           ?>
                          </div>
                          
                          
                        </div>
 <?php  
                $pagina = isset($_GET['crud']) ? strtolower($_GET['crud']) : 'inicio';
              ?>            
                       
                              <!--li class="<?php echo $pagina == 'registrar' ? 'active' : ''; ?>">  <a data-toggle="pill" href="#" onclick="window.location='?p=evaluacion&j=registrar'">Registrar Evaluaciones</a></li-->
                        
              
                          </div>
                        <div id="demo" class="col l12"></div>

                            <?php 
                                switch ($pagina) {

                              case 'inicio':
                                //include("capacitacion.php");
                                require_once 'crud/' .'formato/' . 'inicio'. '.php';
                                break;
                              
                              case 'create':
                                //include("capacitacion.php");
                                require_once 'crud/' .'formato/' . 'create'. '.php';
                                break;
                              
                              case 'read':
                                //include("capacitacion.php");
                                require_once 'crud/' .'formato/' . 'read'. '.php';
                                break;
                              
                              case 'update':
                                //include("capacitacion.php");
                                require_once 'crud/' .'formato/' . 'update'. '.php';
                                break;                                                                  

                              default:
                                require_once 'crud/' .'formato/' . 'inicio'. '.php';
                                break;
                            }
                           ?>
                          </div>
                          
                          
                        </div>

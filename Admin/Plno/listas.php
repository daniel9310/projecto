 <?php  
                $pagina = isset($_GET['crud']) ? strtolower($_GET['crud']) : 'create';
              ?>   
               
                        <div class="">
                        <h2 style="text-align: center;">Listas de Acuerdos</h2>
                          <ul class="nav nav-pills">
                            <li class="<?php echo $pagina == 'create' ? 'active' : ''; ?>"> <a data-toggle="pill" href="#" onclick="window.location='?p=pleno&j=listas&crud=create'">Agregar</a></li>
                            <li class="<?php echo $pagina == 'read' ? 'active' : ''; ?>"> <a data-toggle="pill" href="#" onclick="window.location='?p=pleno&j=listas&crud=read'">Consulta</a></li>
                            
                          </ul>
                          <div>
                            <?php 
                                switch ($pagina) {
                              case 'create':
                                //include("capacitacion.php");
                                require_once 'crud/' .'listas/' . 'create'. '.php';
                                break;
                              
                              case 'read':
                                //include("capacitacion.php");
                                require_once 'crud/' .'listas/' . 'read'. '.php';
                                break;
                              
                              case 'update':
                                //include("capacitacion.php");
                                require_once 'crud/' .'listas/' . 'update'. '.php';
                                break;
                                     

                              default:
                                require_once 'crud/' .'listas/' . 'create'. '.php';
                                break;
                            }
                           ?>
                          </div>
                          
                          
                        </div>




                        
                            <!-- -->


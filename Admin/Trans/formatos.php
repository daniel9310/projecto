 <?php  
 $pagina = isset($_GET['crud']) ? strtolower($_GET['crud']) : 'inicio';
              ?>            
              <div class="col l12" align="center" style="text-align: center;">
  
              <h3>Formatos</h3>
                                <a class="waves-effect waves-light btn-large btn tooltipped" onclick="window.location='?p=transparencia&j=formatos&crud=articulo'" data-position="bottom" data-delay="50" data-tooltip="Articulos"><i class="fa fa-institution"></i></a>
                                <a class="waves-effect waves-light btn-large btn tooltipped" onclick="window.location='?p=transparencia&j=formatos&crud=fraccion'" data-position="bottom" data-delay="50" data-tooltip="Fracciones"><i class="fa fa-legal"></i></a>
                                <a class="waves-effect waves-light btn-large btn tooltipped" onclick="window.location='?p=transparencia&j=formatos&crud=inciso'" data-position="bottom" data-delay="50" data-tooltip="Incisos"><i class="fa fa-archive"></i></a>
                              </div>
                              <!--li class="<?php echo $pagina == 'registrar' ? 'active' : ''; ?>">  <a data-toggle="pill" href="#" onclick="window.location='?p=evaluacion&j=registrar'">Registrar Evaluaciones</a></li-->

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

                              case 'articulo':
                                //include("capacitacion.php");
                                require_once 'crud/' .'formato/' . 'articulo'. '.php';
                                break;
                              
                              case 'fraccion':
                                //include("capacitacion.php");
                                require_once 'crud/' .'formato/' . 'fraccion'. '.php';
                                break;
                              
                              case 'inciso':
                                //include("capacitacion.php");
                                require_once 'crud/' .'formato/' . 'inciso'. '.php';
                                break;                                                         

                              default:
                                require_once 'crud/' .'formato/' . 'inicio'. '.php';
                                break;
                            }
                           ?>
                          </div>
                          
                          

                        </div>

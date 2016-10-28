 <?php  
                $pagina = isset($_GET['crud']) ? strtolower($_GET['crud']) : 'create';
              ?>             <div class="col l12" align="center" style="text-align: center;">
                                <a class="waves-effect waves-light btn-large" title="Ley" onclick="window.location='?p=transparencia&j=leyes'"><i class="fa fa-book"></i></a>
                                <a class="waves-effect waves-light btn-large" title="Articulo" onclick="window.location='?p=transparencia&j=articulos'"><i class="fa fa-institution"></i></a>
                                <a class="waves-effect waves-light btn-large" title="Inciso" onclick="window.location='?p=transparencia&j=incisos'"><i class="fa fa-archive"></i></a>
                              </div>
                                       
              <div class="col l12" align="center" style="text-align: center;">
                <h2>Fraciones</h2>
                        <div class="">
                          <ul class="nav nav-pills">
                            <li class="<?php echo $pagina == 'create' ? 'active' : ''; ?>"> <a data-toggle="pill" href="#" onclick="window.location='?p=transparencia&j=fraciones&crud=create'">Agregar</a></li>
                            <li class="<?php echo $pagina == 'read' ? 'active' : ''; ?>"> <a data-toggle="pill" href="#" onclick="window.location='?p=transparencia&j=fraciones&crud=read'">Consulta</a></li>
                            
                          </ul>
                          <div>
                            <?php 
                                switch ($pagina) {
                              case 'create':
                                //include("capacitacion.php");
                                require_once 'crud/' .'fraccion/' . 'create'. '.php';
                                break;
                              
                              case 'read':
                                //include("capacitacion.php");
                                require_once 'crud/' .'fraccion/' . 'read'. '.php';
                                break;
                              
                              case 'update':
                                //include("capacitacion.php");
                                require_once 'crud/' .'fraccion/' . 'update'. '.php';
                                break;
                              
                              case 'delete':
                                //include("capacitacion.php");
                                require_once 'crud/' .'fraccion/' . 'create'. '.php';
                                break;
                                     

                              default:
                                require_once 'crud/' .'fraccion/' . 'create'. '.php';
                                break;
                            }
                           ?>
                          </div>
                          
                          
                        </div>


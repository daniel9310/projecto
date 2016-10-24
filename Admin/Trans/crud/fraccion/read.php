<?php 
    session_start();
    require_once("../include/config/config.php");
    require_once($CONFIG['pathinclude']."config/cx.php");
    require_once($CONFIG['pathinclude']."cls/transparencia.php");
    #$objLey = new leyes;
    #$objArt = new articulos;
    $objFrac = new fracciones;
    /*$objInc = new incisos;
    $objForm = new formatos;
    $objCampo = new campoformatos;
    $objIng = new ingresardatos;*/
 ?>
<div >
                  <h3></h3>
                  <?php 
                    $datos = $objFrac->read(1);
                   ?>
                  <script type="text/javascript">
                                function editar(Fracid){
                                    frmEditFrac.elements['SubFracid'].value = Fracid;
                                    frmEditFrac.submit();
                                }

                                function BorrarIdar(Fracid){
                                    frmDelFrac.elements['SubFracid'].value = Fracid;
                                    frmDelFrac.submit();
                                }
                             </script>
                             <div class="table-responsive" >
                              <table class="table table-striped table-bordered table-hover table-condensed">
                                <thead>
                                  <tr style="background: #737677;">
                                    <th>ID</th>
                                    <th>FRACCION</th>
                                    <th>DESCRIPCION</th>              
                                    <th></th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                  <?php 
                                    foreach ($datos as $row => $dato) {
                                        
                                        ?> 
                                            
                                            <?php 
                                                //foreach ($row as $dato) {
                                            ?>
                                            <!--<td><?=$dato?></td>-->

                                            <td><?=$dato['id_frac']?></td>
                                            <td><?=$dato['num_frac']?></td>
                                            <td><?=$dato['descripcion']?></td>
                                            
                                            <?php       
                                            //  }
                                             ?>
                                            <td style="text-align: center;" >
                                                
                                                <div type="submit" class="btn-custom btn-mini border-btn "  align="center" style="text-align: center;" >
                                                        <a href="#" onclick="javascript:editar('<?=$dato["id_frac"]?>');">
                                                            <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
                                                        </a>
                                                               <!--  <a type="submit" class="btn-custom btn-mini border-btn btn-gray"  href="javascript: form_login.submit();"><i class="fa fa-sign-in"></i> Ingresar</a>-->
                                                </div>
                                            </td>

                                            <td style="text-align: center;" >
                                                <div type="submit" class="btn-custom btn-mini border-btn "  align="center" style="text-align: center;" >
                                                        <a href="#" onclick="javascript:BorrarIdar('<?=$dato["id_frac"]?>');">
                                                            <i class="fa fa-trash fa-2x" aria-hidden="true"></i>
                                                        </a>
                                                               <!--  <a type="submit" class="btn-custom btn-mini border-btn btn-gray"  href="javascript: form_login.submit();"><i class="fa fa-sign-in"></i> Ingresar</a>-->
                                                </div>
                                                
                                            </td>
                                        </tr>
                                    <?php 
                                    }
                                  ?>
                                    
                                  </tr>
                                </tbody>
                              </table>
                              </div>
                              <form  target="lBorrar" name="frmDelFrac"  action="<?=$CONFIG['pathtrans']?>Fracborrar.php" method="post">
                              <input type="hidden" name="SubFracid">
                              </form>

                              <form  name="frmEditFrac" action="paneladm.php?p=transparencia&j=fraciones&crud=update" method="post" > 
                              <input type="hidden" name="SubFracid">
                              </form>
                              <iframe name="lBorrar"  height="0" width="0"></iframe>
                                </div>
                                <iframe name="lBorrar1"  height="0" width="0"></iframe>
                                </div>

<?php 
    session_start();
    require_once("../include/config/config.php");
    require_once($CONFIG['pathinclude']."config/cx.php");
    require_once($CONFIG['pathinclude']."cls/transparencia.php");
    $objInc = new incisos;
    $UpInc = $objInc->readall($_POST['SubIncid']);
    $objFracc = new fracciones;
    $datos = $objFracc->read(1);
 ?>
<div >
              <h3></h3>
                  <form class="form" target="updh"  method="POST"  action="<?=$CONFIG['pathtrans']?>Incmodificar.php">
                        <input type="hidden" name="frac_id" value="<?=$UpInc['id_inc']?>">
                                        

                        <div class="input-field col s12">      
                          <select name="fkley" disabled >
                             <option value="<?=$UpInc['id_leyes']?>" ><?=$UpInc['tipo']?></option>
                          </select>
                          <label>Tipo de Ley</label>
                        </div> 

                        <div class="input-field col s12" >      
                          <select name="fkart" >
                             <option value="<?=$UpInc['id_art']?>" ><?=$UpInc['num_art']?></option>
                          </select>
                          <label>Numero de Articulo</label>
                        </div>   

                        <div class="input-field col s12">                              
                                 
                          <select name="fkfracc">
                             <option value="<?=$UpInc['id_frac']?>" selected disabled><?=$UpInc['num_frac']?></option>
                             <?php 
                                 foreach ($datos as $row => $dato) {                                        
                              ?> 
                              <option value="<?=$dato['id_frac']?>" required><?=$dato['num_frac']?></option>
                              <?php 
                                 }
                              ?>                          
                          </select>
                          <label>Numero de Fraccion</label>
                        </div>                                         

                        <div class="input-field col s12">
                          <input name="IncNum"  type="text" class="validate" value="<?=$UpInc['num_inc']?>" required >
                          <label for="IncNum">Numero de Inciso</label>
                        </div> 

                        <div class="input-field col s12">
                            <i class="material-icons prefix">note</i>
                            <textarea id="icon_prefix2" class="materialize-textarea" name="IncDes" length="120" required><?=$UpInc['descripcion']?></textarea>
                            <label for="icon_prefix2">Descripcion del Inciso</label>
                        </div> 

                        <div align="center" class="col l12" style="align-items: center;">
                            <!--input type="submit" value="Enviar" class="form-button" /-->
                            <button class="btn waves-effect waves-light col l12" type="submit" name="Submitmodi" >Enviar
                                <i class="material-icons "></i>
                              </button>
                        </div>
                </form>

                            <iframe name="updh" height="0" width="0" ></iframe>
            </div>



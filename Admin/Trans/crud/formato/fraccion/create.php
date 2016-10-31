<?php 
    session_start();
    require_once("../include/config/config.php");
    require_once($CONFIG['pathinclude']."config/cx.php");
    require_once($CONFIG['pathinclude']."cls/transparencia.php");
    $objLey = new leyes;
    $datosley = $objLey->consult(1);
    $objFrac = new fracciones;
    $datos = $objFrac->read(1);
    /*$objForm = new formatos;
    $objCampo = new campoformatos;
    $objIng = new ingresardatos;*/
 ?>
<div class="rows">
                  <h3></h3>
                    <form class="form" target="" method="POST"  action="<?=$CONFIG['pathtrans']?>Incagregar.php">

                        
                        <div class="input-field col s12 l12 m12">                              
                                 
                          <select name="fkley">
                             <option value="" disabled selected>Elige la Ley</option>
                             <?php 
                                 foreach ($datosley as $row => $datoley) {                                        
                              ?> 
                              <option value="<?=$datoley['id_leyes']?>" required><?=$datoley['tipo']?></option>
                              <?php 
                                 }
                              ?>                            
                          </select>
                          <label>Numero de Ley</label>
                        </div>

                        <div class="input-field col s12 l12 m12">                              
                                 
                          <select name="fkArt">
                             <option value="" disabled selected>Elige el Articulo</option>
                             <?php 
                             
    $objArt = new articulos;
    $datosart = $objArt->read(1);
    $consultaart = $objArt->readwhere();
                                 foreach ($datosart as $row => $datoart) {                                        
                              ?> 
                              <option value="<?=$datoart['id_art']?>" required><?=$datoart['num_art']?></option>
                              <?php 
                                 }
                              ?>                            
                          </select>
                          <label>Numero de Articulo</label>
                        </div>

                        <div class="input-field col s12 l12 m12">                              
                                 
                          <select name="fkfrac">
                             <option value="" disabled selected>Elige la Fraccion</option>
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

                        <div class="input-field col s12 l12 m12">
                          <input name="Nomfor"  type="text" class="validate" required >
                          <label for="Nomfor">Titulo de Formato</label>
                        </div>  

                        <div class="input-field col s12 l12 m12">
                          <input name="Nomcor" id="" type="text" class="validate" >
                          <label for="Nomcor">Nombre Corto de Formato</label>
                        </div>

                         <div class="input-field col s12 l12 m12">
                            <i class="material-icons prefix">note</i>
                            <textarea id="icon_prefix2" class="materialize-textarea" name="Descform" length="120" required></textarea>
                            <label for="icon_prefix2">Descripcion del Formato</label>
                        </div> 
                       

                        <div align="center" class="col l12" style="align-items: center;">
                            <button class="btn waves-effect waves-light col l12" type="submit" name="SubAgregar" >Enviar</button>
                        </div>
                    </form>                   
                    <iframe name="agregarfraccion" height="0" width="0"  ></iframe> 

                </div>

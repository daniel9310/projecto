<?php 
    session_start();
    require_once("../include/config/config.php");
    require_once($CONFIG['pathinclude']."config/cx.php");
    require_once($CONFIG['pathinclude']."cls/transparencia.php");
    $objFrac = new fracciones;
    $datos = $objFrac->read(1);
    /*$objFrac = new fracciones;
    /*$objInc = new incisos;
    $objForm = new formatos;
    $objCampo = new campoformatos;
    $objIng = new ingresardatos;*/
 ?>
<div class="rows">
                  <h3></h3>
                    <form class="form" target="" method="POST"  action="">

                        
                        <div class="input-field col s12 m6" style="align-items: center; text-align: center;">
                          <select class="icons">
                            <option value="" disabled selected>Opciones Disponibles</option>
                            <option value="" data-icon="<?=$CONFIG['sitio']?>img/ley1.jpg" class="circle"><a href="#ley">Leyes</a></option>
                            <option value="" data-icon="<?=$CONFIG['sitio']?>img/ley2.jpg" class="circle"><a href="#articulo">Articulos</a></option>
                            <option value="" data-icon="<?=$CONFIG['sitio']?>img/ley3.jpg" class="circle">Fracciones</option>
                            <option value="" data-icon="<?=$CONFIG['sitio']?>img/ley4.jpg" class="circle">Incisos</option>
                          </select>
                          <label>Seleccionar una Opcion para Agregar Formatos</label>
                        </div>

                        <div id="ley" >
                          aklsdjaksjd
                        </div>
                        <div id="articulo">
                          añlsdjk
                        </div>

                        <div align="center" class="col l12" style="align-items: center;">
                            <button class="btn waves-effect waves-light col l12" type="submit" name="SubAgregar" >Enviar</button>
                        </div>
                    </form>                   
                    <iframe name="agragar formato" height="0" width="0"  ></iframe> 

                </div>

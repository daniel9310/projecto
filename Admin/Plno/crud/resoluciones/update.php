    <?php
            require_once($CONFIG['pathinclude']."config/cx.php");
            require_once($CONFIG['pathinclude']."cls/pleno.php");
            $objResMod = new resoluciones;
            $ConsulModi = $objResMod->readid($_POST['rsl_id']);
            //var_dump($ConsulModi['nts_fecha']);
    ?>
    <section class="services-style-3 main-contain">
 	 	
		    <div  class="container">
          <div class=" col l11 col m4 col s12" style="align-items: center; text-align: center;" align="center">
                   <!-- action="<?=$CONFIG['sitio']?>insertarlink.php" <h2>Modificar Notas</h2>-->
                                        
                <div class="form-main" >
                    <div class="row">
                      <form class="col l12"  method="POST"   enctype="multipart/form-data" name="inscripcion" action="<?= $CONFIG['pathpln']?>relacion/Resolmodificar.php">
                        <div class="row">
                          <input type="hidden" name="id_rsl" placeholder="ID DE USUARIO" value="<?=$ConsulModi['rsl_id']?>" >
                          
                          

                          <div class="input-field col s12">
                            <input name="Expediente"  type="text" class="validate" required=""  value="<?=$ConsulModi['rsl_expediente']?>">
                            <label for="Expediente">Nombre de Expediente</label>
                          </div>                                               
                       
                          <div class="input-field col s12">
                            <input name="SujetoOblig" type="text" class="validate" value="<?=$ConsulModi['rsl_sobligado']?>" >
                            <label for="SujetoOblig">Nombre de Sujeto Obligado</label>
                          </div>

                          <div class="input-field col s12">
                            <input name="Recurrente" type="text" class="validate" value="<?=$ConsulModi['rsl_recurrente']?>" >
                            <label for="Recurrente">Nombre de Recurrente</label>
                          </div>  

                          <div class="input-field col s12">
                            <input name="AResolucion" type="number" class="validate" min="2000" max="2020" step="1" value="<?=$ConsulModi['rsl_anio']?>" >
                            <label for="AResolucion">Año de Resolucion</label>
                          </div>  

                          <div class="input-field col s12">                                                      
                            <input id="nombre" type="text" class="datepicker" name="fecha_rsl" required value="<?=$ConsulModi['rsl_fecha']?>" >
                            <label for="nombre">Fecha de Resolucion</label>
                          </div>                                               

                          

                            <div class="col s12">
                                <div class="file-field input-field">
                                  <div class="btn">
                                    <i class="material-icons">attach_file</i>
                                    <span>Archivo</span>
                                    <input type="file" name="Arch" required="" >
                                  </div>
                                  <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" value="<?=$ConsulModi['rsl_archivo']?>">
                                  </div>
                                </div>
                            </div>

                            <?php
                                    # definimos la carpeta destino
                                    $carpetaDestino="../files/archivo/";
                                    //$carpetaDestino= $CONFIG['sitioimgnotas'];
                                    
                                    # si hay algun archivo que subir

                                    if($_FILES["Arch"]["name"])
                                    { 
                                        
                                            # si es un formato de imagen

                                            if( $_FILES["Arch"]["type"]=="application/pdf")
                                            {
                                                # si exsite la carpeta o se ha creado

                                                
                                                    $origen=$_FILES["Arch"]["tmp_name"];

                                                    $destino=$carpetaDestino.$_FILES["Arch"]["name"];
                                                    
                                                    # movemos el archivo

                                                    if(move_uploaded_file($origen, $destino))
                                                    {
                                                        echo "<br>".$_FILES["Arch"]["name"]." movido correctamente";
                                                    }else{
                                                        echo "<br>No se ha podido mover el archivo: ".$_FILES["Arch"]["name"];
                                                    }

                                                

                                            }else{
                                                echo "<br>".$_FILES["Arch"]["name"]." - NO es un archivo .doc  O .pdf";
                                            }
                                        
                                    }else{

                                        echo "<br>No se ha subido ningun archivo";

                                    }
                            ?>  

                            
                          <div align="center" class="col l12" style="align-items: center;">
                            <!--input type="submit" value="Enviar" class="form-button" /-->
                            <button class="btn waves-effect waves-light col l12" type="submit" name="InSend" >Enviar
                                <i class="material-icons "></i>
                              </button>
                        </div>
                      </form>
                    </div>
                </div>



                                        
          </div>
        </div>
    </section>
    <iframe name="updatenota" height="0" width="0"></iframe>
	

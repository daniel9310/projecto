    <?php
    session_start();
        require_once("../include/config/config.php");
    ?>
    <section class="services-style-3 main-contain">
 	 	
		<div  class="container">
          <div class=" col m11 s12 l12 " style="align-items: center; text-align: center;" align="center">
                <h2></h2>   <!-- action="<?=$CONFIG['sitio']?>insertarlink.php" -->
                                        
                                        <div class="form-main" >
                                            <div class="row">
                                              <form class="col l12"  method="POST" target="ingre"  enctype="multipart/form-data" action="<?= $CONFIG['pathpln']?>relacion/Cnvagregar.php">
                                                <div class="row">
                                                  <input type="hidden" name="id_nts" placeholder="ID DE USUARIO" >
                                                  <div class="input-field col s12">
                                                    <select name="convenio">
                                                      <option value="" disabled selected>Selecciona la Opcion</option>
                                                      <option value="Administrativo">Administrativo</option>
                                                      <option value="Extraordinario">Extraordinario</option>
                                                      <option value="Juridico">Juridico</option>
                                                      <option value="Soledme">Soledme</option>
                                                    </select>
                                                    <label>Tipo de Convenio</label>
                                                  </div>

                                                  <div class="input-field col s12">                                                      
                                                    <input id="nombre" type="text" class="datepicker" name="fecha_cnv" required >
                                                    <label for="nombre">Fecha de Convocatorias</label>
                                                  </div>                                               

                                                  

                                                    <div class="col s12">
                                                        <div class="file-field input-field">
                                                          <div class="btn">
                                                            <i class="material-icons">attach_file</i>
                                                            <span>Archivo</span>
                                                            <input type="file" name="Arch" required="" >
                                                          </div>
                                                          <div class="file-path-wrapper">
                                                            <input class="file-path validate" type="text">
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
                                              <iframe name="ingre" height="0" width="0"></iframe>
                                            </div>     
                                        </div>
                                    </div>
                                </div>
                            </section>

	

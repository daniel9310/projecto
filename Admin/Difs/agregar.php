    <?php
        require_once("../include/config/config.php");
    ?>
    <section class="services-style-3 main-contain">
 	 	
		<div  class="container">
          <div class=" col-md-11 col-sm-4 col-xs-12" style="align-items: center; text-align: center;" align="center">
                <h2>Agregar Notas</h2>   <!-- action="<?=$CONFIG['sitio']?>insertarlink.php" -->
                                        <div class="form-main">
                                            <form class="form"   method="post" enctype="multipart/form-data" name="inscripcion">
                                            	   <input type="hidden" name="p" value="difusion" class="feedback-input">
                                                <input type="hidden" name="j" value="notas" class="feedback-input">      
                                                <input type="hidden" name="k" value="consulta" class="feedback-input">                                      

                                                <p >
                                                    <input name="id_nts" type="hidden" class="feedback-input" placeholder="id"  />
                                                </p>
                                                
                                                <p >
                                                    <input name="fecha_nts" type="text" class="feedback-input" placeholder="FECHA"  />
                                                </p>

                                                <p >
                                                    <input name="ptitulo_nts" type="text" class="feedback-input" placeholder="TITULO PRINCIPAL"  />
                                                </p>

                                                <p>
                                                    <input name="titulo_nts" type="text" class="feedback-input" placeholder="TITULO"  />
                                                </p>
                                                
                                                <p>
                                                    <textarea name="descripcioncorta_nts" class="feedback-input" placeholder="DESCRIPCION CORTA"></textarea>
                                                </p>
                                                
                                                <p>
                                                    <textarea name="descripcion_nts" class="feedback-input" placeholder="DESCRIPCION"></textarea>
                                                </p>

                                                <p>
                                                    <textarea name="descripcioninterior_nts" class="feedback-input" placeholder="DESCRIPCION INTERIOR"></textarea>
                                                </p>

                                                <p>
                                                    <textarea name="nota_nts" class="feedback-input" placeholder="CUERPO DE LA NOTA"></textarea>
                                                </p>

                                                <p>
                                                    <textarea name="pie_nts" class="feedback-input" placeholder="PIE DE NOTA"></textarea>
                                                </p>
                                                <p >
                                                    <input name="rotativo_nts" type="number" value="1" max="1" min="0" class="feedback-input"  placeholder="ROTATIVO" />
                                                </p>

                                                <p >
                                                    <input name="archivo_nts" type="text" class="feedback-input"  placeholder="ARCHIVO" />
                                                </p>

                                                <p >
                                                    <input name="url_nts" type="text"  class="feedback-input"  placeholder="URL" />
                                                </p>
                                                
                                                <p style="background: gray;">
                                                    <label>Subir Archivo</label>
                                                    <input type="file" name="Arch">
                                                </p>

                                                     <?php
                                                            # definimos la carpeta destino
                                                            $carpetaDestino="../files/prueba/";
                                                            //$carpetaDestino= $CONFIG['sitioimgnotas'];
                                                            
                                                            # si hay algun archivo que subir

                                                            if($_FILES["Arch"]["name"])
                                                            { 
                                                                
                                                                    # si es un formato de imagen

                                                                    if($_FILES["Arch"]["type"]=="image/jpeg" || $_FILES["Arch"]["type"]=="image/pjpeg" || $_FILES["Arch"]["type"]=="image/gif" || $_FILES["Arch"]["type"]=="image/png" || $_FILES["Arch"]["type"]=="application/pdf" || $_FILES["Arch"]["type"]=="application/msword")
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
                                                                        echo "<br>".$_FILES["Arch"]["name"]." - NO es imagen jpg";
                                                                    }
                                                                
                                                            }else{

                                                                echo "<br>No se ha subido ninguna imagen";

                                                            }
                                                    ?>   
                                                <p style="background: gray;">
                                                    <label>Subir Imagen</label>
                                                    <input type="file" name="archivo">
                                                </p>
                                                    <?php
                                                            # definimos la carpeta destino
                                                            $carpetaDestino="../files/prueba/";
                                                            //$carpetaDestino= $CONFIG['sitioimgnotas'];
                                                            
                                                            # si hay algun archivo que subir

                                                            if($_FILES["archivo"]["name"])
                                                            { 
                                                                
                                                                    # si es un formato de imagen

                                                                    if($_FILES["archivo"]["type"]=="image/jpeg" || $_FILES["archivo"]["type"]=="image/pjpeg" || $_FILES["archivo"]["type"]=="image/gif" || $_FILES["archivo"]["type"]=="image/png" || $_FILES["archivo"]["type"]=="application/pdf" || $_FILES["archivo"]["type"]=="application/msword")
                                                                    {
                                                                        # si exsite la carpeta o se ha creado

                                                                        
                                                                            $origen=$_FILES["archivo"]["tmp_name"];

                                                                            $destino=$carpetaDestino.$_FILES["archivo"]["name"];

                                                                            
                                                                            # movemos el archivo

                                                                            if(move_uploaded_file($origen, $destino))
                                                                            {
                                                                                echo "<br>".$_FILES["archivo"]["name"]." movido correctamente";
                                                                            }else{
                                                                                echo "<br>No se ha podido mover el archivo: ".$_FILES["archivo"]["name"];
                                                                            }

                                                                        

                                                                    }else{
                                                                        echo "<br>".$_FILES["archivo"]["name"]." - NO es imagen jpg";
                                                                    }
                                                                
                                                            }else{

                                                                echo "<br>No se ha subido ninguna imagen";

                                                            }
                                                    ?>                                     

                                                    

                                                <div class="submit">

                                                     <input type="submit" value="Enviar"  class="form-button">

                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </section>

	

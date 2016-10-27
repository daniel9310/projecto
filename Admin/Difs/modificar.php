    <?php
            require_once($CONFIG['pathinclude']."config/cx.php");
            require_once($CONFIG['pathinclude']."cls/notas.php");
            $objConMod = new notas;
            $ConsulModi = $objConMod->consultarnotaModif($_POST['nts_id']);
            //var_dump($ConsulModi['nts_fecha']);
    ?>
    <section class="services-style-3 main-contain">
 	 	
		<div  class="container">
          <div class=" col l11 col m4 col s12" style="align-items: center; text-align: center;" align="center">
                <h2>Modificar Notas</h2>   <!-- action="<?=$CONFIG['sitio']?>insertarlink.php" -->
                                        
                                        <div class="form-main" >
                                            <div class="row">
                                              <form class="col l12"  target="" method="POST" action="<?=$CONFIG['sitio']?>modificarnota.php"  enctype="multipart/form-data">
                                                <div class="row">
                                                  <input type="hidden" name="id_nts" placeholder="ID DE USUARIO" value="<?=$_POST['nts_id']?>" >
                                                   <div class="input-field col s12">

                                                    <!--input type="date" class="datepicker validate"  name="fecha_nts" required-->        
                                                    <input id="nombre" type="text" class="datepicker" name="fecha_nts" required value="<?=$ConsulModi['FECHA']?>">
                                                    <label for="nombre">Fecha</label>
                                                  </div>

                                                  <div class="input-field col s12">
                                                    <input name="ptitulo_nts" id="apellidos" type="text" class="validate" value="<?=$ConsulModi['nts_ptitulo']?>">
                                                    <label for="last_name">Titulo Principal</label>
                                                  </div>                                               
                                               
                                                  <div class="input-field col s12">
                                                    <input name="titulo_nts" id="nombre_usuario" type="text" class="validate" value="<?=$ConsulModi['nts_titulo']?>" >
                                                    <label for="username">Titulo</label>
                                                  </div>                      

                                                  <div class="input-field col s12">
                                                      <i class="material-icons prefix">note</i>
                                                      <textarea id="icon_prefix2" class="materialize-textarea" name="descripcioncorta_nts"><?=$ConsulModi['nts_descripcioncorta']?></textarea>
                                                      <label for="icon_prefix2">Descripcion Corta</label>
                                                    </div>

                                                    <div class="input-field col s12">
                                                      <i class="material-icons prefix">note</i>
                                                      <textarea id="icon_prefix2" class="materialize-textarea" name="descripcion_nts"><?=$ConsulModi['nts_descripcion']?></textarea>
                                                      <label for="icon_prefix2">Descripcion</label>
                                                    </div>

                                                    <div class="input-field col s12">
                                                      <i class="material-icons prefix">note</i>
                                                      <textarea id="icon_prefix2" class="materialize-textarea" name="descripcioninterior_nts"><?=$ConsulModi['nts_descinteriorcorta']?></textarea>
                                                      <label for="icon_prefix2">Descripcion Interior</label>
                                                    </div>                        
                                                
                                                    <div class="input-field col s12">
                                                      <i class="material-icons prefix">note</i>
                                                      <textarea id="icon_prefix2" class="materialize-textarea" name="nota_nts"><?=$ConsulModi['nts_nota']?></textarea>
                                                      <label for="icon_prefix2">Nota</label>
                                                    </div>   

                                                    <div class="input-field col s12">
                                                      <i class="material-icons prefix">note</i>
                                                      <textarea id="icon_prefix2" class="materialize-textarea" name="pie_nts"><?=$ConsulModi['nts_pie']?></textarea>
                                                      <label for="icon_prefix2">Pie de Nota</label>
                                                    </div>   

                                                  <div class="input-field col s12">
                                                    <input name="rotativo_nts" type="number" value="0" max="1" min="0" class="validate" value="<?=$ConsulModi['nts_isrotativa']?>">
                                                    <label for="rotativo_nts">Tipo de Rotativo</label>
                                                  </div>

                                                  <div class="input-field col s12">
                                                    <input name="url_nts" type="text" class="validate" value="<?=$ConsulModi['nts_url']?>">
                                                    <label for="url_nts">URL</label>
                                                  </div>

                                                    <div class="col s12">
                                                        <div class="file-field input-field">
                                                          <div class="btn">
                                                            <i class="material-icons">attach_file</i>
                                                            <span>Archivo</span>
                                                            <input type="file" name="Arch" value="<?=$ConsulModi['nts_archivo']?>" >
                                                          </div>
                                                          <div class="file-path-wrapper">
                                                            <input class="file-path validate" type="text" value="<?=$ConsulModi['nts_archivo']?>" >
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

                                                                    if( $_FILES["Arch"]["type"]=="application/pdf" || $_FILES["Arch"]["type"]=="application/msword")
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

                                                              #  echo "<br>No se ha subido ningun archivo";

                                                            }
                                                    ?>  

                                                    <div class="col s12">
                                                        <div class="file-field input-field">
                                                          <div class="btn">
                                                            <i class="material-icons">photo</i>
                                                            <span>IMAGEN</span>
                                                            
                                                            <input type="file" name="archiv" value="<?=$CONFIG['sitioimgnotas'].$ConsulModi['nts_imagen']?>"   >
                                                          </div>
                                                          <div class="file-path-wrapper">
                                                            <input class="file-path validate" name="path" type="text" value="<?=$ConsulModi['nts_imagen']?>">
                                                          </div>
                                                        </div>
                                                    </div>

                                                    <?php
                                                            # definimos la carpeta destino
                                                            $carpetaDestino="../files/notas/img/";
                                                            //$carpetaDestino= $CONFIG['sitioimgnotas'];
                                                            
                                                            # si hay algun archivo que subir

                                                            if($_FILES["archiv"]["name"])
                                                            { 
                                                                
                                                                    # si es un formato de imagen

                                                                    if($_FILES["archiv"]["type"]=="image/jpeg" || $_FILES["archiv"]["type"]=="image/pjpeg" || $_FILES["archiv"]["type"]=="image/gif" || $_FILES["archiv"]["type"]=="image/png" )
                                                                    {
                                                                        # si exsite la carpeta o se ha creado

                                                                        
                                                                            $origen=$_FILES["archiv"]["tmp_name"];

                                                                            $destino=$carpetaDestino.$_FILES["archiv"]["name"];
                                                                            
                                                                            # movemos el archivo

                                                                            if(move_uploaded_file($origen, $destino))
                                                                            {
                                                                                echo "<br>".$_FILES["archiv"]["name"]." movido correctamente";
                                                                            }else{
                                                                                echo "<br>No se ha podido mover el archivo: ".$_FILES["archiv"]["name"];
                                                                            }

                                                                        

                                                                    }else{
                                                                        echo "<br>".$_FILES["archiv"]["name"]." - NO es imagen jpg";
                                                                    }
                                                                
                                                            }else{

#                                                                echo "<br>No se ha subido ninguna imagen";

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



                                        <!--div class="form-main">
                                            <form class="form" target="updatenota" method="POST" action="<?=$CONFIG['sitio']?>modificarnota.php">
                                            	<input type="hidden" name="p" value="difusion" class="feedback-input">
		  										<input type="hidden" name="j" value="notas" class="feedback-input">      
                                                <input type="hidden" name="k" value="consulta" class="feedback-input">                                      

                                                <p >
                                                    <input name="id_nts" type="hidden" class="feedback-input" placeholder="id" value="<?=$_POST['nts_id']?>" />
                                                </p>
                                                
                                                <p >
                                                    <input name="fecha_nts" type="text" class="feedback-input" placeholder="FECHA" value="<?=$_POST['nts_fecha']?>" required />
                                                </p>

                                                <p >
                                                    <input name="ptitulo_nts" type="text" class="feedback-input" placeholder="TITULO PRINCIPAL" value="<?=$ConsulModi['nts_ptitulo']?>" required/>
                                                </p>

                                                <p>
                                                    <input name="titulo_nts" type="text" class="feedback-input" placeholder="TITULO" value="<?=$ConsulModi['nts_titulo']?>" required/>
                                                </p>
                                                
                                                <p>
                                                    <textarea name="descripcioncorta_nts" rows="5" class="feedback-input" placeholder="DESCRIPCION CORTA" required> <?=$ConsulModi['nts_descripcioncorta']?>
                                                    </textarea>
                                                </p>
                                                
                                                <p>
                                                    <textarea name="descripcion_nts" rows="5" class="feedback-input" placeholder="DESCRIPCION" required > <?=$ConsulModi['nts_descripcion']?>
                                                    </textarea>
                                                </p>

                                                <p>
                                                    <textarea name="descripcioninterior_nts" rows="5" class="feedback-input" placeholder="DESCRIPCION INTERIOR" > <?=$ConsulModi['nts_descinteriorcorta']?>
                                                        
                                                    </textarea>
                                                </p>

                                                <p>
                                                    <textarea name="nota_nts" class="feedback-input" rows="5" placeholder="NOTA" required ><?=$ConsulModi['nts_nota']?>
                                                        
                                                    </textarea>
                                                </p>

                                                <p>
                                                    <textarea name="pie_nts" class="feedback-input" rows="5" placeholder="PIE DE NOTA" > <?=$ConsulModi['nts_pie']?>
                                                        
                                                    </textarea>
                                                </p>
                                                <p >
                                                    <input name="imagen_nts" type="text" class="feedback-input" placeholder="IMAGEN" required value="<?=$ConsulModi['nts_imagen']?>"/>
                                                </p>

                                                <p >
                                                    <input name="rotativo_nts" type="number" max="1" min="0" class="feedback-input"  placeholder="ROTATIVO" value="<?=$ConsulModi['nts_isrotativa']?>" />
                                                </p>

                                                <p >
                                                    <input name="archivo_nts" type="text" class="feedback-input"  placeholder="ARCHIVO" value="<?=$ConsulModi['nts_archivo']?>" />
                                                </p>

                                                <p >
                                                    <input name="url_nts" type="text"  class="feedback-input"  placeholder="URL" value="<?=$ConsulModi['nts_url']?>"/>
                                                </p>

                                                <div class="submit">
                                                    <input type="submit" value="Enviar" class="form-button" />

                                                </div>
                                            </form>
                                        </div>-->

                                    </div>
                                </div>
                            </section>
                            <iframe name="updatenota" height="0" width="0"></iframe>
	

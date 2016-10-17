    <?php
            require_once($CONFIG['pathinclude']."config/cx.php");
            require_once($CONFIG['pathinclude']."cls/notas.php");
            $objConMod = new notas;
            $ConsulModi = $objConMod->consultarnotaModif($_POST['nts_id']);
            //var_dump($ConsulModi['nts_fecha']);
    ?>
    <section class="services-style-3 main-contain">
 	 	
		<div  class="container">
          <div class=" col-md-11 col-sm-4 col-xs-12" style="align-items: center; text-align: center;" align="center">
                <h2>Modificar Notas</h2>   <!-- action="<?=$CONFIG['sitio']?>insertarlink.php" -->
                                        <div class="form-main">
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
                                        </div>

                                    </div>
                                </div>
                            </section>
                            <iframe name="updatenota" height="0" width="0"></iframe>
	

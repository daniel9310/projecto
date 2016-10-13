    <section class="services-style-3 main-contain">
 	 	
		<div  class="container">
          <div class=" col-md-11 col-sm-4 col-xs-12" style="align-items: center; text-align: center;" align="center">
                <h2>Agregar Notas</h2>   <!-- action="<?=$CONFIG['sitio']?>insertarlink.php" -->
                                        <div class="form-main">
                                            <form class="form"  method="POST">
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
                                                    <input name="imagen_nts" type="text" class="feedback-input" placeholder="IMAGEN" " />
                                                </p>

                                                <p >
                                                    <input name="rotativo_nts" type="number" max="1" min="0" class="feedback-input"  placeholder="ROTATIVO" />
                                                </p>

                                                <p >
                                                    <input name="archivo_nts" type="text" class="feedback-input"  placeholder="ARCHIVO" />
                                                </p>

                                                <p >
                                                    <input name="url_nts" type="text"  class="feedback-input"  placeholder="URL" />
                                                </p>


                                                <div class="submit">
                                                    <input type="submit" value="Enviar" class="form-button" />

                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </section>

	

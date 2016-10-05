<section class="services-style-3 main-contain">
 	 	
		<div class="container">
          <div class=" col-md-11 col-sm-4 col-xs-12" style="align-items: center; text-align: center;" align="center">
                <h2>Agregar Usuarios</h2>   
                                        <div class="form-main">
                                            <form class="form"  method="POST">
                                            	<input type="hidden" name="p" value="usuarios" class="feedback-input">
		  										<input type="hidden" name="j" value="agregar" class="feedback-input">
                                                
                                               <!-- <p>
                                                    <input name="idusr" type="number" max="100"  min="0" class="feedback-input" id="idusr" placeholder="ID DE USUARIO" />
                                                </p> -->

                                                <p >
                                                    <input name="name" type="text" class="feedback-input" placeholder="NOMBRE" id="name" />
                                                </p>

                                                <p >
                                                    <input name="lastname" type="text" class="feedback-input" placeholder="APELLIDO" id="lastname" />
                                                </p>

                                                <p>
                                                    <input name="usrname" type="text" class="feedback-input" placeholder="NOMBRE DE USUARIO" id="usrname" />
                                                </p>

                                                <p >
                                                    <input name="password" type="password" class="feedback-input" placeholder="CONTRASEÑA" id="password" />
                                                </p>

                                                <p >
                                                    <input name="perfil" type="text" class="feedback-input" id="perfil" placeholder="PERFIL" />
                                                </p>

                                                <p >
                                                    <input name="tipo" type="number" max="6" maxlength="2" min="1" class="feedback-input" id="tipo" placeholder="TIPO DE USUARIO" />
                                                </p>

                                                <div class="submit">
                                                    <input type="submit" value="Submit" class="form-button" />

                                                </div>
                                            </form>
                                            <!-- <iframe src="<?=$CONFIG['sitio']?>Modificarlink.php " id="Modicar" name="Modifi" style="height: 0px; width: 0px;"></iframe> -->
                                        </div>

                                    </div>
                                </div>
                            </section>
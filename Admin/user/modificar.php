    <?php
            require_once($CONFIG['pathinclude']."config/cx.php");
            require_once($CONFIG['pathinclude']."cls/usuario.php");
            $objUsr = new datos;
            $Modi = $objUsr->Consultar_usuario($_POST['id_usr']); 
    ?>
    <section class="services-style-3 main-contain">
 	 	
		<div  class="container">
          <div class=" col-md-11 col-sm-4 col-xs-12" style="align-items: center; text-align: center;" align="center">
                <h2>Modificar Usuarios</h2>   
                                       <!-- <div class="form-main">
                                            <form target="update" method="POST" action="<?=$CONFIG['sitio']?>Modificarlink.php" class="form">
                                                <input type="hidden" name="p" value="usuarios" class="feedback-input">
                                                <input type="hidden" name="j" value="consulta" class="feedback-input">
                                                
                                               <p>
                                                    <input name="idusuario" type="number" max="100"  min="0" class="feedback-input" id="idusr" placeholder="ID DE USUARIO"  value="<?=$_POST['id_usr']?>" />
                                                </p> 

                                                <p >
                                                    <input name="named" type="text" class="feedback-input" placeholder="NOMBRE" id="name" value="<?=$Modi['NOMBRE']?>" required/>
                                                </p>

                                                <p >
                                                    <input name="lastname" type="text" class="feedback-input" placeholder="APELLIDO" id="lastname" value="<?=$Modi['APELLIDO']?>" required/>
                                                </p>

                                                <p>
                                                    <input name="usrname" type="text" class="feedback-input" placeholder="NOMBRE DE USUARIO" id="usrname" value="<?=$Modi['USUARIO']?>" />
                                                </p>

                                                <p >
                                                    <input name="perfil" type="text" class="feedback-input" id="perfil" placeholder="PERFIL" value="<?=$Modi['PERFIL']?>" required/>
                                                </p>

                                                <p >
                                                    <input name="tipo" type="text" max="6" maxlength="2" min="1" class="feedback-input" id="tipo" placeholder="TIPO DE USUARIO" value="<?=$Modi['DEPARTAMENTO']?>" required/>
                                                </p>

                                                <div class="submit">
                                                    <input type="submit" value="Enviar" class="form-button" />

                                                </div>
                                            </form>
                                           
                                        </div>-->

                                        <div class="form-main" style="text-align: left; align-items: center;" align="center">
                                            <div class="row">
                                              <form class="col l12" target="update" method="POST" action="<?=$CONFIG['sitio']?>Modificarlink.php">
                                                <div class="row">
                                                  <input type="hidden" name="idusuario" id="idusr" placeholder="ID DE USUARIO"  value="<?=$_POST['id_usr']?>" >
                                                  <div class="input-field col s12">
                                                    <input id="nombre" type="text" class="validate" name="named" required value="<?=$Modi['NOMBRE']?>">
                                                    <label for="first_name">Nombre</label>
                                                  </div>

                                                  <div class="input-field col s12">
                                                    <input name="lastname" id="apellidos" type="text" class="validate" value="<?=$Modi['APELLIDO']?>">
                                                    <label for="last_name">Apellidos</label>
                                                  </div>                                                
                                               
                                                  <div class="input-field col s12">
                                                    <input name="usrname" id="nombre_usuario" type="text" class="validate" value="<?=$Modi['USUARIO']?>">
                                                    <label for="username">Nombre de usuario</label>
                                                  </div>                                              
                                                
                                                   <div class="input-field col s12">
                                                    <select name="perfil">
                                                      <option value="Administrador">Administrador</option>
                                                      <option value="Subir Notas">Subir Notas</option>
                                                      <option value="Usuario">Usuario</option>
                                                    </select>
                                                  </div>

                                                   <div class="input-field col s12">    
                                                    <select name="tipo">
                                                       <option value="<?=$Modi['TIPO']?>"  selected><?=$Modi['DEPARTAMENTO']?></option>
                                                                                
                                                    </select>
                                                    <label>Tipo de Usuario</label>
                                                  </div>
                                                 
                                                  <div align="center" class="col l12" style="align-items: center;">
                                                    <!--input type="submit" value="Enviar" class="form-button" /-->
                                                    <button class="btn waves-effect waves-light col l12" type="submit" name="action" >Enviar
                                                        <i class="material-icons "></i>
                                                      </button>
                                                </div>

                                              </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </section>
                            <iframe name="update" height="0" width="0" ></iframe>

	
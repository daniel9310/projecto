<?php 
    session_start();
    $vid = $_SESSION['id_usr'];
    $vnombre = $_POST['nombre'];
    $vdescripcion = $_POST['descripcion'];

    require_once($CONFIG['pathinclude']."config/cx.php");
    require_once($CONFIG['pathinclude']."cls/procedimientos.php");
    $objLeyIn = new leyes;
    $LeyIn = $objLeyIn->insertar_leyes($vid,$vnombre,$vdescripcion);
    if ($vid >0) {
        echo '<script type="text/javascript">
                          alert("Ley Guardada Satisfactoriamente");
                          window.location="Admin/paneladm.php?p=transparencia&j=unidades&k=Ley"                          
                          </script>';
    }else{
        echo '<script type="text/javascript">
                          alert("El Usuario Ingresado es Incorrecto");
                          window.location="Admin/paneladm.php?p=transparencia&j=unidades&k=Ley"                          
                          </script>';
    }

 ?>
 <section class="services-style-3 main-contain">
 	 	
		<div  class="container">
          <div class=" col-md-11 col-sm-4 col-xs-12" style="align-items: center; text-align: center;" align="center">
                <h2>Agregar Ley</h2>   
                                        <div class="form-main">
                                            <form class="form"  method="POST">
                                            	<input type="hidden" name="p" value="transparencia" class="feedback-input">
		  										<input type="hidden" name="j" value="unidades" class="feedback-input">                                
                                                <input type="hidden" name="k" value="Ley" class="feedback-input">
                                                
                                               <p>
                                                    <input name="idusr" type="hidden" max="100"  min="0" class="feedback-input" id="idusr" placeholder="ID DE USUARIO" />
                                                </p>                                                    

                                                <p >
                                                    <input name="nombre" type="text" class="feedback-input" placeholder="LEY" id="name" />
                                                </p>

                                                <p >
                                                <textarea name="descripcion" placeholder="DESCRIPCION DE LA LEY" ></textarea>
                                                
                                                <div class="submit">
                                                    <input type="submit" value="Enviar" class="form-button" />

                                                </div>
                                            </form>
                                            <!-- <iframe src="<?=$CONFIG['sitio']?>Modificarlink.php " id="Modicar" name="Modifi" style="height: 0px; width: 0px;"></iframe> -->
                                        </div>

                                    </div>
                                </div>
                            </section>

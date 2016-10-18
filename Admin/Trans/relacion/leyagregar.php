<?php
 	session_start();
    require_once("../../../include/config/config.php");
    require_once($CONFIG['pathinclude']."config/cx.php");
    require_once($CONFIG['pathinclude']."cls/transparencia.php");
    $objLey = new leyes; 
	 $V_leyidusr = $_POST['id_usr'];
                                $v_leytipo = $_POST['ley'];
                                $v_leydesc = $_POST['descripcionley'];
                                

                               if (isset($_POST['SubmitAgregar'])) {
                                  echo "<script >                                    
                                        document.getElementById('uno').style.display='block';                                    
                                   </script>"; 
                                   if (empty($v_leytipo) && empty($v_leydesc)) {
                                     echo '<script type="text/javascript">
                                                                          alert("Todos los Campos son Requeridos");
                                                                          window.parent.location="<?=$CONFIG[\'sitio\']?>Admin/paneladm.php?p=transparencia&j=leyes"
                                                                          </script>';
                                }else{
                                    $IngresarLey = $objLey->replace($v_leydesc,$v_leytipo,$V_leyidusr);
                                     echo '<script type="text/javascript">
                                                                          alert("Los Datos se Guardaron Satisfactoriamente");
                                                                          window.parent.location="Admin/paneladm.php?p=transparencia&j=leyes"
                                                                          </script>';

                                }
                                }
                               



 ?>
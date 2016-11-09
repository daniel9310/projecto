<?php 
  session_start();
  require_once("../../../include/config/config.php");
  require_once($CONFIG['pathinclude']."config/cx.php");
  require_once($CONFIG['pathinclude']."cls/pleno.php");  
  $objAct = new acuerdos;
  $v_expediente = $_POST['expedien'];
  $v_anio = $_POST['v_numanio'];
  $v_fecha = $_POST['fecha_lista'];
  $v_archivo = $_FILES["Arch"]["name"];
   
     if (empty( $v_archivo) && empty($v_anio) && empty($v_fecha)) {
       echo '<script type="text/javascript">
                                            alert("Todos los Campos son Requeridos");
                                                    window.parent.location="../../paneladm.php?p=pleno&j=listas&crud=create";
                                            </script>';
      }else{        
              $IngresarResol = $objAct->create($v_expediente, $v_archivo,$v_anio,$v_fecha); 
               echo '<script type="text/javascript"> 
                                                    alert("Los Datos se Guardaron Satisfactoriamente");
                                                    window.parent.location="../../paneladm.php?p=pleno&j=listas&crud=read";
                                                    </script>';                                                   
        }                      
?>
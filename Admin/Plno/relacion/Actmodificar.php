<?php 
  session_start();
  require_once("../../../include/config/config.php");
  require_once($CONFIG['pathinclude']."config/cx.php");
  require_once($CONFIG['pathinclude']."cls/pleno.php");  
  $objAct = new actas;
  $v_idacta = $_POST['id_acta'];
  $v_numeroacta = $_POST['numActa'];
  $v_Anio = $_POST['anioActa'];
  $v_fecha = $_POST['fecha_acta'];
  $v_archivo = $_FILES["Arch"]["name"];
   
     if (empty( $v_numeroacta) && empty($v_Anio) && empty($v_fecha)) {
       echo '<script type="text/javascript">
                                            alert("Todos los Campos son Requeridos");
                                                    window.parent.location="../../paneladm.php?p=pleno&j=acta&crud=create";
                                            </script>';
      }else{        
              $IngresarResol = $objAct->update($v_idacta,$v_fecha,$v_Anio,$v_archivo,$v_numeroacta); 
               echo '<script type="text/javascript"> 
                                                    alert("Los Datos se Guardaron Satisfactoriamente");
                                                    window.parent.location="../../paneladm.php?p=pleno&j=acta&crud=read";
                                                    </script>';                                                   
        }                   
?>
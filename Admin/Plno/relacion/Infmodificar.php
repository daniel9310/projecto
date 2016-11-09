<?php 
  session_start();
  require_once("../../../include/config/config.php");
  require_once($CONFIG['pathinclude']."config/cx.php");
  require_once($CONFIG['pathinclude']."cls/pleno.php");  
  $objRes = new informe;
  $v_idinf = $_POST['id_inf'];
  $v_descripcion = $_POST['descripcion_informe'];
  $v_Anio = $_POST['anio_inf']; 
  $v_archivo = $_FILES["Arch"]["name"];
  #$v_activo = $_POST['acti'];
   
     if (empty( $v_descripcion) && empty($v_Anio)) {
       echo '<script type="text/javascript">
                                            alert("Todos los Campos son Requeridos");
                                                    window.parent.location="../../paneladm.php?p=pleno&j=informe&crud=create";
                                            </script>';
      }else{        
              $IngresarResol = $objRes->update($v_idinf,$v_descripcion,$v_archivo,$v_Anio); 
               echo '<script type="text/javascript"> 
                                                    alert("Los Datos se Guardaron Satisfactoriamente");
                                                    window.parent.location="../../paneladm.php?p=pleno&j=informe&crud=read";
                                                    </script>';                                                   
        }                    
?>
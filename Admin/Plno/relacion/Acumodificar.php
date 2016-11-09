<?php 
  session_start();
  require_once("../../../include/config/config.php");
  require_once($CONFIG['pathinclude']."config/cx.php");
  require_once($CONFIG['pathinclude']."cls/pleno.php");  
  $objAcu = new acuerdos;
  $v_idacu = $_POST['id_Acu'];
  $v_expediente = $_POST['expedien'];
  $v_Anio = $_POST['v_numanio'];
  $v_fecha = $_POST['fecha_lista'];
  $v_archivo = $_FILES["Arch"]["name"];
  #$v_activo = $_POST['acti'];
   
     if ( empty($v_Anio) && empty($v_fecha)) {
       echo '<script type="text/javascript">
                                            alert("Todos los Campos son Requeridos");
                                                    window.parent.location="../../paneladm.php?p=pleno&j=listas&crud=create";
                                            </script>';
      }else{        
              $IngresarResol = $objAcu->update($v_idacu,$v_expediente, $v_archivo,$v_Anio,$v_fecha); 
               echo '<script type="text/javascript"> 
                                                    alert("Los Datos se Guardaron Satisfactoriamente");
                                                    window.parent.location="../../paneladm.php?p=pleno&j=listas&crud=read";
                                                    </script>';                                                   
        }                      
?>
<?php 
  session_start();
  require_once("../../../include/config/config.php");
  require_once($CONFIG['pathinclude']."config/cx.php");
  require_once($CONFIG['pathinclude']."cls/pleno.php");  
  $objCnv = new convocatorias;
  $v_convenio = $_POST['convenio'];
  $v_fecha = $_POST['fecha_cnv'];
  $v_archivo = $_FILES["Arch"]["name"];
  #$v_activo = $_POST['acti'];
   
     if (empty( $v_convenio) && empty($v_fecha) && empty($v_archivo)) {
       echo '<script type="text/javascript">
                                            alert("Todos los Campos son Requeridos");
                                                    window.parent.location="../../paneladm.php?p=pleno&j=convocatorias&crud=create";
                                            </script>';
      }else{        
              $Ingresar = $objCnv->create($v_fecha,$v_convenio, $v_archivo); 
               echo '<script type="text/javascript"> 
                                                    alert("Los Datos se Guardaron Satisfactoriamente");
                                                    window.parent.location="../../paneladm.php?p=pleno&j=convocatorias&crud=read";
                                                    </script>';                                                   
        }                      
?>
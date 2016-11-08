<?php 
  session_start();
  require_once("../../../include/config/config.php");
  require_once($CONFIG['pathinclude']."config/cx.php");
  require_once($CONFIG['pathinclude']."cls/pleno.php");  
  $objRes = new resoluciones;
  $v_idres = $_POST['id_rsl'];
  $v_expediente = $_POST['Expediente'];
  $v_SujetoObl = $_POST['SujetoOblig'];
  $v_Recurrente = $_POST['Recurrente'];
  $v_Anio = $_POST['AResolucion'];
  $v_fecha = $_POST['fecha_rsl'];
  $v_archivo = $_FILES["Arch"]["name"];
  #$v_activo = $_POST['acti'];
   
     if (empty( $v_expediente) && empty($v_Anio) && empty($v_fecha)) {
       echo '<script type="text/javascript">
                                            alert("Todos los Campos son Requeridos");
                                                    window.parent.location="../../paneladm.php?p=pleno&j=resoluciones&crud=create";
                                            </script>';
      }else{        
              $IngresarResol = $objRes->update($v_idres,$v_expediente,$v_SujetoObl, $v_Recurrente,$v_fecha, $v_archivo,$v_Anio); 
               echo '<script type="text/javascript"> 
                                                    alert("Los Datos se Guardaron Satisfactoriamente");
                                                    window.parent.location="../../paneladm.php?p=pleno&j=resoluciones&crud=read";
                                                    </script>';                                                   
        }                      
?>
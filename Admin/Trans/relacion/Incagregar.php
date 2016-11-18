<?php 
  session_start();
  require_once("../../../include/config/config.php");
  require_once($CONFIG['pathinclude']."config/cx.php");
  require_once($CONFIG['pathinclude']."cls/transparencia.php");  
  $objInc = new incisos;
  $busquedaInc = $objInc->read(1);
  $v_fkfracc = $_POST['fkfrac'];
  $v_numinc = $_POST['Numinc'];
  $v_desinc = $_POST['incdesc'];
  $v_activo = $_POST['actiInc'];
  $confirmacion = 0;
  #$v_activo = $_POST['acti'];


  foreach ($busquedaInc as $key => $value) {
   if ($v_fkfracc == $value['fk_idfrac_inc'] && $v_numinc == $value['num_inc']) {
      $confirmacion=1;
   }
   #echo $value;
  }

   if ($confirmacion != 0) {
     echo '<script type="text/javascript">
                                            alert("El Numero de Inciso Ya Existe");
                                              window.parent.location="../../paneladm.php?p=transparencia&j=incisos&crud=create";     
                                            </script>';
   }else{
     if (empty($v_fkfracc) && empty($v_numinc) && empty($v_desinc)) {
       echo '<script type="text/javascript">
                                            alert("Todos los Campos son Requeridos");
                                                    window.parent.location="../../paneladm.php?p=transparencia&j=incisos&crud=create";
                                            </script>';
      }else{
            $IngresarInc = $objInc->create($v_desinc,$v_numinc, $v_fkfracc, $v_activo);        
               echo '<script type="text/javascript"> 
                                                    alert("Los Datos se Guardaron Satisfactoriamente");
                                                    window.parent.location="../../paneladm.php?p=transparencia&j=incisos&crud=read";
                                                    </script>';                                
         
        } 
    }   
?>
<?php 
  session_start();
  require_once("../../../include/config/config.php");
  require_once($CONFIG['pathinclude']."config/cx.php");
  require_once($CONFIG['pathinclude']."cls/transparencia.php");  
  $objFrac = new fracciones;
   $busquedaInc = $objFrac->read(1);
  $v_fkart = $_POST['fkArt'];
  $v_numfrac = $_POST['Numfracc'];
  $v_desfrac = $_POST['fraccdesc'];
  $v_activo = $_POST['actiFracc'];
  $confirmacion = 0;
  #$v_activo = $_POST['acti'];


  foreach ($busquedaInc as $key => $value) {
   if ($v_fkart == $value['fk_idart_frac'] && $v_numfrac == $value['num_frac']) {
      $confirmacion=1;
   }
   #echo $value;
  }

   if ($confirmacion != 0) {
    echo '<script type="text/javascript">
                                            alert("El Numero de Fraccion Ya Existe");
                                              window.parent.location="../../paneladm.php?p=transparencia&j=fraciones&crud=create";   
                                            </script>';
   }else{
     if (empty($v_fkart) && empty($v_numfrac) && empty($v_desfrac)) {
       echo '<script type="text/javascript">
                                            alert("Todos los Campos son Requeridos");
                                                    window.parent.location="../../paneladm.php?p=transparencia&j=fraciones&crud=create";
                                            </script>';
      }else{
            $IngresarFrac = $objFrac->create($v_desfrac,$v_numfrac, $v_fkart, $v_activo);        
               echo '<script type="text/javascript"> 
                                                    alert("Los Datos se Guardaron Satisfactoriamente");
                                                    window.parent.location="../../paneladm.php?p=transparencia&j=fraciones&crud=read";
                                                    </script>';                                
         
        }                      
        

      
  
 


?>
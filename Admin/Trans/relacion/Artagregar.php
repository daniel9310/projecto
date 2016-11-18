<?php 
  session_start();
  require_once("../../../include/config/config.php");
  require_once($CONFIG['pathinclude']."config/cx.php");
  require_once($CONFIG['pathinclude']."cls/transparencia.php");  
  $objArt = new articulos;
  $busquedaInc = $objArt->read(1);
  $v_ley = $_POST['fkley'];
  $v_art = $_POST['idarticulo'];
  $v_descart = $_POST['artdesc'];
  $v_activo = $_POST['actiArt'];
  $confirmacion = 0;
  #$v_activo = $_POST['acti'];

   foreach ($busquedaInc as $key => $value) {
   if ($v_ley == $value['fk_idleyes_art'] && $v_art == $value['num_art']) {
      $confirmacion=1;
   }
   #echo $value;
  }

   if ($confirmacion != 0) {
   echo '<script type="text/javascript">
                                            alert("El Numero de Articulo Ya Existe");
                                               window.parent.location="../../paneladm.php?p=transparencia&j=articulos&crud=create";     
                                            </script>';
   }else{
     if (empty($v_ley) && empty($v_art) && empty($v_descart)) {
       echo '<script type="text/javascript">
                                            alert("Todos los Campos son Requeridos");
                                                    window.parent.location="../../paneladm.php?p=transparencia&j=articulos&crud=create";
                                            </script>';
      }else{        
              $IngresarArt = $objArt->create($v_descart,$v_art, $v_ley,$v_activo); 
               echo '<script type="text/javascript"> 
                                                    alert("Los Datos se Guardaron Satisfactoriamente");
                                                    window.parent.location="../../paneladm.php?p=transparencia&j=articulos&crud=read";
                                                    </script>';

                                                   
         
        }                      
    }  

      
  
 


?>
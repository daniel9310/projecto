<?php
$link = mysql_connect('localhost', 'root', '')
    or die('No se pudo conectar: ' . mysql_error());
mysql_select_db('istai') or die('No se pudo seleccionar la base de datos');

$query="SELECT id_inc,num_inc FROM incisos WHERE fk_idfrac_inc=".$_REQUEST["fraccion"]." ORDER BY num_inc";
$result = mysql_query($query)
        or die("Ocurrio un error en la consulta SQL");
mysql_close();
echo '<option value="" disabled selected>Elige el Inciso</option>';
while (($fila = mysql_fetch_array($result)) != NULL) {
    if ($fila== NULL) {
		 echo '<option >'."No hay Elementos".'</option>';
	}else{echo '<option value="'.$fila["id_inc"].'">'.$fila["num_inc"].'</option>';}
    
}
// Liberar resultados
mysql_free_result($result);

// Cerrar la conexión
mysql_close($link);

?>



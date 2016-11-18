<?php
$link = mysql_connect('localhost', 'root', '')
    or die('No se pudo conectar: ' . mysql_error());
mysql_select_db('istai') or die('No se pudo seleccionar la base de datos');

$query="SELECT id_art,num_art FROM articulos WHERE fk_idleyes_art=".$_REQUEST["ley"]." ORDER BY num_art";
$result = mysql_query($query)
        or die("Ocurrio un error en la consulta SQL");
mysql_close();
echo '<option value="" disabled selected>Elige el Articulo</option>';
while (($fila = mysql_fetch_array($result)) != NULL) {
	if ($fila== NULL) {
		 echo '<option >'."No hay Elementos".'</option>';
	}else{
		echo '<option value="'.$fila["id_art"].'">'.$fila["num_art"].'</option>';
	}
    
}
// Liberar resultados
mysql_free_result($result);

// Cerrar la conexión
mysql_close($link);

?>



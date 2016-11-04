<?php 
/*session_start();
    require_once("../include/config/config.php");
    require_once($CONFIG['pathinclude']."config/cx.php");
    	global $link;
		$sql = "CALL Ley_ver('%1\$s')";
		$sql = sprintf($sql, $idusr);
		$result = $link->query($sql);
		$resultado = array();
		while (($fila = mysqli_fetch_assoc($result)) != NULL) {
		 $resultado[] = '<option value="'.$fila["id_leyes"].'">'.$fila["tipo"].'</option>';
		}
		$link->next_result();
		return $resultado;*/

		$link = mysql_connect('localhost', 'root', '')
    or die('No se pudo conectar: ' . mysql_error());
mysql_select_db('istai') or die('No se pudo seleccionar la base de datos');
$query="SELECT id_leyes,tipo FROM leyes where activo = 1 ORDER BY tipo";
$result = mysql_query($query)
        or die("Ocurrio un error en la consulta SQL");
mysql_close();
echo '<option value="" disabled selected>Elige la Ley</option>';
while (($fila = mysql_fetch_array($result)) != NULL) {
    echo '<option value="'.$fila["id_leyes"].'">'.$fila["tipo"].'</option>';
}
// Liberar resultados
mysql_free_result($result);

// Cerrar la conexión
mysql_close($link);
 ?>

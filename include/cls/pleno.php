<?php  

/**
* 
*/
class resoluciones
{
	
	function create($v_expediente, $v_sobligado,$v_recurrente,$v_fecha,$v_archivo,$v_anio)
	{
		global $link;
		$sql = "CALL Resolucion_agregar('%1\$s','%2\$s','%3\$s','%4\$s','%5\$s','%6\$s')";
		$sql = sprintf($sql, $v_expediente, $v_sobligado,$v_recurrente,$v_fecha,$v_archivo,$v_anio);
		$result = $link->query($sql);
		$link->next_result();			
		return $result;
	}
	function read()
	{
		global $link;
		$sql = "CALL Resolucion_consulta() ";
		$sql = sprintf($sql);
		$result = $link->query($sql);
		$resultado = array();
		while( $row = mysqli_fetch_assoc($result) ){
		$resultado[] = $row;
		}
		$link->next_result();			
		return $resultado;
	}
	function update($v_idresol,$v_expediente, $v_sobligado,$v_recurrente,$v_fecha,$v_archivo,$v_anio)
	{
		global $link;
		$sql = "CALL Resolucion_modificar('%1\$s','%2\$s','%3\$s','%4\$s','%5\$s','%6\$s','%7\$s')";
		$sql = sprintf($sql,$v_idresol,$v_expediente, $v_sobligado,$v_recurrente,$v_fecha,$v_archivo,$v_anio);
		$result = $link->query($sql);	
		$link->next_result();		
		return $result;
	}
	function delete($v_idresol)
	{
		global $link;
		$sql = "CALL Resolucion_Borrar('%1\$s')";
		$sql = sprintf($sql, $v_idresol);
		$result = $link->query($sql);			
		$link->next_result();			
		return $result;							
	}
	function readid($v_idresol)
	{
		global $link;
		$sql = "CALL Resolucion_ver('%1\$s')";
		$sql = sprintf($sql, $v_idresol);
		$result = $link->query($sql);
		$resultado = array();
		while( $row = mysqli_fetch_assoc($result) ){
			$resultado =$row;
		}
		$link->next_result();
		return $resultado;
	}
}

?>
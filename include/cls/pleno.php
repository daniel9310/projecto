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

class convocatorias
{
	
	function create($v_fecha,$v_tipo,$v_archivo)
	{
		global $link;
		$sql = "CALL Convocatoria_agregar('%1\$s','%2\$s','%3\$s')";
		$sql = sprintf($sql, $v_fecha,$v_tipo,$v_archivo);
		$result = $link->query($sql);
		$link->next_result();			
		return $result;
	}
	function read()
	{
		global $link;
		$sql = "CALL Convocatoria_consulta() ";
		$sql = sprintf($sql);
		$result = $link->query($sql);
		$resultado = array();
		while( $row = mysqli_fetch_assoc($result) ){
		$resultado[] = $row;
		}
		$link->next_result();			
		return $resultado;
	}
	function update($v_idcnv,$v_fecha,$v_tipo,$v_archivo)
	{
		global $link;
		$sql = "CALL Convocatoria_modificar('%1\$s','%2\$s','%3\$s','%4\$s')";
		$sql = sprintf($sql,$v_idcnv,$v_fecha,$v_tipo,$v_archivo);
		$result = $link->query($sql);	
		$link->next_result();		
		return $result;
	}
	function delete($v_idcnv)
	{
		global $link;
		$sql = "CALL Convocatoria_borrar('%1\$s')";
		$sql = sprintf($sql, $v_idcnv);
		$result = $link->query($sql);			
		$link->next_result();			
		return $result;							
	}
	function readid($v_idcnv)
	{
		global $link;
		$sql = "CALL Convocatoria_ver('%1\$s')";
		$sql = sprintf($sql, $v_idcnv);
		$result = $link->query($sql);
		$resultado = array();
		while( $row = mysqli_fetch_assoc($result) ){
			$resultado =$row;
		}
		$link->next_result();
		return $resultado;
	}
}

class actas
{
	
	function create($v_fecha,$v_numani,$v_archivo,$v_numact)
	{
		global $link;
		$sql = "CALL Acta_agregar('%1\$s','%2\$s','%3\$s','%4\$s')";
		$sql = sprintf($sql, $v_fecha,$v_numani,$v_archivo,$v_numact);
		$result = $link->query($sql);
		$link->next_result();			
		return $result;
	}
	function read()
	{
		global $link;
		$sql = "CALL Acta_consulta() ";
		$sql = sprintf($sql);
		$result = $link->query($sql);
		$resultado = array();
		while( $row = mysqli_fetch_assoc($result) ){
		$resultado[] = $row;
		}
		$link->next_result();			
		return $resultado;
	}
	function update($v_idacta,$v_fecha,$v_numani,$v_archivo,$v_numact)
	{
		global $link;
		$sql = "CALL Acta_modificar('%1\$s','%2\$s','%3\$s','%4\$s','%5\$s')";
		$sql = sprintf($sql,$v_idacta,$v_fecha,$v_numani,$v_archivo,$v_numact);
		$result = $link->query($sql);	
		$link->next_result();		
		return $result;
	}
	function delete($v_idacta)
	{
		global $link;
		$sql = "CALL Acta_borrar('%1\$s')";
		$sql = sprintf($sql, $v_idacta);
		$result = $link->query($sql);			
		$link->next_result();			
		return $result;							
	}
	function readid($v_idacta)
	{
		global $link;
		$sql = "CALL Acta_ver('%1\$s')";
		$sql = sprintf($sql, $v_idacta);
		$result = $link->query($sql);
		$resultado = array();
		while( $row = mysqli_fetch_assoc($result) ){
			$resultado =$row;
		}
		$link->next_result();
		return $resultado;
	}
}

class acuerdos
{
	
	function create($v_expedientes,$v_archivo,$v_anio,$v_fecha)
	{
		global $link;
		$sql = "CALL Acuerdo_agregar('%1\$s','%2\$s','%3\$s','%4\$s')";
		$sql = sprintf($sql, $v_expedientes,$v_archivo,$v_anio,$v_fecha);
		$result = $link->query($sql);
		$link->next_result();			
		return $result;
	}
	function read()
	{
		global $link;
		$sql = "CALL Acuerdo_consulta() ";
		$sql = sprintf($sql);
		$result = $link->query($sql);
		$resultado = array();
		while( $row = mysqli_fetch_assoc($result) ){
		$resultado[] = $row;
		}
		$link->next_result();			
		return $resultado;
	}
	function update($v_idacuerdo,$v_expedientes,$v_archivo,$v_anio,$v_fecha)
	{
		global $link;
		$sql = "CALL Acuerdo_modificar('%1\$s','%2\$s','%3\$s','%4\$s','%5\$s')";
		$sql = sprintf($sql,$v_idacuerdo,$v_expedientes,$v_archivo,$v_anio,$v_fecha);
		$result = $link->query($sql);	
		$link->next_result();		
		return $result;
	}
	function delete($v_idacuerdo)
	{
		global $link;
		$sql = "CALL Acuerdo_borrar('%1\$s')";
		$sql = sprintf($sql, $v_idacuerdo);
		$result = $link->query($sql);			
		$link->next_result();			
		return $result;							
	}
	function readid($v_idacuerdo)
	{
		global $link;
		$sql = "CALL Acuerdo_ver('%1\$s')";
		$sql = sprintf($sql, $v_idacuerdo);
		$result = $link->query($sql);
		$resultado = array();
		while( $row = mysqli_fetch_assoc($result) ){
			$resultado =$row;
		}
		$link->next_result();
		return $resultado;
	}
}

class informe
{
	
	function create($v_informe,$v_archivo,$v_anio)
	{
		global $link;
		$sql = "CALL Informe_agregar('%1\$s','%2\$s','%3\$s')";
		$sql = sprintf($sql,$v_informe,$v_archivo,$v_anio);
		$result = $link->query($sql);
		$link->next_result();			
		return $result;
	}
	function read()
	{
		global $link;
		$sql = "CALL Informe_consulta() ";
		$sql = sprintf($sql);
		$result = $link->query($sql);
		$resultado = array();
		while( $row = mysqli_fetch_assoc($result) ){
		$resultado[] = $row;
		}
		$link->next_result();			
		return $resultado;
	}
	function update($v_idinf,$v_informe,$v_archivo,$v_anio)
	{
		global $link;
		$sql = "CALL Informe_modificar('%1\$s','%2\$s','%3\$s','%4\$s')";
		$sql = sprintf($sql,$v_idinf,$v_informe,$v_archivo,$v_anio);
		$result = $link->query($sql);	
		$link->next_result();		
		return $result;
	}
	function delete($v_idinf)
	{
		global $link;
		$sql = "CALL Informe_borrar('%1\$s')";
		$sql = sprintf($sql, $v_idinf);
		$result = $link->query($sql);			
		$link->next_result();			
		return $result;							
	}
	function readid($v_idinf)
	{
		global $link;
		$sql = "CALL Informe_ver('%1\$s')";
		$sql = sprintf($sql, $v_idinf);
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
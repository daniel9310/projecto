<?php
// Consulta notas rotativas y todas las notas de Difusión 

class notas{
	
	function consultarNotas($tipo){
		global $link;
		$sql = "CALL consultarNotas(%1\$s) ";
		$sql = sprintf($sql, $tipo);
		$result = $link->query($sql);
		$resultado = array();
		while( $row = mysqli_fetch_assoc($result) ){
			$resultado[] = $row;
		}
		return $resultado;
	}
	
	function detalleNota($id_nota){
			
		
	}
	
	
}


?>
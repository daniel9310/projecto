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
	
	function agregarnota($fecha,$ptitulo, $titulo, $descripcioncorta, $descripcion, $descripcioninterior, $nota, $pie, $imagen){


	}

	function borrarnota($id){
			global $link;
			$sql = "CALL Notas_borrar('%1\$s')";
			$sql = sprintf($sql, $id);
			echo $sql;
			$result = $link->query($sql);
			/*$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
				$resultado = $row;
			}*/
			return $result;		
	}

	function consultanota($vactivo){

			global $link;
			$sql = "CALL Notas_consulta('%1\$s')";
			$sql = sprintf($sql, $vactivo);
			$result = $link->query($sql);
			$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
				$resultado[]=$row;
				//array_push($resultado,$row);
			}
			return $resultado;
		

	}

	function consultarnotaModif($idnts){

			global $link;
			$sql = "CALL Notas_consulMod('%1\$s')";
			$sql = sprintf($sql, $idnts);
			$result = $link->query($sql);
			$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
				$resultado=$row;
				//array_push($resultado,$row);
			}
			//print_r($resultado);
			return $resultado;
		

	}
}


?>
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
			$link->next_result();
		return $resultado;
	}		
	
	function agregarnota($fecha,$ptitulo, $titulo,$rotativa, $descripcioncorta, $descripcion, $descripcioninterior, $nota, $pie, $imagen,$archivo,$url){
		global $link;
			$sql = "CALL Notas_agregar('%1\$s','%2\$s','%3\$s','%4\$s','%5\$s','%6\$s','%7\$s','%8\$s','%9\$s','%10\$s','%11\$s','%12\$s')";
			$sql = sprintf($sql, $fecha,$ptitulo, $titulo,$rotativa, $descripcioncorta, $descripcion, $descripcioninterior, $nota, $pie, $imagen,$archivo,$url);
			$result = $link->query($sql);
			$link->next_result();
			return $result;

	}

	function borrarnota($id){
			global $link;
			$sql = "CALL Notas_borrar('%1\$s')";
			$sql = sprintf($sql, $id);
			$result = $link->query($sql);
			/*$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
				$resultado = $row;
			}*/
			$link->next_result();
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
			$link->next_result();
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
			$link->next_result();
			return $resultado;
		

	}

	function modificarNota($idnota,$fecha,$ptitulo, $titulo,$rotativa, $descripcioncorta, $descripcion, $descripcioninterior, $nota, $pie, $imagen,$archivo,$url){
		global $link;
			$sql = "CALL Notas_modificar('%1\$s','%2\$s','%3\$s','%4\$s','%5\$s','%6\$s','%7\$s','%8\$s','%9\$s','%10\$s','%11\$s','%12\$s','%13\$s')";
			$sql = sprintf($sql,$idnota,$fecha,$ptitulo, $titulo,$rotativa, $descripcioncorta, $descripcion, $descripcioninterior, $nota, $pie, $imagen,$archivo,$url);
			$result = $link->query($sql);	
			$link->next_result();		
			return $result;
	}
}


?>
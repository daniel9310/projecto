<?php 
	
	class Datos
	{
		
		function ingresar_datos($nombreusr,$passwd, $perfil, $nombre, $apellido,  $tipousr )
		{
			global $link;
			$sql = "CALL Usuario_insertar('%1\$s','%2\$s','%3\$s','%4\$s','%5\$s','%6\$s')";
			$sql = sprintf($sql, $nombreusr, $passwd, $perfil,$nombre, $apellido, $tipousr);
			$result = $link->query($sql);
			$resultado = array(); 	
			
			//while( $row = mysqli_fetch_assoc($result) ){
			//	var_dump($row);
			//	$resultado = $row;
			//}
			//$result->close();
			//$link->next_result();
			return $result;
		}

		function Borrar_datos($idusr){
			global $link1;
			$sql = "CALL Usuario_borrar('%1\$s')";
			$sql = sprintf($sql, $idusr);
			echo $sql;
			$result = $link->query($sql);
			$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
				$resultado = $row;
			}
			return $resultado;

		}

		function Consultar_datos($tipo){
			global $link;
			$sql = "CALL Usuario_consulta('%1\$s')";
			$sql = sprintf($sql, $tipo);
			$result = $link->query($sql);
			$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
				$resultado[]=$row;
				//array_push($resultado,$row);
			}
			return $resultado;
		}

		function Consultar_usuario($idusr){
			global $link;
			$sql = "CALL Usuario_ver('%1\$s')";
			$sql = sprintf($sql, $idusr);
			$result = $link->query($sql);
			$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
				$resultado=$row;
				//array_push($resultado,$row);
			}
			return $resultado;			
		}

		function Modificar_datos($idusr,$nombreusr, $nombre, $apellido, $passwd, $perfil, $tipousr )
		{
			global $link3;
			$sql = "CALL Usuario_ingresar('%1\$s','%2\$s','%3\$s','%4\$s','%5\$s','%6\$s','%7\$s')";
			$sql = sprintf($sql,$idusr, $nombreusr, $passwd, $perfil,$nombre, $apellido,   $tipousr);
			echo $sql;
			$result = $link3->query($sql);
			$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
				$resultado = $row;
			}
			return $resultado;
		}
	}

 ?>
<?php 
	
	class Datos
	{
		
		function ingresar_datos($idusr, $nombreusr, $nombre, $apellido, $passwd, $perfil, $tipousr )
		{
			global $link;
			$sql = "CALL Ingresar_usr('%1\$s','%2\$s','%3\$s','%4\$s','%5\$s','%6\$s','%7\$s')";
			$sql = sprintf($sql, $idusr, $nombreusr, $nombre, $apellido, $passwd, $perfil, $tipousr);
			echo $sql;
			$result = $link->query($sql);
			$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
				$resultado = $row;
			}
			return $resultado;
		}
		function Borrar_datos(){


		}
		function Consultar_datos(){

		}

		function Conectar_login($usuario, $pass){
			global $link;
			$sql = "CALL Login_ingresar('%1\$s','%2\$s') ";
			$sql = sprintf($sql, $usuario, $pass);
			echo $sql;
			$result = $link->query($sql);
			$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
				$resultado = $row;
			}
			$this->register_Vars($resultado);
			return $resultado;
		}
	}

 ?>
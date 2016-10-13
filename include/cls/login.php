<?php 
	
	class login{

		function Conectar_login($usuario, $pass){
			global $link;
			$sql = "CALL Login_ingresar('%1\$s','%2\$s') ";
			$sql = sprintf($sql, $usuario, $pass);
			echo $sql;
			$result = $link->query($sql);
			$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
				$resultado[] = $row;
			}
			//$this->register_Vars($resultado);
			return $resultado;
		}


		function register_Vars($datosuser){
			global $link;
			print_r($datosuser);
			$_SESSION['id_usr'] = $datosuser['id_usr'];
			$_SESSION['usr_username'] = $datosuser['usr_username'];
			$_SESSION['fk_típousuario'] = $datosuser['fk_típousuario'];
			$_SESSION['usr_nombre'] = $datosuser['usr_nombre'].' '.$datosuser['usr_apellido'];
			$_SESSION['usr_perfil'] = $datosuser =['usr_perfil'];
			return true;	
		}
		
		function Mostrar_Datos(){

		}
	}

 ?>
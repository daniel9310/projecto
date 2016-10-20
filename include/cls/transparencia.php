<?php 

	/**
	* 
	*/
	class leyes
	{
		function read($idley){
			global $link;
			$sql = "CALL Ley_ver('%1\$s')";
			$sql = sprintf($sql, $idley);
			$result = $link->query($sql);
			$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
				$resultado =$row;
				//array_push($resultado,$row);
			}
			return $resultado;	
		}

		function consult($idusr)
		{
			global $link;
			$sql = "CALL Ley_consulta(%1\$s) ";
			$sql = sprintf($sql, $idusr);
			$result = $link->query($sql);
			$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
			$resultado[] = $row;
			}
			return $resultado;
		}
		function replace($descripcion, $tipo, $idusr)
		{
			global $link;
			$sql = "CALL Ley_insertar('%1\$s','%2\$s','%3\$s')";
			$sql = sprintf($sql, $descripcion, $tipo, $idusr);
			echo $sql;
			$result = $link->query($sql);
			return $result;
		}
		/*function update(argument)
		{
			global $link;
			$sql = "CALL Notas_modificar('%1\$s','%2\$s','%3\$s','%4\$s','%5\$s','%6\$s','%7\$s','%8\$s','%9\$s','%10\$s','%11\$s','%12\$s','%13\$s')";
			$sql = sprintf($sql,$idnota,$fecha,$ptitulo, $titulo,$rotativa, $descripcioncorta, $descripcion, $descripcioninterior, $nota, $pie, $imagen,$archivo,$url);
			$result = $link->query($sql);
			
			return $result;
		}*/
		function delete($id)
		{
			global $link;
			$sql = "CALL Ley_borrar('%1\$s')";
			$sql = sprintf($sql, $id);
			echo $sql;
			$result = $link->query($sql);
			/*$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
				$resultado = $row;
			}*/
			return $result;	
		}
	}

	/**
	* 
	*/
	/*class articulos
	{
		
		function consult(argument)
		{
			# code...
		}
		function replace(argument)
		{
			# code...
		}
		function update(argument)
		{
			# code...
		}
		function delete(argument)
		{
			# code...
		}
	}
	/**
	* 
	*/
	/*class fracciones
	{
		
		function consult(argument)
		{
			# code...
		}
		function replace(argument)
		{
			# code...
		}
		function update(argument)
		{
			# code...
		}
		function delete(argument)
		{
			# code...
		}
	}

	/**
	* 
	*/
	/*class incisos
	{
		
		function consult(argument)
		{
			# code...
		}
		function replace(argument)
		{
			# code...
		}
		function update(argument)
		{
			# code...
		}
		function delete(argument)
		{
			# code...
		}
	}

	/**
	* 
	*/
	/*class formatos
	{
		
		function consult(argument)
		{
			# code...
		}
		function replace(argument)
		{
			# code...
		}
		function update(argument)
		{
			# code...
		}
		function delete(argument)
		{
			# code...
		}
	}

	/**
	* 
	*/
	/*class camposformatos
	{
		
		function consult(argument)
		{
			# code...
		}
		function replace(argument)
		{
			# code...
		}
		function update(argument)
		{
			# code...
		}
		function delete(argument)
		{
			# code...
		}
	}

	/**
	* 
	*/
	/*class ingresardatos
	{
		
		function consult(argument)
		{
			# code...
		}
		function replace(argument)
		{
			# code...
		}
		function update(argument)
		{
			# code...
		}
		function delete(argument)
		{
			# code...
		}
	}*/
 ?>
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
		function replace($descripcion, $tipo, $idusr,$activo)
		{
			global $link;
			$sql = "CALL Ley_insertar('%1\$s','%2\$s','%3\$s','%4\$s')";
			$sql = sprintf($sql, $descripcion, $tipo, $idusr,$activo);
			echo $sql;
			$result = $link->query($sql);
			return $result;
		}
		function update($id_ley, $descripcion, $tipoley, $user)
		{
			global $link;
			$sql = "CALL Ley_modificar('%1\$s','%2\$s','%3\$s','%4\$s')";
			$sql = sprintf($sql,$id_ley, $descripcion, $tipoley, $user);
			$result = $link->query($sql);
			
			return $result;
		}

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

	
	class articulos
	{
		
		function create($descripcion, $articulo, $ley)
		{
			global $link;
			$sql = "CALL Art_insertar('%1\$s','%2\$s','%3\$s')";
			$sql = sprintf($sql, $descripcion, $articulo, $ley);
			echo $sql;
			$result = $link->query($sql);
			return $result;
		}
		function read($idusr)
		{
			global $link;
			$sql = "CALL Art_consulta(%1\$s) ";
			$sql = sprintf($sql, $idusr);
			$result = $link->query($sql);
			$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
			$resultado[] = $row;
			}
			return $resultado;
		}
		/*function update(argument)
		{
			# code...
		}*/
		function delete($id)
		{
			global $link;
			$sql = "CALL Art_borrar('%1\$s')";
			$sql = sprintf($sql, $id);
			echo $sql;
			$result = $link->query($sql);
			/*$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
				$resultado = $row;
			}*/
			return $result;
		}

		/*function readall(argument)
		{
			# code...
		}*/
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
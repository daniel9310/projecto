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
		
		function create($descripcion, $articulo, $ley,$activo)
		{
			global $link;
			$sql = "CALL Art_insertar('%1\$s','%2\$s','%3\$s','%4\$s')";
			$sql = sprintf($sql, $descripcion, $articulo, $ley, $activo);
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
		function update($idart,$descripcion,$numart,$ley)
		{
			global $link;
			$sql = "CALL Art_modificar('%1\$s','%2\$s','%3\$s','%4\$s')";
			$sql = sprintf($sql,$idart,$descripcion,$numart,$ley);
			echo $sql;
			$result = $link->query($sql);
			
			return $result;
		}
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

		function readall($idart)
		{
			global $link;
			$sql = "CALL Art_ver('%1\$s')";
			$sql = sprintf($sql, $idart);
			$result = $link->query($sql);
			$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
				$resultado =$row;
				//array_push($resultado,$row);
			}
			return $resultado;	
		}
	}


	class fracciones
	{
		
		function create($descripcion, $numfrac, $fkart, $activo)
		{
			global $link;
			$sql = "CALL Fracc_insertar('%1\$s','%2\$s','%3\$s','%4\$s')";
			$sql = sprintf($sql, $descripcion, $numfrac, $fkart, $activo);
			echo $sql;
			$result = $link->query($sql);
			return $result;	
		}
		function read($idusr)
		{
			global $link;
			$sql = "CALL Fracc_consulta(%1\$s) ";
			$sql = sprintf($sql, $idusr);
			$result = $link->query($sql);
			$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
			$resultado[] = $row;
			}
			return $resultado;
		}
		function readall($idfrac){
			global $link;
			$sql = "CALL Fracc_ver('%1\$s')";
			$sql = sprintf($sql, $idfrac);
			$result = $link->query($sql);
			$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
				$resultado =$row;
				//array_push($resultado,$row);
			}
			return $resultado;	
		}
		function update($fracid, $descripcion, $numfrac, $fkart)
		{
			global $link;
			$sql = "CALL Fracc_modificar('%1\$s','%2\$s','%3\$s','%4\$s')";
			$sql = sprintf($sql,$fracid, $descripcion, $numfrac, $fkart);
			echo $sql;
			$result = $link->query($sql);			
			return $result;
		}
		function delete($id)
		{
			global $link;
			$sql = "CALL Fracc_borrar('%1\$s')";
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
	class incisos
	{
		
		function create($descripcion, $numfinc, $fkfrac, $activo)
		{
			global $link;
			$sql = "CALL Inciso_insertar('%1\$s','%2\$s','%3\$s','%4\$s')";
			$sql = sprintf($sql, $descripcion, $numfinc, $fkfrac, $activo);
			echo $sql;
			$result = $link->query($sql);
			return $result;	
		}
		function read($idusr)
		{
			global $link;
			$sql = "CALL Inciso_consulta(%1\$s) ";
			$sql = sprintf($sql, $idusr);
			$result = $link->query($sql);
			$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
			$resultado[] = $row;
			}
			return $resultado;
		}
		function readall($idinc){
			global $link;
			$sql = "CALL Inciso_ver('%1\$s')";
			$sql = sprintf($sql, $idinc);
			$result = $link->query($sql);
			$resultado = array();
			while( $row = mysqli_fetch_assoc($result) ){
				$resultado =$row;
				//array_push($resultado,$row);
			}
			return $resultado;	
		}
		function update($incid, $descripcion, $numfinc, $fkfrac)
		{
			global $link;
			$sql = "CALL Inciso_modificar('%1\$s','%2\$s','%3\$s','%4\$s')";
			$sql = sprintf($sql,$incid, $descripcion, $numfinc, $fkfrac);
			echo $sql;
			$result = $link->query($sql);			
			return $result;
		}
		function delete($id)
		{
			global $link;
			$sql = "CALL Inciso_borrar('%1\$s')";
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
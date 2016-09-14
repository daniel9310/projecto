<?php 
	$usuario = $_POST['nnombre'];
	$pass = $_POST['npassword'];

	$result = mysql_query("SELECT * from ct_usr where usr_username='" . $usuario . "'");
 
	if($row = mysql_fetch_array($result)){
		if($row['Password'] == $pass){
			session_start();
			$_SESSION['usuario'] = $usuario;
			header("Location: contenido.php");
		}else{
			header("Location: index.php");
			exit();
			}
		}else{
		header("Location: index.php");
		exit();
	}


 ?>
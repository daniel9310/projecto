<?php 
	session_start();
	print_r($_POST);
	$usuario = $_POST['nnombre'];
	$pass = $_POST['npassword'];
 	
	require_once("include/config/config.php");
	require_once($CONFIG['pathinclude']."config/cx.php");
	require_once($CONFIG['pathinclude']."cls/login.php");
	$objLogin = new login;
	$login = $objLogin->Conectar_login($usuario,$pass); 
	print_r($login);
	unset($objLogin);
	if ($login[usr_username] = $usuario and $login[usr_passwd] = $pass) {
		
			 echo'<script type="text/javascript">
		          alert("Usuario Correcto");
		          window.location="paginas/panelAdm/paneladm.html"
		          </script>';
		
	}else{
		echo '<script type="text/javascript">
		          alert("Usuario y/o Contraseña Incorrectos");
		          window.location="index.php"
		          </script>';
	}

 ?>
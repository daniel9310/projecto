<?php 
	$sesion = session_start();	
	$usuario = $_POST['nnombre'];
	$pass = $_POST['npassword'];
	$_SESSION['sesionabierta'] = $usuario;        
	if(isset($_SESSION['sesionabierta'])):
	
	
	    session_destroy();

	endif;	
		session_start();
		$nameErre=""; $passErre="";
		
	 	
		require_once($CONFIG['sitio']."include/config/config.php");
		require_once($CONFIG['pathinclude']."config/cx.php");
		require_once($CONFIG['pathinclude']."cls/login.php");
		$objLogin = new login;
		$login = $objLogin->Conectar_login($usuario,$pass); 
		print_r($login);
		unset($objLogin);
		if (empty($usuario)) {
			if (empty($pass)) {
				echo '<script type="text/javascript">
				          alert("Usuario y Contraseña Vacio");
				          window.location="index.php"
				          </script>';	
			}else{
			 echo '<script type="text/javascript">
				          alert("Usuario Vacio");
				          window.location="index.php"
				          </script>';
			}
			
		}else{
			if (!preg_match("/^[a-zA-Z ]*$/",$usuario)) {
	      		$nameErr = "Only letters and white space allowed";
	      		echo '<script type="text/javascript">
				          alert("Solamente Letras ");
				          window.location="index.php"
				          </script>';
	    	}
	    	else{
				if ($login[usr_username] == $usuario && $login[usr_passwd] == $pass) {
					
						 echo'<script type="text/javascript">
					          alert("Usuario Correcto");
					          window.location="Admin/paneladm.php"
					          </script>';
					
				}else{
					echo '<script type="text/javascript">
					          alert("Usuario y/o Contraseña Incorrectos");
					          window.location="index.php"
					          </script>';
				}
			}
		}
	
 ?>
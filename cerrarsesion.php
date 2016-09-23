<?php 
session_start();
	if ($_SESSION['id_usr']>=1) {


		echo'<script type="text/javascript">
		          alert("Sesion Finalizada");
		          window.location="index.php"
		          </script>';
		session_unset(); 
		session_destroy();
	}
 ?>
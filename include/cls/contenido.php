<?php 
class vista{
	
	function consultarid($tipo){
		global $link;
		$sql = "select usr.fk_tipousuario, tip.tusr_nombre from ct_usr as usr  innerjoin ct_tipousr as tip on tip.id_tipousr = usr.fk_tipousuario;";
		$sql = sprintf($sql, $tipo);
		$result = $link->query($sql);
		$resultado = array();
		while( $row = mysqli_fetch_assoc($result) ){
			$resultado[] = $row;
		}
		return $resultado;
	}
	
	
	
}

?>
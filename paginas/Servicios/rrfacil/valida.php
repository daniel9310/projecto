<?php
ini_set('memory_limit','64M');

//echo "<pre>".print_r($_FILES['solicitud'],1)."</pre>";

if( strlen(trim($_POST['solicitante'])) == 0  ){
	$msg[] = "divSolicitante";
	
}

if( strlen(trim($_POST['email'])) == 0  ){
	$msg[] = "divCorreo";
	
}

if( strlen(trim($_POST['sobligado'])) == 0  ){
	$msg[] = "divSO";
	
}

if( strlen(trim($_POST['queja'])) == 0  ){
	$msg[] = "divQueja";
	
}

if(strlen(trim($_FILES['solicitud']['name'])) == 0 ){
		$msg[] = "divSolicitud";
}

//print_r($msg);

if( count($msg) > 0 ){
	Error( $msg );
	exit;
}
?>
<script language="javascript" type="text/javascript">
window.parent.submitValid();
</script>
<?php


function Error( $msg ){
	
?>

<script language="javascript">
myArray = new Array('<?=implode("','", $msg)?>');
window.parent.submitNoValid(myArray);
</script>
<?php
	exit;
}


?>


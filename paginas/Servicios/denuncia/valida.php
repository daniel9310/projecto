<?php
ini_set('memory_limit','64M');

echo "<pre>".print_r($_POST,1)."</pre>";

if( strlen(trim($_POST['so'])) == 0  ){
	$msg[] = "divSO";
	
}

if( strlen(trim($_POST['email'])) == 0  ){
	$msg[] = "divemail";
	
}

if( strlen(trim($_POST['denunciante'])) == 0  ){
	$msg[] = "divDenunciante";
	
}

if( strlen(trim($_POST['queja'])) == 0  ){
	$msg[] = "divQueja";
	
}



print_r($msg);

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


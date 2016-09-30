<?php
//Imprimir a PDF
require_once("../../../include/config/config.php");
require_once($CONFIG['pathinclude']."cls/rrfacilpdf.php");
$datos = $_POST;
//echo "<pre>".print_r($_FILES,1)."</pre>";
//exit;
$archivos = array();
foreach($_FILES as $name => $file ){
	$archivos[$name] = $file['name'];
}
//echo "<pre>".print_r($archivos,1)."</pre>";
//exit;

///*
require_once($CONFIG['pathinclude']."cls/rrfacilpdf.php");
$objRep = new rrfacil('P','mm','Letter');
$objRep->AddPage("P");
$objRep->cuerpo();
$objRep->Output();
//*/
?>

<?php
set_time_limit(0);
ini_set('memory_limit','64M');
require_once("../../../include/config/config.php");
require_once($CONFIG["path"]."/include/config/cx.php");
require_once($CONFIG['pathinclude']."cls/recurso.php");
//Guardar la información en la bd
$datos = $_POST;
//print_r($_POST);
$objRecurso = new recurso;
$objRecurso->datos = $datos;
$id_rr = $objRecurso->addRR($FILES['solicitud']['name']);

$archivos = array();
foreach($_FILES as $name => $file ){
	$objRecurso->subirArchivo($name,$CONFIG['pathrrfacil'],$id_rr);
	if(strlen(trim($file['name']))> 0 )
		$archivos[$name] = $file['name'];
}
//print_r($archivos);
unset($objRecurso);
$mensaje = "Se ha recibido un recurso de revision el cual se adjunta el pdf.";
require_once($CONFIG['pathinclude']."/cls/rrfacilpdf.php");
$objRep = new rrfacil('P','mm','Letter');
$objRep->AddPage("P");
$objRep->cuerpo();
$objRep->Output($CONFIG['pathrrfacil'].$id_rr.".pdf");

//Enviar a correo electrónico
require_once($CONFIG['path'].'/PHPMailer/class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch

$mail->IsSMTP(); // telling the class to use SMTP

try {
  $mail->Host       = "vm11.digitalserver.org"; // SMTP server
  $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
  $mail->SMTPAuth   = true;                  // enable SMTP authentication
  $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
  $mail->Host       = "vm11.digitalserver.org";      // sets GMAIL as the SMTP server
  $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
  $mail->Username   = "deisy.rodriguez@ities.org";  // GMAIL username
  $mail->Password   = "_[X2^R21ud+*";     
  $mail->AddAddress('edrey22@hotmail.com', 'Deisy Rodriguez'); //Cambiar correo por el de rrfacil
  $mail->SetFrom('edrey22@gmail.com', 'First Last'); //CAmbiar correo del que interpone el recurso de revision
  $mail->AddReplyTo('edrey22@gmail.com', 'First Last');//Correo del que interpone el recurso de revision
  $mail->Subject = 'Recurso de Revision';
  $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
  $mail->MsgHTML($mensaje);
  $mail->AddAttachment($CONFIG['pathrrfacil'].$id_rr.".pdf");      // attachment
  foreach ($archivos as $name => $value) {
  	$mail->AddAttachment($CONFIG['pathrrfacil'].$id_rr."/".$value);
  }
  //$mail->AddAttachment($CONFIG['path'].'PHPMailer/examples/images/phpmailer_mini.gif'); // attachment
  $mail->Send();
  echo "Message Sent OK</p>\n";
} catch (phpmailerException $e) {
  echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
  echo $e->getMessage(); //Boring error messages from anything else!
}

?>
<script>
window.location.href= "confirmacion.php?id_rr=<?=$id_rr?>";
</script>
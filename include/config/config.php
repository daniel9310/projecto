<?php
ini_set('default_charset','UTF-8');
$_SERVER['HTTP_ACCEPT_CHARSET'] = "UTF-8";
$charset = "UTF-8";
error_reporting (E_ALL ^ E_NOTICE ^ E_DEPRECATED);
$CONFIG['path'] = "c://xampp/htdocs/ISTAI/projecto";
$CONFIG['sitio'] = "http://".$_SERVER['HTTP_HOST']."/ISTAI/projecto/";
$CONFIG['pathinclude'] = "c://xampp/htdocs/ISTAI/projecto/include/";
$CONFIG['sitioimgnotas'] = $CONFIG['sitio']."files/notas/img/";
?>
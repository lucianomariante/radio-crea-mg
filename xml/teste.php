<?php 
header('Content-Type: text/html; charset=iso-8859-1');

$hostname_conectar = "mysql-ded-287718b.kinghost.net";
$database_conectar = "agenciaradiowe02";
$username_conectar = "agenciaradiowe02";
$password_conectar = "1PXAXbI6Sy3XVF";
$conectar = mysqli_connect($hostname_conectar, $username_conectar, $password_conectar,$database_conectar) or die(mysqli_error());

mysqli_select_db($conectar,$database_conectar);
?>teste

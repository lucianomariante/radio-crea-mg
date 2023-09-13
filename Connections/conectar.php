<?php //session_start();
//header("Cache-Control: no-cache, must-revalidate");
header('Content-Type: text/html; charset=iso-8859-1');

$hostname_conectar = "mysql01-farm15.uni5.net";
$database_conectar = "radiocreaminas01";
$username_conectar = "radiocreaminas01";
$password_conectar = "zaro3w2021";
$conectar = mysqli_connect($hostname_conectar, $username_conectar, $password_conectar,$database_conectar);

mysqli_select_db($conectar,$database_conectar);

/* ROTEIRO PARA CONVERSÃO EM PHP7
1) alterar user.ini, .htacess e php.ini

2) or die(mysql_error()) -> ""

3) , $conectar -> ""

4) mysql_query( -> mysqli_query($conectar,

5) mysql_select_db( -> mysqli_select_db($conectar,

6) mysql_fetch_assoc( -> mysqli_fetch_assoc(

7) mysql_num_rows( -> mysqli_num_rows(

8) $conectar = mysql_connect($hostname_conectar, $username_conectar, $password_conectar); -> $conectar = mysqli_connect($hostname_conectar, $username_conectar, $password_conectar,$database_conectar);

9) retiraacentos -> alterar

10) mysql_real_escape_string( - > mysqli_real_escape_string($conectar,

11) alterar função GetSQLValueString

12) adicionar header('Content-Type: text/html; charset=iso-8859-1'); no arquivo conectar.php

13) alterar arquivo app_curtir.php
*/
?>
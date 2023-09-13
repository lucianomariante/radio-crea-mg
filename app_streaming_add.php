<?php 
header("Content-Type: text/plain"); 
header("Cache-Control: no-store, no-cache, must-revalidate"); 
require_once('Connections/conectar.php');  
require('includes/funcoes.php');

mysqli_select_db($conectar,$database_conectar);
$query_definicoes = "SELECT * FROM radio_definicoes";
$definicoes = mysqli_query($conectar,$query_definicoes);
$row_definicoes = mysqli_fetch_assoc($definicoes);

echo $row_definicoes['streaming_titular'];

?>
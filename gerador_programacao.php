<?
require_once('Connections/conectar.php'); 

$xml=simplexml_load_file("xml/passando.xml") or die("Error: Cannot create object");
//echo $xml->musica->musico;

mysqli_select_db($conectar,$database_conectar);
$query_lastmusic = "SELECT * FROM onlines_programacao order by id desc limit 0, 1";
$lastmusic = mysqli_query($conectar,$query_lastmusic);
$row_lastmusic = mysqli_fetch_assoc($lastmusic);
//$totalRows_lastmusic = mysqli_num_rows($all_lastmusic);

if($row_lastmusic['artista']!=utf8_decode(str_replace("&","e",addslashes($xml->musica->musico)))){ 
mysqli_query($conectar,"insert into onlines_programacao (artista,musica,radio,momento) values ('".utf8_decode(str_replace("&","e",addslashes($xml->musica->musico)))."','".utf8_decode(str_replace("&","e",addslashes($xml->musica->titulo)))."',10,'".time()."')");
}
sleep(60);


$xml=simplexml_load_file("xml/passando.xml") or die("Error: Cannot create object");
//echo $xml->musica->musico;

mysqli_select_db($conectar,$database_conectar);
$query_lastmusic = "SELECT * FROM onlines_programacao order by id desc limit 0, 1";
$lastmusic = mysqli_query($conectar,$query_lastmusic);
$row_lastmusic = mysqli_fetch_assoc($lastmusic);
//$totalRows_lastmusic = mysqli_num_rows($all_lastmusic);

if($row_lastmusic['artista']!=utf8_decode(str_replace("&","e",addslashes($xml->musica->musico)))){ 
mysqli_query($conectar,"insert into onlines_programacao (artista,musica,radio,momento) values ('".utf8_decode(str_replace("&","e",addslashes($xml->musica->musico)))."','".utf8_decode(str_replace("&","e",addslashes($xml->musica->titulo)))."',10,'".time()."')");
}
sleep(60);


$xml=simplexml_load_file("xml/passando.xml") or die("Error: Cannot create object");
//echo $xml->musica->musico;

mysqli_select_db($conectar,$database_conectar);
$query_lastmusic = "SELECT * FROM onlines_programacao order by id desc limit 0, 1";
$lastmusic = mysqli_query($conectar,$query_lastmusic);
$row_lastmusic = mysqli_fetch_assoc($lastmusic);
//$totalRows_lastmusic = mysqli_num_rows($all_lastmusic);

if($row_lastmusic['artista']!=utf8_decode(str_replace("&","e",addslashes($xml->musica->musico)))){ 
mysqli_query($conectar,"insert into onlines_programacao (artista,musica,radio,momento) values ('".utf8_decode(str_replace("&","e",addslashes($xml->musica->musico)))."','".utf8_decode(str_replace("&","e",addslashes($xml->musica->titulo)))."',10,'".time()."')");
}
sleep(60);

$xml=simplexml_load_file("xml/passando.xml") or die("Error: Cannot create object");
//echo $xml->musica->musico;

mysqli_select_db($conectar,$database_conectar);
$query_lastmusic = "SELECT * FROM onlines_programacao order by id desc limit 0, 1";
$lastmusic = mysqli_query($conectar,$query_lastmusic);
$row_lastmusic = mysqli_fetch_assoc($lastmusic);
//$totalRows_lastmusic = mysqli_num_rows($all_lastmusic);

if($row_lastmusic['artista']!=utf8_decode(str_replace("&","e",addslashes($xml->musica->musico)))){ 
mysqli_query($conectar,"insert into onlines_programacao (artista,musica,radio,momento) values ('".utf8_decode(str_replace("&","e",addslashes($xml->musica->musico)))."','".utf8_decode(str_replace("&","e",addslashes($xml->musica->titulo)))."',10,'".time()."')");
}


?>
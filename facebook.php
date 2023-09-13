<?php 
require_once('Connections/conectar.php');
require_once('includes/funcoes.php');

mysqli_select_db($conectar,$database_conectar);
$query_definicoes = "SELECT * FROM radio_definicoes";
$definicoes = mysqli_query($conectar,$query_definicoes);
$row_definicoes = mysqli_fetch_assoc($definicoes);

if($_GET['id']!="") { 
$id = intval($_GET['id']);
mysqli_select_db($conectar,$database_conectar);
$query_umamateria = "SELECT radio_noticias.*, radio_podcasts.nome_podcast FROM radio_noticias, radio_podcasts where radio_noticias.idcategoria = radio_podcasts.id and radio_noticias.id = '".$id."' order by data desc, radio_noticias.id DESC";
$umamateria = mysqli_query($conectar,$query_umamateria);
$row_umamateria = mysqli_fetch_assoc($umamateria);
$enxertolink = "?id=".$id;
$content = stripslashes(formata_data($row_umamateria['data'])." -  ".$row_umamateria['manchete']);
} else {
$xml = simplexml_load_file('xml/passando.xml');
$content = utf8_decode("Ouvindo ".$xml->musica->musico." - ".$xml->musica->titulo." na ").stripslashes($row_definicoes['nome_radio']);
}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" lang="pt" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><? echo stripslashes($row_definicoes['nome_radio']); ?></title>
<base href="<? echo stripslashes($row_definicoes['url_radio']); ?>/">
<meta http-equiv="refresh" content="0;url=index.php<? echo $enxertolink; ?>" />
<meta property="og:type" content="website" /> 
<meta property="og:title" content="<? echo stripslashes($row_definicoes['nome_radio']); ?>" /> 
<meta property="og:image" content="<? echo stripslashes($row_definicoes['url_radio']); ?>/extras/logo_facebook2.png" /> 
<meta property="og:description" content="<? echo $content; ?>"/> 
</head>
<frameset rows="0,100%">
  <frame src="superior.php" noresize="noresize" marginwidth="0" marginheight="0">
  <frame src="index.php<? echo $enxertolink; ?>" marginwidth="0" marginheight="0">
</frameset>
<noframes><body>
</body></noframes>
</html>
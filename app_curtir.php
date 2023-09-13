<?php require_once('Connections/conectar.php');
require_once('includes/funcoes.php');

$currentPage = $_SERVER["PHP_SELF"];

// DEFINIÇÕES GERAIS DA RÁDIO
mysqli_select_db($conectar,$database_conectar);
$query_definicoes = "SELECT * FROM radio_definicoes";
$definicoes = mysqli_query($conectar,$query_definicoes);
$row_definicoes = mysqli_fetch_assoc($definicoes);
if($_GET['id']=="") {
$xml = simplexml_load_file('xml/passando.xml');
//header("location:https://www.facebook.com/sharer/sharer.php?u=".$row_definicoes['url_radio']."/facebook.php?nowplaying=Ouvindo ".$xml->musica->musico." - ".$xml->musica->titulo);
$url_face = "https://www.facebook.com/sharer/sharer.php?u=".$row_definicoes['url_radio']."/facebook.php";
$url_whats ="whatsapp://send?text=Ouvindo ".utf8_decode($xml->musica->musico." - ".$xml->musica->titulo)." na ".stripslashes($row_definicoes['nome_radio'])." ".$row_definicoes['url_radio'];
$url_whats2 = "https://web.whatsapp.com/send?text=Ouvindo ".$xml->musica->musico." - ".$xml->musica->titulo." na ".stripslashes(utf8_encode($row_definicoes['nome_radio']))." ".$row_definicoes['url_radio'];
$url_twitter = "https://twitter.com/intent/tweet?text=Ouvindo ".utf8_decode($xml->musica->musico." - ".$xml->musica->titulo)." na ".stripslashes($row_definicoes['nome_radio'])."&url=".$row_definicoes['url_radio'];
} else {
//header("location:https://www.facebook.com/sharer/sharer.php?u=".$row_definicoes['url_radio']."/facebook.php?id=".$_GET['id']);
//header("location:whatsapp://send?text=Ouça esta matéria da ".$row_definicoes['nome_radio'].": ".$row_definicoes['url_radio']."/facebook.php?id=".$_GET['id']);
$url_face = "https://www.facebook.com/sharer/sharer.php?u=".$row_definicoes['url_radio']."/facebook.php?id=".$_GET['id'];
$url_whats = utf8_decode("whatsapp://send?text=Ouça esta matéria da ").stripslashes($row_definicoes['nome_radio']).": ".$row_definicoes['url_radio']."/facebook.php?id=".$_GET['id'];
$url_whats2 = "https://web.whatsapp.com/send?text=Ouça esta matéria da ".stripslashes(utf8_encode($row_definicoes['nome_radio'])).": ".$row_definicoes['url_radio']."/not/".$_GET['id'];
$url_twitter = "https://twitter.com/intent/tweet?text="."Ouça esta matéria da ".stripslashes(utf8_encode($row_definicoes['nome_radio'])).":&url=".$row_definicoes['url_radio']."/not/".$_GET['id'];
$oque_incorporar = "?id=".$_GET['id'];
}

/* testes efetuados 

compartilhar audio whats
windows chrome
android
iphone




*/

if(strpos($_SERVER['HTTP_USER_AGENT'],'Android')==true 
	or strpos($_SERVER['HTTP_USER_AGENT'],'iPad')==true 
	or strpos($_SERVER['HTTP_USER_AGENT'],'iPhone')) { 
	$url_whats_f = $url_whats;
	
} else {
	$url_whats_f = $url_whats2;
	if($_GET['dir']==1) {
	header("location:".$url_whats2);
	$meta = "<meta http-equiv=\"refresh\" content=\"0;url=".$url_whats2."\" />";
	}
	if($_GET['tw']==1) {
	header("location:".utf8_encode($url_twitter));
	$meta = "<meta http-equiv=\"refresh\" content=\"0;url=".$url_twitter."\" />";
	}
	if($_GET['face']==1) {
	header("location:".$url_face);
	$meta = "<meta http-equiv=\"refresh\" content=\"0;url=".$url_face."\" />";
	}
}

if($row_definicoes['url_https']=="") { $murl = $row_definicoes['url_radio']; $sec = ""; } else { $murl = $row_definicoes['url_https']; $sec = "s"; } //VERIFICA SE HÁ URL HTTPS
 
 ?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<? echo $meta; ?>
<title><? echo stripslashes($row_definicoes['nome_radio']); ?></title>
<script src="js/jquery.js"></script>
<? require_once('extras/extras.php'); ?>
<script type="text/javascript">
function executa_e_fecha() { //v2.0
  setTimeout(fecha(), 1000);
}

function fecha() { //v2.0
  window.close();
}

function incorporar_fecha() {
	$("#incorporar_codigo").css("display","none");
}

function incorporar_fecha() {
	$("#incorporar_codigo").css("display","none");
}

function incorporar_abrir() {
	$("#incorporar_codigo").css("display","inline");	
}
</script>
</head>

<body class="corpo_share">
<div id="logotipo_share"><? echo stripslashes($row_definicoes['nome_radio']); ?></div>
<div id="redes_share">
  	<a href="<? echo $url_whats_f; ?>" target="_tab"><div id="whatsapp_share">Compartilhar no Whatsapp</div></a>
	<a href="<? echo $url_face; ?>" ><div id="facebook_share">Compartilhar no Facebook</div></a>
	<a href="<? echo $url_twitter; ?>"><div id="twitter_share">Compartilhar no Twitter</div></a>
    <a href="javascript:incorporar_abrir()"><div id="incorporar">Incorporar</div></a>
</div>

<div id="incorporar_codigo">
	<? echo utf8_decode("Copie este código e cole no html da sua página:<br>"); ?>
	&lt;iframe src="<? echo $murl; ?>/incorporar.php<? echo $oque_incorporar; ?>" width="100%" height="232" scrolling="no" frameborder="0"&gt;&lt;/iframe&gt;
	<div id="incorporar_fechar" onClick="incorporar_fecha()">Fechar Janela</div>
</div>

</body>
</html>
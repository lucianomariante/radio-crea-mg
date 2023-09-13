<?php
include_once('admin/includes/constantes.php'); 

//$vURL = 'https://website.agenciaradioweb.com.br/not/'.base64_encode($_GET['id']); DEPOIS DE REFORMAR A REESCRITA DE URL, USAR ESSA OU A QUE TU DEFINIRES
$vURL = 'http://www.radiotjminas.com.br/compartilhar/materias.php?id='.$_GET['id']."";


$url_whats = utf8_decode("whatsapp://send?text=Ouça esta matéria da ") ."Rádio TJMG : ".$row_definicoes['url_radio']."/facebook.php?id=".$_GET['id'];
$url_whats2 = "https://web.whatsapp.com/send?text=Ouça esta matéria da Rádio TJMG: http://radiotjminas.com.br/not/".$_GET['id'];
$url_face = "https://www.facebook.com/sharer/sharer.php?u=http://radiotjminas.com.br/facebook.php?id=".$_GET['id'];
$url_twitter = "https://twitter.com/intent/tweet?text="."Ouça esta matéria da Rádio TJMG:&url=http://radiotjminas.com.br/not/".$_GET['id'];
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

$url_twitter = "https://twitter.com/intent/tweet?text=Ouça esta matéria da Rádio TJMG&url=".$vURL;
$oque_incorporar = "?id=".$_GET['id'];
 ?><!doctype html>
<html>
<head>
<meta charset="iso-8859-1">
<? echo $meta; ?>
<title>.:: Rádio TJMG ::.</title>
<script type="text/javascript">
function fecha() { //v2.0
  window.close();
}
</script>
<link rel="stylesheet" href="css/style.css">
</head>
<body class="corpo_share">
<div id="logotipo_share">.:: Rádio TJMG ::.</div>
<div id="redes_share">
	<a href="<? echo $url_whats_f; ?>" target="_tab"><div id="whatsapp_share">Compartilhar no Whatsapp</div></a>
	<a href="<? echo $url_face; ?>" ><div id="facebook_share">Compartilhar no Facebook</div></a>
    <a href="<? echo $url_twitter; ?>"><div id="twitter_share">Compartilhar no Twitter</div></a>	
</div>
</body>
</html>
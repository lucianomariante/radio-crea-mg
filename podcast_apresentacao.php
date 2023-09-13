<?php 
require_once('Connections/conectar.php');
require_once('includes/funcoes.php');

$currentPage = $_SERVER["PHP_SELF"];

function txtpodcast ($entrada) {
	return stripslashes(utf8_decode($entrada));
}

function txtpodcast2  ($entrada) {
	return txtpodcast(html_entity_decode($entrada));
}

function txtpodcast3 ($entrada) {
	return stripslashes($entrada);
}

function txtpodcast4 ($entrada) {
	return stripslashes(html_entity_decode($entrada));
}


function txtpodcast5 ($entrada) {
	return str_replace("\"","&quot;",stripslashes(utf8_encode(html_entity_decode($entrada))));
}

// DEFINIÇÕES GERAIS DA RÁDIO
mysqli_select_db($conectar,$database_conectar);
$query_definicoes = "SELECT * FROM radio_definicoes";
$definicoes = mysqli_query($conectar,$query_definicoes);
$row_definicoes = mysqli_fetch_assoc($definicoes);

if($_GET['id']!="") { 
// DEFINIÇÕES GERAIS DA RÁDIO
$idpd = (int) $_GET['id'];
$query_podcastlist = "SELECT * FROM radio_podcasts where id = '".$idpd."'";
$podcastlist = mysqli_query($conectar,$query_podcastlist);
$row_podcastlist = mysqli_fetch_assoc($podcastlist);
$pdenxerto = "and radio_noticias.idcategoria = '".$idpd."'";
$pdenxerto2 = "?id=".$row_podcastlist['id'];
} else {
$query_podcastlist = "SELECT * FROM radio_definicoes where id = 1";
$podcastlist = mysqli_query($conectar,$query_podcastlist);
$row_podcastlist = mysqli_fetch_assoc($podcastlist);	
}

$lanc = time();

if($_GET['episodio']!="") {
$episodio = (int) $_GET['episodio'];
$primeira_not = "radio_noticias.id = '".$episodio."' and";
}

mysqli_select_db($conectar,$database_conectar);
$query_episodio = "SELECT radio_noticias.*, radio_podcasts.nome_podcast FROM radio_noticias, radio_podcasts where ".$primeira_not." radio_noticias.data_lanc < '".$lanc."' and radio_noticias.idcategoria = radio_podcasts.id $pdenxerto order by data desc,  radio_noticias.idradioweb desc, radio_noticias.ultima_atualizacao desc";
$episodio = mysqli_query($conectar,$query_episodio);
$row_episodio = mysqli_fetch_assoc($episodio);	

if($_GET['episodio']!="") {
	if($row_episodio['amigavel']!="") { 
	$complemento_amigavel = "/".$row_episodio['id']."/".amigaveis(txtpodcast5($row_episodio['amigavel']));
	} else {
	$complemento_amigavel = "/".$row_episodio['id']."/".amigaveis(txtpodcast5($row_episodio['manchete']));
	}
}

if($row_podcastlist['amigavel']!="") {
	$amigavel_principal =  amigaveis(utf8_encode($row_podcastlist['amigavel']));
} else {
	$amigavel_principal =  amigaveis(utf8_encode($row_podcastlist['titulo']));
}


mysqli_select_db($conectar,$database_conectar);
$query_itempodcast = "SELECT radio_noticias.*, radio_podcasts.nome_podcast FROM radio_noticias, radio_podcasts where radio_noticias.id <> '".$row_episodio['id']."' and radio_noticias.data_lanc < '".$lanc."' and radio_noticias.idcategoria = radio_podcasts.id $pdenxerto order by data desc,  radio_noticias.idradioweb desc, radio_noticias.ultima_atualizacao desc";
$itempodcast = mysqli_query($conectar,$query_itempodcast);
$row_itempodcast = mysqli_fetch_assoc($itempodcast);

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<? if($row_definicoes['googletagmanager']!="") { ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','<? echo stripslashes($row_definicoes['googletagmanager']); ?>');</script>
<!-- End Google Tag Manager -->
<? } ?>
<link rel="canonical" href="<? echo "http://".$_SERVER[HTTP_HOST]."/podcast/".$row_podcastlist['id']."/".$amigavel_principal.$complemento_amigavel; ?>" />
<meta name="viewport" content="width=device-width, initial-scale=0.5, shrink-to-fit=no">
<script async src="https://www.googletagmanager.com/gtag/js?id=<? echo stripslashes($row_definicoes['analytics']); ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', '<? echo stripslashes($row_definicoes['analytics']); ?>');
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><? echo txtpodcast3($row_podcastlist['titulo']); ?></title>
<script src="http://podcasts.agenciaradioweb.com.br/js/jquery.js"></script>
<script src="http://podcasts.agenciaradioweb.com.br/js/funcoes.js"></script>
<base href="http://podcasts.agenciaradioweb.com.br/">
<link rel="stylesheet" href="extras/podcast.css">
<link type="application/rss+xml" rel="alternate" title="<? if($row_podcastlist['titulo']!="") { echo txtpodcast3($row_podcastlist['titulo']); } ?>" href="http://podcasts.agenciaradioweb.com.br/plataforma_podcast.php<? echo $pdenxerto2; ?>"/>
<meta property="og:type" content="website" />
<meta property="og:image" content="<? echo txtpodcast3($row_podcastlist['imagem']); ?>" /> 
<? if($_GET['episodio']!="") { ?>

	<meta property="og:title" content="<? echo txtpodcast4($row_episodio['manchete']); ?>" />
    <meta name="subject" content="<? echo txtpodcast4($row_episodio['manchete']); ?>">
     
		<? if($row_episodio['descricao']!="") { ?>
			<meta property="og:description" content="<? echo txtpodcast4($row_episodio['descricao']); ?>"/>
			<meta name="description" content="<? echo txtpodcast4($row_episodio['descricao']); ?>"/>
		<? } else { ?>
			<? if($row_podcastlist['descricao']!="") { ?>
				<meta property="og:description" content="<?  echo txtpodcast3($row_podcastlist['descricao']); ?>"/>
				<meta name="description" content="<? echo txtpodcast3($row_podcastlist['descricao']); ?>"/>
			<? } ?>
		<? } ?>
        
	<? if($row_episodio['metakeywords']!="") { ?>
    	<meta name="keywords" content="<? echo txtpodcast4($row_episodio['metakeywords']); ?>"/>
    <? } else { ?>
		<? if($row_podcastlist['metakeywords']!="") { ?>
    		<meta name="keywords" content="<? echo txtpodcast4($row_podcastlist['metakeywords']); ?>"/>
		<? } ?>
	<? } ?>

<? } else { ?>
	
    <meta property="og:title" content="<? if($row_podcastlist['titulo']!="") { echo txtpodcast3($row_podcastlist['titulo']); } ?>" />
    <meta name="subject" content="<? if($row_podcastlist['titulo']!="") { echo txtpodcast3($row_podcastlist['titulo']); } ?>">
      
	<? if($row_podcastlist['descricao']!="") { ?>
		<meta property="og:description" content="<?  echo txtpodcast3($row_podcastlist['descricao']); ?>"/>
		<meta name="description" content="<? echo txtpodcast3($row_podcastlist['descricao']); ?>"/>
	<? } ?>

	<? if($row_podcastlist['metakeywords']!="") { ?>
    	<meta name="keywords" content="<? echo txtpodcast4($row_podcastlist['metakeywords']); ?>"/>
	<? } ?>

<? } ?>
</head>
<body>
<? if($row_definicoes['googletagmanager']!="") { ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<? echo stripslashes($row_definicoes['googletagmanager']); ?>"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<? } ?>
<img src="<? echo txtpodcast3($row_podcastlist['imagem']); ?>" id="logotipo" <? if($row_podcastlist['altimg']!="") { ?>alt="<? echo stripslashes($row_podcastlist['altimg']); ?>"<? } ?>/>

<div id="info_podcast">
	<? if($row_podcastlist['titulo']!="") { echo txtpodcast3($row_podcastlist['titulo'])."<br />"; } ?>
	<? if($row_podcastlist['subtitulo']!="") { echo txtpodcast3($row_podcastlist['subtitulo'])."<br />"; } ?>
	<? if($row_podcastlist['descricao']!="") { echo txtpodcast3($row_podcastlist['descricao'])."<br />"; } ?><br />
	<? if($row_podcastlist['nome_autor']!="") { echo "Autor: ".txtpodcast3($row_podcastlist['nome_autor'])."<br />"; } ?>
	<? if($row_podcastlist['email']!="") { echo "E-mail: ".txtpodcast3($row_podcastlist['email'])."<br />"; } ?>
	<? if($row_itempodcast['id']!="") { ?>Última atualização: <? echo date("d.m.Y H:i", $row_itempodcast['ultima_atualizacao'])."<br />"; ?><? } ?>
    
    
	<a href="http://subscribeonandroid.com/podcasts.agenciaradioweb.com.br/plataforma_podcast.php?id=<? echo txtpodcast3($row_podcastlist['id']); ?>" target="_blank" id="android">
		Android
	</a>

	<? if($row_podcastlist['spotify']!="") { ?>
	<a href="https://open.spotify.com/show/<? echo txtpodcast3($row_podcastlist['spotify']); ?>" target="_blank" id="spotify">
		https://open.spotify.com/show/<? echo txtpodcast3($row_podcastlist['spotify']); ?>
	</a>
    <? } ?>
    
	<a href="http://podcasts.agenciaradioweb.com.br/plataforma_podcast.php?id=<? echo txtpodcast3($row_podcastlist['id']); ?>" target="_blank" id="RSS">
		RSS
	</a>
    
    <a href="https://subscribebyemail.com//podcasts.agenciaradioweb.com.br/plataforma_podcast.php?id=<? echo txtpodcast3($row_podcastlist['id']); ?>" target="_blank" id="poremail">Receba por E-mail</a>
    
    <? if($row_podcastlist['googlepodcasts']!="") { ?>
    <a href="https://podcasts.google.com/?feed=<? echo txtpodcast3($row_podcastlist['googlepodcasts']); ?>" target="_blank" id="googlepodcast">Google</a>
    <? } ?>
    
    <? if($row_podcastlist['apple_podcast']!="") { ?>
    <a href="<? echo txtpodcast3($row_podcastlist['apple_podcast']); ?>" target="_blank" id="apple_podcast">Apple Podcasts</a>
    <? } ?>
    
    <? if($row_podcastlist['deezer']!="") { ?>
    <a href="<? echo txtpodcast3($row_podcastlist['deezer']); ?>" target="_blank" id="deezer">Deezer</a>
    <? } ?>
    
    <? if($row_podcastlist['castbox']!="") { ?>
    <a href="<? echo txtpodcast3($row_podcastlist['castbox']); ?>" target="_blank" id="castbox">Castbox</a>
    <? } ?>
</div>

<? if($row_itempodcast['id']!="") { ?>
<? if($row_episodio['id']=="") { ?>
<audio id="audio" controls="controls" src="<? if($row_itempodcast['iddrive']=="") { ?><? echo txtpodcast($row_itempodcast['url']); ?><? } else { ?>http://chtbl.com/track/47D592/podcasts.agenciaradioweb.com.br/audios/<? echo txtpodcast($row_itempodcast['iddrive']); ?>.mp3<? } ?>"></audio>
<? } else { ?>
<audio id="audio" controls="controls" src="<? if($row_episodio['iddrive']=="") { ?><? echo txtpodcast($row_episodio['url']); ?><? } else { ?>http://chtbl.com/track/47D592/podcasts.agenciaradioweb.com.br/audios/<? echo txtpodcast($row_episodio['iddrive']); ?>.mp3<? } ?>"></audio>
<? } ?> 

<? if ($row_episodio['iddrive']!="") { ?>
    <div id="item_podcast" style="background-color:#6FC">
		<div id="materia_info"><? echo date("d.m.Y H:i", $row_episodio['ultima_atualizacao']); ?> | <? echo stripslashes($row_episodio['duracao']); ?> | <? echo txtpodcast4($row_episodio['autor']); ?></div>
        <div id="manchete"><? echo txtpodcast4($row_episodio['manchete']); ?></div>
        <div id="descricao"><? echo txtpodcast4($row_episodio['descricao']); ?></div>
        <? if($row_episodio['iddrive']=="") { ?>
        <a href="javascript:play_audio('<? echo txtpodcast($row_episodio['url']); ?>')" class="ouvir">Ouvir a  Mat&eacute;ria</a>
        <? } else { ?>
        <a href="javascript:play_audio('http://chtbl.com/track/47D592/podcasts.agenciaradioweb.com.br/audios/<? echo txtpodcast($row_episodio['iddrive']); ?>.mp3')" class="ouvir">Ouvir a  Mat&eacute;ria</a>
        <? } ?>
        <a href="javascript:parar_audio();" class="pausar">Pausar a R&aacute;dio</a>
     </div>
<?php } ?>


   
<?php  do { if ($row_itempodcast['iddrive']!="") { ?>
    <div id="item_podcast">
		<div id="materia_info"><? echo date("d.m.Y H:i", $row_itempodcast['ultima_atualizacao']); ?> | <? echo stripslashes($row_itempodcast['duracao']); ?> | <? echo txtpodcast4($row_itempodcast['autor']); ?></div>
        <div id="manchete"><? echo txtpodcast4($row_itempodcast['manchete']); ?></div>
        <div id="descricao"><? echo txtpodcast4($row_itempodcast['descricao']); ?></div>
        <? if($row_itempodcast['iddrive']=="") { ?>
        <a href="javascript:play_audio('<? echo txtpodcast($row_itempodcast['url']); ?>')" class="ouvir">Ouvir a  Mat&eacute;ria</a>
        <? } else { ?>
        <a href="javascript:play_audio('http://chtbl.com/track/47D592/podcasts.agenciaradioweb.com.br/audios/<? echo txtpodcast($row_itempodcast['iddrive']); ?>.mp3')" class="ouvir">Ouvir a  Mat&eacute;ria</a>
        <? } ?>
        <a href="javascript:parar_audio();" class="pausar">Pausar a R&aacute;dio</a>
     </div>
<?php } } while ($row_itempodcast = mysqli_fetch_assoc($itempodcast)); ?>
<? } ?>
</body>
</html>

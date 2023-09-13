<?php 
require_once('Connections/conectar.php');
require_once('includes/funcoes.php');

$currentPage = $_SERVER["PHP_SELF"];

// DEFINIÇÕES GERAIS DA RÁDIO
mysqli_select_db($conectar,$database_conectar);
$query_definicoes = "SELECT * FROM radio_definicoes";
$definicoes = mysqli_query($conectar, $query_definicoes);
$row_definicoes = mysqli_fetch_assoc($definicoes);

// LISTA DE PODCASTS
mysqli_select_db($conectar, $database_conectar);
$query_podcasts = "SELECT * FROM radio_podcasts";
$podcasts = mysqli_query($conectar, $query_podcasts);
$row_podcasts = mysqli_fetch_assoc($podcasts);

?><!doctype html>
<html>
<head>
<script async src="https://www.googletagmanager.com/gtag/js?id=<? echo stripslashes($row_definicoes['analytics']); ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', '<? echo stripslashes($row_definicoes['analytics']); ?>');
</script>

<meta charset="iso-8859-1">
<meta http-equiv="Content-Language" content="pt-br">
<title><? echo stripslashes($row_definicoes['nome_radio']); ?></title>
<meta property="og:type" content="website" /> 
<meta property="og:title" content="<? echo stripslashes($row_definicoes['nome_radio']); ?>" /> 
<meta property="og:image" content="<? echo stripslashes($row_definicoes['url_radio']); ?>/extras/logo_facebook2.png" /> 
<meta property="og:description" content="<? echo $content; ?>"/> 
<script src="js/jquery.js"></script>
<script src="js/funcoes.js"></script>
<link rel="stylesheet" href="extras/podcast.css">
</head>
<body class="logotipo_lista">

<? do { ?>
	<? if($row_podcasts['imagem']!="") { ?><a href="podcast/<? echo $row_podcasts['id']; ?>/<? echo amigaveis(utf8_encode($row_podcasts['titulo'])); ?>"><img src="<? echo $row_podcasts['imagem']; ?>" 
    <? if($row_podcasts['altimg']!="") { ?>alt="<? echo stripslashes($row_podcasts['altimg']); ?>"<? } ?>/></a><? } ?>
<?php } while ($row_podcasts = mysqli_fetch_assoc($podcasts)); ?>


<? if($row_definicoes['expediente_texto']!="" or $row_definicoes['aradio_texto']!="" or $row_botoes['id']!="") { ?>
<footer>
	<? if($row_definicoes['expediente_texto']!="") { ?>
	<section id="expediente">
		<h1 id="expediente_titulo">Expediente</h1>
		<h2 id="expediente_texto"><? echo stripslashes($row_definicoes['expediente_texto']); ?></h2>
    </section>
    <? } ?>
    <? if($row_definicoes['aradio_texto']!="") { ?>
    <section id="a_radio">
		<h1 id="a_radio_titulo">A Rádio</h1>
		<h2 id="a_radio_texto"><? echo stripslashes($row_definicoes['aradio_texto']); ?></h2>
    </section>
    <? } ?>
    <? if($row_definicoes['contatos_texto']!="") { ?>
    <section id="contatos_radio">
		<h1 id="contatos_radio_titulo">Contatos</h1>
		<h2 id="contatos_radio_texto"><? echo stripslashes($row_definicoes['contatos_texto']); ?></h2>
    </section>
    <? } ?>
    <? if($row_botoes['id']!="") { ?>
    <section id="informacoes_adicionais">
    	<?php do { ?>
		<a href="<? echo stripslashes($row_botoes['url']); ?>" <? if($row_botoes['janela']==2) { ?>target="_blank" <? } ?>
        id="<? echo retiraacentos($row_botoes['nome']); ?>"><? echo stripslashes($row_botoes['nome']); ?>
        </a>
        <?php } while ($row_botoes = mysqli_fetch_assoc($botoes));  ?>
    </section>
    <? } ?>
    
</footer>
<? } ?>

</body>
</html>
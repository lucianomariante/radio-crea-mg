<?php 
require_once('Connections/conectar.php');
require_once('includes/funcoes.php');

$currentPage = $_SERVER["PHP_SELF"];

// DEFINIÇÕES GERAIS DA RÁDIO
mysqli_select_db($conectar,$database_conectar);
$query_definicoes = "SELECT * FROM radio_definicoes";
$definicoes = mysqli_query($conectar,$query_definicoes);
$row_definicoes = mysqli_fetch_assoc($definicoes);

// COMENTÁRIOS
$maxRows_comentarios = 20;
$pageNum_comentarios = 0;
if (isset($_GET['pageNum_comentarios'])) {
  $pageNum_comentarios = $_GET['pageNum_comentarios'];
}
$startRow_comentarios = $pageNum_comentarios * $maxRows_comentarios;

mysqli_select_db($conectar,$database_conectar);
$query_comentarios = "SELECT * FROM radio_comentarios where aprovado = 1 ORDER BY data desc, id DESC";
$query_limit_comentarios = sprintf("%s LIMIT %d, %d", $query_comentarios, $startRow_comentarios, $maxRows_comentarios);
$comentarios = mysqli_query($conectar,$query_limit_comentarios);
$row_comentarios = mysqli_fetch_assoc($comentarios);

if (isset($_GET['totalRows_comentarios'])) {
  $totalRows_comentarios = $_GET['totalRows_comentarios'];
} else {
  $all_comentarios = mysqli_query($conectar,$query_comentarios);
  $totalRows_comentarios = mysqli_num_rows($all_comentarios);
}
$totalPages_comentarios = ceil($totalRows_comentarios/$maxRows_comentarios)-1;

$queryString_comentarios = "";

if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();

  foreach ($params as $param) {
    if (stristr($param, "pageNum_comentarios") == false && stristr($param, "totalRows_comentarios") == false) {
      array_push($newParams, $param);
    }
  }

  if (count($newParams) != 0) {
    $queryString_comentarios = "" . implode("&", $newParams);
  }
}

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
<meta property="og:image" content="<? echo stripslashes($row_definicoes['url_radio']); ?>/extras/logo_facebook.png" /> 
<meta property="og:description" content="<? echo $content; ?>"/> 
<? require_once('extras/extras.php'); ?>
<style type="text/css">

body {
	margin-left: 15px;
	margin-top: 15px;
	margin-right: 15px;
	margin-bottom: 15px;
	background-image:none;
	background-color:#ffffff;
}
</style>
</head>

<body>
<section id="todos_comentarios">
    <h1>Coment&aacute;rios:</h1>

<? do { ?>	
		<article id="comentario_<?php echo $row_comentarios['id']; ?>">
			<h1><?php echo stripslashes(convdata($row_comentarios['data'],1)); ?></h1>
			<h2><?php echo stripslashes(htmlXentities($row_comentarios['nome'])); ?></h2>
			<h3><?php echo stripslashes(htmlXentities($row_comentarios['comentario'])); ?></h3>
		</article>
<?php } while ($row_comentarios = mysqli_fetch_assoc($comentarios)); ?>


		<nav id="navegacao_comentarios">
			<? if($pageNum_comentarios > 0) { ?>
            <a href="comentarios_full.php?pageNum_comentarios=0"><div id="primeira_pagina">Primeira P&aacute;gina</div></a>
			<? } else { ?>
            <div id="primeira_pagina" class="alphazero">Primeira P&aacute;gina</div>
			<? } ?>
			<? if($pageNum_comentarios > 0) { ?>
            <a href="comentarios_full.php?pageNum_comentarios=<? echo $pageNum_comentarios - 1; ?>"><div id="pagina_anterior">P&aacute;gina Anterior</div></a>
			<? } else { ?>
            <div id="pagina_anterior" class="alphazero">P&aacute;gina Anterior</div>
			<? } ?>
			<? if($pageNum_comentarios < $totalPages_comentarios) { ?>
            <a href="comentarios_full.php?pageNum_comentarios=<? echo $pageNum_comentarios + 1; ?>"><div id="proxima_pagina">Pr&oacute;xima P&aacute;gina</div></a>
			<? } else { ?>
            <div id="proxima_pagina" class="alphazero">Pr&oacute;xima P&aacute;gina</div>
			<? } ?> 
			<? if($pageNum_comentarios < $totalPages_comentarios) { ?>
            <a href="comentarios_full.php?pageNum_comentarios=<? echo $totalPages_comentarios; ?>"><div id="ultima_pagina">&Uacute;ltima P&aacute;gina</div></a>
			<? } else { ?>
            <div id="ultima_pagina" class="alphazero">&Uacute;ltima P&aacute;gina</div>
			<? } ?>
		</nav>
    
        
        <h4><? echo $pageNum_comentarios + 1; ?> de <? echo $totalPages_comentarios + 1; ?></h4>
       
        
		<input name="pagcoment_atual" type="hidden" id="pagcoment_atual" value="<? echo $pageNum_comentarios; ?>">
    	<input name="pagcoment_totais" type="hidden" id="pagcoment_totais" value="<? echo $totalPages_comentarios; ?>">
    	<input name="pagcoment_query" type="hidden" id="pagcoment_query" value="<? echo $queryString_comentarios; ?>">
 
</section>  
</body>
</html>
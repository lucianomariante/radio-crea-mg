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
$maxRows_comentarios = $row_definicoes['comentarios_num'];
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
?>

    <h1>Coment&aacute;rios</h1>

		<div id="lista_de_comentarios_conteudo">
<? do { ?>	
		<article id="comentario_<?php echo $row_comentarios['id']; ?>">
        	<div>
				<h1><?php echo stripslashes(convdata($row_comentarios['data'],1)); ?></h1>
            	<h1><?php echo stripslashes(htmlXentities($row_comentarios['nome'])); ?></h1>
				<h2><?php echo stripslashes(htmlXentities($row_comentarios['extra'])); ?></h2>
				<h3><?php echo stripslashes(htmlXentities($row_comentarios['comentario'])); ?></h3>
            </div>
		</article>
<?php } while ($row_comentarios = mysqli_fetch_assoc($comentarios)); ?>
		</div>

<? if($row_definicoes['comentarios_paginacao']==1) { ?>
		<nav id="navegacao_comentarios">
			<a href="javascript:paginacao_coment(1)" id="primeira_pagina">Primeira P&aacute;gina</a> 
			<a href="javascript:paginacao_coment(2)" id="pagina_anterior">P&aacute;gina Anterior</a> 
			<a href="javascript:paginacao_coment(3)" id="proxima_pagina">Pr&oacute;xima P&aacute;gina</a> 
			<a href="javascript:paginacao_coment(4)" id="ultima_pagina">&Uacute;ltima P&aacute;gina</a>
		</nav>
    
        <? if($row_definicoes['comentarios_pag_status']==1) { ?> 
        <h4><? echo $pageNum_comentarios + 1; ?> de <? echo $totalPages_comentarios + 1; ?></h4>
        <? } ?>
        
		<input name="pagcoment_atual" type="hidden" id="pagcoment_atual" value="<? echo $pageNum_comentarios; ?>">
    	<input name="pagcoment_totais" type="hidden" id="pagcoment_totais" value="<? echo $totalPages_comentarios; ?>">
    	<input name="pagcoment_query" type="hidden" id="pagcoment_query" value="<? echo $queryString_comentarios; ?>">
<? } ?>   
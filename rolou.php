<? require_once('Connections/conectar.php'); 
require('includes/funcoes.php');

$currentPage = $_SERVER["PHP_SELF"];

// DEFINIÇÕES GERAIS DA RÁDIO
mysqli_select_db($conectar,$database_conectar);
$query_definicoes = "SELECT * FROM radio_definicoes";
$definicoes = mysqli_query($conectar,$query_definicoes);
$row_definicoes = mysqli_fetch_assoc($definicoes);

// PROGRAMAÇÃO DA RÁDIO
$maxRows_progradio = $row_definicoes['tocadas_num'];
$pageNum_progradio = 0;
if (isset($_GET['pageNum_progradio'])) {
  $pageNum_progradio = $_GET['pageNum_progradio'];
}
$startRow_progradio = $pageNum_progradio * $maxRows_progradio;

mysqli_select_db($conectar,$database_conectar);
$query_progradio = "SELECT * FROM onlines_programacao ORDER BY id DESC";
$query_limit_progradio = sprintf("%s LIMIT %d, %d", $query_progradio, $startRow_progradio, $maxRows_progradio);
$progradio = mysqli_query($conectar,$query_limit_progradio);
$row_progradio = mysqli_fetch_assoc($progradio);
$totalRows_progradio = mysqli_num_rows($all_progradio);

if (isset($_GET['totalRows_progradio'])) {
  $totalRows_progradio = $_GET['totalRows_progradio'];
} else {
  $all_progradio = mysqli_query($conectar,$query_progradio);
  $totalRows_progradio = mysqli_num_rows($all_progradio);
}
$totalPages_progradio = ceil($totalRows_progradio/$maxRows_progradio)-1;

$queryString_progradio = "";

if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();

  foreach ($params as $param) {
    if (stristr($param, "pageNum_progradio") == false && stristr($param, "totalRows_progradio") == false) {
      array_push($newParams, $param);
    }
  }

  if (count($newParams) != 0) {
    $queryString_progradio = "" . implode("&", $newParams);
  }
}
?>
<h3>Voc&ecirc; ouviu na <? echo stripslashes(htmlXentities($row_definicoes['nome_radio'])); ?></h3>

	<? do {  ?>
		<article id="audio_executado_<?php echo $row_progradio['id']; ?>">
		<? if($row_progradio['musica']!="</titulo></musica></page>") { ?>
			<h1><? echo htmlXentities($row_progradio['musica']); ?></h1>
		<? } else { ?>
			<h1><? echo htmlXentities(stripslashes($row_definicoes['nome_radio'])); ?></h1>
		<? } ?>
			<h2><? echo htmlXentities($row_progradio['artista']); ?></h2>
        </article>
	<?php } while ($row_progradio = mysqli_fetch_assoc($progradio));  ?>

    <? if($row_definicoes['tocadas_paginacao']==1) { ?>
        <nav id="navegacao_audios_executados">
  			<a href="javascript:paginacao_tocou(1)" id="primeira_pagina">Primeira P&aacute;gina</a> 
  			<a href="javascript:paginacao_tocou(2)" id="pagina_anterior">P&aacute;gina Anterior</a> 
  			<a href="javascript:paginacao_tocou(3)" id="proxima_pagina">Pr&oacute;xima P&aacute;gina</a> 
  			<a href="javascript:paginacao_tocou(4)" id="ultima_pagina">&Uacute;ltima P&aacute;gina</a>
		</nav>
        
        <? if($row_definicoes['tocadas_pag_status']==1) { ?> 
        <h4>P&aacute;gina <? echo $pageNum_progradio + 1; ?> de <? echo $totalPages_progradio + 1; ?></h4>
        <? } ?>
	<? } ?>
	
    <input name="pagtocou_atual" type="hidden" id="pagtocou_atual" value="<? echo $pageNum_progradio; ?>">
    <input name="pagtocou_totais" type="hidden" id="pagtocou_totais" value="<? echo $totalPages_progradio; ?>">
    <input name="pagtocou_query" type="hidden" id="pagtocou_query" value="<? echo $queryString_progradio; ?>">
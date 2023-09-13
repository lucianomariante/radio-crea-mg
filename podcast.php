<?php 
require_once('Connections/conectar.php');
require_once('includes/funcoes.php');

$currentPage = $_SERVER["PHP_SELF"];

// DEFINIÇÕES GERAIS DA RÁDIO
mysqli_select_db($conectar,$database_conectar);
$query_definicoes = "SELECT * FROM radio_definicoes";
$definicoes = mysqli_query($conectar,$query_definicoes);
$row_definicoes = mysqli_fetch_assoc($definicoes);

if($_GET['categoria']!="") { $idcategoria = (int) $_GET['categoria']; $enxerto .= "and radio_noticias.idcategoria = '".$idcategoria."'"; } else { $idcategoria = 0; }

if($_GET['busca']!="") {  
	
	$enxerto .= "and (radio_noticias.manchete like '%".mysqli_real_escape_string($conectar,htmlentities($_GET['busca']))."%'  or radio_noticias.manchete like '%".mysqli_real_escape_string($conectar,utf8_decode($_GET['busca']))."%'
	or radio_noticias.autor like '%".mysqli_real_escape_string($conectar,htmlentities($_GET['busca']))."%' or radio_noticias.autor like '%".mysqli_real_escape_string($conectar,utf8_decode($_GET['busca']))."%' "; 

	$buscafonte = mysqli_real_escape_string($conectar,htmlentities($_GET['busca']));
	$buscafonte2 = mysqli_real_escape_string($conectar,utf8_decode($_GET['busca']));
	$query_agregafonte = "SELECT * FROM radio_fontes where (cargo like '%".$buscafonte."%' or nome like '%".$buscafonte."%') or (cargo like '%".$buscafonte2."%' or nome like '%".$buscafonte2."%')";
	$agregafonte = mysqli_query($conectar,$query_agregafonte);
	$row_agregafonte = mysqli_fetch_assoc($agregafonte);
	if($row_agregafonte['id']!="") {
	do {
	$enxerto .=" or radio_noticias.id = '".$row_agregafonte['idmateria']."' ";
	} while ($row_agregafonte = mysqli_fetch_assoc($agregafonte));
	}
	$enxerto .=") ";
}

//LISTA DE NOTÍCIAS
$maxRows_materiaslistac = $row_definicoes['noticias_num'];
$pageNum_materiaslistac = 0;
if (isset($_GET['pageNum_materiaslistac'])) {
  $pageNum_materiaslistac = $_GET['pageNum_materiaslistac'];
}
$startRow_materiaslistac = $pageNum_materiaslistac * $maxRows_materiaslistac;

mysqli_select_db($conectar,$database_conectar);
$query_materiaslistac = "SELECT radio_noticias.*, radio_podcasts.nome_podcast FROM radio_noticias, radio_podcasts where radio_noticias.idcategoria = radio_podcasts.id $enxerto order by data desc,  radio_noticias.idradioweb desc, radio_noticias.id DESC";
$query_limit_materiaslistac = sprintf("%s LIMIT %d, %d", $query_materiaslistac, $startRow_materiaslistac, $maxRows_materiaslistac);
$materiaslistac = mysqli_query($conectar,$query_limit_materiaslistac);
$row_materiaslistac = mysqli_fetch_assoc($materiaslistac);
if($_GET['categoria']!="" and $row_definicoes['modelo_podcasts']!=2) {
$npd = $row_materiaslistac['idcategoria'];
} else {
$npd = 0;	
}

if($_GET['categoria']!="") {
$query_podcastlist = "SELECT * FROM radio_podcasts where id = '".mysqli_real_escape_string($conectar,$_GET['categoria'])."'";
$podcastlist = mysqli_query($conectar,$query_podcastlist);
$row_podcastlist = mysqli_fetch_assoc($podcastlist);
$noticia_titulo = $row_podcastlist['nome_podcast'];
} else {
$noticia_titulo = "Not&iacute;cias";	
}

if (isset($_GET['totalRows_materiaslistac'])) {
  $totalRows_materiaslistac = $_GET['totalRows_materiaslistac'];
} else {
  $all_materiaslistac = mysqli_query($conectar,$query_materiaslistac);
  $totalRows_materiaslistac = mysqli_num_rows($all_materiaslistac);
}
$totalPages_materiaslistac = ceil($totalRows_materiaslistac/$maxRows_materiaslistac)-1;


$queryString_materiaslistac = "";

if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();

  foreach ($params as $param) {
    if (stristr($param, "pageNum_materiaslistac") == false && stristr($param, "totalRows_materiaslistac") == false) {
      array_push($newParams, $param);
    }
  }

  if (count($newParams) != 0) {
    $queryString_materiaslistac = "" . implode("&", $newParams);
  }
}

//$queryString_materiaslistac = sprintf("&totalRows_materiaslistac=%d%s", $totalRows_materiaslistac, $queryString_materiaslistac);

//echo $query_agregafonte;

if($_GET['categoria']!="") { $nome_pod = "navegacao_".retiraacentos($row_materiaslistac['nome_podcast']); } else { $nome_pod = "navegacao_noticias"; } ?>

<h1 class="conteiner_titulo_<? echo $idcategoria; ?>"><a name="lista_audios"><? echo $noticia_titulo; ?></a></h1>

<? if($row_materiaslistac['id']!="") { ?>
	<div id="conteiner_noticias_<? echo $npd; ?>" class="conteiner_noticias_<? echo $idcategoria; ?>">
	<?php  do { ?>
    
        <article id="audio_<?php echo $row_materiaslistac['id']; ?>">
			<div id="conteiner_article">

	  	  		<h1><?php echo convdata($row_materiaslistac['data'],1); ?></h1>
            	<h2><?php echo stripslashes($row_materiaslistac['autor']); ?></h2>
				<h3><?php echo htmlentities($row_materiaslistac['duracao']); ?></h3>
            	<h4><?php echo stripslashes($row_materiaslistac['manchete']); ?></h4>

				<? if($row_materiaslistac['audio']!="") { ?>
            
            		<a href="javascript:play_audio('audios/<?php echo $row_materiaslistac['audio']; ?>')" class="ouvir">Ouvir a  Matéria</a>
        			<a href="audios/<?php echo $row_materiaslistac['audio']; ?>" target="_blank" class="baixar">Baixar a Matéria </a>
                	<a href="javascript:share_audio('<?php echo $row_materiaslistac['id']; ?>')" class="compartilhar">Compartilhar no Facebook </a>
                    
            	<? } elseif($row_materiaslistac['iddrive']!="") { ?>
            
            		<a href="javascript:play_audio('https://drive.google.com/a/agenciaradioweb.com.br/uc?id=<?php echo $row_materiaslistac['iddrive']; ?>')" class="ouvir">Ouvir a  Matéria</a>
        			<a href="https://drive.google.com/a/agenciaradioweb.com.br/uc?id=<?php echo $row_materiaslistac['iddrive']; ?>&export=download" target="_blank" class="baixar">Baixar a Matéria </a>
                	<a href="javascript:share_audio('<?php echo $row_materiaslistac['id']; ?>')" class="compartilhar">Compartilhar no Facebook </a>
           
            	<? } else { ?>
            
            		<a href="javascript:play_audio('<?php echo $row_materiaslistac['url']; ?>')" class="ouvir">Ouvir a  Matéria</a>
        			<a href="<?php echo $row_materiaslistac['url']; ?>" target="_blank" class="baixar">Baixar a Matéria </a>
                	<a href="javascript:share_audio('<?php echo $row_materiaslistac['id']; ?>')" class="compartilhar">Compartilhar no Facebook </a>
           
            	<? } ?>
                
             </div>   
  		</article>
         
	<?php } while ($row_materiaslistac = mysqli_fetch_assoc($materiaslistac)); ?>
    </div>

<? if($row_definicoes['noticias_paginacao']==1) { ?> 
        <nav id="navegacao_noticias">
  			<a href="javascript:paginacao_not(1,<? echo $npd; ?>)" id="primeira_pagina">Primeira P&aacute;gina</a> 
  			<a href="javascript:paginacao_not(2,<? echo $npd; ?>)" id="pagina_anterior">P&aacute;gina Anterior</a> 
  			<a href="javascript:paginacao_not(3,<? echo $npd; ?>)" id="proxima_pagina">Pr&oacute;xima P&aacute;gina</a> 
  			<a href="javascript:paginacao_not(4,<? echo $npd; ?>)" id="ultima_pagina">&Uacute;ltima P&aacute;gina</a>
		</nav>
        
        <? if($row_definicoes['noticias_pag_status']==1) { ?> 
        <h5>P&aacute;gina <? echo $pageNum_materiaslistac + 1; ?> de <? echo $totalPages_materiaslistac + 1; ?></h5>
        <? } ?>
<? } ?>
    
    <input name="pagnot_atual" type="hidden" id="pagnot_atual" value="<? echo $pageNum_materiaslistac; ?>" class="pagnot_atual_<? echo $npd; ?>">
    <input name="pagnot_totais" type="hidden" id="pagnot_totais" value="<? echo $totalPages_materiaslistac; ?>" class="pagnot_totais_<? echo $npd; ?>">
    <input name="pagnot_query" type="hidden" id="pagnot_query" value="<? echo $queryString_materiaslistac; ?>" class="pagnot_query_<? echo $npd; ?>">
    


<? } else { ?>
<h6>N&atilde;o h&aacute; resultados para a sua busca</h6>
<? } ?>
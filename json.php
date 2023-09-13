<?php     header("Content-type:application/json");
//header('Content-type: text/html; charset=utf-8');
require_once('Connections/conectar.php');
require_once('includes/funcoes.php');

$currentPage = $_SERVER["PHP_SELF"];

// DEFINIÇÕES GERAIS DA RÁDIO
mysqli_select_db($conectar,$database_conectar);
$query_definicoes = "SELECT * FROM radio_definicoes";
$definicoes = mysqli_query($conectar,$query_definicoes);
$row_definicoes = mysqli_fetch_assoc($definicoes);

if($_GET['categoria']!="") { $idcategoria = (int) $_GET['categoria']; $enxerto .= "and radio_noticias.idcategoria = '".$idcategoria."'"; } else { $idcategoria = 0; }

if($_GET['busca']!="") {  $enxerto .= "and radio_noticias.manchete like '%".mysqli_real_escape_string($conectar,$_GET['busca'])."%' or radio_noticias.autor like '%".mysqli_real_escape_string($conectar,$_GET['busca'])."%'"; }

//LISTA DE NOTÍCIAS
$maxRows_materiaslistac = $row_definicoes['noticias_num'];
$pageNum_materiaslistac = 0;
if (isset($_GET['pageNum_materiaslistac'])) {
  $pageNum_materiaslistac = $_GET['pageNum_materiaslistac'];
}
$startRow_materiaslistac = $pageNum_materiaslistac * $maxRows_materiaslistac;

mysqli_select_db($conectar,$database_conectar);
$query_materiaslistac = "SELECT radio_noticias.*, radio_podcasts.nome_podcast FROM radio_noticias, radio_podcasts where radio_noticias.idcategoria = radio_podcasts.id $enxerto order by data desc,  radio_noticias.idradioweb, radio_noticias.id DESC";
$query_limit_materiaslistac = sprintf("%s LIMIT %d, %d", $query_materiaslistac, $startRow_materiaslistac, $maxRows_materiaslistac);
$materiaslistac = mysqli_query($conectar,$query_limit_materiaslistac);
$row_materiaslistac = mysqli_fetch_assoc($materiaslistac);
if($_GET['categoria']!="" and $row_definicoes['modelo_podcasts']!=2) {
$npd = $row_materiaslistac['idcategoria'];
} else {
$npd = 0;	
}

if($_GET['categoria']!="") {
$noticia_titulo = $row_materiaslistac['nome_podcast'];
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

if($_GET['categoria']!="") { $nome_pod = retiraacentos($row_materiaslistac['nome_podcast']); } else { $nome_pod = "Noticias"; } ?>
{
"title": "<? echo retiraacentos(stripslashes($row_definicoes['nome_radio'])); ?> Podcast",

	"<? echo $nome_pod; ?>": [
				<?php do { ?>
                
					{
	  	  					"Id": "<?php echo $row_materiaslistac['id']; ?>",
	  	  					"Id_Radioweb": "<?php echo $row_materiaslistac['idradioweb']; ?>",
	  	  					"Data": "<?php echo convdata($row_materiaslistac['data'],1); ?>",
            				"Autor": "<?php echo html_entity_decode(stripslashes($row_materiaslistac['autor'])); ?>",
							"Duracao": "<?php echo htmlentities($row_materiaslistac['duracao']); ?>",
            				"Manchete": "<?php echo html_entity_decode(stripslashes($row_materiaslistac['manchete'])); ?>",
							<? if($row_materiaslistac['audio']!="") { ?>
"URL": "<? echo stripslashes($row_definicoes['url_radio']); ?>/audios/<?php echo $row_materiaslistac['audio']; ?>",
            				<? } else { ?>
"URL": "<?php echo $row_materiaslistac['url']; ?>",
							"Compartilhamento": "<? echo stripslashes($row_definicoes['url_radio']); ?>/not/<?php echo $row_materiaslistac['id']; ?>"       
					<? } ?>}<? $i = $i+1; if($row_definicoes['noticias_num'] > $i) { echo ","; } ?>
				<?php } while ($row_materiaslistac = mysqli_fetch_assoc($materiaslistac)); ?>
                
                ]
}
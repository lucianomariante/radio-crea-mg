<? 
require_once('../../includes/login.php');
require_once('../../includes/funcoes.php');
require_once('../../Connections/conectar.php');

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_noticias = 50000;
$pageNum_noticias = 0;
if (isset($_GET['pageNum_noticias'])) {
  $pageNum_noticias = $_GET['pageNum_noticias'];
}
$startRow_noticias = $pageNum_noticias * $maxRows_noticias;

if($_GET['id']!="") { $enxerto = " and radio_noticias.idcategoria = ".$_GET['id']; 

$enxerto2 = "&idcategoria=".$_GET['id'];

}

mysqli_select_db($conectar,$database_conectar);
$query_noticias = "SELECT radio_noticias.*, radio_podcasts.nome_podcast FROM radio_noticias, radio_podcasts where radio_noticias.idcategoria = radio_podcasts.id $enxerto order by data desc, idradioweb desc, radio_noticias.id DESC";
$query_limit_noticias = sprintf("%s LIMIT %d, %d", $query_noticias, $startRow_noticias, $maxRows_noticias);
$noticias = mysqli_query($conectar,$query_limit_noticias);
$row_noticias = mysqli_fetch_assoc($noticias);

if (isset($_GET['totalRows_noticias'])) {
  $totalRows_noticias = $_GET['totalRows_noticias'];
} else {
  $query_noticiasCount = "SELECT count(*) as total FROM radio_noticias, radio_podcasts where radio_noticias.idcategoria = radio_podcasts.id $enxerto order by data desc, radio_noticias.id DESC";
  $all_noticias = mysqli_query($conectar,$query_noticiasCount);
  $row_noticiasCount = mysqli_fetch_assoc($all_noticias);
  $totalRows_noticias = $row_noticiasCount['total']; 
}
$totalPages_noticias = ceil($totalRows_noticias/$maxRows_noticias)-1;

$queryString_noticias = "";

if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();

  foreach ($params as $param) {
    if (stristr($param, "pageNum_noticias") == false && stristr($param, "totalRows_noticias") == false) {
      array_push($newParams, $param);
    }
  }

  if (count($newParams) != 0) {
    $queryString_noticias = "" . implode("&", $newParams);
  }
}

?>

Id; Data; Duração; >Autor; Manchete; Podcast; Áudio;<br>

    
    <? do { 
	
	if($row_noticias['audio']!="") { $link = "../../audios/".$row_noticias['audio']; 
	} elseif($row_noticias['iddrive']!="") { $link = "https://drive.google.com/a/agenciaradioweb.com.br/uc?id=".$row_noticias['iddrive']; 
	} else { $link = $row_noticias['url']; }
	
	?>


      <? echo stripslashes($row_noticias['id']); ?>; <? echo stripslashes(convdata($row_noticias['data'],1)); ?>; <? echo stripslashes($row_noticias['duracao']); ?>; <? echo stripslashes($row_noticias['autor']); ?>; <? echo stripslashes($row_noticias['manchete']); ?>; <? echo stripslashes($row_noticias['nome_podcast']); ?>; <? echo $link; ?><br>

	<? } while ($row_noticias = mysqli_fetch_assoc($noticias)); ?>

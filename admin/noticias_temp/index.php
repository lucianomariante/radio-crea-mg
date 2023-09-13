<? 
require_once('../../includes/login.php');
require_once('../../includes/funcoes.php');
require_once('../../Connections/conectar.php');

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_noticias = 50;
$pageNum_noticias = 0;
if (isset($_GET['pageNum_noticias'])) {
  $pageNum_noticias = $_GET['pageNum_noticias'];
}
$startRow_noticias = $pageNum_noticias * $maxRows_noticias;

if($_GET['id']!="") { $enxerto = " and radio_noticias_temp.idcategoria = ".$_GET['id']; 

$enxerto2 = "&idcategoria=".$_GET['id'];

}

mysqli_select_db($conectar,$database_conectar);
$query_noticias = "SELECT radio_noticias_temp.*, radio_podcasts.nome_podcast FROM radio_noticias_temp, radio_podcasts where radio_noticias_temp.idcategoria = radio_podcasts.id $enxerto order by data desc, idradioweb desc, radio_noticias_temp.id DESC";
$query_limit_noticias = sprintf("%s LIMIT %d, %d", $query_noticias, $startRow_noticias, $maxRows_noticias);
$noticias = mysqli_query($conectar,$query_limit_noticias);
$row_noticias = mysqli_fetch_assoc($noticias);

if (isset($_GET['totalRows_noticias'])) {
  $totalRows_noticias = $_GET['totalRows_noticias'];
} else {
  $query_noticiasCount = "SELECT count(*) as total FROM radio_noticias_temp, radio_podcasts where radio_noticias_temp.idcategoria = radio_podcasts.id $enxerto order by data desc, radio_noticias_temp.id DESC";
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
<!doctype html>
<html>
<head>
<meta charset="iso-8859-1">
<title>&Aacute;rea Administrativa</title>
<link rel="stylesheet" href="../estilo.css">
</head>

<body><? include("../cabecalho.php"); ?>
<table align="center" class="lista">
  <tbody>
    <tr>
      <td colspan="12">Not&iacute;cias</td>
    </tr>
    <tr>
      <td colspan="12"><a href="insertform.php">Cadastrar Not&iacute;cia</a></td>
    </tr>
    <? if (!empty($row_noticias['id'])) { ?>
    <tr>
      <td width="1%">Id</td>
      <td>Data</td>
      <td width="1%">Dura&ccedil;&atilde;o</td>
      <td>Autor</td>
      <td>Manchete</td>
      <td>Podcast</td>
      <td width="1%">&Aacute;udio</td>
      <td width="1%">Thumb</td>
      <td width="1%">Fontes</td>
      <td width="1%">Alterar</td>
      <td width="1%">Apagar</td>
      <td width="1%">Publicar</td>
    </tr>
    
    <? do { 
	
	if($row_noticias['audio']!="") { $link = "../../audios/".$row_noticias['audio']; 
	} elseif($row_noticias['iddrive']!="") { $link = "https://drive.google.com/a/agenciaradioweb.com.br/uc?id=".$row_noticias['iddrive']; 
	} else { $link = $row_noticias['url']; }
	
	?>

      <tr <? if($row_noticias['iddrive']=="") { ?>style="background-color:#FF0"<? } ?>>
      <td width="1%" nowrap="nowrap"><? echo stripslashes($row_noticias['id']); ?></td>
      <td nowrap="nowrap"><? echo stripslashes(convdata($row_noticias['data'],1)); ?></td>
      <td width="1%" nowrap="nowrap"><? echo stripslashes($row_noticias['duracao']); ?></td>
      <td nowrap="nowrap"><? echo stripslashes($row_noticias['autor']); ?></td>
      <td nowrap="nowrap"><? echo stripslashes($row_noticias['manchete']); ?></td>
      <td nowrap="nowrap"><? echo stripslashes($row_noticias['nome_podcast']); ?></td>
      <td width="1%" align="center" ><? if($row_noticias['iddrive']!="") { ?><a href="<? echo $link; ?>" target="_blank">Ouvir</a><? } else { ?>-<? } ?></td>
      <td width="1%" align="center" >
	  <? if($row_noticias['thumbnail']!="") { ?><a href="../../thumbnails/<? echo stripslashes($row_noticias['thumbnail']); ?>" target="_blank">Ver</a>
	  <? } else { ?>-<? } ?>
      </td>
      <td width="1%" class="alterar"><a href="../fontes_temp/index.php?id=<? echo stripslashes($row_noticias['id']); echo $enxerto2; ?>">F</a></td>
      <td width="1%" class="alterar"><a href="altform.php?id=<? echo stripslashes($row_noticias['id']); echo $enxerto2; ?>">A</a></td>
      <td width="1%" class="deletar"><a href="delete.php?id=<? echo stripslashes($row_noticias['id']);  echo $enxerto2; ?>">X</a></td>
      <td width="1%" class="deletar"><a href="publicar.php?id=<? echo stripslashes($row_noticias['id']);  echo $enxerto2; ?>">P</a></td>
    </tr>
	<? } while ($row_noticias = mysqli_fetch_assoc($noticias)); ?>
      <tr>
        <td colspan="13" class="contador">Mat&eacute;rias <?php echo ($startRow_noticias + 1) ?> a <?php echo min($startRow_noticias + $maxRows_noticias, $totalRows_noticias) ?> de <?php echo $totalRows_noticias ?></td>
      </tr>
      <tr>
          <td colspan="13"><table border="0" width="50" align="center">
            <tr> 
          <td width="23%" align="center"> <?php if ($pageNum_noticias > 0) { // Show if not first page ?>
            <a href="<?php printf("%s?pageNum_noticias=%d%s", $currentPage, 0, $queryString_noticias); ?>">Primeira </a> 
          <?php } else { ?>Primeira<? } // Show if not first page ?> </td>
          <td width="31%" align="center"> <?php if ($pageNum_noticias > 0) { // Show if not first page ?>
            <a href="<?php printf("%s?pageNum_noticias=%d%s", $currentPage, max(0, $pageNum_noticias - 1), $queryString_noticias); ?>"> Anterior</a> 
          <?php } else { ?>Anterior<? }// Show if not first page ?> </td>
          <td width="23%" align="center"> <?php if ($pageNum_noticias < $totalPages_noticias) { // Show if not last page ?>
            <a href="<?php printf("%s?pageNum_noticias=%d%s", $currentPage, min($totalPages_noticias, $pageNum_noticias + 1), $queryString_noticias); ?>">Pr&oacute;xima</a> 
            <?php } else { ?>Pr&oacute;xima<? } // Show if not last page ?> </td>
          <td width="23%" align="center"> <?php if ($pageNum_noticias < $totalPages_noticias) { // Show if not last page ?>
            <a href="<?php printf("%s?pageNum_noticias=%d%s", $currentPage, $totalPages_noticias, $queryString_noticias); ?>">&Uacute;ltima</a> 
            <?php } else { ?>&Uacute;ltima<? } // Show if not last page ?> </td>
        </tr>
    </table>
</td>
      </tr>
    <? } else { ?>
      <tr>
          <td colspan="13">N&atilde;o h&aacute; registros nessa &aacute;rea</td>
      </tr>
    <? } ?>
  </tbody>
</table>
<? include("../rodape.php"); ?>
</body>
</html>
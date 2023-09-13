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

if($_GET['id']!="") { $enxerto = " radio_fontes.idmateria = ".$_GET['id']; 

$enxerto2 = "&idcategoria=".$_GET['id'];

}

mysqli_select_db($conectar,$database_conectar);
$query_noticias = "SELECT * FROM radio_fontes where $enxerto order by nome DESC";
$query_limit_noticias = sprintf("%s LIMIT %d, %d", $query_noticias, $startRow_noticias, $maxRows_noticias);
$noticias = mysqli_query($conectar,$query_limit_noticias);
$row_noticias = mysqli_fetch_assoc($noticias);

if (isset($_GET['totalRows_noticias'])) {
  $totalRows_noticias = $_GET['totalRows_noticias'];
} else {
  $query_noticiasCount = "SELECT count(*) as total FROM radio_fontes where $enxerto order by nome DESC";
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
      <td colspan="6">Fontes</td>
    </tr>
    <tr>
      <td colspan="6"><a href="insertform.php?idcategoria=<? echo $_GET['id']; ?>">Cadastrar Fonte</a></td>
    </tr>
    <? if (!empty($row_noticias['id'])) { ?>
    <tr>
      <td width="1%">Id</td>
      <td width="33%">Nome</td>
      <td width="33%">Cargo</td>
      <td width="33%">E-mail</td>
      <td width="1%">Alterar</td>
      <td width="1%">Apagar</td>
    </tr>
    
    <? do { 
	
	if($row_noticias['audio']) { $link = "../../audios/".$row_noticias['audio']; } else { $link = $row_noticias['url']; }
	
	?>

      <tr>
      <td width="1%"><? echo stripslashes($row_noticias['id']); ?></td>
      <td width="33%"><? echo stripslashes($row_noticias['nome']); ?></td>
      <td width="33%"><? echo stripslashes($row_noticias['cargo']); ?></td>
      <td width="33%"><? echo stripslashes($row_noticias['email']); ?></td>
      <td width="1%" class="alterar"><a href="altform.php?id=<? echo stripslashes($row_noticias['id']); echo $enxerto2; ?>">A</a></td>
      <td width="1%" class="deletar"><a href="delete.php?id=<? echo stripslashes($row_noticias['id']);  echo $enxerto2; ?>">X</a></td>
    </tr>
	<? } while ($row_noticias = mysqli_fetch_assoc($noticias)); ?>
      <tr>
        <td colspan="7" class="contador">Mat&eacute;rias <?php echo ($startRow_noticias + 1) ?> a <?php echo min($startRow_noticias + $maxRows_noticias, $totalRows_noticias) ?> de <?php echo $totalRows_noticias ?></td>
      </tr>
      <tr>
          <td colspan="7"><table border="0" width="50" align="center">
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
          <td colspan="7">N&atilde;o h&aacute; registros nessa &aacute;rea</td>
      </tr>
    <? } ?>
  </tbody>
</table>
<? include("../rodape.php"); ?>
</body>
</html>
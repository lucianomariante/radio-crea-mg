<? 
require_once('../../includes/login.php');
require_once('../../includes/funcoes.php');
require_once('../../Connections/conectar.php');

$maxRows_podcasts = 50;
$pageNum_podcasts = 0;
if (isset($_GET['pageNum_podcasts'])) {
  $pageNum_podcasts = $_GET['pageNum_podcasts'];
}
$startRow_podcasts = $pageNum_podcasts * $maxRows_podcasts;

mysqli_select_db($conectar,$database_conectar);
$query_podcasts = "SELECT * FROM radio_botoes order by nome DESC";
$query_limit_podcasts = sprintf("%s LIMIT %d, %d", $query_podcasts, $startRow_podcasts, $maxRows_podcasts);
$podcasts = mysqli_query($conectar,$query_limit_podcasts);
$row_podcasts = mysqli_fetch_assoc($podcasts);

if (isset($_GET['totalRows_podcasts'])) {
  $totalRows_podcasts = $_GET['totalRows_podcasts'];
} else {
  $query_podcastsCount = "SELECT count(*) as total FROM radio_botoes order by id DESC";
  $all_podcasts = mysqli_query($conectar,$query_podcastsCount);
  $row_podcastsCount = mysqli_fetch_assoc($all_podcasts);
  $totalRows_podcasts = $row_podcastsCount['total']; 
}
$totalPages_podcasts = ceil($totalRows_podcasts/$maxRows_podcasts)-1;
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
      <td colspan="5">Bot&otilde;es</td>
    </tr>
    <tr>
      <td colspan="5"><a href="insertform.php">Cadastrar Bot&atilde;o</a></td>
    </tr>
    <? if (!empty($row_podcasts['id'])) { ?>
    <tr>
      <td width="1%">Id</td>
      <td>Nome</td>
      <td width="1%">URL</td>
      <td width="1%">Alterar</td>
      <td width="1%">Apagar</td>
    </tr>
    <? do { ?>

      <tr>
      <td width="1%"><? echo stripslashes($row_podcasts['id']); ?></td>
      <td><? echo stripslashes($row_podcasts['nome']); ?></td>
      <td width="1%" nowrap="nowrap"><? echo stripslashes($row_podcasts['url']); ?></td>
      <td width="1%" class="alterar"><a href="altform.php?id=<? echo stripslashes($row_podcasts['id']); ?>" >A</a></td>
      <td width="1%" class="deletar"><a href="delete.php?id=<? echo stripslashes($row_podcasts['id']); ?>" >X</a></td>
    </tr>
	<? } while ($row_podcasts = mysqli_fetch_assoc($podcasts)); ?>
    <tr>
      <td colspan="10" class="contador">Bot&otilde;es   <?php echo ($startRow_podcasts + 1) ?> a <?php echo min($startRow_podcasts + $maxRows_podcasts, $totalRows_podcasts) ?> de <?php echo $totalRows_podcasts ?></td>
    </tr>
    <tr>
          <td colspan="10"><table border="0" width="50" align="center">
            <tr> 
          <td width="23%" align="center"> <?php if ($pageNum_podcasts > 0) { // Show if not first page ?>
            <a href="<?php printf("%s?pageNum_podcasts=%d%s", $currentPage, 0, $queryString_podcasts); ?>">Primeira </a> 
          <?php } else { ?>Primeira<? } // Show if not first page ?> </td>
          <td width="31%" align="center"> <?php if ($pageNum_podcasts > 0) { // Show if not first page ?>
            <a href="<?php printf("%s?pageNum_podcasts=%d%s", $currentPage, max(0, $pageNum_podcasts - 1), $queryString_podcasts); ?>"> Anterior</a> 
          <?php } else { ?>Anterior<? } // Show if not first page ?> </td>
          <td width="23%" align="center"> <?php if ($pageNum_podcasts < $totalPages_podcasts) { // Show if not last page ?>
            <a href="<?php printf("%s?pageNum_podcasts=%d%s", $currentPage, min($totalPages_podcasts, $pageNum_podcasts + 1), $queryString_podcasts); ?>">Pr&oacute;xima</a> 
            <?php } else { ?>Pr&oacute;xima<? } // Show if not last page ?> </td>
          <td width="23%" align="center"> <?php if ($pageNum_podcasts < $totalPages_podcasts) { // Show if not last page ?>
            <a href="<?php printf("%s?pageNum_podcasts=%d%s", $currentPage, $totalPages_podcasts, $queryString_podcasts); ?>">&Uacute;ltima</a> 
            <?php } else { ?>&Uacute;ltima<? } // Show if not last page ?> </td>
        </tr>
    </table>
</td>
    </tr>
    <? } else { ?>
      <tr>
          <td colspan="5">N&atilde;o h&aacute; registros nessa &aacute;rea</td>
      </tr>
    <? } ?>
  </tbody>
</table>
<? include("../rodape.php"); ?>
</body>
</html>
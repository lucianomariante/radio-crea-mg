<? 
require_once('../../includes/login.php');
require_once('../../includes/funcoes.php');
require_once('../../Connections/conectar.php');

$maxRows_playlists = 50;
$pageNum_playlists = 0;
if (isset($_GET['pageNum_playlists'])) {
  $pageNum_playlists = $_GET['pageNum_playlists'];
}
$startRow_playlists = $pageNum_playlists * $maxRows_playlists;

mysqli_select_db($conectar,$database_conectar);
$query_playlists = "SELECT * FROM playlist order by id DESC";
$query_limit_playlists = sprintf("%s LIMIT %d, %d", $query_playlists, $startRow_playlists, $maxRows_playlists);
$playlists = mysqli_query($conectar,$query_limit_playlists);
$row_playlists = mysqli_fetch_assoc($playlists);

if (isset($_GET['totalRows_playlists'])) {
  $totalRows_playlists = $_GET['totalRows_playlists'];
} else {
  $query_playlistsCount = "SELECT count(*) as total FROM playlist order by id DESC";
  $all_playlists = mysqli_query($conectar,$query_playlistsCount);
  $row_playlistsCount = mysqli_fetch_assoc($all_playlists);
  $totalRows_playlists = $row_playlistsCount['total']; 
}
$totalPages_playlists = ceil($totalRows_playlists/$maxRows_playlists)-1;
?>
<!doctype html>
<html>
<head>
<meta charset="iso-8859-1">
<title>&Aacute;rea Administrativa</title>
<link rel="stylesheet" href="../estilo.css">
</head>

<body>
<? include("../cabecalho.php"); ?>
<table align="center" class="lista">
  <tbody>
    <tr>
      <td colspan="6">Pastas do Playlist</td>
    </tr>
    <tr>
      <td colspan="6"><a href="insertform.php">Cadastrar Pasta</a></td>
    </tr>
    <? if (!empty($row_playlists['id'])) { ?>
    <tr>
      <td width="1%">Id</td>
      <td>Pasta</td>
      <td>Artista</td>
      <td width="1%">M&uacute;sica</td>
      <td width="1%">Alterar</td>
      <td width="1%">Apagar</td>
    </tr>
    <? do { ?>

      <tr>
      <td width="1%"><? echo stripslashes($row_playlists['id']); ?></td>
      <td nowrap="nowrap"><? echo stripslashes($row_playlists['pasta']); ?></td>
      <td nowrap="nowrap"><? echo stripslashes($row_playlists['artista']); ?></td>
      <td width="1%" nowrap="nowrap"><? echo stripslashes($row_playlists['musica']); ?></td>
      <td width="1%" class="alterar"><a href="altform.php?id=<? echo stripslashes($row_playlists['id']); ?>">A</a></td>
      <td width="1%" class="deletar"><a href="delete.php?id=<? echo stripslashes($row_playlists['id']); ?>">X</a></td>
    </tr>
	<? } while ($row_playlists = mysqli_fetch_assoc($playlists)); ?>
    <tr>
      <td colspan="11" class="contador">Pastas <?php echo ($startRow_playlists + 1) ?> a <?php echo min($startRow_playlists + $maxRows_playlists, $totalRows_playlists) ?> de <?php echo $totalRows_playlists ?></td>
    </tr>
    <tr>
          <td colspan="11"><table border="0" width="50" align="center">
            <tr> 
          <td width="23%" align="center"> <?php if ($pageNum_playlists > 0) { // Show if not first page ?>
            <a href="<?php printf("%s?pageNum_playlists=%d%s", $currentPage, 0, $queryString_playlists); ?>">Primeira </a> 
          <?php } else { ?>Primeira<? } // Show if not first page ?> </td>
          <td width="31%" align="center"> <?php if ($pageNum_playlists > 0) { // Show if not first page ?>
            <a href="<?php printf("%s?pageNum_playlists=%d%s", $currentPage, max(0, $pageNum_playlists - 1), $queryString_playlists); ?>"> Anterior</a> 
          <?php } else { ?>Anterior<? } // Show if not first page ?> </td>
          <td width="23%" align="center"> <?php if ($pageNum_playlists < $totalPages_playlists) { // Show if not last page ?>
            <a href="<?php printf("%s?pageNum_playlists=%d%s", $currentPage, min($totalPages_playlists, $pageNum_playlists + 1), $queryString_playlists); ?>">Pr&oacute;xima</a> 
            <?php } else { ?>Pr&oacute;xima<? } // Show if not last page ?> </td>
          <td width="23%" align="center"> <?php if ($pageNum_playlists < $totalPages_playlists) { // Show if not last page ?>
            <a href="<?php printf("%s?pageNum_playlists=%d%s", $currentPage, $totalPages_playlists, $queryString_playlists); ?>">&Uacute;ltima</a> 
            <?php } else { ?>&Uacute;ltima<? } // Show if not last page ?> </td>
        </tr>
    </table>
</td>
      </tr>
    <? } else { ?>
      <tr>
          <td colspan="6">N&atilde;o h&aacute; registros nessa &aacute;rea</td>
      </tr>
    <? } ?>
  </tbody>
</table>
<? include("../rodape.php"); gera_pastas(); ?>
</body>
</html>
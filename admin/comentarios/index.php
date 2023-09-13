<? 
require_once('../../includes/login.php');
require_once('../../includes/funcoes.php');
require_once('../../Connections/conectar.php');

if($_POST['dataini']!="") {
$ex0 = " where id > 0 ";	
$ex1 = " and data >= '".convdata($_POST['dataini'],0)."' "; 
}

if($_POST['datafim']!="") {
$ex0 = " where id > 0 ";	
$ex2 = " and data <= '".convdata($_POST['datafim'],0)."' "; 
}

if($_POST['aprovados']==1) {
$ex0 = " where id > 0 ";	
$ex3 = " and aprovado = 1 "; 
}

if($_POST['aprovados']==2) {
$ex0 = " where id > 0 ";	
$ex3 = " and aprovado <> 1 "; 
}

$maxRows_coments = 50;
$pageNum_coments = 0;
if (isset($_GET['pageNum_coments'])) {
  $pageNum_coments = $_GET['pageNum_coments'];
}
$startRow_coments = $pageNum_coments * $maxRows_coments;

if($_GET['sorteio']==1){ $ordenacao = "Rand()"; } else { $ordenacao = "data desc, id DESC"; }

mysqli_select_db($conectar,$database_conectar);
$query_coments = "SELECT * FROM radio_comentarios $ex0 $ex1 $ex2 $ex3 order by ".$ordenacao;
$query_limit_coments = sprintf("%s LIMIT %d, %d", $query_coments, $startRow_coments, $maxRows_coments);
$coments = mysqli_query($conectar,$query_limit_coments);
$row_coments = mysqli_fetch_assoc($coments);

if (isset($_GET['totalRows_coments'])) {
  $totalRows_coments = $_GET['totalRows_coments'];
} else {
  $query_comentsCount = "SELECT count(*) as total FROM radio_comentarios $ex0 $ex1 $ex2 $ex3 order by data desc, id DESC";
  $all_coments = mysqli_query($conectar,$query_comentsCount);
  $row_comentsCount = mysqli_fetch_assoc($all_coments);
  $totalRows_coments = $row_comentsCount['total']; 
}
$totalPages_coments = ceil($totalRows_coments/$maxRows_coments)-1;

?>
<!doctype html>
<html>
<head>
<meta charset="iso-8859-1">
<title>&Aacute;rea Administrativa</title>
<script src="../../js/jquery.js"></script>
<link rel="stylesheet" href="../estilo.css">
<script language="javascript">
function mascaraData( campo, e )
{
	var kC = (document.all) ? event.keyCode : e.keyCode;
	var data = campo.value;
	
	if( kC!=8 && kC!=46 )
	{
		if( data.length==2 )
		{
			campo.value = data += '/';
		}
		else if( data.length==5 )
		{
			campo.value = data += '/';
		}
		else
			campo.value = data;
	}
}

function aprova(id,status){
	var url = "aprova.php?id=" + id + "&status=" + status;
	$.post(url,function(data){ 
		$('#aprova_' + id).empty().html(data);
	}); 
}
</script>
</head>

<body><? include("../cabecalho.php"); ?>
<table align="center" class="lista">
  <tbody>
    <tr>
      <td colspan="8">Coment&aacute;rios</td>
    </tr>

    <tr>
      <td colspan="8"><a href="insertform.php">Cadastrar Coment&aacute;rio</a> - <a href="index.php?sorteio=1">Sortear Coment&aacute;rios</a></td>
    </tr>    <tr>
      <td colspan="8"> 
 
      <form name="form1" method="post" action="index.php?<? echo $_SERVER['QUERY_STRING']; ?>">Buscar por data: <input name="dataini" type="text" id="dataini" style="width:100px" onkeypress="mascaraData(this,event)" value="<? if($_POST['dataini']!="") { echo $_POST['dataini']; } ?>" maxlength="10"> 
      a 
      <input name="datafim" type="text" id="datafim" style="width:100px" onkeypress="mascaraData(this,event)" value="<? if($_POST['datafim']!="") { echo $_POST['datafim']; } ?>" maxlength="10">
      <select name="aprovados" id="aprovados" style="width:140px">
        <option value="3" <? if($_POST['aprovados']==3) { ?>selected="selected"<? } ?>>Ambos</option>
        <option value="1"  <? if($_POST['aprovados']==1) { ?>selected="selected"<? } ?>>Aprovados</option>
        <option value="2"  <? if($_POST['aprovados']==2) { ?>selected="selected"<? } ?>>N&atilde;o aprovados</option>
      </select>
      <input type="submit" name="button" id="button" value="Enviar" style="width:50px">
      </form></td>
    </tr>
    <? if (!empty($row_coments['id'])) { ?>
    <tr>
      <td width="1%">Id</td>
      <td width="1%">Data</td>
      <td width="20%">Nome</td>
      <td width="80%">Coment&aacute;rio</td>
      <td width="1%">IP</td>
      <td width="1%">Aprovado</td>
      <td width="1%">Alterar</td>
      <td width="1%">Apagar</td>
    </tr>
    
    <? do { 
	
	if($row_coments['audio']) { $link = "../../audios/".$row_coments['audio']; } else { $link = $row_coments['url']; }
	
	?>

      <tr>
      <td width="1%"><? echo stripslashes($row_coments['id']); ?></td>
      <td width="1%"><? echo convdata($row_coments['data'],1); ?></td>
      <td width="20%"><? echo stripslashes($row_coments['nome']); ?></td>
      <td width="80%"><? echo stripslashes($row_coments['comentario']); ?></td>
      <td width="1%"><? echo stripslashes($row_coments['ipuser']); ?></td>
      <td width="1%" class="aprovado" id="aprova_<? echo stripslashes($row_coments['id']); ?>"><a href="javascript:aprova(<? echo stripslashes($row_coments['id']); ?>,<? echo stripslashes($row_coments['aprovado']); ?>);">
        <? if($row_coments['aprovado']==1) { echo "Sim"; } else { echo "N&atilde;o"; } ?></a></td>
      <td width="1%" class="alterar"><a href="altform.php?id=<? echo stripslashes($row_coments['id']); ?>">A</a></td>
      <td width="1%" class="deletar"><a href="delete.php?id=<? echo stripslashes($row_coments['id']); ?>">X</a></td>
    </tr>
	<? } while ($row_coments = mysqli_fetch_assoc($coments)); ?>
      <tr>
        <td colspan="9" class="contador">Mat&eacute;rias <?php echo ($startRow_coments + 1) ?> a <?php echo min($startRow_coments + $maxRows_coments, $totalRows_coments) ?> de <?php echo $totalRows_coments ?></td>
      </tr>
      <tr>
          <td colspan="9"><table border="0" width="50" align="center">
            <tr> 
          <td width="23%" align="center"> <?php if ($pageNum_coments > 0) { // Show if not first page ?>
            <a href="<?php printf("%s?pageNum_coments=%d%s", $currentPage, 0, $queryString_coments); ?>">Primeira </a> 
          <?php } else { ?>Primeira<? } // Show if not first page ?> </td>
          <td width="31%" align="center"> <?php if ($pageNum_coments > 0) { // Show if not first page ?>
            <a href="<?php printf("%s?pageNum_coments=%d%s", $currentPage, max(0, $pageNum_coments - 1), $queryString_coments); ?>"> Anterior</a> 
          <?php } else { ?>Anterior<? } // Show if not first page ?> </td>
          <td width="23%" align="center"> <?php if ($pageNum_coments < $totalPages_coments) { // Show if not last page ?>
            <a href="<?php printf("%s?pageNum_coments=%d%s", $currentPage, min($totalPages_coments, $pageNum_coments + 1), $queryString_coments); ?>">Pr&oacute;xima</a> 
            <?php } else { ?>Pr&oacute;xima<? } // Show if not last page ?> </td>
          <td width="23%" align="center"> <?php if ($pageNum_coments < $totalPages_coments) { // Show if not last page ?>
            <a href="<?php printf("%s?pageNum_coments=%d%s", $currentPage, $totalPages_coments, $queryString_coments); ?>">&Uacute;ltima</a> 
            <?php } else { ?>&Uacute;ltima<? } // Show if not last page ?> </td>
        </tr>
    </table>
</td>
      </tr>
    <? } else { ?>
      <tr>
          <td colspan="9">N&atilde;o h&aacute; registros nessa &aacute;rea</td>
      </tr>
    <? } ?>
  </tbody>
</table>
<? include("../rodape.php"); ?>
</body>
</html>
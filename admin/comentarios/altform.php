<? 
require_once('../../includes/login.php');
require_once('../../includes/funcoes.php');
require_once('../../Connections/conectar.php');

$id=addslashes($_GET['id']);
mysqli_select_db($conectar,$database_conectar);
$query_registro = "SELECT * FROM radio_comentarios WHERE id = '".$id."'";
$registro = mysqli_query($conectar,$query_registro);
$row_registro = mysqli_fetch_assoc($registro);
$totalRows_registro = mysqli_num_rows($registro);



?>
<!doctype html>
<html>
<head>
<meta charset="iso-8859-1">
<title>&Aacute;rea Administrativa</title>
<link rel="stylesheet" href="../estilo.css">
</head>

<body><? include("../cabecalho.php"); ?>
<form action="alt.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
<table align="center">
  <tbody>
    <tr>
      <td colspan="2">Alterar Registro</td>
      </tr>
    <tr>
      <td>Data</td>
      <td><input name="data" type="text" id="data" value="<? echo convdata($row_registro['data'],1); ?>"></td>
    </tr>
    <tr>
      <td>Nome</td>
      <td><input name="nome" type="text" id="nome_podcast2" value="<? echo stripslashes($row_registro['nome']); ?>"></td>
    </tr>
    <tr>
      <td>E-mail</td>
      <td><input name="email" type="text" id="email" value="<? echo stripslashes($row_registro['email']); ?>"></td>
    </tr>
    <? if($row_definicoes['comentarios_extra']!="") { ?>
    <tr>
      <td><? echo $row_definicoes['comentarios_extra']; ?>&nbsp;</td>
      <td><input name="extra" type="text" id="extra" value="<? echo stripslashes($row_registro['extra']); ?>"></td>
    </tr>
    <? } else { ?>
    <input name="extra" type="hidden" id="extra" value="<? echo stripslashes($row_registro['extra']); ?>">
    <? } ?>
    <tr>
      <td>Aprovado</td>
      <td><select name="aprovado" id="aprovado">
        <option value="1" <? if($row_registro['aprovado']==1) { ?>selected="selected"<? } ?>>Aprovado</option>
        <option value="2" <? if($row_registro['aprovado']==2) { ?>selected="selected"<? } ?>>N&atilde;o aprovado</option>
      </select></td>
    </tr>
    <tr>
      <td>Coment&aacute;rio</td>
      <td><textarea name="comentario" id="comentario"><? echo stripslashes($row_registro['comentario']); ?></textarea></td>
    </tr>
    <tr>
      <td><input name="id" type="hidden" id="id" value="<? echo stripslashes($row_registro['id']); ?>"></td>
      <td><input type="submit" name="Gravar2" id="Gravar2" value="Enviar"></td>
    </tr>
  </tbody>
</table>
</form>
<? include("../rodape.php"); ?>


</body>
</html>
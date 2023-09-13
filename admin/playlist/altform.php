<? 
require_once('../../includes/login.php');
require_once('../../includes/funcoes.php');
require_once('../../Connections/conectar.php');

$id=addslashes($_GET['id']);
mysqli_select_db($conectar,$database_conectar);
$query_registro = "SELECT * FROM playlist WHERE id = '".$id."'";
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
<form action="alt.php" method="post" name="form1" id="form1">
<table align="center">
  <tbody>
    <tr>
      <td colspan="2">Alterar Registro</td>
      </tr>
    <tr>
      <td>Nome da Pasta</td>
      <td><input name="pasta" type="text" id="pasta" value="<? echo stripslashes($row_registro['pasta']); ?>"></td>
    </tr>
    <tr>
      <td nowrap>Artista</td>
      <td nowrap><input name="artista" type="text" id="artista" value="<? echo stripslashes($row_registro['artista']); ?>"></td>
    </tr>
    <tr>
      <td nowrap>M&uacute;sica</td>
      <td nowrap><input name="musica" type="text" id="musica" value="<? echo stripslashes($row_registro['musica']); ?>"></td>
    </tr>
    <tr>
      <td><input name="id" type="hidden" id="id" value="<? echo stripslashes($row_registro['id']); ?>"></td>
      <td><input type="submit" name="Gravar" id="Gravar" value="Enviar"></td>
    </tr>
  </tbody>
</table>
</form>
<? include("../rodape.php"); ?>
</body>
</html>
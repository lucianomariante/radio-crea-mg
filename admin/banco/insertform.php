<?
require_once('../../includes/login.php');
require_once('../../includes/funcoes.php');
require_once('../../Connections/conectar.php');


?>
<!doctype html>
<html>
<head>
<meta charset="iso-8859-1">
<title>&Aacute;rea Administrativa</title>
<link rel="stylesheet" href="../estilo.css">
</head>

<body><? include("../cabecalho.php"); ?>
<form action="insert.php" method="post" name="form1" id="form1">
<table align="center">
  <tbody>
    <tr>
      <td colspan="2">Atualiar Banco de Dados</td>
    </tr>
    <tr>
      <td nowrap>Envie o SQL</td>
      <td nowrap><textarea name="sql" id="sql"></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Gravar" id="Gravar" value="Enviar"></td>
    </tr>
  </tbody>
</table>
</form>
<? include("../rodape.php"); ?>
</body>
</html>
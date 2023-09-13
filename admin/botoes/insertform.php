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
      <td colspan="2">Cadastrar Bot&atilde;o</td>
    </tr>
    <tr>
      <td nowrap>Nome do Bot&atilde;o</td>
      <td nowrap><input name="nome" type="text" id="nome" value="<? echo stripslashes($row_registro['nome']); ?>"></td>
    </tr>
    <tr>
      <td nowrap>URL do Bot&atilde;o</td>
      <td nowrap><input name="url" type="text" id="url" value="<? echo stripslashes($row_registro['url']); ?>"></td>
    </tr>
    <tr class="mytable">
      <td>Janela</td>
      <td>
      <select name="janela" id="janela">
        <option value="1" <? if($row_registro['janela']==1) { ?>selected="selected"<? }?>>Abrir na mesma janela</option>
        <option value="2" <? if($row_registro['janela']==2) { ?>selected="selected"<? }?>>Abrir em nova janela</option>
      </select>
      </td>
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
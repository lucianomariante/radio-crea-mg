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
<form action="insert.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
<table align="center">
  <tbody>
    <tr>
      <td colspan="2">Cadastrar Coment&aacute;rio</td>
      </tr>
    <tr>
      <td>Data</td>
      <td><input name="data" type="text" id="nome_podcast6" value="<? echo date('d/m/Y'); ?>"></td>
    </tr>
    <tr>
      <td>Nome</td>
      <td><input name="nome" type="text" id="nome_podcast5"></td>
    </tr>
    <tr>
      <td>E-mail</td>
      <td><input name="email" type="text" id="email"></td>
    </tr>
    <? if($row_definicoes['comentarios_extra']!="") { ?>
    <tr>
      <td><? echo $row_definicoes['comentarios_extra']; ?>&nbsp;</td>
      <td><input name="extra" type="text" id="extra"></td>
    </tr>
    <? } ?>
    <tr>
      <td>Aprovado</td>
      <td><select name="aprovado" id="aprovado">

        <option value="1" >Aprovado</option>
        <option value="2" >N&atilde;o aprovado</option>

      </select></td>
    </tr>
    <tr>
      <td>Coment&aacute;rio</td>
      <td><textarea name="comentario" id="comentario"></textarea></td>
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
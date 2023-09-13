<!doctype html>
<html>
<head>
<meta charset="iso-8859-1">
<title>&Aacute;rea Administrativa</title>
<link rel="stylesheet" href="estilo.css">
</head>

<body>
<? if(!empty($_GET['status'])) { ?>Usu&aacute;rio ou senha incorretos!<br>
<br>
<? } ?>
<form action="login.php" method="post" name="form1" id="form1">
<table align="center">
  <tbody>
    <tr>
      <td colspan="2">Administra&ccedil;&atilde;o</td>
      </tr>
    <tr>
      <td width="100">Usu&aacute;rio</td>
      <td><input type="text" name="usuario" id="usuario"></td>
    </tr>
    <tr>
      <td >Senha </td>
      <td><input type="password" name="senha" id="senha"></td>
    </tr>
    <tr>
      <td >&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="Enviar"></td>
    </tr>
    </tbody>
    </table>
</form>
</body>
</html>
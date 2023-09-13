<? 
require_once('../../includes/login.php');
require_once('../../includes/funcoes.php');
require_once('../../Connections/conectar.php');

mysqli_select_db($conectar,$database_conectar);
$query_lista_podcasts = "SELECT * FROM radio_podcasts order by nome_podcast asc";
$lista_podcasts = mysqli_query($conectar,$query_lista_podcasts);
$row_lista_podcasts = mysqli_fetch_assoc($lista_podcasts);
$totalRows_lista_podcasts = mysqli_num_rows($lista_podcasts);

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
  <table align="center" class="mytable">
    <tbody>
      <tr>
        <td colspan="2">Cadastrar Fonte</td>
      </tr>
      <tr>
        <td nowrap>Nome da Fonte</td>
        <td><input name="nome" type="text" id="nome_podcast5" value="<? echo stripslashes($row_registro['nome']); ?>"></td>
      </tr>
      <tr>
        <td>Cargo da Fonte</td>
        <td><input name="cargo" type="text" id="cargo" value="<? echo stripslashes($row_registro['cargo']); ?>"></td>
      </tr>
      <tr>
        <td nowrap>E-mail da Fonte</td>
        <td><input name="email" type="text" id="email" value="<? echo stripslashes($row_registro['email']); ?>"></td>
      </tr>
      <tr>
        <td>&nbsp;
        <input name="voltar" type="hidden" id="id" value="<? echo $_GET['idcategoria']; ?>"></td>
        <td><input type="submit" name="Gravar" id="Gravar" value="Enviar"></td>
      </tr>
    </tbody>
  </table>
</form>
<? include("../rodape.php"); ?>
</body>
</html>
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
<table align="center">
  <tbody>
    <tr>
      <td colspan="2">Cadastrar Not&iacute;cia</td>
    </tr>
    <tr>
      <td>Lan&ccedil;amento</td>
      <td><input name="data_lanc" type="text" id="data_lanc" value="<? echo date('d/m/Y H:i'); ?>"></td>
    </tr>
    <tr>
      <td>Data</td>
      <td><input name="data" type="text" id="nome_podcast6" value="<? echo date('d/m/Y'); ?>"></td>
    </tr>
    <tr>
      <td>Dura&ccedil;&atilde;o</td>
      <td><input name="duracao" type="text" id="nome_podcast5"></td>
    </tr>
    <tr>
      <td>Autor</td>
      <td><input name="autor" type="text" id="autor"></td>
    </tr>
    <tr>
      <td>Manchete</td>
      <td><input name="manchete" type="text" id="manchete" maxlength="65"></td>
    </tr>
    <tr>
      <td>Palavras Chave</td>
      <td><input name="metakeywords" type="text" id="metakeywords"></td>
    </tr>
    <tr>
      <td>Descri&ccedil;&atilde;o</td>
      <td>
        <textarea name="descricao" rows="3" id="descricao"></textarea></td>
    </tr>
    <tr>
      <td>Podcast</td>
      <td><select name="idcategoria" id="idcategoria">
        <? do { ?>
        <option value="<? echo stripslashes($row_lista_podcasts['id']); ?>" ><? echo stripslashes($row_lista_podcasts['nome_podcast']); ?></option>
        <? } while ($row_lista_podcasts = mysqli_fetch_assoc($lista_podcasts)); ?>
        </select></td>
    </tr>
    <tr>
      <td>Arquivo de &Aacute;udio</td>
      <td><input type="file" name="file" id="file"></td>
    </tr>
    <tr>
      <td nowrap>Thumbnail (1400 PX)<br></td>
      <td><input type="file" name="file2" id="file2"></td>
    </tr>
    <tr>
      <td>Alt da Imagem</td>
      <td><input name="altimg" type="text" id="altimg"></td>
    </tr>
    <tr>
      <td>URL do &Aacute;udio</td>
      <td><input name="url" type="text" id="url"></td>
    </tr>
    <tr>
      <td nowrap>URL Amig&aacute;vel Alternativa</td>
      <td nowrap><input name="amigavel" type="text" id="amigavel"></td>
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
<? 
require_once('../../includes/login.php');
require_once('../../includes/funcoes.php');
require_once('../../Connections/conectar.php');

$id=addslashes($_GET['id']);
mysqli_select_db($conectar,$database_conectar);
$query_registro = "SELECT * FROM radio_definicoes WHERE id = 1";
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
<form action="alt2.php" method="post" name="form1" id="form1">
<table align="center">
  <tbody>
    <tr>
      <td colspan="2">Alterar Registro</td>
      </tr>
    



   
    <tr>
      <td>Descri&ccedil;&atilde;o</td>
      <td><input name="descricao" type="text" id="descricao" value="<? echo stripslashes($row_registro['descricao']); ?>"></td>
    </tr>
    <tr>
      <td>Palavras Chave</td>
      <td><input name="metakeywords" type="text" id="metakeywords" value="<? echo stripslashes($row_registro['metakeywords']); ?>"></td>
    </tr>
    <tr>
      <td>Autor</td>
      <td><input name="nome_autor" type="text" id="nome_podcast3" value="<? echo stripslashes($row_registro['nome_autor']); ?>"></td>
    </tr>
    <tr>
      <td>Imagem</td>
      <td><input name="imagem" type="text" id="nome_podcast4" value="<? echo stripslashes($row_registro['imagem']); ?>"></td>
    </tr>
    <tr>
      <td>Alt da Imagem</td>
      <td><input name="altimg" type="text" id="altimg" value="<? echo stripslashes($row_registro['altimg']); ?>"></td>
    </tr>
    <tr>
      <td>E-mail</td>
      <td><strong>
        <input name="email" type="text" id="nome_podcast5" value="<? echo stripslashes($row_registro['email']); ?>">
        </strong></td>
    </tr>
    <tr>
      <td>T&iacute;tulo</td>
      <td><input name="titulo" type="text" id="nome_podcast6" value="<? echo stripslashes($row_registro['titulo']); ?>"></td>
    </tr>
    <tr>
      <td>Subt&iacute;tulo</td>
      <td><input name="subtitulo" type="text" id="nome_podcast7" value="<? echo stripslashes($row_registro['subtitulo']); ?>"></td>
    </tr>
    <tr>
      <td>Link</td>
      <td><input name="link" type="text" id="nome_podcast8" value="<? echo stripslashes($row_registro['link']); ?>"></td>
    </tr>
    <tr>
      <td>C&oacute;digo Spotify</td>
      <td><input name="spotify" type="text" id="spotify" value="<? echo stripslashes($row_registro['spotify']); ?>"></td>
    </tr>
    <tr>
      <td>C&oacute;digo Google Podcasts</td>
      <td><input name="googlepodcasts" type="text" id="googlepodcasts" value="<? echo stripslashes($row_registro['googlepodcasts']); ?>"></td>
    </tr>
    <tr>
      <td>C&oacute;digo Apple Podcasts</td>
      <td><input name="apple_podcast" type="text" id="apple_podcast" value="<? echo stripslashes($row_registro['apple_podcast']); ?>"></td>
    </tr>
    <tr>
      <td>C&oacute;digo Deezer</td>
      <td><input name="deezer" type="text" id="deezer" value="<? echo stripslashes($row_registro['deezer']); ?>"></td>
    </tr>
    <tr>
      <td>C&oacute;digo Castbox</td>
      <td><input name="castbox" type="text" id="castbox" value="<? echo stripslashes($row_registro['castbox']); ?>"></td>
    </tr>
    <tr>
      <td nowrap>C&oacute;digo Google Tag Manager</td>
      <td nowrap><input name="googletagmanager" type="text" id="googletagmanager" value="<? echo stripslashes($row_registro['googletagmanager']); ?>"></td>
    </tr>
    <tr>
      <td nowrap>URL Amig&aacute;vel Alternativa</td>
      <td nowrap><input name="amigavel" type="text" id="amigavel" value="<? echo stripslashes($row_registro['amigavel']); ?>"></td>
    </tr>
    <tr>
      <td><input name="id" type="hidden" id="id" value="<? echo stripslashes($row_registro['id']); ?>"></td>
      <td><input type="submit" name="Gravar" id="Gravar" value="Enviar"></td>
    </tr>
  </tbody>
</table>
</form>
<? include("../rodape.php"); ?>
<?


	//$xml = simplexml_load_file('https://www.agenciaradioweb.com.br/rwadmin6/xml_radio_clientes.php?chave_usuario=1');

		//foreach($xml->item as $item)
		//{
		//	echo "teste<br>";
		//}
		
?>
</body>
</html>
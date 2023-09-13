<? 
require_once('../../includes/login.php');
require_once('../../includes/funcoes.php');
require_once('../../Connections/conectar.php');

$id=addslashes($_GET['id']);
mysqli_select_db($conectar,$database_conectar);
$query_registro = "SELECT * FROM radio_botoes WHERE id = '".$id."'";
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
      <td nowrap>Nome do Bot&atilde;o</td>
      <td><input name="nome" type="text" id="nome" value="<? echo stripslashes($row_registro['nome']); ?>"></td>
    </tr>
    <tr>
      <td nowrap>URL do Bot&atilde;o</td>
      <td><input name="url" type="text" id="url" value="<? echo stripslashes($row_registro['url']); ?>"></td>
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
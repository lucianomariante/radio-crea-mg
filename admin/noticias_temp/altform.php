<? 
require_once('../../includes/login.php');
require_once('../../includes/funcoes.php');
require_once('../../Connections/conectar.php');

$id=addslashes($_GET['id']);
mysqli_select_db($conectar,$database_conectar);
$query_registro = "SELECT * FROM radio_noticias_temp WHERE id = '".$id."'";
$registro = mysqli_query($conectar,$query_registro);
$row_registro = mysqli_fetch_assoc($registro);
$totalRows_registro = mysqli_num_rows($registro);

mysqli_select_db($conectar,$database_conectar);
$query_lista_podcasts = "SELECT * FROM radio_podcasts order by nome_podcast asc";
$lista_podcasts = mysqli_query($conectar,$query_lista_podcasts);
$row_lista_podcasts = mysqli_fetch_assoc($lista_podcasts);
$totalRows_lista_podcasts = mysqli_num_rows($lista_podcasts);

if($row_registro['audio']) { 
		$link = "../../audios/".$row_registro['audio'];
} else { 
		$link = "https://drive.google.com/a/agenciaradioweb.com.br/uc?id=".$row_registro['iddrive'];
}
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
<table align="center" class="mytable">
  <tbody>
    <tr>
      <td colspan="2">Aterar Registro</td>
    </tr>
    <tr>
      <td>Lan&ccedil;amento</td>
      <td><input name="data_lanc" type="text" id="data_lanc" value="<? echo date('d/m/Y H:i',$row_registro['data_lanc']); ?>"></td>
    </tr>
    <tr>
      <td>Data</td>
      <td><input name="data" type="text" id="nome_podcast6" value="<? echo convdata($row_registro['data'],1); ?>"></td>
    </tr>
    <tr>
      <td>Dura&ccedil;&atilde;o</td>
      <td><input name="duracao" type="text" id="nome_podcast5" value="<? echo stripslashes($row_registro['duracao']); ?>"></td>
    </tr>
    <tr>
      <td>Autor</td>
      <td><input name="autor" type="text" id="autor" value="<? echo stripslashes($row_registro['autor']); ?>"></td>
    </tr>
    <tr>
      <td>Manchete</td>
      <td><input name="manchete" type="text" id="manchete" value="<? echo stripslashes($row_registro['manchete']); ?>" maxlength="65"></td>
    </tr>
    <tr>
      <td>Palavras Chave</td>
      <td><input name="metakeywords" type="text" id="metakeywords" value="<? echo stripslashes($row_registro['metakeywords']); ?>"></td>
    </tr>
    <tr>
      <td>Descri&ccedil;&atilde;o</td>
      <td><textarea name="descricao" rows="3" id="descricao"><? echo stripslashes($row_registro['descricao']); ?></textarea></td>
    </tr>
    <tr>
      <td>Podcast</td>
      <td><select name="idcategoria" id="idcategoria">
        <? do { ?>
        <option value="<? echo stripslashes($row_lista_podcasts['id']); ?>" <? if($row_lista_podcasts['id']==$row_registro['idcategoria']) { ?>selected="selected"<? }?>><? echo stripslashes($row_lista_podcasts['nome_podcast']); ?></option>
        <? } while ($row_lista_podcasts = mysqli_fetch_assoc($lista_podcasts)); ?>
        </select></td>
    </tr>
    <tr>
      <td>Arquivo de &Aacute;udio</td>
      <td>
	  	<? if(empty($row_registro['audio']) and empty($row_registro['iddrive'])) { ?>
      	<input type="file" name="file" id="file">
      	<? } else { ?><input type="file" name="file" id="file" style="width:340px"> 
      	<input type="checkbox" name="checagem" id="checagem"  style="width:auto">
        Apagar <a href="<? echo $link; ?>" target="_blank">Ouvir</a><? } ?>
        <input name="audio_antigo" type="hidden" id="audio_antigo" value="<? echo stripslashes($row_registro['audio']); ?>"> 
        <input name="iddrive_antigo" type="hidden" id="iddrive_antigo" value="<? echo stripslashes($row_registro['iddrive']); ?>"></td>
      </tr>
    <tr>
      <td nowrap="nowrap">Thumbnail (1400 PX)</td>
      <td>
        <? if(empty($row_registro['thumbnail'])) { ?>
        <input type="file" name="file2" id="file2">
        <? } else { ?><input type="file" name="file2" id="file2" style="width:340px"> 
        <input type="checkbox" name="checagem2" id="checagem2"  style="width:auto">
        Apagar <a href="../../thumbnails/<? echo stripslashes($row_registro['thumbnail']); ?>" target="_blank">Ver</a><? } ?>
        <input name="thumbnail_antigo" type="hidden" id="thumbnail_antigo" value="<? echo stripslashes($row_registro['thumbnail']); ?>"> </td>
    </tr>
    <tr>
      <td>Alt da Imagem</td>
      <td><input name="altimg" type="text" id="altimg" value="<? echo stripslashes($row_registro['altimg']); ?>"></td>
    </tr>
    <tr>
      <td>URL do &Aacute;udio</td>
      <td><input name="url" type="text" id="url" value="<? echo stripslashes($row_registro['url']); ?>"></td>
    </tr>
    <tr>
      <td nowrap>URL Amig&aacute;vel Alternativa</td>
      <td nowrap><input name="amigavel" type="text" id="amigavel" value="<? echo stripslashes($row_registro['amigavel']); ?>"></td>
    </tr>
    <tr>
      <td>&nbsp;<input name="id" type="hidden" id="id" value="<? echo stripslashes($row_registro['id']); ?>"><input name="voltar" type="hidden" id="id" value="<? echo $_GET['idcategoria']; ?>"></td>
      <td><input type="submit" name="Gravar" id="Gravar" value="Enviar"></td>
    </tr>
  </tbody>
</table>
</form>

<? include("../rodape.php"); ?>

</body>
</html>
<? 
require_once('../../includes/login.php');
require_once('../../includes/funcoes.php');
require_once('../../Connections/conectar.php');

$id=addslashes($_GET['id']);
mysqli_select_db($conectar,$database_conectar);
$query_registro = "SELECT * FROM radio_podcasts WHERE id = '".$id."'";
$registro = mysqli_query($conectar,$query_registro);
$row_registro = mysqli_fetch_assoc($registro);
$totalRows_registro = mysqli_num_rows($registro);




function simplexml_load_file_caseiro($path){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$path);
    curl_setopt($ch, CURLOPT_FAILONERROR,1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    $retValue = curl_exec($ch);          
    curl_close($ch);
	$oXML = new SimpleXMLElement($retValue);
    return $oXML;
}
?>
<!doctype html>
<html>
<head>
<meta charset="iso-8859-1">
<title>&Aacute;rea Administrativa</title>
<link rel="stylesheet" href="../estilo.css">
</head>

<body><? include("../cabecalho.php"); 

$url_rd = stripslashes($row_definicoes['url_radio']);
?>
<form action="alt.php" method="post" name="form1" id="form1">
<table align="center">
  <tbody>
    <tr>
      <td colspan="2">Alterar Registro</td>
      </tr>
    <tr>
      <td>Nome do Podcast</td>
      <td><input name="nome_podcast" type="text" id="nome_podcast" value="<? echo stripslashes($row_registro['nome_podcast']); ?>"></td>
    </tr>
    <tr>
      <td>Formato</td>
      <td><select name="destaque" id="destaque">
			<option value="0"  <? if($row_registro['destaque']!=1) { ?>selected="selected"<? } ?>>Podcast Padrão</option>
            <option value="1"  <? if($row_registro['destaque']==1) { ?>selected="selected"<? } ?>>Podcast Destaque</option>
      	</select></td>
    </tr>  
<? $xml = simplexml_load_file_caseiro($url_rd."/xml_radioweb_opcoes.php?chave_usuario=3"); ?>
<? if ($xml) { ?> 

    <tr class="table">
      <td>Texto do Destaque</td>
      <td><textarea name="texto_destaque" id="texto_destaque"><? echo stripslashes($row_registro['texto_destaque']); ?></textarea></td>
    </tr>
    <tr>
      <td>N&uacute;mero Editoria Radioweb</td>
      <td>
        <select name="editoria" id="editoria">
          <option value="0"  <? if($row_registro['editoria']==0) { ?>selected="selected"<? } ?>>Escolha uma editoria</option>
          <? foreach($xml->children() as $item_materia) { ?>
          <option value="<? echo $item_materia->id; ?>" <? if($row_registro['editoria']==$item_materia->id) { ?>selected="selected"<? } ?>><? echo htmlentities($item_materia->nome); ?></option>
          <? } ?>
          </select>
        </td>
    </tr>
<? } ?>
    
    
<? $xml = simplexml_load_file_caseiro($url_rd."/xml_radioweb_opcoes.php?chave_usuario=2"); ?>
<? if ($xml) { ?> 
	<tr>
      <td>N&uacute;mero &Aacute;rea Radioweb</td>
      <td>
      	<select name="area" id="area">
        	<option value="0" <? if($row_registro['area']==0) { ?>selected="selected"<? } ?>>Escolha uma &aacute;rea</option>
        	<? foreach($xml->children() as $item_materia) { ?>
			<option value="<? echo $item_materia->id; ?>" <? if($row_registro['area']==$item_materia->id) { ?>selected="selected"<? } ?>><? echo htmlentities($item_materia->nome); ?></option>
 			<? } ?>
      	</select>
      </td>
    </tr>
<? } ?>



<? $xml = simplexml_load_file_caseiro($url_rd."/xml_radioweb_opcoes.php?chave_usuario=1"); ?>
<? if ($xml) { ?> 
     <tr>
     	<td>N&uacute;mero Cliente Radioweb</td>
      	<td>
        	<select name="cliente" id="cliente">
				<option value="0" <? if($row_registro['cliente']==0) { ?>selected="selected"<? } ?>>Escolha um cliente</option>
				<? foreach($xml->children() as $item_materia) { ?>
	        	<option value="<? echo $item_materia->id; ?>" <? if($row_registro['cliente']==$item_materia->id) { ?>selected="selected"<? } ?>><? echo htmlentities($item_materia->nome); ?></option>
 				<? } ?>
      		</select>
      	</td>
    </tr>
<? } ?>
    
    
<? $xml = @simplexml_load_file_caseiro($url_rd."/xml_radioweb_opcoes.php?chave_usuario=4"); ?>
<? if ($xml) { ?> 
	<tr>
		<td>N&uacute;mero Autor Radioweb</td>
		<td>
			<select name="autor" id="autor">
				<option value="0" <? if($row_registro['cliente']==0) { ?>selected="selected"<? } ?>>Escolha um autor</option>          
				<? foreach($xml->children() as $item_materia) { ?>
				<option value="<? echo $item_materia->id; ?>" <? if($row_registro['cliente']==$item_materia->id) { ?>selected="selected"<? } ?>><? echo htmlentities($item_materia->nome); ?></option>
				<? } ?>
      		</select>
		</td>
    </tr>    
<? } ?>


   
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
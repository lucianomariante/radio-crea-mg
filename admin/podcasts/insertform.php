<?
require_once('../../includes/login.php');
require_once('../../includes/funcoes.php');
require_once('../../Connections/conectar.php');

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
<form action="insert.php" method="post" name="form1" id="form1">
<table align="center">
  <tbody>
    <tr>
      <td colspan="2">Cadastrar Podcast</td>
      </tr>
    <tr>
      <td>Nome do Podcast</td>
      <td><input name="nome_podcast" type="text" id="nome_podcast"></td>
    </tr>
    
    
<? $xml = simplexml_load_file_caseiro($url_rd."/xml_radioweb_opcoes.php?chave_usuario=3"); ?>
<? if ($xml) { ?> 
    <tr>
      <td>Formato de Destaque</td>
      <td><select name="destaque" id="destaque">
        <option value="0" selected="selected">Podcast Padr&atilde;o</option>
        <option value="1">Podcast Destaque</option>
        </select></td>
    </tr>
    <tr class="table">
      <td>Texto do Destaque</td>
      <td><textarea name="texto_destaque" id="texto_destaque"></textarea></td>
    </tr>
    <tr>
      <td>N&uacute;mero Editoria Radioweb</td>
      <td>
        <select name="editoria" id="editoria">
          <option value="0">Escolha uma editoria</option>
          <? foreach($xml->children() as $item_materia) { ?>
          <option value="<? echo $item_materia->id; ?>"><? echo htmlentities($item_materia->nome); ?></option>
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
        	<option value="0">Escolha uma &aacute;rea</option>
        	<? foreach($xml->children() as $item_materia) { ?>
			<option value="<? echo $item_materia->id; ?>"><? echo htmlentities($item_materia->nome); ?></option>
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
				<option value="0">Escolha um cliente</option>
				<? foreach($xml->children() as $item_materia) { ?>
	        	<option value="<? echo $item_materia->id; ?>"><? echo htmlentities($item_materia->nome); ?></option>
 				<? } ?>
      		</select>
      	</td>
    </tr>
<? } ?>
    
    
<? $xml = simplexml_load_file($url_rd."/xml_radioweb_opcoes.php?chave_usuario=4"); ?>
<? if ($xml) { ?> 
	<tr>
		<td>N&uacute;mero Autor Radioweb</td>
		<td>
			<select name="autor" id="autor">
				<option value="0">Escolha um autor</option>          
				<? foreach($xml->children() as $item_materia) { ?>
				<option value="<? echo $item_materia->id; ?>"><? echo htmlentities($item_materia->nome); ?></option>
				<? } ?>
      		</select>
		</td>
    </tr>    
<? } ?>

    <tr>
      <td>Descri&ccedil;&atilde;o</td>
      <td><input name="descricao" type="text" id="descricao"></td>
    </tr>
    <tr>
      <td>Palavras Chave</td>
      <td><input name="metakeywords" type="text" id="metakeywords"></td>
    </tr>
    <tr>
      <td>Autor</td>
      <td><input name="nome_autor" type="text" id="nome_podcast3"></td>
    </tr>
    <tr>
      <td>Imagem</td>
      <td><input name="imagem" type="text" id="nome_podcast4"></td>
    </tr>
    <tr>
      <td>Alt da Imagem</td>
      <td><input name="altimg" type="text" id="altimg"></td>
    </tr>
    <tr>
      <td>E-mail</td>
      <td><input name="email" type="text" id="nome_podcast5"></td>
    </tr>
    <tr>
      <td>T&iacute;tulo</td>
      <td><input name="titulo" type="text" id="nome_podcast6"></td>
    </tr>
    <tr>
      <td>Subt&iacute;tulo</td>
      <td><input name="subtitulo" type="text" id="nome_podcast7"></td>
    </tr>
    <tr>
      <td>Link</td>
      <td><input name="link" type="text" id="nome_podcast8"></td>
    </tr>
    <tr>
      <td>C&oacute;digo Spotify</td>
      <td><input name="spotify" type="text" id="spotify"></td>
    </tr>
    <tr>
      <td>C&oacute;digo Google Podcasts</td>
      <td><input name="googlepodcasts" type="text" id="googlepodcasts"></td>
    </tr>
    <tr>
      <td>C&oacute;digo Apple Podcasts</td>
      <td><input name="apple_podcast" type="text" id="apple_podcast"></td>
    </tr>
    <tr>
      <td>C&oacute;digo Deezer</td>
      <td><input name="deezer" type="text" id="deezer"></td>
    </tr>
    <tr>
      <td>C&oacute;digo Castbox</td>
      <td><input name="castbox" type="text" id="castbox"></td>
    </tr>
    <tr>
      <td nowrap>C&oacute;digo Google Tag Manager</td>
      <td nowrap><input name="googletagmanager" type="text" id="googletagmanager"></td>
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
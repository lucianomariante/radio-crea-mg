<? 
require_once('../../includes/login.php');
require_once('../../includes/funcoes.php');
require_once('../../Connections/conectar.php');

mysqli_select_db($conectar,$database_conectar);
$query_radio_dados = "SELECT * FROM radio_definicoes WHERE id = 1";
$radio_dados = mysqli_query($conectar,$query_radio_dados);
$row_radio_dados = mysqli_fetch_assoc($radio_dados);
$totalRows_radio_dados = mysqli_num_rows($radio_dados);

?>
<!doctype html>
<html>
<head>
<meta charset="iso-8859-1">
<title>&Aacute;rea Administrativa</title>
<link rel="stylesheet" href="../estilo2.css">
<script src="../../ckeditor/ckeditor.js"></script>
</head>

<body><? include("../cabecalho.php"); ?>
<form action="alt.php" method="post" name="form1" id="form1">
<table align="center" class="table">
  <tbody>
    <tr>
      <td colspan="2">Configura&ccedil;&otilde;es da R&aacute;dio</td>
      </tr>
    <tr>
      <td>Nome da R&aacute;dio</td>
      <td><input name="nome_radio" type="text" id="nome_radio" value="<? echo stripslashes($row_radio_dados['nome_radio']); ?>"></td>
    </tr>
    <tr>
      <td>URL da R&aacute;dio</td>
      <td><input type="text" name="url_radio" id="url_radio"  value="<? echo stripslashes($row_radio_dados['url_radio']); ?>"></td>
    </tr>
    <tr>
      <td>URL HTTPS Opcional</td>
      <td><input type="text" name="url_https" id="url_https"  value="<? echo stripslashes($row_radio_dados['url_https']); ?>"></td>
    </tr>
    <tr>
      <td>Captcha Site Key</td>
      <td><input type="text" name="captcha_a" id="url_radio3"  value="<? echo stripslashes($row_radio_dados['captcha_a']); ?>"></td>
    </tr>
    <tr>
      <td> Captcha Secret</td>
      <td><input name="captcha_b" type="text" id="url_radio4"  value="<? echo stripslashes($row_radio_dados['captcha_b']); ?>"></td>
    </tr>
    <tr>
      <td>Usu&aacute;rio</td>
      <td><input type="text" name="usuario" id="usuario"  value="<? echo stripslashes($row_radio_dados['usuario']); ?>"></td>
    </tr>
    <tr>
      <td>Senha</td>
      <td><input type="text" name="senha" id="senha"  value="<? echo stripslashes($row_radio_dados['senha']); ?>"></td>
    </tr>
    <tr>
      <td>Streaming Titular</td>
      <td><input type="text" name="streaming_titular" id="streaming_titular"  value="<? echo stripslashes($row_radio_dados['streaming_titular']); ?>"></td>
    </tr>
    <tr>
      <td>Usu&aacute;rio Centova Titular</td>
      <td><input type="text" name="user_centova" id="user_centova3"  value="<? echo stripslashes($row_radio_dados['user_centova']); ?>"></td>
    </tr>
    <tr>
      <td nowrap>URL Centova Titular</td>
      <td><input type="text" name="info_autodj" id="info_autodj3"  value="<? echo stripslashes($row_radio_dados['info_autodj']); ?>"></td>
    </tr>
    <tr>
      <td>Streaming Reserva</td>
      <td><input type="text" name="streaming_reserva" id="streaming_reserva"  value="<? echo stripslashes($row_radio_dados['streaming_reserva']); ?>"></td>
    </tr>
    <tr>
      <td>Usu&aacute;rio Centova Reserva</td>
      <td><input type="text" name="user_centova2" id="user_centova4"  value="<? echo stripslashes($row_radio_dados['user_centova2']); ?>"></td>
    </tr>
    <tr>
      <td nowrap>URL Centova Reserva</td>
      <td><input type="text" name="info_autodj2" id="info_autodj4"  value="<? echo stripslashes($row_radio_dados['info_autodj2']); ?>"></td>
    </tr>
    <tr>
      <td>Streaming HTTPS Opcional</td>
      <td><input type="text" name="streaming_https" id="streaming_https"  value="<? echo stripslashes($row_radio_dados['streaming_https']); ?>"></td>
    </tr>
    <tr>
      <td>Twitter</td>
      <td><input type="text" name="twitter" id="twitter" value="<? echo stripslashes($row_radio_dados['twitter']); ?>"></td>
    </tr>
    <tr>
      <td>Facebook</td>
      <td><input type="text" name="facebook" id="facebook" value="<? echo stripslashes($row_radio_dados['facebook']); ?>"></td>
    </tr>
    <tr>
      <td>You Tube</td>
      <td><input type="text" name="you_tube" id="you_tube" value="<? echo stripslashes($row_radio_dados['you_tube']); ?>"></td>
    </tr>
    <tr>
      <td>Instagran</td>
      <td><input type="text" name="instagran" id="instagran" value="<? echo stripslashes($row_radio_dados['instagran']); ?>"></td>
    </tr>
    <tr>
      <td>Compartilhar no Whatsapp</td>
      <td><select name="whatsapp" id="whatsapp">
        <option value="1" <? if($row_radio_dados['whatsapp']==1) { ?>selected="selected"<? } ?>>Mostrar</option>
        <option value="0" <? if($row_radio_dados['whatsapp']==0) { ?>selected="selected"<? } ?>>N&atilde;o Mostrar</option>
      </select></td>
      </tr>
    <tr>
      <td>E-mail 1</td>
      <td><input type="text" name="email1" id="email1" value="<? echo stripslashes($row_radio_dados['email1']); ?>"></td>
    </tr>
    <tr>
      <td>E-mail 2</td>
      <td><input type="text" name="email2" id="email2" value="<? echo stripslashes($row_radio_dados['email2']); ?>"></td>
    </tr>
    <tr>
      <td>App IOS</td>
      <td><input type="text" name="app_ios" id="app_ios" value="<? echo stripslashes($row_radio_dados['app_ios']); ?>"></td>
    </tr>
    <tr>
      <td>App Android</td>
      <td><input type="text" name="app_android" id="app_android" value="<? echo stripslashes($row_radio_dados['app_android']); ?>"></td>
    </tr>
    <tr>
      <td>Texto Expediente</td>
      <td><textarea name="expediente_texto" id="expediente_texto"><? echo stripslashes($row_radio_dados['expediente_texto']); ?></textarea>
      <script>
CKEDITOR.replace( 'expediente_texto', {

toolbar : [
{ items: [ 'Source', 'Find', 'Image', 'Table', 'Bold', 'Italic', 'Underline', 'Subscript', 'Superscript', 'RemoveFormat', 'NumberedList', 'BulletedList',  'Maximize'] },
{ items: [ 'Outdent', 'Indent', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', 'Link', 'Unlink', 'TextColor', 'UIColor', 'FontSize', 'Styles'] },
],

stylesSet: [
	{ name: 'Marcador Amarelo',			element: 'span', attributes: { 'class': 'marker' } },
	{ name: 'Marcador Verde',			element: 'span', attributes: { 'class': 'marker2' } },
	{ name: 'Marcador Vermelho',			element: 'span', attributes: { 'class': 'marker3' } },
	{ name: 'Marcador Azul',			element: 'span', attributes: { 'class': 'marker4' } },
	


	{ name: 'Big',				element: 'big' },
	{ name: 'Small',			element: 'small' },

					]


});


		</script>
      </td>
    </tr>
    <tr>
      <td>Texto A R&aacute;dio</td>
      <td><textarea name="aradio_texto" id="aradio_texto"><? echo stripslashes($row_radio_dados['aradio_texto']); ?></textarea>
        <script>
CKEDITOR.replace( 'aradio_texto', {

toolbar : [
{ items: [ 'Source', 'Find', 'Image', 'Table', 'Bold', 'Italic', 'Underline', 'Subscript', 'Superscript', 'RemoveFormat', 'NumberedList', 'BulletedList',  'Maximize'] },
{ items: [ 'Outdent', 'Indent', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', 'Link', 'Unlink', 'TextColor', 'UIColor', 'FontSize', 'Styles'] },
],

stylesSet: [
	{ name: 'Marcador Amarelo',			element: 'span', attributes: { 'class': 'marker' } },
	{ name: 'Marcador Verde',			element: 'span', attributes: { 'class': 'marker2' } },
	{ name: 'Marcador Vermelho',			element: 'span', attributes: { 'class': 'marker3' } },
	{ name: 'Marcador Azul',			element: 'span', attributes: { 'class': 'marker4' } },
	


	{ name: 'Big',				element: 'big' },
	{ name: 'Small',			element: 'small' },

					]


});


		</script>
        </td>
    </tr>
    <tr>
      <td>Contatos</td>
      <td><textarea name="contatos_texto" id="contatos_texto"><? echo stripslashes($row_radio_dados['contatos_texto']); ?></textarea>
        <script>
CKEDITOR.replace( 'contatos_texto', {

toolbar : [
{ items: [ 'Source', 'Find', 'Image', 'Table', 'Bold', 'Italic', 'Underline', 'Subscript', 'Superscript', 'RemoveFormat', 'NumberedList', 'BulletedList',  'Maximize'] },
{ items: [ 'Outdent', 'Indent', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', 'Link', 'Unlink', 'TextColor', 'UIColor', 'FontSize', 'Styles'] },
],

stylesSet: [
	{ name: 'Marcador Amarelo',			element: 'span', attributes: { 'class': 'marker' } },
	{ name: 'Marcador Verde',			element: 'span', attributes: { 'class': 'marker2' } },
	{ name: 'Marcador Vermelho',			element: 'span', attributes: { 'class': 'marker3' } },
	{ name: 'Marcador Azul',			element: 'span', attributes: { 'class': 'marker4' } },
	


	{ name: 'Big',				element: 'big' },
	{ name: 'Small',			element: 'small' },

					]


});


		</script></td>
    </tr>
    <tr>
      <td>Avisos Ouvintes</td>
      <td><textarea name="avisos_texto" id="avisos_texto"><? echo stripslashes($row_radio_dados['avisos_texto']); ?></textarea>
        <script>
CKEDITOR.replace( 'avisos_texto', {

toolbar : [
{ items: [ 'Source', 'Find', 'Image', 'Table', 'Bold', 'Italic', 'Underline', 'Subscript', 'Superscript', 'RemoveFormat', 'NumberedList', 'BulletedList',  'Maximize'] },
{ items: [ 'Outdent', 'Indent', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', 'Link', 'Unlink', 'TextColor', 'UIColor', 'FontSize', 'Styles'] },
],

stylesSet: [
	{ name: 'Marcador Amarelo',			element: 'span', attributes: { 'class': 'marker' } },
	{ name: 'Marcador Verde',			element: 'span', attributes: { 'class': 'marker2' } },
	{ name: 'Marcador Vermelho',			element: 'span', attributes: { 'class': 'marker3' } },
	{ name: 'Marcador Azul',			element: 'span', attributes: { 'class': 'marker4' } },
	


	{ name: 'Big',				element: 'big' },
	{ name: 'Small',			element: 'small' },

					]


});


		</script></td>
    </tr>
    <tr>
      <td nowrap>URL do XML</td>
      <td><input type="text" name="xmladd" id="xmladd"  value="<? echo stripslashes($row_radio_dados['xmladd']); ?>"></td>
    </tr>
    <tr>
      <td>Armazenamento</td>
      <td><select name="armazenamento" id="armazenamento">
        <option value="1" <? if($row_radio_dados['armazenamento']!=2) { ?>selected="selected"<? } ?>>Armazenamento Google Drive</option>
        <option value="2" <? if($row_radio_dados['armazenamento']==2) { ?>selected="selected"<? } ?>>Armazenamento Local</option>
        </select></td>
    </tr>
    <tr>
      <td>Responsiva</td>
      <td><select name="responsiva" id="responsiva">
        <option value="0" <? if($row_radio_dados['responsiva']!=1) { ?>selected="selected"<? } ?>>N&atilde;o</option>
        <option value="1" <? if($row_radio_dados['responsiva']==1) { ?>selected="selected"<? } ?>>Sim</option>
        </select> </td>
    </tr>
    <tr>
      <td>No Ar</td>
      <td><select name="noar" id="noar">
        <option value="1" <? if($row_radio_dados['noar']==1) { ?>selected="selected"<? } ?>>Mostrar</option>
        <option value="0" <? if($row_radio_dados['noar']==0) { ?>selected="selected"<? } ?>>N&atilde;o Mostrar</option>
        </select></td>
    </tr>
    <tr>
      <td>A Seguir</td>
      <td><select name="aseguir" id="aseguir">
        <option value="1" <? if($row_radio_dados['aseguir']==1) { ?>selected="selected"<? } ?>>Mostrar</option>
        <option value="0" <? if($row_radio_dados['aseguir']==0) { ?>selected="selected"<? } ?>>N&atilde;o Mostrar</option>
      </select></td>
    </tr>
    <tr>
      <td nowrap="nowrap">Modelo dos Podcasts</td>
      <td><select name="modelo_podcasts" id="modelo_podcasts">
        <option value="1" <? if($row_radio_dados['modelo_podcasts']==1) { ?>selected="selected"<? } ?>>M&uacute;ltiplos podcasts</option>
        <option value="2" <? if($row_radio_dados['modelo_podcasts']==2) { ?>selected="selected"<? } ?>>Bot&otilde;es para uma &uacute;nica &aacute;rea</option>
        <option value="3" <? if($row_radio_dados['modelo_podcasts']==3) { ?>selected="selected"<? } ?>>N&atilde;o Mostrar</option>
        </select></td>
    </tr>
    <tr>
      <td>Not&iacute;cias por p&aacute;gina</td>
      <td><input type="text" name="noticias_num" id="noticias_num" value="<? echo stripslashes($row_radio_dados['noticias_num']); ?>"></td>
    </tr>
    <tr>
      <td>Not&iacute;cias Pagina&ccedil;&atilde;o</td>
      <td><select name="noticias_paginacao" id="noticias_paginacao">
        <option value="1" <? if($row_radio_dados['noticias_paginacao']==1) { ?>selected="selected"<? } ?>>Mostrar</option>
        <option value="0" <? if($row_radio_dados['noticias_paginacao']==0) { ?>selected="selected"<? } ?>>N&atilde;o Mostrar</option>
        </select></td>
    </tr>
    <tr>
      <td nowrap="nowrap">Not&iacute;cias Pagina&ccedil;&atilde;o Status</td>
      <td nowrap="nowrap"><select name="noticias_pag_status" id="noticias_pag_status">
        <option value="1" <? if($row_radio_dados['noticias_pag_status']==1) { ?>selected="selected"<? } ?>>Mostrar</option>
        <option value="0" <? if($row_radio_dados['noticias_pag_status']==0) { ?>selected="selected"<? } ?>>N&atilde;o Mostrar</option>
        </select></td>
    </tr>
    <tr>
      <td nowrap="nowrap">Not&iacute;cias Data</td>
      <td nowrap="nowrap"><select name="noticia_data" id="noticia_data">
        <option value="1" <? if($row_radio_dados['noticia_data']==1) { ?>selected="selected"<? } ?>>Mostrar</option>
        <option value="0" <? if($row_radio_dados['noticia_data']==0) { ?>selected="selected"<? } ?>>N&atilde;o Mostrar</option>
        </select></td>
    </tr>
    <tr>
      <td nowrap="nowrap">Not&iacute;cias Autor</td>
      <td nowrap="nowrap"><select name="noticia_autor" id="noticia_autor">
        <option value="1" <? if($row_radio_dados['noticia_autor']==1) { ?>selected="selected"<? } ?>>Mostrar</option>
        <option value="0" <? if($row_radio_dados['noticia_autor']==0) { ?>selected="selected"<? } ?>>N&atilde;o Mostrar</option>
      </select></td>
    </tr>
    <tr>
      <td>Comentarios</td>
      <td><select name="comentarios" id="comentarios">
        <option value="1" <? if($row_radio_dados['comentarios']==1) { ?>selected="selected"<? } ?>>Mostrar</option>
        <option value="0" <? if($row_radio_dados['comentarios']==0) { ?>selected="selected"<? } ?>>N&atilde;o Mostrar</option>
        </select></td>
    </tr>
        <tr>
          <td>Coment&aacute;rios por p&aacute;gina</td>
          <td><input type="text" name="comentarios_num" id="comentarios_num" value="<? echo stripslashes($row_radio_dados['comentarios_num']); ?>"></td>
        </tr>
        <tr>
          <td>Comentarios Pagina&ccedil;&atilde;o</td>
          <td><select name="comentarios_paginacao" id="comentarios_paginacao">
            <option value="1" <? if($row_radio_dados['comentarios_paginacao']==1) { ?>selected="selected"<? } ?>>Mostrar</option>
            <option value="0" <? if($row_radio_dados['comentarios_paginacao']==0) { ?>selected="selected"<? } ?>>N&atilde;o Mostrar</option>
          </select>
          </td>
        </tr>
        <tr>
          <td nowrap="nowrap">Coment&aacute;rios Pagina&ccedil;&atilde;o Status</td>
          <td nowrap="nowrap"><select name="comentarios_pag_status" id="comentarios_pag_status">
            <option value="1" <? if($row_radio_dados['comentarios_pag_status']==1) { ?>selected="selected"<? } ?>>Mostrar</option>
            <option value="0" <? if($row_radio_dados['comentarios_pag_status']==0) { ?>selected="selected"<? } ?>>N&atilde;o Mostrar</option>
          </select></td>
        </tr>
        <tr>
          <td nowrap="nowrap">Bot&atilde;o Todos os Coment&aacute;rios</td>
          <td nowrap="nowrap"><select name="comentarios_botao" id="comentarios_botao">
            <option value="1" <? if($row_radio_dados['comentarios_botao']==1) { ?>selected="selected"<? } ?>>Mostrar</option>
            <option value="0" <? if($row_radio_dados['comentarios_botao']==0) { ?>selected="selected"<? } ?>>N&atilde;o Mostrar</option>
          </select></td>
        </tr>
        <tr>
          <td>Formul&aacute;rio Coment&aacute;rios</td>
          <td><select name="comentarios_form" id="comentarios_form">
            <option value="1" <? if($row_radio_dados['comentarios_form']==1) { ?>selected="selected"<? } ?>>Mostrar</option>
            <option value="0" <? if($row_radio_dados['comentarios_form']==0) { ?>selected="selected"<? } ?>>N&atilde;o Mostrar</option>
          </select></td>
      </tr>
      <tr>
        <td>Coment&aacute;rios Campo Extra</td>
          <td><input type="text" name="comentarios_extra" id="comentarios_extra" value="<? echo stripslashes($row_radio_dados['comentarios_extra']); ?>"></td>
      </tr>
      <tr>
        <td>Coment&aacute;rio Tamanho M&aacute;ximo</td>
        <td><input type="text" name="comentarios_max" id="comentarios_max" value="<? echo stripslashes($row_radio_dados['comentarios_max']); ?>"></td>
      </tr>
      <tr>
        <td>Curtir Programacao</td>
        <td><select name="curtir_programacao" id="curtir_programacao">
          <option value="1" <? if($row_radio_dados['curtir_programacao']==1) { ?>selected="selected"<? } ?>>Mostrar</option>
          <option value="0" <? if($row_radio_dados['curtir_programacao']==0) { ?>selected="selected"<? } ?>>N&atilde;o Mostrar</option>
        </select></td>
      </tr>
    <tr>
      <td>Buscar Conte&uacute;do</td>
      <td><select name="buscar_conteudo" id="buscar_conteudo">
        <option value="1" <? if($row_radio_dados['buscar_conteudo']==1) { ?>selected="selected"<? } ?>>Mostrar</option>
        <option value="0" <? if($row_radio_dados['buscar_conteudo']==0) { ?>selected="selected"<? } ?>>N&atilde;o Mostrar</option>
      </select></td>
    </tr>
    <tr>
      <td nowrap="nowrap">Lista de M&uacute;sicas Tocadas</td>
      <td><select name="lista_tocadas" id="lista_tocadas">
        <option value="1" <? if($row_radio_dados['lista_tocadas']==1) { ?>selected="selected"<? } ?>>Mostrar</option>
        <option value="0" <? if($row_radio_dados['lista_tocadas']==0) { ?>selected="selected"<? } ?>>N&atilde;o Mostrar</option>
        </select></td>
    </tr>
    <tr>
      <td>Tocadas por p&aacute;gina</td>
      <td><input type="text" name="tocadas_num" id="tocadas_num" value="<? echo stripslashes($row_radio_dados['tocadas_num']); ?>"></td>
    </tr>
    <tr>
      <td>Tocadas Pagina&ccedil;&atilde;o</td>
      <td><select name="tocadas_paginacao" id="tocadas_paginacao">
        <option value="1" <? if($row_radio_dados['tocadas_paginacao']==1) { ?>selected="selected"<? } ?>>Mostrar</option>
        <option value="0" <? if($row_radio_dados['tocadas_paginacao']==0) { ?>selected="selected"<? } ?>>N&atilde;o Mostrar</option>
        </select></td>
    </tr>
    <tr>
      <td nowrap="nowrap">Tocadas Pagina&ccedil;&atilde;o Status</td>
      <td nowrap="nowrap"><select name="tocadas_pag_status" id="tocadas_pag_status">
        <option value="1" <? if($row_radio_dados['tocadas_pag_status']==1) { ?>selected="selected"<? } ?>>Mostrar</option>
        <option value="0" <? if($row_radio_dados['tocadas_pag_status']==0) { ?>selected="selected"<? } ?>>N&atilde;o Mostrar</option>
      </select></td>
    </tr>
    <tr>
      <td>Modelo do Player</td>
      <td><select name="modelo_player" id="modelo_player">
        <option value="1" <? if($row_radio_dados['modelo_player']==1) { ?>selected="selected"<? } ?>>Website</option>
        <option value="2" <? if($row_radio_dados['modelo_player']==2) { ?>selected="selected"<? } ?>>Player em Janela</option>
        <option value="3" <? if($row_radio_dados['modelo_player']==3) { ?>selected="selected"<? } ?>>Somente Podcasts</option>
        </select></td>
    </tr>
    <tr>
      <td>Largura da Janela</td>
      <td><input type="text" name="janela_largura" id="janela_largura" value="<? echo stripslashes($row_radio_dados['janela_largura']); ?>"></td>
    </tr>
    <tr>
      <td>Altura da Janela</td>
      <td><input type="text" name="janela_altura" id="janela_altura" value="<? echo stripslashes($row_radio_dados['janela_altura']); ?>"></td>
    </tr>
    <tr>
      <td>C&oacute;digo Analytics</td>
      <td><input type="text" name="analytics" id="analytics" value="<? echo stripslashes($row_radio_dados['analytics']); ?>"></td>
    </tr>
    <tr>
      <td>Complemento da Mensagem</td>
      <td><textarea name="complemento_msg" id="complemento_msg"><? echo stripslashes($row_radio_dados['complemento_msg']); ?></textarea></td>
    </tr>
    <tr>
      <td>Linha de Not&iacute;cia do APP</td>
      <td><select name="app_noticia" id="app_noticia">
        <option value="1" <? if($row_radio_dados['app_noticia']!=2) { ?>selected="selected"<? } ?>>01/01/01 - Título da Matéria</option>
        <option value="2" <? if($row_radio_dados['app_noticia']==2) { ?>selected="selected"<? } ?>>Segunda, 01/01/01 - 01:01 - Titulo da Matéria</option>
        </select></td>
    </tr>
    <tr>
      <td>Descri&ccedil;&atilde;o</td>
      <td><textarea name="descricao" id="descricao"><? echo stripslashes($row_radio_dados['descricao']); ?></textarea></td>
    </tr>
    <tr>
      <td>Palavras Chave</td>
      <td><textarea name="metakeywords" id="metakeywords"><? echo stripslashes($row_radio_dados['metakeywords']); ?></textarea></td>
    </tr>
    <tr>
      <td><input name="id" type="hidden" id="id" value="<? echo stripslashes($row_radio_dados['id']); ?>"></td>
      <td><input type="submit" name="Gravar" id="Gravar" value="Enviar"></td>
    </tr>
  </tbody>
</table>
</form>
<? include("../rodape.php"); ?>
</body>
</html>
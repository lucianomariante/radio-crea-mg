<? 
require_once('../../includes/login.php');
require_once('../../includes/funcoes.php');
require_once('../../Connections/conectar.php');

header("location:index.php");

$id=addslashes($_POST['id']);
$twitter=addslashes($_POST['twitter']);
$facebook=addslashes($_POST['facebook']);
$you_tube=addslashes($_POST['you_tube']);
$instagran=addslashes($_POST['instagran']);
$noar=addslashes($_POST['noar']);
$aseguir=addslashes($_POST['aseguir']);
$modelo_podcasts=addslashes($_POST['modelo_podcasts']);
$comentarios=addslashes($_POST['comentarios']);
$comentarios_form=addslashes($_POST['comentarios_form']);
$expediente_texto=addslashes($_POST['expediente_texto']);
$nome_radio=addslashes($_POST['nome_radio']);
$url_radio=addslashes($_POST['url_radio']);
$curtir_programacao=addslashes($_POST['curtir_programacao']);
$app_ios=addslashes($_POST['app_ios']);
$app_android=addslashes($_POST['app_android']);
$buscar_conteudo=addslashes($_POST['buscar_conteudo']);
$lista_tocadas=addslashes($_POST['lista_tocadas']);
$streaming_titular=addslashes($_POST['streaming_titular']);
$streaming_reserva=addslashes($_POST['streaming_reserva']);
$usuario=addslashes($_POST['usuario']);
$senha=addslashes($_POST['senha']);
$modelo_player=addslashes($_POST['modelo_player']);
$email1=addslashes($_POST['email1']);
$email2=addslashes($_POST['email2']);
$analytics=addslashes($_POST['analytics']);
$janela_largura=addslashes($_POST['janela_largura']);
$janela_altura=addslashes($_POST['janela_altura']);
$noticias_num=addslashes($_POST['noticias_num']);
$comentarios_num=addslashes($_POST['comentarios_num']);
$tocadas_num=addslashes($_POST['tocadas_num']);
$noticias_paginacao=addslashes($_POST['noticias_paginacao']);
$comentarios_paginacao=addslashes($_POST['comentarios_paginacao']);
$tocadas_paginacao=addslashes($_POST['tocadas_paginacao']);
$noticias_pag_status=addslashes($_POST['noticias_pag_status']);
$comentarios_pag_status=addslashes($_POST['comentarios_pag_status']);
$tocadas_pag_status=addslashes($_POST['tocadas_pag_status']);
$noticia_data=addslashes($_POST['noticia_data']);
$noticia_autor=addslashes($_POST['noticia_autor']);
$whatsapp=addslashes($_POST['whatsapp']);
$url_radio2=addslashes($_POST['url_radio2']);
$captcha_a=addslashes($_POST['captcha_a']);
$captcha_a2=addslashes($_POST['captcha_a2']);
$captcha_b=addslashes($_POST['captcha_b']);
$captcha_b2=addslashes($_POST['captcha_b2']);
$info_autodj=addslashes($_POST['info_autodj']);
$user_centova=addslashes($_POST['user_centova']);
$info_autodj2=addslashes($_POST['info_autodj2']);
$user_centova2=addslashes($_POST['user_centova2']);
$comentarios_extra=addslashes($_POST['comentarios_extra']);
$aradio_texto=addslashes($_POST['aradio_texto']);
$avisos_texto=addslashes($_POST['avisos_texto']);
$comentarios_max=addslashes($_POST['comentarios_max']);
$comentarios_botao=addslashes($_POST['comentarios_botao']);
$complemento_msg=addslashes($_POST['complemento_msg']);
$contatos_texto=addslashes($_POST['contatos_texto']);
$responsiva=addslashes($_POST['responsiva']);
$xmladd=addslashes($_POST['xmladd']);
$armazenamento=addslashes($_POST['armazenamento']);
$app_noticia=addslashes($_POST['app_noticia']);
$url_https = addslashes($_POST['url_https']);
$streaming_https = addslashes($_POST['streaming_https']);

$descricao=addslashes($_POST['descricao']);
$metakeywords=addslashes($_POST['metakeywords']);

$query = "UPDATE radio_definicoes SET
twitter='".$twitter."',
facebook='".$facebook."',
you_tube='".$you_tube."',
instagran='".$instagran."',
noar='".$noar."',
aseguir='".$aseguir."',
modelo_podcasts='".$modelo_podcasts."',
comentarios='".$comentarios."',
comentarios_form='".$comentarios_form."',
expediente_texto='".$expediente_texto."',
aradio_texto='".$aradio_texto."',
nome_radio='".$nome_radio."',
url_radio='".$url_radio."',
curtir_programacao='".$curtir_programacao."',
app_ios='".$app_ios."',
app_android='".$app_android."',
buscar_conteudo='".$buscar_conteudo."',
lista_tocadas='".$lista_tocadas."',
streaming_titular='".$streaming_titular."',
streaming_reserva='".$streaming_reserva."',
usuario='".$usuario."',
senha='".$senha."',
modelo_player='".$modelo_player."',
janela_largura='".$janela_largura."',
janela_altura='".$janela_altura."',
email1='".$email1."',
email2='".$email2."',
analytics='".$analytics."',
noticias_num='".$noticias_num."',
comentarios_num='".$comentarios_num."',
tocadas_num='".$tocadas_num."',
noticias_paginacao='".$noticias_paginacao."',
comentarios_paginacao='".$comentarios_paginacao."',
tocadas_paginacao='".$tocadas_paginacao."',
noticias_pag_status='".$noticias_pag_status."',
comentarios_pag_status='".$comentarios_pag_status."',
tocadas_pag_status='".$tocadas_pag_status."',
noticia_data='".$noticia_data."',
noticia_autor='".$noticia_autor."',
whatsapp='".$whatsapp."',
captcha_a='".$captcha_a."',
captcha_a2='".$captcha_a2."',
captcha_b='".$captcha_b."',
captcha_b2='".$captcha_b2."',
info_autodj='".$info_autodj."',
user_centova='".$user_centova."',
info_autodj2='".$info_autodj2."',
user_centova2='".$user_centova2."',
avisos_texto='".$avisos_texto."',
comentarios_max='".$comentarios_max."',
comentarios_botao='".$comentarios_botao."',
comentarios_extra='".$comentarios_extra."',
complemento_msg='".$complemento_msg."',
contatos_texto='".$contatos_texto."',
responsiva='".$responsiva."',
xmladd='".$xmladd."',
app_noticia = '".$app_noticia."',
armazenamento='".$armazenamento."', 
descricao='".$descricao."', 
metakeywords='".$metakeywords."',
url_https='".$url_https."',
streaming_https='".$streaming_https."'
WHERE id = '".$id."'";

mysqli_select_db($conectar,$database_conectar);
mysqli_query($conectar,$query);

mysqli_close($conectar);

?>
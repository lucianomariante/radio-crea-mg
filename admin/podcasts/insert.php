<? 
require_once('../../includes/login.php');
require_once('../../includes/funcoes.php');
require_once('../../Connections/conectar.php');

header("location:index.php");

$nome_podcast=addslashes($_POST['nome_podcast']);
$area=addslashes($_POST['area']);
$autor=addslashes($_POST['autor']);
$cliente=addslashes($_POST['cliente']);
$editoria=addslashes($_POST['editoria']);

$descricao=addslashes($_POST['descricao']);
$nome_autor=addslashes($_POST['nome_autor']);
$imagem=addslashes($_POST['imagem']);
$email=addslashes($_POST['email']);
$titulo=addslashes($_POST['titulo']);
$subtitulo=addslashes($_POST['subtitulo']);
$link=addslashes($_POST['link']);
$spotify=addslashes($_POST['spotify']);

$destaque=addslashes($_POST['destaque']);
$texto_destaque=addslashes($_POST['texto_destaque']);
$googlepodcasts=addslashes($_POST['googlepodcasts']);
$apple_podcast=addslashes($_POST['apple_podcast']);
$deezer=addslashes($_POST['deezer']);
$castbox=addslashes($_POST['castbox']);

$amigavel=addslashes($_POST['amigavel']);
$metakeywords=addslashes($_POST['metakeywords']);
$googletagmanager=addslashes($_POST['googletagmanager']);
$altimg=addslashes($_POST['altimg']);

$query = "insert into radio_podcasts (nome_podcast,area,autor,cliente,editoria,descricao,nome_autor,imagem,email,titulo,subtitulo,link,spotify,destaque,texto_destaque,googlepodcasts,apple_podcast,deezer,castbox,amigavel,metakeywords,googletagmanager,altimg) values ('".$nome_podcast."','".$area."','".$autor."','".$cliente."','".$editoria."','".$descricao."','".$nome_autor."','".$imagem."','".$email."','".$titulo."','".$subtitulo."','".$link."','".$spotify."','".$destaque."','".$texto_destaque."','".$googlepodcasts."','".$apple_podcast."','".$deezer."','".$castbox."','".$amigavel."','".$metakeywords."','".$googletagmanager."','".$altimg."')";

mysqli_select_db($conectar,$database_conectar);
mysqli_query($conectar,$query);

mysql_close($conectar);

?>
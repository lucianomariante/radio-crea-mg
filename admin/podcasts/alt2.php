<? 
require_once('../../includes/login.php');
require_once('../../includes/funcoes.php');
require_once('../../Connections/conectar.php');

header("location:index.php");

$id=addslashes($_POST['id']);

$descricao=addslashes($_POST['descricao']);
$nome_autor=addslashes($_POST['nome_autor']);
$imagem=addslashes($_POST['imagem']);
$email=addslashes($_POST['email']);
$titulo=addslashes($_POST['titulo']);
$subtitulo=addslashes($_POST['subtitulo']);
$link=addslashes($_POST['link']);
$spotify=addslashes($_POST['spotify']);
$googlepodcasts=addslashes($_POST['googlepodcasts']);
$apple_podcast=addslashes($_POST['apple_podcast']);
$deezer=addslashes($_POST['deezer']);
$castbox=addslashes($_POST['castbox']);

$amigavel=addslashes($_POST['amigavel']);
$metakeywords=addslashes($_POST['metakeywords']);
$googletagmanager=addslashes($_POST['googletagmanager']);
$altimg=addslashes($_POST['altimg']);

$query = "UPDATE radio_definicoes SET descricao='".$descricao."', nome_autor='".$nome_autor."', imagem='".$imagem."', email='".$email."', titulo='".$titulo."', subtitulo='".$subtitulo."', link='".$link."', spotify='".$spotify."', googlepodcasts='".$googlepodcasts."', apple_podcast='".$apple_podcast."', deezer='".$deezer."', castbox='".$castbox."', altimg='".$altimg."', googletagmanager='".$googletagmanager."', metakeywords='".$metakeywords."', amigavel='".$amigavel."'
WHERE id = 1";

mysqli_select_db($conectar,$database_conectar);
mysqli_query($conectar,$query);

mysql_close($conectar);

?>
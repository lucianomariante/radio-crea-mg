<? 
require_once('../../includes/login.php');
require_once('../../includes/funcoes.php');
require_once('../../Connections/conectar.php');

header("location:index.php");

$id=addslashes($_POST['id']);
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
$googlepodcasts=addslashes($_POST['googlepodcasts']);

$destaque=addslashes($_POST['destaque']);
$texto_destaque=addslashes($_POST['texto_destaque']);
$apple_podcast=addslashes($_POST['apple_podcast']);
$deezer=addslashes($_POST['deezer']);
$castbox=addslashes($_POST['castbox']);

$amigavel=addslashes($_POST['amigavel']);
$metakeywords=addslashes($_POST['metakeywords']);
$googletagmanager=addslashes($_POST['googletagmanager']);
$altimg=addslashes($_POST['altimg']);


foreach($_POST as $nome_campo => $valor){ 
   echo "\$" . $nome_campo . "='" . $nome_campo . "';"; 
   //eval($comando); 
} 

$query = "UPDATE radio_podcasts SET
nome_podcast='".$nome_podcast."', editoria='".$editoria."', area='".$area."', autor='".$autor."', cliente='".$cliente."', 
descricao='".$descricao."', nome_autor='".$nome_autor."', imagem='".$imagem."', email='".$email."', titulo='".$titulo."', subtitulo='".$subtitulo."', link='".$link."', spotify='".$spotify."', destaque='".$destaque."', texto_destaque='".$texto_destaque."', googlepodcasts='".$googlepodcasts."', apple_podcast='".$apple_podcast."', deezer='".$deezer."', castbox='".$castbox."', altimg='".$altimg."', googletagmanager='".$googletagmanager."', metakeywords='".$metakeywords."', amigavel='".$amigavel."'
WHERE id = '".$id."'";

//echo $query;

mysqli_select_db($conectar,$database_conectar);
mysqli_query($conectar,$query);

mysqli_close($conectar);

?>
<? 
require_once('../../includes/login.php');
require_once('../../includes/funcoes.php');
require_once('../../Connections/conectar.php');

header("location:index.php");

$pasta=addslashes($_POST['pasta']);
$artista=addslashes($_POST['artista']);
$musica=addslashes($_POST['musica']);

$query = "insert into playlist (pasta,artista,musica) values ('".$pasta."','".$artista."','".$musica."')";

mysqli_select_db($conectar,$database_conectar);
mysqli_query($conectar,$query);

gera_pastas();

mysql_close($conectar);

?>
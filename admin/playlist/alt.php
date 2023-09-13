<? 
require_once('../../includes/login.php');
require_once('../../includes/funcoes.php');
require_once('../../Connections/conectar.php');

header("location:index.php");

$id=addslashes($_POST['id']);
$pasta=addslashes($_POST['pasta']);
$artista=addslashes($_POST['artista']);
$musica=addslashes($_POST['musica']);

$query = "UPDATE playlist SET
pasta='".$pasta."', artista='".$artista."', musica='".$musica."'
WHERE id = '".$id."'";

mysqli_select_db($conectar,$database_conectar);
mysqli_query($conectar,$query);

gera_pastas();

mysql_close($conectar);

?>
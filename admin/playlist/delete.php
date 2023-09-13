<? 
require_once('../../includes/login.php');
require_once('../../includes/funcoes.php');
require_once('../../Connections/conectar.php');

header("location:index.php");

$id=addslashes($_GET['id']);

$query = "delete from playlist where id = '".$id."'";

mysqli_select_db($conectar,$database_conectar);
mysqli_query($conectar,$query);

gera_pastas();

mysql_close($conectar);

?>
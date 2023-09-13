<? 
require_once('../../includes/login.php');
require_once('../../includes/funcoes.php');
require_once('../../Connections/conectar.php');

header("location:index.php");

$id=addslashes($_POST['id']);
$nome=addslashes($_POST['nome']);
$url=addslashes($_POST['url']);
$janela=addslashes($_POST['janela']);


$query = "UPDATE radio_botoes SET
nome='".$nome."', url='".$url."', janela='".$janela."' WHERE id = '".$id."'";


mysqli_select_db($conectar,$database_conectar);
mysqli_query($conectar,$query);

mysql_close($conectar);

?>
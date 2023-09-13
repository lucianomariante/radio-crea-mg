<? 
require_once('../../includes/login.php');
require_once('../../includes/funcoes.php');
require_once('../../Connections/conectar.php');

header("location:index.php");

$nome=addslashes($_POST['nome']);
$url=addslashes($_POST['url']);
$janela=addslashes($_POST['janela']);

$query = "insert into radio_botoes (nome,url,janela) values ('".$nome."','".$url."','".$janela."')";

mysqli_select_db($conectar,$database_conectar);
mysqli_query($conectar,$query);

mysql_close($conectar);

?>
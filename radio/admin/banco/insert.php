<? 
require_once('../../includes/login.php');
require_once('../../includes/funcoes.php');
require_once('../../Connections/conectar.php');

//header("location:insertform.php");

$query = $_POST['sql'];

mysqli_select_db($conectar,$database_conectar);
mysqli_query($conectar,$query);

echo utf8_decode("Atualização executada: ").$_POST['sql'];

mysqli_close($conectar);

?>
<? 
require_once('../../includes/login.php');
require_once('../../includes/funcoes.php');
require_once('../../Connections/conectar.php');

header("location:index.php");

$data = addslashes(convdata($_POST['data'],0));
$nome = addslashes($_POST['nome']);
$comentario = addslashes($_POST['comentario']);
$email = addslashes($_POST['email']);
$extra = addslashes($_POST['extra']);
$aprovado = addslashes($_POST['aprovado']);
$ipuser = getip();		

$query = "insert into radio_comentarios (data, nome, comentario, email, aprovado, ipuser, extra) values ('".$data."', '".$nome."', '".$comentario."', '".$email."', '".$aprovado."', '".$ipuser."', '".$extra."')";

mysqli_select_db($conectar,$database_conectar);
mysqli_query($conectar,$query);

//echo $query;

mysql_close($conectar);

?>
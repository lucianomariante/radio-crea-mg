<? 
require_once('../../includes/login.php');
require_once('../../includes/funcoes.php');
require_once('../../Connections/conectar.php');

header("location:index.php");
$id = addslashes($_POST['id']);
$data = addslashes(convdata($_POST['data'],0));
$nome = addslashes($_POST['nome']);
$comentario = addslashes($_POST['comentario']);
$email = addslashes($_POST['email']);
$aprovado = addslashes($_POST['aprovado']);
$extra = addslashes($_POST['extra']);

$query = "UPDATE radio_comentarios SET
data='".$data."',
nome='".$nome."',
comentario='".$comentario."',
email='".$email."',
extra='".$extra."',
aprovado='".$aprovado."'
WHERE id = '".$id."'";

mysqli_select_db($conectar,$database_conectar);
mysqli_query($conectar,$query);



mysql_close($conectar);

?>
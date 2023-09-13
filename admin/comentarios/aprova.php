<? 
require_once('../../includes/login.php');
require_once('../../includes/funcoes.php');
require_once('../../Connections/conectar.php');

//header("location:index.php");

$id=addslashes($_GET['id']);

if($_GET['status']==1) { 
echo "<a href=\"javascript:aprova(".$_GET['id'].",2);\">".utf8_decode("Não")."</a>"; 
$x=2; 
} else {
echo "<a href=\"javascript:aprova(".$_GET['id'].",1);\">Sim</a>"; 
$x=1; 
}
$query = "update radio_comentarios set aprovado = '".$x."' where id = '".$id."'";

mysqli_select_db($conectar,$database_conectar);
mysqli_query($conectar,$query);

//mysql_close($conectar);

?>
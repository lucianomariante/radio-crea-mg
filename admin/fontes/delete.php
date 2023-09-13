<? 
require_once('../../includes/login.php');
require_once('../../includes/funcoes.php');
require_once('../../Connections/conectar.php');

if($_GET['idcategoria']!="") {  
$enxerto2 = "?id=".$_GET['idcategoria'];
}

header("location:index.php".$enxerto2);

$id=addslashes($_GET['id']);

$query = "delete from radio_fontes where id = '".$id."'";

mysqli_select_db($conectar,$database_conectar);
mysqli_query($conectar,$query);

mysql_close($conectar);

?>
<? 
require_once('../../includes/login.php');
require_once('../../includes/funcoes.php');
require_once('../../Connections/conectar.php');

if($_POST['voltar']!="") {  
$enxerto2 = "?id=".$_POST['voltar'];
}

header("location:index.php".$enxerto2);

$id=addslashes($_POST['id']);
$idcategoria = addslashes($_POST['idcategoria']);
$nome = addslashes($_POST['nome']);
$cargo = addslashes($_POST['cargo']);
$email = addslashes($_POST['email']);
	


$query = "UPDATE radio_fontes_temp SET
cargo='".$cargo."',
nome='".$nome."',
email='".$email."'
WHERE id = '".$id."'";

mysqli_select_db($conectar,$database_conectar);
mysqli_query($conectar,$query);



mysql_close($conectar);

?>
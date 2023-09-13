<? 
require_once('../../includes/login.php');
require_once('../../includes/funcoes.php');
require_once('../../Connections/conectar.php');

if($_POST['voltar']!="") {  
$enxerto2 = "?id=".$_POST['voltar'];
}

header("location:index.php".$enxerto2);

$idcategoria = addslashes($_POST['voltar']);
$nome = addslashes($_POST['nome']);
$cargo = addslashes($_POST['cargo']);
$email = addslashes($_POST['email']);

$id=addslashes($_POST['voltar']);
mysqli_select_db($conectar,$database_conectar);
$query_registro = "SELECT * FROM radio_noticias_temp WHERE id = '".$_POST['voltar']."'";
$registro = mysqli_query($conectar,$query_registro);
$row_registro = mysqli_fetch_assoc($registro);
$totalRows_registro = mysqli_num_rows($registro);

$idmateriarw = $row_registro['idradioweb'];

$query = "insert into radio_fontes_temp (nome, cargo, email, idmateria, idmateriarw) values ('".$nome."', '".$cargo."', '".$email."', '".$idcategoria."', '".$idmateriarw."')";

mysqli_select_db($conectar,$database_conectar);
mysqli_query($conectar,$query);

//mysql_close($conectar);

?>
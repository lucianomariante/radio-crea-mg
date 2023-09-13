<? 
require_once('../../includes/login.php');
require_once('../../includes/funcoes.php');
require_once('../../Connections/conectar.php');

header("location:index.php");

mysqli_select_db($conectar,$database_conectar);

$registro = mysqli_query($conectar,"SELECT * FROM radio_noticias_temp WHERE id = '".$_GET['id']."'");
$row_registro = mysqli_fetch_assoc($registro);

foreach ($row_registro as $key => $value) {
	if($key!='id') {
    $q_completa .= ",'".$value."'";
	$q_completa2 .= ",".$key."";
	} else {
	$q_completa .= "''";
	$q_completa2 .= "".$key."";	
	}
}

mysqli_query($conectar,"insert into radio_noticias (".$q_completa2.") values(".$q_completa.")");

$novoid = mysqli_insert_id($conectar);


$registro = mysqli_query($conectar,"SELECT * FROM radio_fontes_temp WHERE idmateria = '".$_GET['id']."'");
$row_registro = mysqli_fetch_assoc($registro);

do {
	foreach ($row_registro as $key => $value) {
		if($key!='id') {

			if($key=='idmateria') {
				$q_completab .= ",'".$novoid."'";
			} else {
				$q_completab .= ",'".$value."'";
			}
			
			$q_completa2b .= ",".$key."";
			
		} else {
			
    		$q_completab .= "''";
			$q_completa2b .= "".$key."";	
		}
	}


	mysqli_query($conectar,"insert into radio_fontes (".$q_completa2b.") values(".$q_completab.")");

	$q_completab = "";
	$q_completa2b = "";

} while ($row_registro = mysqli_fetch_assoc($registro));



mysqli_query($conectar,"delete from radio_noticias_temp where id = '".$_GET['id']."'");
mysqli_query($conectar,"delete from radio_fontes_temp where idmateria = '".$_GET['id']."'");


mysqli_close($conectar);

?>
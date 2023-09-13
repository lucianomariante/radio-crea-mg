<?php require_once('Connections/conectar_radioweb.php');
require_once('includes/funcoes.php');
header("Content-Type: text/xml; charset=UTF-8",true);
header("Content-type: text/xml");
if($_GET['chave_usuario']!="") { $idus = $_GET['chave_usuario'];
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";
$query_listaregistros = "SELECT *, cliente as nome_item FROM clientes where ativo = 1 ORDER BY cliente ASC";
if($idus==1) { $query_listaregistros = "SELECT *, cliente as nome_item FROM clientes where ativo = 1 ORDER BY cliente ASC"; }
if($idus==2) { $query_listaregistros = "SELECT *, idArea as id, descricao as nome_item FROM areas where aparece = 1 ORDER BY descricao ASC"; }
if($idus==3) { $query_listaregistros = "SELECT *, idtitulo as id, textotitulo as nome_item FROM indicetitulos where aparece = 1 ORDER BY textotitulo"; }
if($idus==4) { $query_listaregistros = "SELECT *, idAutor as id, nome as nome_item FROM autores WHERE aparece = 1 ORDER BY nome, idAutor"; }
$listaregistros = mysqli_query($conectar, $query_listaregistros) or die(mysqli_error());
$row_listaregistros = mysqli_fetch_assoc($listaregistros);

echo "<lista>";
	do {
		echo "<item>";
	 	echo "<id>".$row_listaregistros['id']."</id>"; 
	 	echo "<nome>".utf8_encode(str_replace("&","e",$row_listaregistros['nome_item']))."</nome>";
	 	echo "</item>";
	} while ($row_listaregistros = mysqli_fetch_assoc($listaregistros)); 
echo "</lista>"; 
mysqli_free_result($listaregistros);
}

?>
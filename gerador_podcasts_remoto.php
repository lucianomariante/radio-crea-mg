<?php 

error_reporting(E_ALL);
 
/* Habilita a exibição de erros */
ini_set("display_errors", 1);
require_once('Connections/conectar.php');
require_once('includes/funcoes.php');


function simplexml_load_file_caseiro($path){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$path);
    curl_setopt($ch, CURLOPT_FAILONERROR,1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    $retValue = curl_exec($ch);          
    curl_close($ch);
	$oXML = new SimpleXMLElement($retValue);
    return $oXML;
}


$currentPage = $_SERVER["PHP_SELF"];

mysqli_select_db($conectar,$database_conectar);
$query_listacategorias = "SELECT * from radio_podcasts order by radio_podcasts.id ";
$listacategorias = mysqli_query($conectar,$query_listacategorias);
$row_listacategorias = mysqli_fetch_assoc($listacategorias);

$linha = array();

do {
	
$linha[] = array('id'=>$row_listacategorias['id'],'editoria'=>$row_listacategorias['editoria'],'autor'=>$row_listacategorias['autor'],'cliente'=>$row_listacategorias['cliente'],'area'=>$row_listacategorias['area']); 

echo "<br><br>https://www.agenciaradioweb.com.br/xml_radios/gerador_radio_generica_fontes.php?id=".$row_listacategorias['id']."&editoria=".$row_listacategorias['editoria']."&autor=".$row_listacategorias['autor']."&area=".$row_listacategorias['area']."&cliente=".$row_listacategorias['cliente']."<br><br>";
	
	
try {
    $xml=simplexml_load_file_caseiro("http://agenciaradioweb.com.br/xml_radios/gerador_radio_generica_fontes.php?id=".$row_listacategorias['id']."&editoria=".$row_listacategorias['editoria']."&autor=".$row_listacategorias['autor']."&area=".$row_listacategorias['area']."&cliente=".$row_listacategorias['cliente']."");
} catch (Exception $e) {
    echo 'Exceção capturada: ',  $e->getMessage(), "\n";
} finally {
    echo "Código que será executado após o try catch.";

	 print_r($xml);
}
	


//echo "<br><br>https://www.agenciaradioweb.com.br/xml_radios/gerador_radio_generica_fontes.php?id=".$row_listacategorias['id']."&editoria=".$row_listacategorias['editoria']."&autor=".$row_listacategorias['autor']."&area=".$row_listacategorias['area']."&cliente=".$row_listacategorias['cliente']."<br><br>";

print_r($linha);
echo 'teste';
$arr = array();

foreach($xml->children() as $item_materia) { 
$idsrw[] = $item_materia->materianum;
$idradioweb = $item_materia->materianum;
$data = convdata($item_materia->datahora,0);
$autor = addslashes(utf8_decode($item_materia->autor));
$duracao = $item_materia->duracao;
$manchete = addslashes(utf8_decode($item_materia->titulo));
$ultima_atualizacao = addslashes(utf8_decode($item_materia->atualizacao));
$url = $item_materia->url;
$iddrive = $item_materia->iddrive;

$contador_not = $contador_not + 1; 

echo "<br>".$contador_not.") ";

if(array_search($item_materia->editorianum, array_column($linha, 'editoria')) !== false) { 
	$idcateg = $linha[array_search($item_materia->editorianum, array_column($linha, 'editoria'))]['id']; 
	$x = "editoria - ";
	echo $x;
}

if(array_search($item_materia->autornum, array_column($linha, 'autor')) !== false) { 
	$idcateg = $linha[array_search($item_materia->autornum, array_column($linha, 'autor'))]['id'];
	$x = "autor - ";
	echo $x; 
}

if(array_search($item_materia->areanum, array_column($linha, 'area')) !== false) {
	$idcateg = $linha[array_search($item_materia->areanum, array_column($linha, 'area'))]['id']; 
	$x = "area - ";
	echo $x;
	
}

if(array_search($item_materia->cliente1, array_column($linha, 'cliente')) !== false and $item_materia->cliente1 > 1) {
	$idcateg = $linha[array_search($item_materia->cliente1, array_column($linha, 'cliente'))]['id'];
	$x = "cliente 1 - ";
	echo $x;
}

if(array_search($item_materia->cliente2, array_column($linha, 'cliente')) !== false and $item_materia->cliente2 > 1) {
	$idcateg = $linha[array_search($item_materia->cliente2, array_column($linha, 'cliente'))]['id'];
	$x = "cliente 2 - ";
	echo $x;
}

if(array_search($item_materia->cliente3, array_column($linha, 'cliente')) !== false and $item_materia->cliente3 > 1) {
	$idcateg = $linha[array_search($item_materia->cliente3, array_column($linha, 'cliente'))]['id'];
	$x = "cliente 3 - ";
	echo $x;
}



if($idcateg > 0) {
	
	mysqli_select_db($conectar,$database_conectar);
	$query_listamaterias = "SELECT * from radio_noticias where idradioweb = '".$item_materia->materianum."'";
	$listamaterias = mysqli_query($conectar,$query_listamaterias);
	$row_listamaterias = mysqli_fetch_assoc($listamaterias);
		echo "xxx";
	
	if ($ultima_atualizacao != $row_listamaterias['ultima_atualizacao']) { 
		mysqli_query($conectar,"delete from radio_noticias where idradioweb = '".$item_materia->materianum."'");
		$reinserir = 1;
		echo "bbb";
	} else {
		$reinserir = 0;
		echo "aaa";
	}
	

	if($row_listamaterias['idradioweb']=="" or $reinserir ==1) {
	
		mysqli_query($conectar,"insert into radio_noticias (data, duracao, idcategoria, manchete, autor, url, idradioweb, ultima_atualizacao, iddrive) 
		values ('".$data."','".$duracao."','".$idcateg."','".$manchete."','".$autor."','".$url."','".$idradioweb."','".$ultima_atualizacao."','".$iddrive."')");
		echo "cccc";
		
		$fontemateria_id = mysqli_insert_id();
		
		foreach($item_materia->listafontes->children() as $item_fonte) {
		
			// $item_fonte->idmateria;
			$idmateriarw = $item_fonte->idmateria;
			$nome = addslashes(utf8_decode($item_fonte->nome));
			$email = $item_fonte->email;
			$cargo = addslashes(utf8_decode($item_fonte->cargo));
			$contafonte = $contafonte+1;
			
			mysqli_query($conectar,"insert into radio_fontes (idmateria, idmateriarw, nome, email, cargo) 
			values ('".$fontemateria_id ."','".$idmateriarw."','".$nome."','".$email."','".$cargo."')");
			echo "fffffffffff";
			
		
		}

	}
	


}
	
	$idcateg = "";	
    echo $manchete." --- ".$item_materia->areanum."<br>";
	
} 
	
unset($linha);

} while ($row_listacategorias = mysqli_fetch_assoc($listacategorias)); 




//função que apaga da rádio o que foi apagado da radioweb
mysqli_select_db($conectar,$database_conectar);
$query_listacategorias = "SELECT * from radio_podcasts order by radio_podcasts.id DESC";
$listacategorias = mysqli_query($conectar,$query_listacategorias);
$row_listacategorias = mysqli_fetch_assoc($listacategorias);

$idsrw = [];

$xml=simplexml_load_file_caseiro("https://www.agenciaradioweb.com.br/xml_radios/gerador_radio_generica_apagar.php") or die("Error: Cannot create object");

	array_push($idsrw, 1);

	foreach($xml->children() as $item_materia) { 
		array_push($idsrw, $item_materia->materianum);
	}

do {
	mysqli_select_db($conectar,$database_conectar);
	$query_listamaterias = "SELECT * from radio_noticias where idcategoria = '".$row_listacategorias['id']."'";
	$listamaterias = mysqli_query($conectar,$query_listamaterias);
	$row_listamaterias = mysqli_fetch_assoc($listamaterias);
	
	do {
		
		if(array_search($row_listamaterias['idradioweb'], $idsrw) > 0) { 
		mysqli_query($conectar,"delete from radio_noticias where idradioweb = '".$row_listamaterias['idradioweb']."'"); 
		}
	} while ($row_listamaterias = mysqli_fetch_assoc($listamaterias));

} while ($row_listacategorias = mysqli_fetch_assoc($listacategorias));
//echo $contafonte;

?>

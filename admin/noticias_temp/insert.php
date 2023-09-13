<? 
require_once('../../includes/login.php');
require_once('../../includes/funcoes.php');
require_once('../../Connections/conectar.php');
require_once('../../drive/upload_files.php');

header("location:index.php");

// DEFINIÇÕES GERAIS DA RÁDIO
mysqli_select_db($conectar,$database_conectar);
$query_definicoes = "SELECT * FROM radio_definicoes";
$definicoes = mysqli_query($conectar,$query_definicoes);
$row_definicoes = mysqli_fetch_assoc($definicoes);


$data = addslashes(convdata($_POST['data'],0));
$data_lanc = strtotime(convdata(substr($_POST['data_lanc'],0,10),0)." ".substr($_POST['data_lanc'],11,5));	
$duracao = addslashes($_POST['duracao']);
$idcategoria = addslashes($_POST['idcategoria']);
$manchete = addslashes(utf8_decode(htmlentities(mb_convert_encoding($_POST['manchete'], 'UTF-8', 'ISO-8859-1'))));
$descricao = addslashes(utf8_decode(htmlentities(mb_convert_encoding($_POST['descricao'], 'UTF-8', 'ISO-8859-1'))));
$url = addslashes($_POST['url']);
$autor = addslashes(utf8_decode(htmlentities(mb_convert_encoding($_POST['autor'], 'UTF-8', 'ISO-8859-1'))));

$amigavel=addslashes($_POST['amigavel']);
$metakeywords=addslashes($_POST['metakeywords']);
$altimg=addslashes($_POST['altimg']);


$data_file = date("ymdHis");
$file = $_FILES['file']['tmp_name'];
$file_name = $_FILES['file']['name'];
$caminho = "../../audios";
$audio_novo = retiraacentos($data_file.$file_name);
$destino_novo = $caminho."/".$audio_novo;	

$file2 = $_FILES['file2']['tmp_name'];
$file2_name = $_FILES['file2']['name'];
$caminho_thumbnail = "../../thumbnails";
$thumbnail_novo = retiraacentos($data_file.$file2_name);
$thumbnail_destino_novo = $caminho_thumbnail."/".$thumbnail_novo;		
	


if ($row_definicoes['armazenamento']==2){
	if (!empty($file)){
		$audio = $audio_novo; 
		move_uploaded_file($file, $destino_novo);
		chmod($destino_novo, 0755);
	} else {	
		$audio = ""; 
	}
} else {
	if (!empty($file_name)){
		$iddrive = copia_arquivo_upload($file, $file_name);
	}
		
}


if (!empty($file2)){
	$thumbnail = $thumbnail_novo; 
	move_uploaded_file($file2, $thumbnail_destino_novo);
	chmod($thumbnail_destino_novo, 0755);
} else {	
	$thumbnail = ""; 
}


$query = "insert into radio_noticias_temp (data, duracao, idcategoria, manchete, descricao, audio, url, autor, iddrive, ultima_atualizacao, thumbnail, data_lanc, amigavel, altimg, metakeywords) values ('".$data."', '".$duracao."', '".$idcategoria."', '".$manchete."', '".$descricao."', '".$audio."', '".$url."', '".$autor."', '".$iddrive."', '".time()."', '".$thumbnail."', '".$data_lanc."', '".$amigavel."', '".$altimg."', '".$metakeywords."')";

mysqli_select_db($conectar,$database_conectar);
mysqli_query($conectar,$query);

mysqli_close($conectar);

?>
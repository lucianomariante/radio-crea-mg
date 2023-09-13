<? 
require_once('../../includes/login.php');
require_once('../../includes/funcoes.php');
require_once('../../Connections/conectar.php');
require_once('../../drive/upload_files.php');

// DEFINIÇÕES GERAIS DA RÁDIO
mysqli_select_db($conectar,$database_conectar);
$query_definicoes = "SELECT * FROM radio_definicoes";
$definicoes = mysqli_query($conectar,$query_definicoes);
$row_definicoes = mysqli_fetch_assoc($definicoes);

if($_POST['voltar']!="") {  
$enxerto2 = "?id=".$_POST['voltar'];
}

header("location:index.php".$enxerto2);

$id=addslashes($_POST['id']);
$data = addslashes(convdata($_POST['data'],0));
$duracao = addslashes($_POST['duracao']);
$idcategoria = addslashes($_POST['idcategoria']);
$manchete = addslashes(utf8_decode(htmlentities(mb_convert_encoding($_POST['manchete'], 'UTF-8', 'ISO-8859-1'))));
$descricao = addslashes(utf8_decode(htmlentities(mb_convert_encoding($_POST['descricao'], 'UTF-8', 'ISO-8859-1'))));
$url = addslashes($_POST['url']);
$autor = addslashes(utf8_decode(htmlentities(mb_convert_encoding($_POST['autor'], 'UTF-8', 'ISO-8859-1'))));	
$data_lanc = strtotime(convdata(substr($_POST['data_lanc'],0,10),0)." ".substr($_POST['data_lanc'],11,5));	

$amigavel=addslashes($_POST['amigavel']);
$metakeywords=addslashes($_POST['metakeywords']);
$altimg=addslashes($_POST['altimg']);

//echo "aaa ".$data_lanc." ccc";

$data_file = date("ymdHis");
$checagem = $_POST['checagem'];
$file = $_FILES['file']['tmp_name'];
$file_name = $_FILES['file']['name'];
$caminho = "../../audios";
$audio_antigo = $_POST['audio_antigo'];
$iddrive_antigo = $_POST['iddrive_antigo'];  
$audio_novo = retiraacentos($data_file.$file_name);
$destino_antigo = $caminho."/".$audio_antigo;
$destino_novo = $caminho."/".$audio_novo;	


$checagem2 = $_POST['checagem2'];
$file2 = $_FILES['file2']['tmp_name'];
$file2_name = $_FILES['file2']['name'];
$caminho_thumbnail = "../../thumbnails";
$thumbnail_antigo = $_POST['thumbnail_antigo'];	
$thumbnail_novo = retiraacentos($data_file.$file2_name);
$thumbnail_destino_novo = $caminho_thumbnail."/".$thumbnail_novo;	
$thumbnail_destino_antigo = $caminho_thumbnail."/".$thumbnail_antigo;	


if (!empty($file_name)){
		if ($row_definicoes['armazenamento']==2){ 
			$audio = $audio_novo;
			move_uploaded_file($file, $destino_novo);
			echo "1<br>";
		} else {
			$iddrive = copia_arquivo_upload($file, $file_name);
			echo "2<br>";
		}
		chmod($destino_novo, 0755);
		unlink ($destino_antigo);
} else {
		if (!empty($checagem)) { 
			$audio = "";
			$iddrive = "";  
			unlink ($destino_antigo);
			echo "3<br>";
		} else { 
			$audio = $audio_antigo;
			$iddrive = $iddrive_antigo;  
			echo "4<br>";
		}
}

if (!empty($file2_name)){
	
	$thumbnail = $thumbnail_novo;
	move_uploaded_file($file2, $thumbnail_destino_novo);
	chmod($thumbnail_destino_novo, 0755);
	unlink ($thumbnail_destino_antigo);
	echo "5<br>";
	
} else {
		if (!empty($checagem2)) { 
			$thumbnail = "";
			unlink ($thumbnail_destino_antigo);
			echo "6<br>";
		} else { 
			$thumbnail = $thumbnail_antigo;
			echo "7<br>";
		}
}

echo $thumbnail." vvvvvvvvv ".$audio;
			
$query = "UPDATE radio_noticias_temp SET
data='".$data."',
duracao='".$duracao."',
idcategoria='".$idcategoria."',
manchete='".$manchete."',
descricao='".$descricao."',
url='".$url."',
autor='".$autor."',
audio='".$audio."',
iddrive='".$iddrive."',
ultima_atualizacao='".time()."',
thumbnail='".$thumbnail."',
data_lanc='".$data_lanc."',
amigavel='".$amigavel."',
altimg='".$altimg."',
metakeywords='".$metakeywords."'
WHERE id = '".$id."'";

echo "<br>".$query;

mysqli_select_db($conectar,$database_conectar);
mysqli_query($conectar,$query);

mysqli_close($conectar);

?>
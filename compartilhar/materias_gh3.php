<? header('Content-type: text/html; charset=utf-8');
header("Cache-Control: no-store, no-cache, must-revalidate");
include_once('../website/includes/constantes.php');
require_once('../website/includes/conectar.php'); 
require('../website/includes/_funcoes.php3');

mysql_select_db($database_conectar, $conectar);

$num_materia = (int) base64_decode($_GET['id']);

$query_materia = "SELECT * from materias, arquivos, autores where idMateria = '".$num_materia."' and materias.idMateria = arquivos.materia and materias.autor = autores.idAutor limit 0, 1";
$materia = mysql_query($query_materia, $conectar) or die(mysql_error());
$row_materia = mysql_fetch_assoc($materia);


//$hostname_conectar2 = "gh3-tech.com:3306";
//$database_conectar2 = "afp";
//$username_conectar2 = "radioweb";
//$password_conectar2 = "2rUBus4wePEcraGrus";
$hostname_conectar2 = "afp.gh3-tech.com";
$database_conectar2 = "afp";
$username_conectar2 = "afp";
$password_conectar2 = "2rUBus4wePEcraGrus";
$conectar2 = mysql_connect($hostname_conectar2, $username_conectar2, $password_conectar2) or die(mysql_error());
mysql_select_db($database_conectar2, $conectar2);


$idr = (int) $_GET['pasta'];
$query_relatorio_radios  = "select * from radios where radios.id = '".$idr."'";
$relatorio_radios = mysql_query($query_relatorio_radios, $conectar2) or die(mysql_error());
$row_relatorio_radios = mysql_fetch_assoc($relatorio_radios);
$totalRows_relatorio_radios = mysql_num_rows($relatorio_radios);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" lang="pt" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Agência Radioweb</title>
<meta property="og:type" content="website" /> 
<meta property="og:title" content="Relatório de Irradiação" /> 
<meta property="og:image" content="http://agenciaradioweb.com.br/compartilhar/logo.png" /> 
<meta property="og:description" content="Ouça a irradiação desta matéria na <? echo utf8_encode($row_relatorio_radios['title']); ?> - <? echo utf8_encode($row_relatorio_radios['municipality']); ?>/<? echo utf8_encode($row_relatorio_radios['state']); ?> | Manchete: <? echo stripslashes(utf8_encode($row_materia['descricao'])); ?>"/> 
<style type="text/css">
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
}
</style>
</head>


<body style="text-align:center">
<a href="http://www.agenciaradioweb.com.br" target="_blank"><img src="logo.png" alt="Agência Radioweb"/></a>
<br>
<br>
Irradiação na <? echo utf8_encode($row_relatorio_radios['title']); ?> - <? echo utf8_encode($row_relatorio_radios['municipality']); ?> / <? echo utf8_encode($row_relatorio_radios['state']); ?><br /><br />

<? echo utf8_encode(sodata($row_materia['materiadata'])); ?>   | <?php echo stripslashes(utf8_encode($row_materia['nome'])); ?> | <?php echo timeconvet($row_materia['duracao']); ?><br />
<? echo stripslashes(utf8_encode($row_materia['descricao'])); ?>
<br>
<br>
<audio autoplay src="http://afp.gh3-tech.com/files/audios/<? echo $_GET['pasta']; ?>/<? echo $_GET['gravacao']; ?>.mp3" controls></audio>

<br>
<br>
<br>
<a href="http://afp.gh3-tech.com/files/audios/<? echo $_GET['pasta']; ?>/<? echo $_GET['gravacao']; ?>.mp3"><img src="../ouvir_audios/baixar.png" width="131" height="84" alt=""/></a>


</body>
</html>

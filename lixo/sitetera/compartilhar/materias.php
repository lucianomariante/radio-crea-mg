<? 
header('Content-type: text/html; charset=utf-8');
header("Cache-Control: no-store, no-cache, must-revalidate");
include_once('../admin/includes/constantes.php'); 
require_once '../admin/transaction/transactionNoticias.php';
$_GET['IDDRIVE'] = '1a_5Qvpcx4FuHrRl3GmbWQXWxobvQ17Fx';
$value = fillNoticias($_GET['id']);

$link = "https://drive.google.com/a/agenciaradioweb.com.br/uc?id={$value['NOTIDDRIVE']}&export=download";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" lang="pt" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.:: Rádio TJMG ::.</title>
<base href="https://radiotjminas.com.br/compartilhar/">
<meta property="og:type" content="website" /> 
<meta property="og:title" content="Clique para ouvir esta matéria" /> 
<meta property="og:image" content="http://www.radiotjminas.com.br/admin/imagens/logotipo.png" /> 
<meta property="og:description" content="<? echo stripslashes(utf8_encode($row_materia['descricao'])); ?>"/> 
<style type="text/css">
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
}
</style>
</head>


<body style="text-align:center">
<a href="http://radiotjminas.com.br" target="_blank"><img src="http://www.radiotjminas.com.br/admin/imagens/logotipo.png" alt="Rádio TJMG"/></a>
<br>
<br>
<?= $value['NOTMANCHETE'];?>
<br>
<br>
<div><audio autoplay src="<?php echo $link; ?>" controls style="height:60px;"></audio></div>
<br>
<br>
<a href="https://drive.google.com/a/agenciaradioweb.com.br/uc?id=<?= $value['NOTIDDRIVE'];?>&export=download"><img src="../img/baixar_novo.png" width="131" height="84" alt=""/></a>
</body>
</html>

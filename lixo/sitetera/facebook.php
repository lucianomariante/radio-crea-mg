<?php 
include_once('admin/includes/constantes.php'); 

if($_GET['id']!="") { 
	$id = intval($_GET['id']);
	$vObjeto = fillNoticiasHome($id);
	$enxertolink = "?id=".$id;
	$content = stripslashes(formatar_data($vObjeto['NOTDATAPUBLICACAO'])." -  ".$vObjeto['NOTMANCHETE']);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" lang="pt" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>.:: Rádio TJMG ::.</title>
<base href="http://radiotjminas.com.br/">
<meta http-equiv="refresh" content="0;url=index.php<? echo $enxertolink; ?>" />
<meta property="og:type" content="website" /> 
<meta property="og:title" content="Rádio TJMG" /> 
<meta property="og:image" content="http://radiotjminas.com.br/img/logo_central.png" /> 
<meta property="og:description" content="<?= $content; ?>"/> 
</head>
<frameset rows="0,100%">
  <frame src="index.php<? echo $enxertolink; ?>" marginwidth="0" marginheight="0">
</frameset>
<noframes><body>
</body></noframes>
</html>
<?php 
require_once('Connections/conectar.php'); 

mysqli_select_db($conectar,$database_conectar);
$query_definicoes = "SELECT * FROM radio_definicoes";
$definicoes = mysqli_query($conectar,$query_definicoes);
$row_definicoes = mysqli_fetch_assoc($definicoes);

if(1==2) { 
//strpos($_SERVER['HTTP_USER_AGENT'],'iPad')==true or strpos($_SERVER['HTTP_USER_AGENT'],'iPhone')==true
header("location:apple.php"); /* SE FOR IOS NÃO ABRE POPUP, PASSA DIRETO */    

//} elseif(strpos($_SERVER['HTTP_USER_AGENT'],'Android')==true) { 
} elseif(1==2) {

header("location:android.php");

} elseif($row_definicoes['modelo_player']==1 or $_GET['id']!="") { 

	if($_GET['id']!="") { 
		$id = intval($_GET['id']);
		$enxertolink = "?id=".$id;
	}
	
	header("location:jw.php".$enxertolink);

} elseif($row_definicoes['modelo_player']==3) { 
	
	header("location:lista_podcasts.php");

} else {

	if($_GET['id']!="") { 
	
		$id = intval($_GET['id']);
		$enxertolink = "?id=".$id;
		
	}
?>
<html>
<head>
<script async src="https://www.googletagmanager.com/gtag/js?id=<? echo stripslashes($row_definicoes['analytics']); ?>"></script>
<script async src="js/funcoes.js"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', '<? echo stripslashes($row_definicoes['analytics']); ?>');
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><? echo stripslashes($row_definicoes['nome_radio']); ?></title>
<? require_once('extras/extras.php'); ?>
<style type="text/css">

body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image:none;
	background-color:#284F68;
}
</style>
</head>
<body>



	<div align="center" 
	onClick="MM_openBrWindow('jw.php<? echo $enxertolink; ?>','','scrollbars=yes,width=<? echo stripslashes($row_definicoes['janela_largura']); ?>,height=<? echo stripslashes($row_definicoes['janela_altura']); ?>')" id="enter_radio">
	<img src="extras/logo_entrada.png">
	</div>

</body>
</html>
<? } ?>
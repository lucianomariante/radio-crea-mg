<?php 
require_once('Connections/conectar.php');
require_once('includes/funcoes.php');

$currentPage = $_SERVER["PHP_SELF"];

// DEFINIÇÕES GERAIS DA RÁDIO
mysqli_select_db($conectar,$database_conectar);
$query_definicoes = "SELECT * FROM radio_definicoes";
$definicoes = mysqli_query($conectar,$query_definicoes);
$row_definicoes = mysqli_fetch_assoc($definicoes);

//LISTA DE NOTÍCIAS
$maxRows_materiaslistac = $row_definicoes['noticias_num'];
$pageNum_materiaslistac = 0;
if (isset($_GET['pageNum_materiaslistac'])) {
  $pageNum_materiaslistac = $_GET['pageNum_materiaslistac'];
}
$startRow_materiaslistac = $pageNum_materiaslistac * $maxRows_materiaslistac;

mysqli_select_db($conectar,$database_conectar);
$query_materiaslistac = "SELECT radio_noticias.*, radio_podcasts.nome_podcast FROM radio_noticias, radio_podcasts where radio_noticias.idcategoria = radio_podcasts.id and (radio_podcasts.destaque = 0 or radio_podcasts.destaque is Null) order by data desc,  radio_noticias.idradioweb DESC, radio_noticias.id DESC";
$query_limit_materiaslistac = sprintf("%s LIMIT %d, %d", $query_materiaslistac, $startRow_materiaslistac, $maxRows_materiaslistac);
$materiaslistac = mysqli_query($conectar,$query_limit_materiaslistac);
$row_materiaslistac = mysqli_fetch_assoc($materiaslistac);

$npd = 0;

if (isset($_GET['totalRows_materiaslistac'])) {
  $totalRows_materiaslistac = $_GET['totalRows_materiaslistac'];
} else {
  $all_materiaslistac = mysqli_query($conectar,$query_materiaslistac);
  $totalRows_materiaslistac = mysqli_num_rows($all_materiaslistac);
}
$totalPages_materiaslistac = ceil($totalRows_materiaslistac/$maxRows_materiaslistac)-1;

$queryString_materiaslistac = "";

if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();

  foreach ($params as $param) {
    if (stristr($param, "pageNum_materiaslistac") == false && stristr($param, "totalRows_materiaslistac") == false) {
      array_push($newParams, $param);
    }
  }

  if (count($newParams) != 0) {
    $queryString_materiaslistac = "" . implode("&", $newParams);
  }
}

if($row_definicoes['url_https']=="") { $murl = $row_definicoes['url_radio']; $sec = ""; } else { $murl = $row_definicoes['url_https']; $sec = "s"; } //VERIFICA SE HÁ URL HTTPS
if($row_definicoes['streaming_https']=="") { $streaming_oficial = $row_definicoes['streaming_titular']; $sec = ""; } else { $streaming_oficial = $row_definicoes['streaming_https']; } //VERIFICA SE HÁ URL HTTPS

// LISTA DE PODCASTS
mysqli_select_db($conectar,$database_conectar);
$query_podcasts = "SELECT * FROM radio_podcasts where destaque = 0 or destaque is null";
$podcasts = mysqli_query($conectar,$query_podcasts);
$row_podcasts = mysqli_fetch_assoc($podcasts);

if($row_definicoes['modelo_podcasts']==1) {
do { 
	$acumulajs .= "$(\"#conteiner_noticias_".$row_podcasts['id']."\").mCustomScrollbar({ scrollButtons:{ enable:true } });
	";	
} while ($row_podcasts = mysqli_fetch_assoc($podcasts));
}

mysqli_select_db($conectar,$database_conectar);
$query_podcasts = "SELECT * FROM radio_podcasts where destaque = 0 or destaque is null";
$podcasts = mysqli_query($conectar,$query_podcasts);
$row_podcasts = mysqli_fetch_assoc($podcasts);

// PODCAST DESTAQUE
mysqli_select_db($conectar,$database_conectar);
$query_podcast_destaque = "SELECT radio_noticias.*, radio_podcasts.texto_destaque FROM radio_podcasts, radio_noticias where radio_podcasts.destaque = 1 and radio_noticias.idcategoria = radio_podcasts.id order by radio_noticias.data desc, radio_noticias.id desc";
$podcast_destaque = mysqli_query($conectar,$query_podcast_destaque);
$row_podcast_destaque = mysqli_fetch_assoc($podcast_destaque);

// COMENTÁRIOS
$maxRows_comentarios = $row_definicoes['comentarios_num'];
$pageNum_comentarios = 0;
if (isset($_GET['pageNum_comentarios'])) {
  $pageNum_comentarios = $_GET['pageNum_comentarios'];
}
$startRow_comentarios = $pageNum_comentarios * $maxRows_comentarios;

mysqli_select_db($conectar,$database_conectar);
$query_comentarios = "SELECT * FROM radio_comentarios where aprovado = 1 ORDER BY data desc, id DESC";
$query_limit_comentarios = sprintf("%s LIMIT %d, %d", $query_comentarios, $startRow_comentarios, $maxRows_comentarios);
$comentarios = mysqli_query($conectar,$query_limit_comentarios);
$row_comentarios = mysqli_fetch_assoc($comentarios);

if (isset($_GET['totalRows_comentarios'])) {
  $totalRows_comentarios = $_GET['totalRows_comentarios'];
} else {
  $all_comentarios = mysqli_query($conectar,$query_comentarios);
  $totalRows_comentarios = mysqli_num_rows($all_comentarios);
}
$totalPages_comentarios = ceil($totalRows_comentarios/$maxRows_comentarios)-1;

$queryString_comentarios = "";

if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();

  foreach ($params as $param) {
    if (stristr($param, "pageNum_comentarios") == false && stristr($param, "totalRows_comentarios") == false) {
      array_push($newParams, $param);
    }
  }

  if (count($newParams) != 0) {
    $queryString_comentarios = "" . implode("&", $newParams);
  }
}


// PROGRAMAÇÃO DA RÁDIO
$maxRows_progradio = $row_definicoes['tocadas_num'];
$pageNum_progradio = 0;
if (isset($_GET['pageNum_progradio'])) {
  $pageNum_progradio = $_GET['pageNum_progradio'];
}
$startRow_progradio = $pageNum_progradio * $maxRows_progradio;

mysqli_select_db($conectar,$database_conectar);
$query_progradio = "SELECT * FROM onlines_programacao ORDER BY id DESC";
$query_limit_progradio = sprintf("%s LIMIT %d, %d", $query_progradio, $startRow_progradio, $maxRows_progradio);
$progradio = mysqli_query($conectar,$query_limit_progradio);
$row_progradio = mysqli_fetch_assoc($progradio);
$totalRows_progradio = mysqli_num_rows($all_progradio);

if (isset($_GET['totalRows_progradio'])) {
  $totalRows_progradio = $_GET['totalRows_progradio'];
} else {
  $all_progradio = mysqli_query($conectar,$query_progradio);
  $totalRows_progradio = mysqli_num_rows($all_progradio);
}
$totalPages_progradio = ceil($totalRows_progradio/$maxRows_progradio)-1;

$queryString_progradio = "";

if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();

  foreach ($params as $param) {
    if (stristr($param, "pageNum_progradio") == false && stristr($param, "totalRows_progradio") == false) {
      array_push($newParams, $param);
    }
  }

  if (count($newParams) != 0) {
    $queryString_progradio = "" . implode("&", $newParams);
  }
}

mysqli_select_db($conectar,$database_conectar);
$query_botoes = "SELECT * FROM radio_botoes ORDER BY nome DESC";
$botoes = mysqli_query($conectar,$query_botoes);
$row_botoes = mysqli_fetch_assoc($botoes);
$totalRows_botoes = mysqli_num_rows($all_botoes);

?><!doctype html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script async src="https://www.googletagmanager.com/gtag/js?id=<? echo stripslashes($row_definicoes['analytics']); ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', '<? echo stripslashes($row_definicoes['analytics']); ?>');
</script>


<meta http-equiv="Content-Language" content="pt-br">
<title><? echo stripslashes($row_definicoes['nome_radio']); ?></title>
<? if($row_definicoes['responsiva']==1) { ?>
<meta name="viewport" content="width=device-width, initial-scale=0.5, shrink-to-fit=no">
<? } ?>
<meta property="og:type" content="website" /> 
<meta property="og:title" content="<? echo stripslashes($row_definicoes['nome_radio']); ?>" /> 
<meta property="og:image" content="<? echo stripslashes($murl); ?>/extras/logo_facebook2.png" /> 
<meta property="og:description" content="<? echo $content; ?>"/> 
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color:#D1D9D8;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}

#widget_logo {
	float:left;
	margin-right:20px;
}
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
}

#voce_esta_ouvindo {
	padding:20px;	
}
#dados_audio {
	margin:10px;
	color:#666;
	margin-bottom:14px;
}
#botao_play {
	text-indent:-10000px;
	width:40px;
	height:41px;
	background-image:url(extras/w_play.png);
	float:left;
	position:absolute;
	top:100px;
	left: 250px;
}

#botao_pause {
	text-indent:-10000px;
	width:40px;
	height:41px;
	background-image:url(extras/w_pause.png);
	float:left;
	position:absolute;
	top:100px;
	left: 292px;
}

#botao_baixar {
	text-indent:-10000px;
	width:40px;
	height:41px;
	background-image:url(extras/w_baixar.png);
	float:left;
	position:absolute;
	top:100px;
	left: 335px;
}

#baixar_volume {
	text-indent:-10000px;
	width:40px;
	height:41px;
	background-image:url(extras/w_volmenos.png);
	float:left;
	position:absolute;
	top:100px;
	left: 380px;
}

#aumentar_volume {
	text-indent:-10000px;
	width:40px;
	height:41px;
	background-image:url(extras/w_volmais.png);
	position:absolute;
	top:100px;
	left: 506px;
}

#radio_volume {
	height:41px;
	position:absolute;
	top:-59px;
	left: 169px;
}

#audio_informacoes {
	position:absolute;
	top:150px;
	left:252px;
}




input[type=range] {
  -webkit-appearance: none;
  width: 80px;
  height:11px;
  border-radius: 36px;
  background-color:#999999;
  max-width:150px;
}

@-moz-document url-prefix() {
input[type=range] {
  margin-top:28px;
  margin-left:0px;
}
}


@supports (-ms-ime-align:auto) {
input[type=range] {
  margin-top:10px;
  margin-left:2px;
}
}

input[type=range]:focus {
  outline: none;
}

input[type=range]::-webkit-slider-thumb {
  box-shadow: 1.5px 1.5px 2.5px rgba(109, 109, 109, 0.3), 0px 0px 1.5px rgba(122, 122, 122, 0.3);
  border: 0px solid rgba(0, 0, 0, 0);
  height: 28px;
  width: 28px;
  border-radius: 36px;
  background: #ffffff;
  cursor: pointer;
  -webkit-appearance: none;
  margin-top:-6px;
}


input[type=range]::-moz-range-thumb {
  box-shadow: 1.5px 1.5px 2.5px rgba(109, 109, 109, 0.3), 0px 0px 1.5px rgba(122, 122, 122, 0.3);
  border: none;
  height: 28px;
  width: 28px;
  border-radius: 36px;
  background: #ffffff;
  cursor: pointer;
  margin-top:-6px;
}

input[type=range]::-ms-thumb {
  box-shadow: 1.5px 1.5px 2.5px rgba(109, 109, 109, 0.3), 0px 0px 1.5px rgba(122, 122, 122, 0.3);
  border: 0px solid rgba(0, 0, 0, 0);
  height: 28px;
  width: 28px;
  border-radius: 36px;
  background: #ffffff;
  cursor: pointer;
}

input[type=range]::-webkit-slider-runnable-track {
  width: 80px;
  height: 28px;
  cursor: pointer;
  border-radius: 28px;
  margin-top:13px;
}

input[type=range]::-moz-range-track {
  width: 80px;
  height: 28px;
  cursor: pointer;
  margin-top:13px;
}

input[type=range]::-ms-track {
  width: 100%;
  height: 28px;
  cursor: pointer;
}

input[type=range]::-ms-fill-lower {
  background: transparent;
}
input[type=range]::-ms-fill-upper {
  background: transparent;
}
input[type=range]:focus::-ms-fill-lower {
  background: transparent;
}
input[type=range]:focus::-ms-fill-upper {
  background: transparent;
}

#link_radio {
	margin-top:10px;
}
</style>
<script src="js/jquery.js"></script>
<script src="js/funcoes.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script type="text/javascript">
$(window).on("load", function() {
	
	atualizavolume();
	
	ativa_campos();
	
	<? if($row_definicoes['streaming_reserva']!="") { ?>checa_streaming();<? } ?>
	
	<? if($row_definicoes['noar']==1) { ?>musica_passando();<? } ?>

	<? if($row_definicoes['aseguir']==1) { ?>musica_passara();<? } ?>	
		
	<? if($row_definicoes['curtir_programacao']==1) { ?>musica_curtir();<? } ?>
	
	<? if($row_definicoes['lista_tocadas']==1) { ?>voce_ouviu();<? } ?>
	
	<? if($row_definicoes['info_autodj2']!="") { ?>checa_aovivo();<? } ?>
	
	<? echo $acumulajs; ?>
	
	$("#conteiner_noticias_0").mCustomScrollbar({
  		scrollButtons:{
    		enable:true
  		}
	});
	

	$(".ouvir").click(function() {gtag('event', 'ouvindo_widget', {'event_category':'<? if($_GET['id']!="") { echo "audio_".$_GET['id']; } else { echo "audio_ao_vivo"; } ?>'});});

});

</script>
<? if($row_definicoes['info_autodj']!="") { ?>
<script language="javascript" type="text/javascript" src="http<? echo $sec; ?>://<? echo stripslashes($row_definicoes['info_autodj2']); ?>:2199/system/streaminfo.js"></script>
<? } ?>
</head>
<body class="container">



<img src="<? echo stripslashes($murl); ?>/extras/logo_facebook2.png" id="widget_logo" />


<section id="voce_esta_ouvindo">
<? //echo stripslashes($row_definicoes['nome_radio']); ?>Você está ouvindo:

	<? 
	if($_GET['id']!="") {
		$id = intval($_GET['id']);
		mysqli_select_db($conectar,$database_conectar);
		$query_umamateria = "SELECT radio_noticias.*, radio_podcasts.nome_podcast FROM radio_noticias, radio_podcasts 
		where radio_noticias.idcategoria = radio_podcasts.id and radio_noticias.id = '".$id."' order by data desc, radio_noticias.id DESC";
		$umamateria = mysqli_query($conectar,$query_umamateria);
		$row_umamateria = mysqli_fetch_assoc($umamateria);
		?>
        
        <div id="dados_audio">
  			<div><?php echo stripslashes(formata_data($row_umamateria['data'])); ?> | <?php echo htmlentities($row_umamateria['duracao']); ?> <br> <?php //echo stripslashes($row_umamateria['autor']); ?></div>
        	<div><?php echo stripslashes($row_umamateria['manchete']); ?></div>
        </div>
            
        <? if($row_umamateria['audio']!="") { ?>
        
        	<a href="javascript:parar_audio()" id="botao_pause">Pausar Matéria</a> 
            <a href="javascript:play_audio('audios/<?php echo $row_umamateria['audio']; ?>')" id="botao_play" class="ouvir">Ouvir a  Matéria</a>
            <a href="audios/<?php echo $row_umamateria['audio']; ?>" target="_blank" id="botao_baixar">Baixar a Matéria </a>
                      
        <? } elseif($row_umamateria['iddrive']!="") { ?>
        
    		<a href="javascript:parar_audio()" id="botao_pause">Pausar Matéria</a>             
    		<a href="javascript:play_audio('https://drive.google.com/a/agenciaradioweb.com.br/uc?id=<?php echo $row_umamateria['iddrive']; ?>')" id="botao_play" class="ouvir">Ouvir Matéria</a>
            <a href="https://drive.google.com/a/agenciaradioweb.com.br/uc?id=<?php echo $row_umamateria['iddrive']; ?>" target="_blank" id="botao_baixar">Baixar a Matéria </a>
        <? } else { ?>
       
    		<a href="javascript:parar_audio()" id="botao_pause">Pausar Matéria</a>             
    		<a href="javascript:play_audio('<?php echo $row_umamateria['url']; ?>')" id="botao_play" class="ouvir">Ouvir Matéria</a>
            <a href="<?php echo $row_umamateria['url'].$ext_dw; ?>" target="_blank" id="botao_baixar">Baixar a Matéria </a>
        <? } ?>
       
	
		<? 
		if($row_umamateria['audio']!="") {
			$audio_inicial = "audios/".$row_umamateria['audio'];
		} else {
		$audio_inicial = stripslashes($row_umamateria['url']);
		}
	} else { 
		$audio_inicial = stripslashes($streaming_oficial);
	?>  
    	<div id="dados_audio">
			<div id="musica_no_ar"></div>
			<div id="artista_no_ar"></div>
        </div>
		<a href="javascript:parar_audio();" id="botao_pause">Pausar a R&aacute;dio</a>
  		<a href="javascript:tocar_radio();" id="botao_play" class="ouvir">Ouvir a R&aacute;dio</a>

	<? 
	}
	?>


<div id="audios_controles" style="margin-top:-8px">
    
	<div id="audio_botoes">
		<a href="javascript:baixar_volume();" onMouseOver="baixar_volume()" id="baixar_volume">Baixar Volume</a>
        
		<a href="javascript:aumentar_volume();" onMouseOver="aumentar_volume()" id="aumentar_volume">Aumentar Volume</a>
	</div>
	
	<div id="audio_informacoes">
    	<h1 id="radio_volume"><input id="controle_volume" type="range" value="50"></h1>
		<div id="indicador_volume">Volume: 50</div>
		<div id="tempo_transcorrido">Tempo: 00:00:00</div>
        <div id="link_radio"><a href="<? echo stripslashes($murl); ?>" target="_blank" onClick="parar_audio();">Clique aqui e ouça a <? echo $row_definicoes['nome_radio']; ?>!</a></div>
	</div>
        
</div>

</section>






<header id="informaces_pagina">

    <input name="radio_name" type="hidden" id="radio_name" value="<? echo stripslashes($row_definicoes['nome_radio']); ?>">
    
    <input name="user_centova" type="hidden" id="user_centova" value="<? echo stripslashes($row_definicoes['user_centova']); ?>">
    
    <input name="url_centova" type="hidden" id="url_centova" value="<? echo stripslashes($row_definicoes['info_autodj']); ?>">
  
	<input name="fonte" type="hidden" id="fonte" value="<? echo stripslashes($streaming_oficial); ?>" size="50"/>

	<input name="fonte_titular" type="hidden" id="fonte_titular" value="<? echo stripslashes($streaming_oficial); ?>" size="50" />

    <input name="fonte_reserva" type="hidden" id="fonte_reserva" value="https://ssl3.transmissaodigital.com:2149/stream.mp3" size="50" />
	
</header>

<div id="player_radio">
	<audio id="audio" src="<? echo $audio_inicial; ?>" 
			<? if((strpos($_SERVER['HTTP_USER_AGENT'],'iPad')==true or strpos($_SERVER['HTTP_USER_AGENT'],'iPhone'))) { echo ""; } else { echo "autoplay"; } ?> >
	</audio>
</div>

</body>
</html>
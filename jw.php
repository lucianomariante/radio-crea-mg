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

//$queryString_materiaslistac = sprintf("&totalRows_materiaslistac=%d%s", $totalRows_materiaslistac, $queryString_materiaslistac);

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
<meta property="og:image" content="<? echo stripslashes($row_definicoes['url_radio']); ?>/extras/logo_facebook2.png" /> 

<? if($_GET['id']!="") {
		$id = intval($_GET['id']);
		mysqli_select_db($conectar,$database_conectar);
		$query_umamateria = "SELECT radio_noticias.*, radio_podcasts.nome_podcast FROM radio_noticias, radio_podcasts 
		where radio_noticias.idcategoria = radio_podcasts.id and radio_noticias.id = '".$id."' order by data desc, radio_noticias.id DESC";
		$umamateria = mysqli_query($conectar,$query_umamateria);
		$row_umamateria = mysqli_fetch_assoc($umamateria);
	
		if($row_umamateria['manchete']=="")		{ $metatitulo = stripslashes($row_definicoes['nome_radio']);		} else { $metatitulo = stripslashes($row_umamateria['manchete']);		}
		if($row_umamateria['descricao']=="") 	{ $metadescricao =  stripslashes($row_definicoes['descricao']);		} else { $metadescricao =  stripslashes($row_umamateria['descricao']);	}
		if($row_umamateria['metakeywords']=="") { $metakeywords = stripslashes($row_definicoes['metakeywords']);	} else { $metakeywords = stripslashes($row_umamateria['metakeywords']);	}
		
	} else {
		
		$metatitulo = stripslashes($row_definicoes['nome_radio']);
		$metadescricao =  stripslashes($row_definicoes['descricao']);
		$metakeywords = stripslashes($row_definicoes['metakeywords']); 

	} 
	
if($metatitulo!="") { ?>
<meta name="title" content="<? echo $metatitulo; ?>">
<meta name="twitter:title" content="<? echo $metatitulo; ?>" />
<meta property="og:title" content="<? echo $metatitulo; ?>" /> 
<? } if($metakeywords!="") { ?>
<meta name="keywords" content="<? echo $metakeywords; ?>">
<? } if($metadescricao!="") {?>
<meta name="description" content="<? echo $metadescricao; ?>"/>
<meta name="twitter:description" content="<? echo $metadescricao; ?>" />
<meta property="og:description" content="<? echo $metadescricao; ?>" />
<? } ?>

<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
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
	
	$(".baixar").click(function() {gtag('event', 'baixando', {'event_category' :$(this).parent().parent().attr('id')});});
	$(".ouvir").click(function() {gtag('event', 'ouvindo', {'event_category':$(this).parent().parent().attr('id')});});
	$(".compartilhar").click(function() {gtag('event', 'compartilhando', {'event_category' :$(this).parent().parent().attr('id')});});
	
});

</script>
<? require_once('extras/extras.php'); ?>
<? if($row_definicoes['info_autodj']!="") { ?>
<script language="javascript" type="text/javascript" src="http://<? echo stripslashes($row_definicoes['info_autodj2']); ?>:2199/system/streaminfo.js"></script>
<? } ?>
</head>
<body class="container">
<div id="conteiner_pagina">

<? if($row_definicoes['avisos_texto']!="") { ?>
<div id="aviso_background">
	<section id="aviso">
		<h1 id="aviso_titulo">Aviso</h1>
		<h2 id="aviso_texto"><? echo nl2br(stripslashes($row_definicoes['avisos_texto'])); ?></h2>
        <a href="javascript:fecha_aviso()" id="fecha_aviso">Fechar Aviso</a>
    </section>
</div>
<? } ?>   

<? 
if($_GET['id']!="") {
?>
	<section id="voce_esta_ouvindo">
			<h1><?php echo stripslashes(formata_data($row_umamateria['data'])); ?></h1>
			<h2><?php echo stripslashes($row_umamateria['autor']); ?></h2>
            <h3><?php echo htmlentities($row_umamateria['duracao']); ?></h3>
            <h4><?php echo stripslashes($row_umamateria['manchete']); ?></h4>
            
        <? if($row_umamateria['audio']!="") { ?>
        
        	<a href="javascript:parar_audio()" id="pausa_materia">Pausar Matéria</a> 
            <a href="javascript:play_audio('audios/<?php echo $row_umamateria['audio']; ?>')" id="play_materia">Ouvir a  Matéria</a>
                      
        <? } elseif($row_umamateria['iddrive']!="") { ?>
        
    		<a href="javascript:parar_audio()" id="pausa_materia">Pausar Matéria</a>             
    		<a href="javascript:play_audio('https://drive.google.com/a/agenciaradioweb.com.br/uc?id=<?php echo $row_umamateria['iddrive']; ?>')" id="play_materia">Ouvir Matéria</a>
            
       <? } else { ?>
       
    		<a href="javascript:parar_audio()" id="pausa_materia">Pausar Matéria</a>             
    		<a href="javascript:play_audio('<?php echo $row_umamateria['url']; ?>')" id="play_materia">Ouvir Matéria</a>
            
        <? } ?>
        
        <a href="javascript:fecha_materia()" id="fecha_materia">Fechar Matéria</a>
	</section>
<? 
	if($row_umamateria['audio']!="") {
		$audio_inicial = "audios/".$row_umamateria['audio'];
	} else {
		$audio_inicial = stripslashes($row_umamateria['url']);
	}
} else { 
$audio_inicial = stripslashes($row_definicoes['streaming_titular']);
?>
	<? if(strpos($_SERVER['HTTP_USER_AGENT'],'Android')==true and $row_definicoes['app_android']!="") { ?>
    	<div id="baixar_app_background">
			<section id="baixar_app">
				<h1>
            		<a href="<? echo $row_definicoes['app_android']; ?>" target="_blank">
            			Clique aqui para baixar o aplicativo 
						para Android da <? echo stripslashes($row_definicoes['nome_radio']); ?><br><br>
                		<img src="extras/icone_android.png"/> 
                	</a>
            	</h1>
        		<a href="javascript:fecha_janela()" id="fecha_janela">Fechar Janela</a>
			</section>
    	</div>
	<? } ?>
    
	<? if((strpos($_SERVER['HTTP_USER_AGENT'],'iPad')==true or strpos($_SERVER['HTTP_USER_AGENT'],'iPhone')) and $row_definicoes['app_apple']!="") { ?>
    	<div id="baixar_app_background">
			<section id="baixar_app">
				<h1>
            		<a href="<? echo $row_definicoes['app_apple']; ?>" target="_blank">
            			Clique aqui para baixar o aplicativo 
						para IOS da <? echo stripslashes($row_definicoes['nome_radio']); ?><br><br>
                		<img src="extras/icone_ios.png"/> 
                	</a>
            	</h1>
        		<a href="javascript:fecha_janela()" id="fecha_janela">Fechar Janela</a>
			</section>
    	</div>
	<? } ?>
<? 
}
?>

<div id="conteiner_radio">

<header id="informaces_pagina">

	<h1 id="logotipo_radio">
    <a name="radio_home"><? echo stripslashes($row_definicoes['nome_radio']); ?></a>
    </h1>
    
    <div id="redes_sociais">
    
	<? if($row_definicoes['twitter']!="") { ?><a href="<? echo stripslashes($row_definicoes['twitter']); ?>" target="_blank" id="icone_twitter">Twitter</a><? } ?>
    
	<? if($row_definicoes['facebook']!="") { ?><a href="<? echo stripslashes($row_definicoes['facebook']); ?>" target="_blank" id="icone_facebook">Facebook</a><? } ?>
    
	<? if($row_definicoes['you_tube']!="") { ?><a href="<? echo stripslashes($row_definicoes['you_tube']); ?>" target="_blank" id="icone_youtube">Youtube</a><? } ?>
    
    <? if($row_definicoes['instagran']!="") { ?><a href="<? echo stripslashes($row_definicoes['instagran']); ?>" target="_blank" id="icone_instagram">Instagram</a><? } ?>
    
    <? if($row_definicoes['whatsapp']==1) { if((strpos($_SERVER['HTTP_USER_AGENT'],'Android')==true or strpos($_SERVER['HTTP_USER_AGENT'],'iPad')==true or strpos($_SERVER['HTTP_USER_AGENT'],'iPhone'))) { ?><a href="javascript:whatsapp()" target="_blank" id="icone_whats">Whatsapp</a>
	<? } else { ?>
       <a href="app_curtir.php?dir=1" target="_blank" id="icone_whats">Whatsapp</a>
    <? }} ?>
    </div>
    
    
    <input name="radio_name" type="hidden" id="radio_name" value="<? echo stripslashes($row_definicoes['nome_radio']); ?>">
    
    <input name="radio_add" type="hidden" id="radio_add" value="<? echo stripslashes($row_definicoes['url_radio']); ?>">
    
    <input name="user_centova" type="hidden" id="user_centova" value="<? echo stripslashes($row_definicoes['user_centova']); ?>">
    
    <input name="url_centova" type="hidden" id="url_centova" value="<? echo stripslashes($row_definicoes['info_autodj']); ?>">
  
</header>



<section id="radio" class="container">
    
	<div id="stream_infos" style="display:none">
    
		<h2 id="temp">Status do Ciclano</h2>
		
		Fonte Atual do Streaming: 
		<input name="fonte" type="text" disabled="disabled" id="fonte" value="<? echo stripslashes($row_definicoes['streaming_titular']); ?>" size="50"/>
		
        Fonte Titular:
		<input name="fonte_titular" type="text" disabled="disabled" id="fonte_titular" value="<? echo stripslashes($row_definicoes['streaming_titular']); ?>" size="50" />
		
        Fonte reserva:
        <input name="fonte_reserva" type="text" disabled="disabled" id="fonte_reserva" value="<? echo stripslashes($row_definicoes['streaming_reserva']); ?>" size="50" />
	
    </div>

	<div id="audios_controles">
    
    	<div id="audio_botoes">
			<a href="javascript:tocar_radio();" id="botao_play">Ouvir a R&aacute;dio</a>
			<a href="javascript:parar_audio();" id="botao_pause">Pausar a R&aacute;dio</a>
			<a href="javascript:baixar_volume();" onMouseOver="baixar_volume()" id="baixar_volume">Baixar Volume</a>
			<a href="javascript:aumentar_volume();" onMouseOver="aumentar_volume()" id="aumentar_volume">Aumentar Volume</a>
    	</div>
	
    	<div id="audio_informacoes">
    
    		<h1 id="radio_volume">
    			<label for="controle_volume">Controle de Volume:</label> <input id="controle_volume" type="range" value="50">
    		</h1>
    
			<div id="indicador_volume">Volume: 50</div>
			<div id="tempo_transcorrido">Tempo: 00:00:00</div>
    
    	</div>
    </div>

	<div id="player_radio"><audio id="audio" src="<? echo $audio_inicial; ?>" <? 
	if((strpos($_SERVER['HTTP_USER_AGENT'],'iPad')==true or strpos($_SERVER['HTTP_USER_AGENT'],'iPhone'))) { 
	echo ""; 
	} else { 
	echo "autoplay"; 
	} ?> ></audio></div>

	<? if($row_definicoes['aseguir']==1 or $row_definicoes['noar']==1) { ?>
	<div id="programacao">

		<? if($row_definicoes['noar']==1) { ?>
		<div id="no_ar">
    		<div id="conteiner">
				<h1>No Ar:</h1>
            	<div id="no_ar_conteiner">
            		<div>              
						<div id="musica_no_ar"></div>
						<div id="artista_no_ar"></div>
            		</div>
            	</div>
        	</div>
		</div>

    	<? if($row_definicoes['info_autodj2']!="") { ?>
		<div id="no_ar_reserva">
    		<div id="conteiner">
				<h1>No Ar:</h1>
            	<div id="no_ar_conteiner">
            		<div>
						<div id="musica_no_ar_reserva">
                			<span id="cc_strinfo_tracktitle_<? echo stripslashes($row_definicoes['user_centova']); ?>" class="cc_streaminfo"></span>
                		</div>
						<div id="artista_no_ar_reserva">
                			<span id="cc_strinfo_trackartist_<? echo stripslashes($row_definicoes['user_centova']); ?>" class="cc_streaminfo"></span>
                		</div>
                	</div>
            	</div>
        	</div>
		</div>
		<? } ?>
		<? } ?>
    
		<? if($row_definicoes['aseguir']==1) { ?>	
		<div id="a_seguir">
    		<div id="conteiner">
				<h1>A Seguir:</h1>
            	<div id="a_seguir_conteiner">
            		<div>
						<div id="musica_a_seguir"></div>
						<div id="artista_a_seguir"></div>
        			</div>
            	</div>
        	</div>
		</div>
    
    	<? if($row_definicoes['info_autodj2']!="") { ?>
		<div id="a_seguir_reserva">
    		<div id="conteiner">
				<h1>A Seguir:</h1>
            	<div id="a_seguir_conteiner">
            		<div>
						<div id="musica_a_seguir_reserva">Programação</div>
						<div id="artista_a_seguir_reserva"><? echo stripslashes($row_definicoes['nome_radio']); ?></div>
            		</div>
            	</div>
        	</div>
		</div>
    	<? } ?>
		<? } ?>
	</div>
	<? } ?>

	<? if($row_definicoes['curtir_programacao']==1) { ?>
	<div id="curtir_radio" onClick="curtir_radio()">
		Curtir o que est&aacute; tocando
		<input name="audio_a_curtir" type="hidden" id="audio_a_curtir" value="." />
	</div>
 	<? } ?> 
      
</section>


<? if($row_podcast_destaque['id']!="") { ?>
<section id="podcast_destaque">
		
        <article id="audio_destaque_<?php echo $row_podcast_destaque['id']; ?>">

				<h1><?php echo formata_data($row_podcast_destaque['data']); ?></h1>
				<h2><?php echo stripslashes($row_podcast_destaque['autor']); ?></h2>
            	<h3><?php echo htmlentities($row_podcast_destaque['duracao']); ?></h3>
            	<h4><?php echo stripslashes($row_podcast_destaque['manchete']); ?></h4>
			
				<? if($row_podcast_destaque['audio']!="") { ?>
             
            		<a href="javascript:play_audio('audios/<?php echo $row_podcast_destaque['audio']; ?>')" class="ouvir">Ouvir a  Matéria</a>
        			<a href="audios/<?php echo $row_podcast_destaque['audio']; ?>" target="_blank" class="baixar">Baixar a Matéria </a>
                	<a href="javascript:share_audio('<?php echo $row_podcast_destaque['id']; ?>')" class="compartilhar">Compartilhar no Facebook </a>
           
            	<? } elseif($row_podcast_destaque['iddrive']!="") { ?>
            
            		<a href="javascript:play_audio('https://drive.google.com/a/agenciaradioweb.com.br/uc?id=<?php echo $row_podcast_destaque['iddrive']; ?>')" class="ouvir">Ouvir a  Matéria</a>
        			<a href="https://drive.google.com/a/agenciaradioweb.com.br/uc?id=<?php echo $row_podcast_destaque['iddrive']; ?>&export=download" target="_blank" class="baixar">Baixar a Matéria </a>
                	<a href="javascript:share_audio('<?php echo $row_podcast_destaque['id']; ?>')" class="compartilhar">Compartilhar no Facebook </a>
           
            	<? } else { ?>
            
            		<a href="javascript:play_audio('<?php echo $row_podcast_destaque['url']; ?>')" class="ouvir">Ouvir a  Matéria</a>
        			<a href="<?php echo $row_podcast_destaque['url'].$ext_dw; ?>" target="_blank" class="baixar">Baixar a Matéria </a>
                	<a href="javascript:share_audio('<?php echo $row_podcast_destaque['id']; ?>')" class="compartilhar">Compartilhar no Facebook </a>
           
            	<? } ?>
                


        </article> 
             
		<h5><? echo stripslashes($row_podcast_destaque['texto_destaque']); ?></h5>
        
</section>
<? } ?>   

<? if(($row_definicoes['modelo_podcasts']==2 and $row_materiaslistac['id']!="") or $row_definicoes['buscar_conteudo']==1) { ?>



<? if(($row_definicoes['modelo_podcasts']==2 and $row_materiaslistac['id']!="")) { ?>
<nav id="botoes_editorias">
	<ul>
		<? do { ?> 
  			<li id="botao_<? echo retiraacentos(stripslashes($row_podcasts['nome_podcast'])); ?>" onClick="lista_not(<? echo $row_podcasts['id']; ?>);">
				<? echo stripslashes($row_podcasts['nome_podcast']); ?>
            </li>
		<?php } while ($row_podcasts = mysqli_fetch_assoc($podcasts)); ?>
    </ul>
</nav>
<? } ?>


<section id="lista_audios_editorias" class="lista_audios_0">
	
    <h1 class="conteiner_titulo_0">Not&iacute;cias</h1>
	
    <div id="conteiner_noticias_0" class="conteiner_noticias_0">
	<?php do { ?>
		
        <article id="audio_<?php echo $row_materiaslistac['id']; ?>">
			<div id="conteiner_article">
				
				<h1><?php echo formata_data($row_materiaslistac['data']); ?></h1>
				<h2><?php echo stripslashes($row_materiaslistac['autor']); ?></h2>
            	<h3><?php echo htmlentities($row_materiaslistac['duracao']); ?></h3>
            	<h4><?php echo stripslashes($row_materiaslistac['manchete']); ?></h4>
			
				<? if($row_materiaslistac['audio']!="") { ?>
             
            		<a href="javascript:play_audio('audios/<?php echo $row_materiaslistac['audio']; ?>')" class="ouvir">Ouvir a  Matéria</a>
        			<a href="audios/<?php echo $row_materiaslistac['audio']; ?>" target="_blank" class="baixar">Baixar a Matéria </a>
                	<a href="javascript:share_audio('<?php echo $row_materiaslistac['id']; ?>')" class="compartilhar">Compartilhar no Facebook </a>
                    
            	<? } elseif($row_materiaslistac['iddrive']!="") { ?>   
                    
            		<a href="javascript:play_audio('https://drive.google.com/a/agenciaradioweb.com.br/uc?id=<?php echo $row_materiaslistac['iddrive']; ?>')" class="ouvir">Ouvir a  Matéria</a>
        			<a href="https://drive.google.com/a/agenciaradioweb.com.br/uc?id=<?php echo $row_materiaslistac['iddrive']; ?>&export=download" target="_blank" class="baixar">Baixar a Matéria </a>
                	<a href="javascript:share_audio('<?php echo $row_materiaslistac['id']; ?>')" class="compartilhar">Compartilhar no Facebook </a>  
           
            	<? } else { ?>
            
            		<a href="javascript:play_audio('<?php echo $row_materiaslistac['url']; ?>')" class="ouvir">Ouvir a  Matéria</a>
        			<a href="<?php echo $row_materiaslistac['url']; ?>" target="_blank" class="baixar">Baixar a Matéria </a>
                	<a href="javascript:share_audio('<?php echo $row_materiaslistac['id']; ?>')" class="compartilhar">Compartilhar no Facebook </a>
           
            	<? } ?>

            </div>    
  		</article>
	<?php } while ($row_materiaslistac = mysqli_fetch_assoc($materiaslistac)); ?>
    </div>
   
    <? if($row_definicoes['noticias_paginacao']==1) { ?> 
        <nav id="navegacao_noticias">
  			<a href="javascript:paginacao_not(1,<? echo $npd; ?>)" id="primeira_pagina">Primeira Página</a> 
  			<a href="javascript:paginacao_not(2,<? echo $npd; ?>)" id="pagina_anterior">Página Anterior</a> 
  			<a href="javascript:paginacao_not(3,<? echo $npd; ?>)" id="proxima_pagina">Pr&oacute;xima Página</a> 
  			<a href="javascript:paginacao_not(4,<? echo $npd; ?>)" id="ultima_pagina">Última Página</a>
		</nav>
        
        <? if($row_definicoes['noticias_pag_status']==1) { ?> 
        <h5>P&aacute;gina <? echo $pageNum_materiaslistac + 1; ?> de <? echo $totalPages_materiaslistac + 1; ?></h5>
        <? } ?>
	<? } ?>
    
    <input name="pagnot_atual" type="hidden" id="pagnot_atual" value="0" class="pagnot_atual_<? echo $npd; ?>">
    <input name="pagnot_totais" type="hidden" id="pagnot_totais" value="<? echo $totalPages_materiaslistac; ?>" class="pagnot_totais_<? echo $npd; ?>">
    <input name="pagnot_query" type="hidden" id="pagnot_query" value="<? echo $queryString_materiaslistac; ?>" class="pagnot_query_<? echo $npd; ?>">
    
</section>

<? if($row_definicoes['buscar_conteudo']==1) { ?>
<section id="buscar_noticias">
    <h1>Buscar not&iacute;cias:</h1>
    <form>
    	<input name="campo_busca" type="text" id="campo_busca"/>
      <input type="button" name="buscar" id="buscar" value="Buscar"  onClick="busca_not()">
  	</form>
</section>
<? } ?>

<? } ?>

<? if($row_definicoes['modelo_podcasts']==1) { ?>
<? do { 

//LISTA DE NOTÍCIAS
$maxRows_materiaslistac = $row_definicoes['noticias_num'];
$pageNum_materiaslistac = 0;
if (isset($_GET['pageNum_materiaslistac'])) {
  $pageNum_materiaslistac = $_GET['pageNum_materiaslistac'];
}
$startRow_materiaslistac = $pageNum_materiaslistac * $maxRows_materiaslistac;

mysqli_select_db($conectar,$database_conectar);
$query_materiaslistac = "SELECT radio_noticias.*, radio_podcasts.nome_podcast FROM radio_noticias, radio_podcasts where radio_noticias.idcategoria = radio_podcasts.id and radio_noticias.idcategoria = '".$row_podcasts['id']."' order by data desc, radio_noticias.idradioweb DESC, radio_noticias.id DESC";
$query_limit_materiaslistac = sprintf("%s LIMIT %d, %d", $query_materiaslistac, $startRow_materiaslistac, $maxRows_materiaslistac);
$materiaslistac = mysqli_query($conectar,$query_limit_materiaslistac);
$row_materiaslistac = mysqli_fetch_assoc($materiaslistac);

$npd = $row_materiaslistac['idcategoria'];

if (isset($_GET['totalRows_materiaslistac'])) {
  $totalRows_materiaslistac = $_GET['totalRows_materiaslistac'];
} else {
  $all_materiaslistac = mysqli_query($conectar,$query_materiaslistac);
  $totalRows_materiaslistac = mysqli_num_rows($all_materiaslistac);
}
$totalPages_materiaslistac = ceil($totalRows_materiaslistac/$maxRows_materiaslistac)-1;

$queryString_materiaslistac = "categoria=".$npd;

if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();

  foreach ($params as $param) {
    if (stristr($param, "pageNum_materiaslistac") == false && stristr($param, "totalRows_materiaslistac") == false) {
      array_push($newParams, $param);
    }
  }

  if (count($newParams) != 0) {
    $queryString_materiaslistac = "" . implode("&", $newParams)."&categoria=".$npd;
  }
}

if($row_materiaslistac['id']) { 
?> 
<section id="lista_audios_<? echo retiraacentos($row_podcasts['nome_podcast']); ?>" class="lista_audios_<? echo $npd; ?> col-xs-12 col-sm-12 col-md-12 col-lg-6 d-flex">
	
    <h1><? echo $row_podcasts['nome_podcast']; ?></h1>
	
    <div id="conteiner_noticias_<? echo $npd; ?>">
	<?php do { ?>

        <article id="audio_<?php echo $row_materiaslistac['id']; ?>">
			<div id="conteiner_article">
            	
				<h1><?php echo formata_data($row_materiaslistac['data']); ?></h1>
				<h2><?php echo stripslashes($row_materiaslistac['autor']); ?></h2>
            	<h3><?php echo htmlentities($row_materiaslistac['duracao']); ?></h3>
            	<h4><?php echo stripslashes($row_materiaslistac['manchete']); ?></h4>
            
				<? if($row_materiaslistac['audio']!="") { ?>
            
            		<a href="javascript:play_audio('audios/<?php echo $row_materiaslistac['audio']; ?>')" class="ouvir">Ouvir a  Matéria</a>
        			<a href="audios/<?php echo $row_materiaslistac['audio']; ?>" target="_blank" class="baixar">Baixar a Matéria</a>
            		<a href="javascript:share_audio('<?php echo $row_materiaslistac['id']; ?>')" class="compartilhar">Compartilhar no Facebook </a>
                
            	<? } elseif($row_materiaslistac['iddrive']!="") { ?>
            
            		<a href="javascript:play_audio('https://drive.google.com/a/agenciaradioweb.com.br/uc?id=<?php echo $row_materiaslistac['iddrive']; ?>')" class="ouvir">Ouvir a  Matéria</a>
        			<a href="https://drive.google.com/a/agenciaradioweb.com.br/uc?id=<?php echo $row_materiaslistac['iddrive']; ?>&export=download" target="_blank" class="baixar">Baixar a Matéria </a>
                	<a href="javascript:share_audio('<?php echo $row_materiaslistac['id']; ?>')" class="compartilhar">Compartilhar no Facebook </a>
            
				<? } else { ?>
            
            		<a href="javascript:play_audio('<?php echo $row_materiaslistac['url']; ?>')" class="ouvir">Ouvir a  Matéria</a>
        			<a href="<?php echo $row_materiaslistac['url']; ?>" target="_blank" class="baixar">Baixar a Matéria</a>
            		<a href="javascript:share_audio('<?php echo $row_materiaslistac['id']; ?>')" class="compartilhar">Compartilhar no Facebook </a>
            
				<? } ?>
                
			</div>
  		</article>
         
	<?php } while ($row_materiaslistac = mysqli_fetch_assoc($materiaslistac)); ?>
    </div>
    
    <? if($row_definicoes['noticias_paginacao']==1) { ?> 
        <nav id="navegacao_noticias">
  			<a href="javascript:paginacao_not(1,<? echo $npd; ?>)" id="primeira_pagina">Primeira Página</a> 
  			<a href="javascript:paginacao_not(2,<? echo $npd; ?>)" id="pagina_anterior">Página Anterior</a> 
  			<a href="javascript:paginacao_not(3,<? echo $npd; ?>)" id="proxima_pagina">Pr&oacute;xima Página</a> 
  			<a href="javascript:paginacao_not(4,<? echo $npd; ?>)" id="ultima_pagina">Última Página</a>
		</nav>
        
        <? if($row_definicoes['noticias_pag_status']==1) { ?> 
        <h5>P&aacute;gina <? echo $pageNum_materiaslistac + 1; ?> de <? echo $totalPages_materiaslistac + 1; ?></h5>
        <? } ?>
        
	<? } ?>
    
    <input name="pagnot_atual" type="hidden" id="pagnot_atual" value="0" class="pagnot_atual_<? echo $npd; ?>">
    <input name="pagnot_totais" type="hidden" id="pagnot_totais" value="<? echo $totalPages_materiaslistac; ?>" class="pagnot_totais_<? echo $npd; ?>">
    <input name="pagnot_query" type="hidden" id="pagnot_query" value="<? echo $queryString_materiaslistac; ?>" class="pagnot_query_<? echo $npd; ?>">
</section>
<?php } } while ($row_podcasts = mysqli_fetch_assoc($podcasts)); ?>
<? } ?>


<? if($row_definicoes['comentarios_form']==1) { ?>
<section id="comentarios">

    <h1>Envie seu Coment&aacute;rio</h1>
    
    <form id="form_comentario">
    
    	<div id="form_conteiner">
    		<div>
	  			<label for="nome">Nome:</label>
        		<input name="nome" type="text" id="nome" size="24" value="Nome" onFocus="if(this.value=='Nome')this.value='';" onBlur="if(this.value=='')this.value='Nome';" 
        		maxlength="<? echo stripslashes($row_definicoes['comentarios_max']); ?>"/>
		
        		<label for="email">E-mail:</label> 
				<input name="email" id="email" type="text" size="24" value="E-mail" onFocus="if(this.value=='E-mail')this.value='';" onBlur="if(this.value=='')this.value='E-mail';" 
        		maxlength="<? echo stripslashes($row_definicoes['comentarios_max']); ?>"/>
        
				<? if($row_definicoes['comentarios_extra']!="") { ?>
					<label for="extra"><? echo $row_definicoes['comentarios_extra']; ?>:</label> 
					<input name="extra" id="extra" type="text" size="24" value="<? echo $row_definicoes['comentarios_extra']; ?>" 
        			onFocus="if(this.value=='<? echo $row_definicoes['comentarios_extra']; ?>')this.value='';" 
        			onBlur="if(this.value=='')this.value='<? echo $row_definicoes['comentarios_extra']; ?>';" 
        			maxlength="<? echo stripslashes($row_definicoes['comentarios_max']); ?>"/>
        		<? } else { ?>
					<input name="extra" type="hidden" id="extra" value="">
				<? } ?>
            
        		<input name="c_extra" type="hidden" id="c_extra" value="<? echo $row_definicoes['comentarios_extra']; ?>" maxlength="<? echo stripslashes($row_definicoes['comentarios_max']); ?>">
    		</div>
    		<div>    
				<label for="mensagem">Mensagem:</label>
            	<textarea name="comentario" cols="25" wrap="soft" id="comentario" onKeyDown="conta_letras(this,<? echo stripslashes($row_definicoes['comentarios_max']); ?>);" 
            	onFocus="if(this.value=='Mensagem')this.value='';" onBlur="if(this.value=='')this.value='Mensagem';">Mensagem</textarea>
    		</div>
        </div>
        
		<input type="submit" class="g-recaptcha" id="envia_comentario" name="envia_comentario" data-sitekey="<? echo stripslashes($row_definicoes['captcha_a']); ?>" data-callback='enviar_dados'>
        
	</form>
    
</section>
<? } ?>

<? if($row_definicoes['comentarios']==1 or $row_definicoes['comentarios_botao']==1) { ?>

<section id="lista_de_comentarios">
	<? if($row_definicoes['comentarios']==1) { ?>
    <h1>Coment&aacute;rios</h1>
    
    <div id="lista_de_comentarios_conteudo">
	<? do { ?>	
		<article id="comentario_<?php echo $row_comentarios['id']; ?>">
        	<div>
				<h1><?php echo stripslashes(convdata($row_comentarios['data'],1)); ?></h1>
            	<h1><?php echo stripslashes($row_comentarios['nome']); ?></h1>
				<h2><?php echo stripslashes($row_comentarios['extra']); ?></h2>
				<h3><?php echo stripslashes($row_comentarios['comentario']); ?></h3>
            </div>
		</article>
	<?php } while ($row_comentarios = mysqli_fetch_assoc($comentarios)); ?>
    </div>

    <? if($row_definicoes['comentarios_paginacao']==1) { ?>
        
        <nav id="navegacao_comentarios">
  			<a href="javascript:paginacao_coment(1)" id="primeira_pagina">Primeira Página</a> 
  			<a href="javascript:paginacao_coment(2)" id="pagina_anterior">Página Anterior</a> 
  			<a href="javascript:paginacao_coment(3)" id="proxima_pagina">Pr&oacute;xima Página</a> 
  			<a href="javascript:paginacao_coment(4)" id="ultima_pagina">Última Página</a>
		</nav>
        
        <? if($row_definicoes['comentarios_pag_status']==1) { ?> 
        <h4><? echo $pageNum_comentarios + 1; ?> de <? echo $totalPages_comentarios + 1; ?></h4>
        <? } ?>

    	<input name="pagcoment_atual" type="hidden" id="pagcoment_atual" value="<? echo $pageNum_comentarios; ?>">
    	<input name="pagcoment_totais" type="hidden" id="pagcoment_totais" value="<? echo $totalPages_comentarios; ?>">
    	<input name="pagcoment_query" type="hidden" id="pagcoment_query" value="<? echo $queryString_comentarios; ?>">

	<? } ?>  
	<? } ?> 
    <? if($row_definicoes['comentarios_botao']==1) { ?>
    <a href="javascript:abre_comentarios()" id="botao_comentarios">Listar comentários</a>
    <? } ?>
     
    
     
</section>
<? } ?>


<? if($row_definicoes['lista_tocadas']==1) { ?>
<section id="audios_executados">

<h3>Você ouviu na <? echo stripslashes($row_definicoes['nome_radio']); ?></h3>

	<? do {  ?>
		<article id="audio_executado_<?php echo $row_progradio['id']; ?>">
		<? if($row_progradio['musica']!="</titulo></musica></page>") { ?>
			<h1><? echo stripslashes($row_progradio['musica']); ?></h1>
		<? } else { ?>
			<h1><? echo stripslashes($row_definicoes['nome_radio']); ?></h1>
		<? } ?>
			<h2><? echo stripslashes($row_progradio['artista']); ?></h2>
        </article>
	<?php } while ($row_progradio = mysqli_fetch_assoc($progradio));  ?>
    
    <? if($row_definicoes['tocadas_paginacao']==1) { ?>
        <nav id="navegacao_audios_executados">
  			<a href="javascript:paginacao_tocou(1)" id="primeira_pagina">Primeira Página</a> 
  			<a href="javascript:paginacao_tocou(2)" id="pagina_anterior">Página Anterior</a> 
  			<a href="javascript:paginacao_tocou(3)" id="proxima_pagina">Pr&oacute;xima Página</a> 
  			<a href="javascript:paginacao_tocou(4)" id="ultima_pagina">Última Página</a>
		</nav>
        
        <? if($row_definicoes['tocadas_pag_status']==1) { ?> 
        <h4>P&aacute;gina <? echo $pageNum_progradio + 1; ?> de <? echo $totalPages_progradio + 1; ?></h4>
        <? } ?>
	<? } ?>
    
    <input name="pagtocou_atual" type="hidden" id="pagtocou_atual" value="<? echo $pageNum_progradio; ?>">
    <input name="pagtocou_totais" type="hidden" id="pagtocou_totais" value="<? echo $totalPages_progradio; ?>">
    <input name="pagtocou_query" type="hidden" id="pagtocou_query" value="<? echo $queryString_progradio; ?>">
    
</section>
<? } ?>

<? if($row_definicoes['expediente_texto']!="" or $row_definicoes['aradio_texto']!="" or $row_botoes['id']!="") { ?>
<footer>
	<? if($row_definicoes['expediente_texto']!="") { ?>
	<section id="expediente">
		<h1 id="expediente_titulo">Expediente</h1>
		<h2 id="expediente_texto"><? echo stripslashes($row_definicoes['expediente_texto']); ?></h2>
    </section>
    <? } ?>
    <? if($row_definicoes['aradio_texto']!="") { ?>
    <section id="a_radio">
		<h1 id="a_radio_titulo">A Rádio</h1>
		<h2 id="a_radio_texto"><? echo stripslashes($row_definicoes['aradio_texto']); ?></h2>
    </section>
    <? } ?>
    <? if($row_definicoes['contatos_texto']!="") { ?>
    <section id="contatos_radio">
		<h1 id="contatos_radio_titulo">Contatos</h1>
		<h2 id="contatos_radio_texto"><? echo stripslashes($row_definicoes['contatos_texto']); ?></h2>
    </section>
    <? } ?>
    <? if($row_botoes['id']!="") { ?>
    <section id="informacoes_adicionais">
    	<?php do { ?>
		<a href="<? echo stripslashes($row_botoes['url']); ?>" <? if($row_botoes['janela']==2) { ?>target="_blank" <? } ?>
        id="<? echo retiraacentos($row_botoes['nome']); ?>"><? echo stripslashes($row_botoes['nome']); ?>
        </a>
        <?php } while ($row_botoes = mysqli_fetch_assoc($botoes));  ?>
    </section>
    <? } ?>
    
</footer>
<? } ?>
<span id="cc_strinfo_listeners_<? echo stripslashes($row_definicoes['user_centova']); ?>" class="cc_streaminfo" style="visibility:hidden"></span>
</div>
</div>
</body>
</html>
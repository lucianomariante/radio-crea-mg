<?php 
$use_sts = TRUE;
if (($use_sts) && isset($_SERVER['HTTPS'])) {
  header('Status-Code: 301');
  header('Location: http://'.$_SERVER["HTTP_HOST"].$_SERVER['REQUEST_URI']);
} 
header("Cache-Control: no-store, no-cache, must-revalidate"); 
include_once('admin/includes/constantes.php'); 	
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="pt-BR"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="pt-BR"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="pt-BR"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="pt-BR"> <!--<![endif]-->
<!--[if IE 9 ]>    <html lang="pt-BR" class="ie9">    <![endif]-->
<head>	
	<meta charset="utf-8">
	<title>.:: Rádio CRA/MG ::.</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="format-detection" content="telephone=no">
	<!-- Style Sheet-->
	<!-- <link rel="stylesheet" type="text/css" href="css/style.min.css" media="screen"> -->
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
	<script type="text/javascript" src="admin/libs/sweetalert/dist/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="admin/libs/sweetalert/dist/sweetalert.css">
	<!-- favicon -->
	<link rel="shortcut icon" href="img/tjmg-favicon.ico">	
	<!--[if lt IE 9]>
			<script src="js/html5.js"></script>				
	<![endif]-->		 
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="admin/libs/font-awesome/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="admin/libs/bootstrap/css/bootstrap.min.css">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-74632301-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-74632301-1');
	</script>
</head>		
<!-- BODY -->	
<body onload="atualizavolume(); musica_passando(); musica_passara();">
	<!-- HEADER -->
	<header>
		<div class="top-menu">
			<div class="center">
				<div style="fill: white; max-width: 280px;">
					<br/>
					<a class="brand-logo logo-tjmg" style="margin-bottom: 1px;margin-top: 12px;" aria-label="Logo Rádio CRA/MG" title="Logo Rádio CRA/MG" href="index.php">
					<img alt="<?= cSNomeEmpresa ?>" title="<?= cSNomeEmpresa ?>" src="admin/imagens/<?= cSLogoMarca ?>" style="margin-top: -0.5em;width: 285px;height: auto;">
					</a>
					<div>
					<ul class="menu extra" aria-label="Redes Sociais" id="go-to-menu">
						<li class="network">
							<a target="_blank" href="https://www.youtube.com/channel/UCEJIjSFQXAoQiI0J3NT6H0Q" style="position: relative; left: 780px; top: -85px; font-size: 27px; color: #f9f9f9;" data-metatip="true" data-selected="true" data-label-id="0">
							<i class="fa fa-youtube"></i></a></li>
						<li class="network"><a target="_blank" href="https://www.instagram.com/TJMGoficial/" style="position: relative; left: 790px; top: -85px; font-size: 27px; color: #f9f9f9;" data-metatip="true" data-selected="true" data-label-id="0">
						<i class="fa fa-instagram"></i></a></li>
						<li class="network"><a target="_blank" href="https://www.flickr.com/photos/tjmg_oficial" style="position: relative; left: 800px; top: -85px; font-size: 27px; color: #f9f9f9;" data-metatip="true" data-selected="true" data-label-id="0">
						<i class="fa fa-flickr"></i></a></li>
						<li class="network"><a target="_blank" href="https://twitter.com/tjmgoficial" style="position: relative; left: 820px; top: -85px; font-size: 27px; color: #f9f9f9;" data-metatip="true" data-selected="true" data-label-id="0">
						<i class="fa fa-twitter"></i></a></li>
						<li class="network"><a target="_blank" href="https://www.facebook.com/TJMGoficial" style="position: relative; left: 840px; top: -85px; font-size: 27px; color: #f9f9f9;" data-metatip="true" data-selected="true" data-label-id="0">
						<i class="fa fa-facebook"></i></a></li>				
					</ul>
					</div>
				</div>					
			</div>			
		</div>
	</header>	
	
	<!-- /HEADER -->			
	
	<div class="shifter-page"> <!-- for mobile version -->		
								
		<div class="clearfix"></div>
		
		<!-- main content -->
		
		<div class="main-content">

		<div class="row">
			<div class="col-md-12">	
				<img class="center-block img-responsive header-img" src="img/header.jpg" alt="TJ MG" title="TJ MG" />
			</div>	
		</div>
			
			<div class="row">
				<div class="col-md-1"></div>
				<div id="audios_controles" class="col-md-5">
					<h3 id="aovivo">Ao vivo:</h3>
					<div id="audio_botoes" class="col d-flex justify-content-center">
						<a href="javascript:tocar_radio();"><img src="img/play.png" alt="Ouvir a Rádio" title="Ouvir a Rádio" /></a>
						<a href="javascript:parar_audio();"><img src="img/pause.png" alt="Pausar a Rádio" title="Pausar a Rádio" /></a>
						<a id="volume" href="javascript:baixar_volume();" ><img src="img/volume.png" alt="Volume" title="Volume"  /></a>							
						<input id="controle_volume" type="range" value="50" orient="vertical">
						<!-- <a href="javascript:aumentar_volume();" onmouseover="aumentar_volume()"><img src="img/icone_volume_mais.png" alt="Aumentar Volume" title="Aumentar Volume" style="margin-top:35px" /></a> -->
					</div>
				
					 <div id="audio_informacoes" class="col d-flex justify-content-center">
				
						<div id="tempo_transcorrido" class="col align-self-center" style="color:#949494"><input id="tempo" type="range" value="100"></div>
						<img src="img/bt-aovivo.png" alt="">
					</div>

					<div id="no_ar" class="col">		
						<div>
							<h2>No Ar:</h2>
							<div id="no_ar_conteiner">
								<div>              
									<div id="musica_no_ar"><div>Programação</div></div><br/>
									<div id="artista_no_ar"><div>Rádio CRAMG</div></div>
								</div>
							</div>	
						</div>
						<div>
							<h2>A Seguir:</h2>
							<div id="a_seguir_conteiner">
								<div>
									<div id="musica_a_seguir"><div>Hora Certa</div></div><br/>
									<div id="artista_a_seguir"><div>Rádio CRAMG</div></div>
								</div>
							</div>
						</div>						
					</div>

				</div>
				<input name="fonte" type="hidden" id="fonte" value="https://ssl3.transmissaodigital.com:20032/stream.mp3" />
				<div id="player_radio"><audio id="audio" src="https://ssl3.transmissaodigital.com:20032/stream.mp3" <?php 	if($_GET['id']== "") { ?> autoplay="" <?php } ?>></audio></div>
				
				<div class="col-md-6">
					<ul id="tabs" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#noticias" aria-controls="home" role="tab" data-toggle="tab">Notícias</a></li>
						<li role="presentation"><a href="#programas" aria-controls="profile" role="tab" data-toggle="tab">Programas</a></li>							
					</ul>
					
					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="noticias">
							<div id="listblog" style="height: 435px; overflow-y : scroll; overflow-x : hidden;"></div>
						</div>
						<div role="tabpanel" class="tab-pane" id="programas">						
							<div id="listblog2" style="height: 435px; overflow-y : scroll; overflow-x : hidden;"></div>
						</div>							
					</div>
				</div>

				<div class="col-md-5"></div>	
				<div class="col-md-1"></div>			
			</div>				 
		
			<div class="row" >						
				<div class="col-md-6"></div>	
			</div>					
		</div>
		
		<!-- /main content -->
		<div class="clearfix"></div>
		
		<!-- footer -->
		
		<div id="footer">
			<div class="center">
				<div class="row">
				<div class="col-md-4 widget-area"> <!-- if you need less change for one-third or one-half -->
					<!-- title -->
					<div class="title">
						<h2><strong>Sobre nós</strong></h2>							
					</div>
					<!-- widget -->
					<p>
						O Tribunal de Justiça de Minas Gerais é o órgão superior da justiça mineira e tem sede em Belo Horizonte e jurisdição em todo o território mineiro. Por se tratar de um órgão da justiça estadual, sua função é julgar os casos que não sejam de competência da justiça federal comum, do trabalho, eleitoral e militar.
					</p>
					<div class="about-widget">
						<!-- small logo -->
						<img src="img/logo-icon.png" alt="img">
						<!-- contact details -->
						<ul>
						<!--	<li><span>E-mail:</span> suportesei@tjmg.jus.br</li> -->
							<li><span>Telefone:</span> (31) 3306-3920 </li>
						</ul>
					</div>
				</div>
									
				<div id="expediente" class="col-md-4 last widget-area">
					<!-- title -->
					<div class="title">
						<h2><strong>Expediente</strong></h2>							
					</div>
					<!-- featured posts -->
					<ul class="featured-posts-widget">
						<!-- post -->
						<li>
							<!-- title -->
							<h6>
								Diretor Executivo de Comunicação: Sérgio Galdino
							</h6>
							<h6>
								Gerente de Imprensa: Kátia Massimo
							</h6>
							<h6>
								Coordenador de Rádio e TV: Cícero Brito
							</h6>
							<h6>
								Coordenador Técnico: Fernando Capreta
							</h6>								
						</li>
					</ul>
				</div>
			</div>	
			</div>
		</div>
		<!--  <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/20867971.js"></script> -->
		<!-- /footer -->
		
		<div class="clearfix"></div>
		
		<!-- copyright -->
		
		<div class="copyright">
			<div class="center">
			
				<!-- txt -->				
				<span><strong>Copyright 2023.</strong> AGÊNCIA RADIOWEB <a href="https://www.website.agenciaradioweb.com.br/" target="_blank" title="Agência Radioweb: Notícias e Jornalismo">
								<img src="img/rw.png" height="20px" alt="Agência Radioweb: Notícias e Jornalismo" border="0" >
							</a> - Desenvolvimento: <a href="http://www.teraware.com.br/" target="_blank" title="Teraware - ERP | E-commerce | Web Sites | Outsourcing | Projetos Especiais">
								<img src="img/signed-teraware.png" height="20px" alt="Teraware - ERP | E-commerce | Web Sites | Outsourcing | Projetos Especiais" border="0" >
							</a></span>					
				<!-- /txt -->
				
				<!-- social -->				
				<ul class="social">
					<li><a href="https://www.facebook.com/TJMGoficial" target="_blank"><span>&#xf082;</span></a></li>
					<li><a href="https://twitter.com/tjmgoficial" target="_blank"><span>&#xf099;</span></a></li>
					<li><a href="https://www.youtube.com/channel/UCEJIjSFQXAoQiI0J3NT6H0Q" target="_blank"><span>&#xf16a;</span></a></li>
					<li><a href="https://www.instagram.com/TJMGoficial/" target="_blank"><span>&#xf0e1;</span></a></li>
				</ul>					
				<!-- /social -->	
			</div>
		</div>
	
		<!-- /copyright -->
		
	</div>	<!-- Shifter for mobile version -->
		
	<!-- /CONTENT-->		

	<!-- ATTACHMENTS -->

	<script src="js/libs/jquery-1.10.2.min.js"></script>
	<script src="js/libs/jquery.migrate-1.2.1.min.js"></script>
	<script src="js/libs/jquery.easing.1.3.js"></script>
	<script src="js/libs/jquery.mobile.customized.min.js"></script>
	<script src="js/libs/placeholdem.js"></script>
	<script src="js/libs/owl.carousel.min.js"></script>
	<script src="js/libs/hover.js"></script>
	<script src="js/libs/wait.js"></script>
	<script src="js/libs/jquery.fs.shifter.min.js"></script>
	<script src="js/libs/jquery.plugin.js"></script>
	<script src="js/libs/jquery.countdown.js"></script>
	
	<!-- Gallery -->
	
	<script src="js/libs/lightGallery.min.js"></script>
	
	<!-- Player -->
	
	<script src="js/libs/jquery.jplayer.js"></script>
	<script src="js/libs/ttw-music-player.js"></script>
	<script src="js/playlist-home.js"></script>

	<!-- Custom Js -->		
	<script src="js/custom.js"></script>
	<script src="js/funcoes.js"></script>
	<!-- Bootstrap -->
	<script src="admin/libs/bootstrap/js/bootstrap.min.js"></script>
	<script>
        $("ul.pagination li").on('click', function(event) {
            event.preventDefault();
            $(this).parents('ul').find('li').removeClass('current');
            $(this).parents('ul').parents('li').parents('a').addClass('current');
            const pagina =  $(this).attr('rel');
            direcionarPagina(pagina);
           // $('html, body').animate({
             //   scrollTop: $(".page-header").offset().top
           // }, 500, 'linear');
        });

        $(document).ready(function($) {
            direcionarPagina(1);
			direcionarPagina2(1);
        });

        function direcionarPagina(pagina)
        {
            $.ajax({
                url: 'grid_noticias.php',
                type: 'GET',
                dataType: 'html',
                data: {
                    paginaAtual: pagina
                },
                success: function(response){
                    $("#listblog").html(response);
                },
                error: function(response){
                    console.log(response);
                }
            });
        }
		
		function direcionarPagina2(pagina)
        {
            $.ajax({
                url: 'grid_programas.php',
                type: 'GET',
                dataType: 'html',
                data: {
                    paginaAtual: pagina
                },
                success: function(response){
                    $("#listblog2").html(response);
                },
                error: function(response){
                    console.log(response);
                }
            });
        }
    </script>
	
	
	<?php 
		if($_GET['id']!= "") { 
			include("modal_audio.php");
		}
	?>
  <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>

</body>	

<!-- /BODY -->
	
</html>
	
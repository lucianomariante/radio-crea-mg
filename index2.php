<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-1905227-6"></script> 
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-1905227-6');
</script>
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<meta http-equiv="Content-Language" content="pt-br">
<title>Rádio Crea Minas</title>
<meta name="viewport" content="width=device-width, initial-scale=0.5, shrink-to-fit=no">
<meta property="og:type" content="website" />
<meta property="og:image" content="http://www.radiocreaminas.com.br/creaminas/extras/logo_facebook2.png" />
<meta name="title" content="Rádio Crea Minas">
<meta name="twitter:title" content="Rádio Crea Minas" />
<meta property="og:title" content="Rádio Crea Minas" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
<link rel="stylesheet" href="css/animate.css"/>
<link rel="stylesheet" href="css/style_2023.css"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
<script src="js/jquery.js"></script> 
<script src="js/funcoes.js"></script> 
<script src="js/animations.js"></script> 
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script> 
<script src='https://www.google.com/recaptcha/api.js'></script> 
<script type="text/javascript">
$(window).on("load", function() {
	
	atualizavolume();
	
	ativa_campos();
	
		
	musica_passando();
	musica_passara();	
		
		
		
		
		
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<link rel="stylesheet" href="extras/estilo.css">
<style type="text/css"></style>
<style>
.swiper {
	width: 100%;
	height: 400px;
}
</style>
<script type="text/javascript">

function addbootstrap () {
	$("#conteiner_noticias_0 article").addClass("col-xs-12 col-sm-12 col-md-12 col-lg-6 d-flex float-left");
	$(".ouvir, .compartilhar, .baixar").addClass("d-flex");
	
	$("#lista_audios_editorias #navegacao_noticias").addClass("d-flex justify-content-center");
	$("#lista_audios_editorias h5").addClass("d-flex justify-content-center");
	
	$("#botoes_editorias ul li").addClass("col-xs-6 col-sm-6 col-md-4 col-lg-4 justify-content-center");
	$("#botoes_editorias ul").addClass("nav justify-content-center text-nowrap");
	
	$("#a_seguir, #no_ar, #a_seguir_reserva, #no_ar_reserva").addClass("");
	$("#a_seguir_conteiner").addClass("");
	$("#a_seguir_conteiner div").addClass("");
	$("#no_ar_conteiner").addClass("");
	$("#programacao").addClass("row d-flex justify-content-center");
	$("#programacao h1").addClass("align-self-center");
	$("#programacao #conteiner").addClass("row");
	
	//$("#audio_informacoes").addClass("col-xs-12 col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center");
	$("#conteiner_radio").addClass("container");
	
	$("#informaces_pagina").addClass("row d-flex justify-content-center");
	$("#logotipo_radio").addClass("col-xs-12 col-sm-12 col-md-12 col-lg-4 align-self-center d-flex justify-content-center");
	$("#redes_sociais").addClass("col-xs-12 col-sm-12 col-md-12 col-lg-8 d-flex justify-content-center");
	$("#icone_twitter, #icone_facebook, #Linkedin, #icone_instagram, #Whatsapp_Crea").addClass("col align-self-center");
	
	$("#navegacao_comentarios").addClass("d-flex row justify-content-center");
	//$("#audio_botoes, #audio_botoes a").addClass("d-flex justify-content-center");
	
	$("#audios_controles").addClass("");
	$("#audio_botoes").addClass("");
	$("#audio_informacoes").addClass("");
	
	$("#area_azul").addClass("row d-flex justify-content-center");
	$("#buscar_noticias, #podcast_destaque").addClass("col-xs-12 col-sm-12 col-md-12");
	
	$("#baixar_app img").addClass("img-fluid");
	$("#comentarios").addClass("col-xs-12 col-sm-12 col-md-12 col-lg-12 flex-column float-left");
	//$("#informacoes_adicionais a").addClass("col-xs-12 col-sm-12 col-md-3 col-lg-2");
	//$("#informacoes_adicionais").addClass("nav fixed-top justify-content-center");
	$("#voce_esta_ouvindo").addClass("fixed-top justify-content-center");
	$("#contatos_radio").addClass("fixed-top justify-content-center");
	
	$("#form_conteiner").addClass("row d-flex justify-content-center");
	$("#form_conteiner div").addClass("col-xs-12 col-sm-12 col-md-6 col-lg-6");
	$("#form_conteiner #envia_comentario").addClass("col-xs-6 col-sm-6 col-md-6 col-lg-6");
	
	$("#form_conteiner div:nth-child(1)").addClass("order-12");
	$("#form_conteiner div:nth-child(2)").addClass("order-1");
	
	//const width = Math.max(document.documentElement.clientWidth,window.innerWidth || 0);
	//if (width > 768) {
	//	$("#redes_sociais").css('margin-left','0px');
	//}

	setTimeout(function(){ addbootstrap(); },500);
}

function relogio(){
	
	var dNow = new Date();
	
	var dh = dNow.getHours();
	var dm = dNow.getMinutes();
	
	if(dm > 9) { var minuto = dm; } else { var minuto = "0" + dm; }
	if(dh > 9) { var hora = dh; } else { var hora = "0" + dh; }
	
	var localdate = hora + ':' + minuto;	
	$('#relogio').empty().html("<img src='extras/relogio.png'/> " + localdate);

	setTimeout(function(){ relogio(); },60000);//1000=a um segundo, altere conforme o necessario
}

function curtir_radio_geral(){
	MM_openBrWindow("app_curtir.php",'','width=600,height=550');	
	//alert($('#radio_add').val());
}

jQuery(document).ready(function(){
	

	lista_not(2);
	
	addbootstrap();
	
	$('#baixar_volume').after($('#radio_volume'));
	$("<div id='relogio'><img src='extras/relogio.png'/>18:30</div>").insertAfter("#tempo_transcorrido");
	$('#no_ar').prepend($('#Curtir_Programacao'));
	$('#icone_facebook').after($('#Linkedin')); 
    $('#icone_instagram').after($('#Whatsapp_Crea'));
	
	relogio();
	
  $(window).keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
	  busca_not();
      return false;
    }
  });
	
});


</script> 
<script language="javascript" type="text/javascript" src="http://:2199/system/streaminfo.js"></script>
</head>

<body>
<div class="conteiner_radio container-fluid" style="padding: 0">
  <div class="container mt-2" style="margin-bottom: 2rem;">
    <div class="row">
      <div class="col-md-4"> <img src="assets/img/logo-radiomg.svg" width="85%" alt=""/> </div>
      <div class="col-md-4"></div>
      <div class="col-md-4 text-center" style="padding-top: 100px">
        <div class="row">
          <div class="col-3 redes-sociais"><a href="https://www.youtube.com/user/CreaMinas"><i class="fa fa-youtube" style="font-size: 34px !important"></i></a></div>
          <div class="col-3 redes-sociais"><a href="https://twitter.com/Crea_Minas"><i class="fa fa-twitter" style="font-size: 34px !important"></i></a></div>
          <div class="col-3 redes-sociais"><a href="https://www.linkedin.com/company/creamg/"><i class="fa fa-linkedin" style="font-size: 34px !important"></i></a></div>
          <div class="col-3 redes-sociais"><a href="https://www.instagram.com/crea_minas/"><i class="fa fa-instagram" style="font-size: 34px !important"></i></a></div>
        </div>
      </div>
    </div>
  </div>
  <input name="radio_name" type="hidden" id="radio_name" value="<? echo stripslashes($row_definicoes['nome_radio']); ?>">
  <input name="radio_add" type="hidden" id="radio_add" value="<? echo stripslashes($row_definicoes['url_radio']); ?>">
  <input name="user_centova" type="hidden" id="user_centova" value="<? echo stripslashes($row_definicoes['user_centova']); ?>">
  <input name="url_centova" type="hidden" id="url_centova" value="<? echo stripslashes($row_definicoes['info_autodj']); ?>">
  <div class="container-fluid" style="background-color:#00498F">
  
 
<div class="shifter-page"> 
								

		<div class="container-fluid" style="padding: 0; background-color: #003972">
            <div class="container" style="padding: 8px 0;">
			
            <div class="row">

				<div id="audios_controles">

                            <div class="col-md-4 col-xs-12">
                                <div id="audio_botoes" class="col-md-12 col-xs-12" style="text-align: left">
                                    <div class="col-md-2 col-xs-2" style="margin-right: -13px"><a href="javascript:tocar_radio();"><img src="https://radioadm.org.br/novo/imagens/play.svg" alt="Ouvir a Rádio" title="Ouvir a Rádio"></a></div>
                                    <div class="col-md-2 col-xs-2"><a href="javascript:parar_audio();"><img src="https://radioadm.org.br/novo/imagens/pause.svg" alt="Pausar a Rádio" title="Pausar a Rádio"></a></div>
                                   
                                
                                <div class="col-md-8 col-xs-9"><!--<h3 id="aovivo">Ao vivo:</h3>-->
                                 <div class="col-md-3 col-xs-3"><a id="volume" href="javascript:baixar_volume();"><img src="https://radioadm.org.br/novo/imagens/volume.svg" alt="Volume" title="Volume"></a></div>							
                                    <div class="col-md-9 col-xs-9" style="padding: 0 5px"><input id="controle_volume" type="range" value="50" orient=""></div>
                                </div>
                                </div>    
                            </div>    

          
                            <div id="no_ar" class="col-md-6 col-xs-12">		
                                <div class="col-md-6 col-xs-6" id="no_ar_conteiner">

                                        <span>No Ar:<span>
                                        <span class="" id="musica_no_ar"><span>País Tropical</span></span>
										<span class="" id="artista_no_ar"><span>Jorge Ben Jor</span></span>
               
                                    
                                </span></span></div>
                                <div class="col-md-6 col-xs-6">

                                 
                                        <span>A Seguir:<span>

                                            <span style="font-size: 12px !important" class="" id="musica_a_seguir"><span>Ainda Bem</span></span>
                                            <span style="font-size: 12px !important" class="" id="artista_a_seguir"><span>Thiaguinho</span></span>

                                  
                                </span></span></div>

                             </div>
                                
                             <div class="col-md-2 text-right redes-sociais" style="margin: 0; padding: 0">

                                 <div class="col-md-3"></div>   
                                 <div class="col-md-3"><a href="https://facebook.com/cfaadm" target="_blank"><img style="width: 15px !important" src="https://rdadm.massacriativa.com.br/imagens/facebook.svg" alt=""></a></div>
                                    <div class="col-md-3"><a href="https://instagram.com/cfaadm" target="_blank"><img style="width: 15px !important" src="https://rdadm.massacriativa.com.br/imagens/instagram.svg" alt=""></a></div>
                                    <div class="col-md-3"><a href="https://twitter.com/cfaadm" target="_blank"><img style="width: 15px !important" src="https://rdadm.massacriativa.com.br/imagens/twitter.svg" alt=""></a></div>
                 

                  </div>
                        </div>
    
                </div>
				<input name="fonte" type="hidden" id="fonte" value="https://centova4.transmissaodigital.com:20014/stream.mp3">
				<div id="player_radio"><audio id="vsaudio" name="vsaudio" src="https://centova4.transmissaodigital.com:20014/stream.mp3"></audio></div>
				 
				
		</div>

		

        </div>
	</div>       
      
      
  </div>
  
  <!-- Slider main container -->
  <div class="swiper"> 
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper"> 
      <!-- Slides -->
      
      <div class="swiper-slide" style="background: url(assets/img/sl1.jpg); background-size: cover; margin-top: -30px">
        <div class="container text-center"> INFORMAÇÕES AQUI </div>
      </div>
      <div class="swiper-slide">Slide 2</div>
      <div class="swiper-slide">Slide 3</div>
      ... </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
    
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    
    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
  </div>
    
  <div class="container-fluid" style="">
  <section class="container py-4">
      
      
<!--/*<p>
    
   <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="true" aria-controls="collapseExample">
    PODCASTS
  </button>
    
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="true" aria-controls="collapseExample">
    NOTÍCIAS
  </button>

  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="true" aria-controls="collapseExample">
    ADM EM FOCO
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
  </div>
</div>
<div class="collapse" id="collapseExample2">
  <div class="card card-body">
     the user activates the relevant trigger.
  </div>
</div>
<div class="collapse" id="collapseExample3">
  <div class="card card-body">
    This panel is hidden by default but revealed when the user activates the relevant trigger.
  </div>
</div>    */-->  
      
      
      
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 style="font-size: 45px" class="p-3">O que você quer ouvir hoje?</h2>
        <ul id="tabs" class="nav nav-tabs">
          <li class="nav-item"><a href="" data-target="#aba_podcasts" data-toggle="tab" class="nav-link small text-uppercase active">Podcasts</a></li>
          <li class="nav-item"><a href="" data-target="#aba_noticias" data-toggle="tab" class="nav-link small text-uppercase">Notícias</a></li>
          <li class="nav-item"><a href="" data-target="#aba_adm_em_foco" data-toggle="tab" class="nav-link small text-uppercase">Adm em Foco</a></li>
        </ul>
        <br>
          
          
        <div id="tabsContent" class="tab-content">
          
        <div id="aba_podcasts" class="tab-pane active">
            <div class="row animated fadeInUp">
              <div class="col-md-4">
                <div class="thumbnail"> <img src="http://www.wowthemes.net/demo/calypso/img/demo/team1.jpg" alt="">
                  <div class="caption"> 
                    <!-- <h4>Ralph P. Peters</h4> --> 
                    <span class="primarycol">24/07/2023</span>
                    <p> Fala Presidente: Prêmio Destaque em Administração<br>
                    </p>
                    <ul class="social-icons">
                      <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-play-circle"></i></a></li>
                        <li><a href="#"><i class="fa fa-download"></i></a></li>
                        <li><a href="#"><i class="fa fa-share-square"></i></a></li>
                      </ul>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="thumbnail"> <img src="" alt="">
                  <div class="caption"> 
                    <!-- <h4>Emma M. Coffey</h4> --> 
                    <span class="primarycol">17/07/2023</span>
                    <p> Fala Presidente: IA e a capacitação<br>
                    </p>
                    <ul class="social-icons">
                      <li><a href="#"><i class="fa fa-play-circle"></i></a></li>
                      <li><a href="#"><i class="fa fa-download"></i></a></li>
                      <li><a href="#"><i class="fa fa-share-square"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="thumbnail"> <img src="" alt="">
                  <div class="caption"> 
                    <!-- <h4>Emma M. Coffey</h4> --> 
                    <span class="primarycol">10/07/2023</span>
                    <p> Fala Presidente: Organizações infinitas<br>
                    </p>
                    <ul class="social-icons">
                      <li><a href="#"><i class="fa fa-play-circle"></i></a></li>
                      <li><a href="#"><i class="fa fa-download"></i></a></li>
                      <li><a href="#"><i class="fa fa-share-square"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="thumbnail"> <img src="" alt="">
                  <div class="caption"> 
                    <!-- <h4>Emma M. Coffey</h4> --> 
                    <span class="primarycol">03/07/2023c -</span>
                    <p> Fala Presidente: Pesquisa com IES<br>
                    </p>
                    <ul class="social-icons">
                      <li><a href="#"><i class="fa fa-play-circle"></i></a></li>
                      <li><a href="#"><i class="fa fa-download"></i></a></li>
                      <li><a href="#"><i class="fa fa-share-square"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="thumbnail"> <img src="" alt="">
                  <div class="caption"> 
                    <!-- <h4>Emma M. Coffey</h4> --> 
                    <span class="primarycol">19/06/2023</span>
                    <p> Fala Presidente: Abertas as inscrições para o Enbra<br>
                    </p>
                    <ul class="social-icons">
                      <li><a href="#"><i class="fa fa-play-circle"></i></a></li>
                      <li><a href="#"><i class="fa fa-download"></i></a></li>
                      <li><a href="#"><i class="fa fa-share-square"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="thumbnail"> <img src="http://www.wowthemes.net/demo/calypso/img/demo/team3.jpg" alt="">
                  <div class="caption"> 
                    <!-- <h4>Eugene B. Bedwell</h4> --> 
                    <span class="primarycol">12/06/2023</span>
                    <p> Fala Presidente: Convite para o Erpa Sudeste<br>
                    </p>
                    <ul class="social-icons">
                      <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-play-circle"></i></a></li>
                        <li><a href="#"><i class="fa fa-download"></i></a></li>
                        <li><a href="#"><i class="fa fa-share-square"></i></a></li>
                      </ul>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
            
          <div id="aba_noticias" class="tab-pane">
            <div class="row animated fadeInUp">
              <div class="col-md-4">
                <div class="thumbnail"> <img src="http://www.wowthemes.net/demo/calypso/img/demo/team1.jpg" alt="">
                  <div class="caption"> 
                    <!-- <h4>Ralph P. Peters</h4> --> 
                    <span class="primarycol">24/07/2023</span>
                    <p> Fala Presidente: Prêmio Destaque em Administração<br>
                    </p>
                    <ul class="social-icons">
                      <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-play-circle"></i></a></li>
                        <li><a href="#"><i class="fa fa-download"></i></a></li>
                        <li><a href="#"><i class="fa fa-share-square"></i></a></li>
                      </ul>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="thumbnail"> <img src="" alt="">
                  <div class="caption"> 
                    <!-- <h4>Emma M. Coffey</h4> --> 
                    <span class="primarycol">17/07/2023</span>
                    <p> Fala Presidente: IA e a capacitação<br>
                    </p>
                    <ul class="social-icons">
                      <li><a href="#"><i class="fa fa-play-circle"></i></a></li>
                      <li><a href="#"><i class="fa fa-download"></i></a></li>
                      <li><a href="#"><i class="fa fa-share-square"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="thumbnail"> <img src="" alt="">
                  <div class="caption"> 
                    <!-- <h4>Emma M. Coffey</h4> --> 
                    <span class="primarycol">10/07/2023</span>
                    <p> Fala Presidente: Organizações infinitas<br>
                    </p>
                    <ul class="social-icons">
                      <li><a href="#"><i class="fa fa-play-circle"></i></a></li>
                      <li><a href="#"><i class="fa fa-download"></i></a></li>
                      <li><a href="#"><i class="fa fa-share-square"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="thumbnail"> <img src="" alt="">
                  <div class="caption"> 
                    <!-- <h4>Emma M. Coffey</h4> --> 
                    <span class="primarycol">03/07/2023c -</span>
                    <p> Fala Presidente: Pesquisa com IES<br>
                    </p>
                    <ul class="social-icons">
                      <li><a href="#"><i class="fa fa-play-circle"></i></a></li>
                      <li><a href="#"><i class="fa fa-download"></i></a></li>
                      <li><a href="#"><i class="fa fa-share-square"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="thumbnail"> <img src="" alt="">
                  <div class="caption"> 
                    <!-- <h4>Emma M. Coffey</h4> --> 
                    <span class="primarycol">19/06/2023</span>
                    <p> Fala Presidente: Abertas as inscrições para o Enbra<br>
                    </p>
                    <ul class="social-icons">
                      <li><a href="#"><i class="fa fa-play-circle"></i></a></li>
                      <li><a href="#"><i class="fa fa-download"></i></a></li>
                      <li><a href="#"><i class="fa fa-share-square"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="thumbnail"> <img src="http://www.wowthemes.net/demo/calypso/img/demo/team3.jpg" alt="">
                  <div class="caption"> 
                    <!-- <h4>Eugene B. Bedwell</h4> --> 
                    <span class="primarycol">12/06/2023</span>
                    <p> Fala Presidente: Convite para o Erpa Sudeste<br>
                    </p>
                    <ul class="social-icons">
                      <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-play-circle"></i></a></li>
                        <li><a href="#"><i class="fa fa-download"></i></a></li>
                        <li><a href="#"><i class="fa fa-share-square"></i></a></li>
                      </ul>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
            
            <div id="aba_adm_em_foco" class="tab-pane">
            <div class="row animated fadeInUp">
              <div class="col-md-4">
                <div class="thumbnail"> <img src="http://www.wowthemes.net/demo/calypso/img/demo/team1.jpg" alt="">
                  <div class="caption"> 
                    <!-- <h4>Ralph P. Peters</h4> --> 
                    <span class="primarycol">24/07/2023</span>
                    <p> Fala Presidente: Prêmio Destaque em Administração<br>
                    </p>
                    <ul class="social-icons">
                      <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-play-circle"></i></a></li>
                        <li><a href="#"><i class="fa fa-download"></i></a></li>
                        <li><a href="#"><i class="fa fa-share-square"></i></a></li>
                      </ul>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="thumbnail"> <img src="" alt="">
                  <div class="caption"> 
                    <!-- <h4>Emma M. Coffey</h4> --> 
                    <span class="primarycol">17/07/2023</span>
                    <p> Fala Presidente: IA e a capacitação<br>
                    </p>
                    <ul class="social-icons">
                      <li><a href="#"><i class="fa fa-play-circle"></i></a></li>
                      <li><a href="#"><i class="fa fa-download"></i></a></li>
                      <li><a href="#"><i class="fa fa-share-square"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="thumbnail"> <img src="" alt="">
                  <div class="caption"> 
                    <!-- <h4>Emma M. Coffey</h4> --> 
                    <span class="primarycol">10/07/2023</span>
                    <p> Fala Presidente: Organizações infinitas<br>
                    </p>
                    <ul class="social-icons">
                      <li><a href="#"><i class="fa fa-play-circle"></i></a></li>
                      <li><a href="#"><i class="fa fa-download"></i></a></li>
                      <li><a href="#"><i class="fa fa-share-square"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="thumbnail"> <img src="" alt="">
                  <div class="caption"> 
                    <!-- <h4>Emma M. Coffey</h4> --> 
                    <span class="primarycol">03/07/2023c -</span>
                    <p> Fala Presidente: Pesquisa com IES<br>
                    </p>
                    <ul class="social-icons">
                      <li><a href="#"><i class="fa fa-play-circle"></i></a></li>
                      <li><a href="#"><i class="fa fa-download"></i></a></li>
                      <li><a href="#"><i class="fa fa-share-square"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="thumbnail"> <img src="" alt="">
                  <div class="caption"> 
                    <!-- <h4>Emma M. Coffey</h4> --> 
                    <span class="primarycol">19/06/2023</span>
                    <p> Fala Presidente: Abertas as inscrições para o Enbra<br>
                    </p>
                    <ul class="social-icons">
                      <li><a href="#"><i class="fa fa-play-circle"></i></a></li>
                      <li><a href="#"><i class="fa fa-download"></i></a></li>
                      <li><a href="#"><i class="fa fa-share-square"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="thumbnail"> <img src="http://www.wowthemes.net/demo/calypso/img/demo/team3.jpg" alt="">
                  <div class="caption"> 
                    <!-- <h4>Eugene B. Bedwell</h4> --> 
                    <span class="primarycol">12/06/2023</span>
                    <p> Fala Presidente: Convite para o Erpa Sudeste<br>
                    </p>
                    <ul class="social-icons">
                      <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-play-circle"></i></a></li>
                        <li><a href="#"><i class="fa fa-download"></i></a></li>
                        <li><a href="#"><i class="fa fa-share-square"></i></a></li>
                      </ul>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
            
        </div>
          
      </div>
    </div>
    </div>
  </section>
</div>
<div class="container"> </div>
</div>
    
    
    
<br>
<br>
<br>
    

<footer id="foot-sec">
<div class="footerdivide">
</div>
<div class="container ">
<div class="row">
	<div class="text-center color-white col-sm-12 col-lg-12">
		<ul class="social-icons">
			<li><a href="https://www.youtube.com/user/CreaMinas"><i class="fa fa-youtube"></i></a></li>
			<li><a href="https://twitter.com/Crea_Minas"><i class="fa fa-twitter"></i></a></li>
			<li><a href="https://www.linkedin.com/company/creamg/"><i class="fa fa-linkedin"></i></a></li>
			<li><a href="https://www.instagram.com/crea_minas/"><i class="fa fa-instagram"></i></a></li>

		</ul>
		<p>
			Conselho Regional de Administração de Minas Gerais |

Endereço: Av. Olegário Maciel, 1233 – Lourdes |

Belo Horizonte-MG - CEP: 30180-111


		</p>
		<p>
			<a href="#">Telefone: (31) 3218-4500</a> | <a href="#"> Support</a> | <a href="#">F.A.Q.</a>
		</p>
	</div>
</div>
</div>

    
    
<script>
    
$('.collapse').collapse()    
</script>    
  <script>
const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});</script> 
</footer>
<span id="cc_strinfo_listeners_creamg" class="cc_streaminfo" style="visibility:hidden"></span>
</body>
</html>
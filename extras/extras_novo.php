<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="extras/estilo_novo.css">
<style type="text/css">
</style>
<script type="text/javascript">

function addbootstrap () {
	$("#conteiner_noticias_0 article").addClass("col-xs-12 col-sm-12 col-md-12 col-lg-12 d-flex float-left");
	$(".ouvir, .compartilhar, .baixar").addClass("d-flex");
	$("#lista_audios_editorias #navegacao_noticias").addClass("d-flex justify-content-center");
	$("#lista_audios_editorias h5").addClass("d-flex justify-content-center");
	
	$("#botoes_editorias ul li").addClass("col-xs-12 col-sm-12 col-md-4 col-lg-4 justify-content-center");
	$("#botoes_editorias ul").addClass("nav justify-content-center text-nowrap");
	
	$("#a_seguir, #no_ar, #a_seguir_reserva, #no_ar_reserva").addClass("col-xs-12 col-sm-12 col-md-6 col-lg-6 align-self-center");
	$("#a_seguir_conteiner").addClass("col-xs-12 col-sm-12 col-md-7 col-lg-7 align-self-center");
	$("#a_seguir_conteiner div").addClass("align-self-center");
	$("#no_ar_conteiner").addClass("col-xs-12 col-sm-12 col-md-8 col-lg-8 align-self-center");
	$("#programacao").addClass("row d-flex justify-content-center");
	$("#programacao h1").addClass("align-self-center");
	$("#programacao #conteiner").addClass("row");
	$("#radio_volume, #indicador_volume, #tempo_transcorrido").addClass("col align-self-center");
	$("#audio_informacoes").addClass("col-xs-12 col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center");
	$("#conteiner_radio").addClass("container");
	$("#informaces_pagina").addClass("row d-flex justify-content-center");
	
	$("#logotipo_radio").addClass("col-xs-12 col-sm-12 col-md-7 col-lg-8 align-self-center d-flex justify-content-center");
	$("#redes_sociais").addClass("col-xs-12 col-sm-12 col-md-5 col-lg-4 d-flex justify-content-center");
	$("#icone_twitter, #icone_facebook, #icone_youtube, #icone_instagram, #icone_whats").addClass("col align-self-center");
	$("#navegacao_comentarios").addClass("d-flex row justify-content-center");
	$("#audio_botoes, #audio_botoes a").addClass("col-xs-2 col-sm-2 col-md-2 col-lg-2 d-flex justify-content-center");
	$("#audio_botoes").addClass("col-xs-12 col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center");
	$("#audios_controles").addClass("row d-flex justify-content-center");
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
	
	const width = Math.max(document.documentElement.clientWidth,window.innerWidth || 0);
	if (width > 768) {
		$("#redes_sociais").css('margin-left','0px');
	}

	setTimeout(function(){ addbootstrap(); },500);
}

jQuery(document).ready(function(){
	
	$(window).resize(function() {
  		//if (width <= 480) {
			$("#redes_sociais").css('margin-left','-10000px');
			$("#Mostrar_Redes_Sociais").css('background-image','url(extras/menudrop.png)');
		//}
	});
	
	lista_not(2);
	
	addbootstrap();
	
	$( "<a href='javascript:mute()' id='botao_mute'>Mute</a>").insertAfter("#botao_pause");

	$("#ver_comentarios").click(function() {
			$("#lista_de_comentarios").css("display","block");
			$("#expediente").css("display","none");
			$("#ver_destaque").css("display","block");
			$("#ver_comentarios").css("display","none");
	});
	
	$("#ver_destaque").click(function() {
			$("#lista_de_comentarios").css("display","none");
			$("#expediente").css("display","block");
			$("#ver_destaque").css("display","none");
			$("#ver_comentarios").css("display","block");
	});

	$("#contatos_radio em").click(function() {
			$("#contatos_radio").css("display","none");
	});
	
	$("#botoes_editorias ul li").click(function() {
			$("#botoes_editorias ul li").css("background-color", "#DDDBDB");
			$("#botoes_editorias ul li").css("color", "#575757");
			$(this).css("color", "#fff");
			$(this).css("background-color", "#009C93");
			$(this).css("color", "#fff");
	});
	
	$("#campo_busca").click(function() {
		if($("#campo_busca").val()=="Buscar Conte\u00fado") {
		$("#campo_busca").val("");
		}
	});

	$("#buscar").click(function() {
	    $('html,body').animate({ scrollTop: $("#lista_audios_editorias").offset().top }, 'slow');
		$("#botoes_editorias ul li").css("background-color", "#DDDBDB");
		$("#botoes_editorias ul li").css("color","#575757");
	});
	
	$("#campo_busca").mouseout(function() {
		if($("#campo_busca").val()=="") {
		$("#campo_busca").val("Buscar Conte\u00fado");
		}
	});
	
	formata_campos();

});

function formata_campos () {
	if($("#campo_busca").val()=="") { $("#campo_busca").val("Buscar Conte\u00fado"); }
	setTimeout(function(){ formata_campos(); },5000);
}


function show_redes () {
	if($("#redes_sociais").css('margin-left') == "-10000px") {
			$("#redes_sociais").css('margin-left','0px');
			$("#Mostrar_Redes_Sociais").css('background-image','none');
	} else {
			$("#redes_sociais").css('margin-left','-10000px');
			$("#Mostrar_Redes_Sociais").css('background-image','url(extras/menudrop.png)');
	}
	
}

function abre_expediente () {
			$("#contatos_radio").css("display","block");
}

function mute (){
	document.getElementById('controle_volume').value = 0;
}


</script>
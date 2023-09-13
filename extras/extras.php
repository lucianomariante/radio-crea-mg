<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="extras/estilo.css">
<style type="text/css">
</style>
<script type="text/javascript">

function addbootstrap () {
	$("#conteiner_noticias_0 article").addClass("col-xs-12 col-sm-12 col-md-12 col-lg-6 d-flex float-left");
	$(".ouvir, .compartilhar, .baixar").addClass("d-flex");
	
	$("#lista_audios_editorias #navegacao_noticias").addClass("d-flex justify-content-center");
	$("#lista_audios_editorias h5").addClass("d-flex justify-content-center");
	
	$("#botoes_editorias ul li").addClass("col-xs-6 col-sm-6 col-md-4 col-lg-4 justify-content-center");
	$("#botoes_editorias ul").addClass("nav justify-content-center text-nowrap");
	
	$("#a_seguir, #no_ar, #a_seguir_reserva, #no_ar_reserva").addClass("col-xs-12 col-sm-12 col-md-12 col-lg-6 align-self-center");
	$("#a_seguir_conteiner").addClass("col-xs-12 col-sm-12 col-md-7 col-lg-7 align-self-center");
	$("#a_seguir_conteiner div").addClass("align-self-center");
	$("#no_ar_conteiner").addClass("col-xs-12 col-sm-12 col-md-8 col-lg-8 align-self-center");
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
	
	$("#audios_controles").addClass("row d-flex justify-content-center");
	$("#audio_botoes").addClass("col-xs-12 col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center");
	$("#audio_informacoes").addClass("col-xs-12 col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center");
	$("#indicador_volume, #tempo_transcorrido", "#relogio").addClass("text-center");
	
	$("#area_azul").addClass("row d-flex justify-content-center");
	$("#buscar_noticias, #podcast_destaque").addClass("col-xs-12 col-sm-12 col-md-12 col-lg-6");
	
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
	$("<div id='area_azul'></div>").insertAfter("#radio");
	$('#area_azul').append($('#buscar_noticias'));
	$('#area_azul').append($('#podcast_destaque'));
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
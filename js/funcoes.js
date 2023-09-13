function atualizavolume() {
	$('#indicador_volume').html('<label>Volume: </label> ' + document.getElementById('controle_volume').value);
	$('#tempo_transcorrido').html(formata_tempo(audio.currentTime));
	
	audio.volume = document.getElementById('controle_volume').value * 0.01;
	setTimeout(function(){ atualizavolume(); },12);
}

function vol(entrada) {
	$(this).mousedown(function(){ continua = 1; });
	$(this).mouseup(function(){ continua = 0; clearTimeout(ato); });
	$(this).mouseout(function(){ continua = 0; clearTimeout(ato); });
	
	ato = setTimeout(function(){ vol(entrada); },12);
	
	if(continua==1 & entrada!=2) {	
		if(entrada==0) {
	 		document.getElementById('controle_volume').stepDown(1);
		} else {
	 		document.getElementById('controle_volume').stepUp(1);
		}
	}

}

function aumentar_volume() { vol(1); }
function baixar_volume() { vol(0); }

function formata_tempo (tempo) {

				    segundos = Math.floor(((tempo/60) - Math.floor(tempo/60))*60);								
					minutos = Math.floor(((tempo/3600) - Math.floor(tempo/3600))*60);			
					horas = Math.floor(((tempo/86400) - Math.floor(tempo/86400))*24);		

					if(segundos < 10) { segundosfinal = ':0'+ segundos; } else { segundosfinal = ':'+ segundos; }
					if(minutos < 10) { minutosfinal = ':0'+ minutos; } else { minutosfinal = ':'+ minutos; }
					if(horas < 10) { horasfinal = '0'+ horas; } else { horasfinal = ':'+ horas; }
					
					return '<label>Tempo: </label> ' + horasfinal + minutosfinal + segundosfinal;	 
}

function play_audio(origem){
	audio.src = origem;  
	audio.play();
} 

function tocar_radio() {
	audio.src = $("#fonte").val();;  
	audio.play();	
}

function parar_audio() {
	audio.pause();	
}

// FUNÇÃO QUE ATUALIZA A PROGRAMAÇÃO

var musica_passando = function(){
	
			$.ajaxSetup({ cache: false });
	
			$.ajax({
				type: "GET",
				url: "xml/passando.xml" + checkVersion(),
				dataType: "xml",
				success: function(xml) {
					$(xml).find('musica').each(function(){
						var titulo = $(this).find('titulo').text();
						var musico = $(this).find('musico').text();
						$('#musica_no_ar').html('');
						$('#artista_no_ar').html('');
						$('<div></div>').html(titulo).appendTo('#musica_no_ar');
						$('<div></div>').html(musico).appendTo('#artista_no_ar');
						document.getElementById('audio_a_curtir').value = titulo + ' - ' + musico;
					});
				}
			});
			setTimeout(function(){ musica_passando(); },30000);//1000=a um segundo, altere conforme o necessario
		}
		
var musica_passara = function(){
	
			$.ajaxSetup({ cache: false });

			$.ajax({
				type: "GET",
				url: "xml/passara.xml" + checkVersion(),
				dataType: "xml",
				success: function(xml) {
					$(xml).find('musica').each(function(){
						var titulo = $(this).find('titulo').text();
						var musico = $(this).find('musico').text();
						$('#musica_a_seguir').html('');
						$('#artista_a_seguir').html('');
						$('<div></div>').html(titulo).appendTo('#musica_a_seguir');
						$('<div></div>').html(musico).appendTo('#artista_a_seguir');
					});
				}
			});
			

			
			setTimeout(function(){ musica_passara(); },30000);//1000=a um segundo, altere conforme o necessario
			
		}
		
var voce_ouviu = function(){
	
			if($('#pagtocou_atual').val() <= 0) { 
				paginacao_tocou(1);
			}
			setTimeout(function(){ voce_ouviu(); },60000);//1000=a um segundo, altere conforme o necessario

		}

		
var musica_curtir = function(){
	
			$.ajaxSetup({ cache: false });
	
			$.ajax({
				type: "GET",
				url: "xml/passando.xml" + checkVersion(),
				dataType: "xml",
				success: function(xml) {
					$(xml).find('musica').each(function(){
						var titulo = $(this).find('titulo').text();
						var musico = $(this).find('musico').text();
						document.getElementById('audio_a_curtir').value = titulo + ' - ' + musico;
					});
				}
			});
			setTimeout(function(){ musica_curtir(); },30000);//1000=a um segundo, altere conforme o necessario
		}
		

function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}

function abre_comentarios() {
MM_openBrWindow('comentarios_full.php','','scrollbars=yes,width=300,height=500');
}

function lista_not(categoria){
	var url = "podcast.php?categoria=" + categoria;
	$.post(url,function(data){ 
		$('#lista_audios_editorias').empty().html(data);
		
		$("#conteiner_noticias_0").mCustomScrollbar({
  			scrollButtons:{
    		enable:true
  			}
		});
	}); 
}

function paginacao_not(acao,podcast){
	
	var p_atual = parseInt($('.pagnot_atual_' + podcast).val());
	var p_totais = parseInt($('.pagnot_totais_' + podcast).val());
	var p_query = $('.pagnot_query_' + podcast).val();
	
	if(acao==1) { pagnot = 0; }
	if(acao==2) { if(p_atual > 0) { pagnot = p_atual - 1; } else { pagnot = p_atual; } }
	if(acao==3) { if(p_atual < p_totais) { pagnot = p_atual + 1; } else { pagnot = p_atual; } }
	if(acao==4) { pagnot = p_totais; }

	var url = "podcast.php?pageNum_materiaslistac=" + pagnot + "&" + p_query;

	$.post(url,function(data){ 
		$('.lista_audios_' + podcast).empty().html(data);
		
			$("#conteiner_noticias_" + podcast).mCustomScrollbar({
  				scrollButtons:{
    				enable:true
  				}
			});
	});

}

function paginacao_coment(acao){
	
	var p_atual = parseInt($('#pagcoment_atual').val());
	var p_totais = parseInt($('#pagcoment_totais').val());
	
	if(acao==1) { pagcoment = 0; }
	if(acao==2) { if(p_atual > 0) { pagcoment = p_atual - 1; } else { pagcoment = p_atual; } }
	if(acao==3) { if(p_atual < p_totais) { pagcoment = p_atual + 1; } else { pagcoment = p_atual; }  }
	if(acao==4) { pagcoment = p_totais; }
	
	var url = "comentarios.php?pageNum_comentarios=" + pagcoment;
	
	$.post(url,function(data){ 
		$('#lista_de_comentarios').empty().html(data);
	}); 
    
}


function paginacao_tocou(acao){
	
	var p_atual = parseInt($('#pagtocou_atual').val());
	var p_totais = parseInt($('#pagtocou_totais').val());
		
	if(acao==1) { pagtocou = 0; }
	if(acao==2) { if(p_atual > 0) { pagtocou = p_atual - 1; } else { pagtocou = p_atual; } }
	if(acao==3) { if(p_atual < p_totais) { pagtocou = p_atual + 1; } else { pagtocou = p_atual; }  }
	if(acao==4) { pagtocou = p_totais; }
	
	var url = "rolou.php?pageNum_progradio=" + pagtocou;
	
	$.post(url,function(data){ 
		$('#audios_executados').empty().html(data);
	}); 
}


function busca_not(){
var url = "podcast.php?busca=" + encodeURIComponent($("#campo_busca").val());
$.post(url,function(data){ 
	$('#lista_audios_editorias').empty().html(data);
	$("#campo_busca").val('');
	
	$("#conteiner_noticias_0").mCustomScrollbar({
  		scrollButtons:{
    		enable:true
  			}
		});
	}); 

}

function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}

// função básica do campo de mensagem. limita até quantos caracteres o campo pode ter
function conta_letras(field, maxlimit) {
field.value = field.value.substring(0, maxlimit);
}

function enviar_dados() { //v4.0

var i,p,q,nm,test,num,min,max,errors='';
	
	if (document.getElementById('nome').value=='' || document.getElementById('nome').value=='Nome') {
        errors += 'A opção "Nome" deve ser preenchida.\n';
	}
		
	 if (document.getElementById('email').value=='' || document.getElementById('email').value=='E-mail') {
        errors += 'A opção "E-mail" deve ser preenchida.\n';
	}

	if (document.getElementById('comentario').value=='' || document.getElementById('comentario').value=='Mensagem') {
        errors += 'A opção "Mensagem" deve ser preenchida.\n';
	}
			
	if (document.getElementById('comentario').value.length > 300) {
		errors += 'A opção "Mensagem" deve menos de 300 caracteres.\n';
	}
	
	if (errors) { 
		alert('Por gentileza, verifique em seu formulário:\n'+errors); 
		//errors = '';
	} else { 
	
	 
		gravacoment(document.getElementById('nome').value,document.getElementById('email').value,document.getElementById('comentario').value);
		//alert('Por gentileza, verifique em seu formulário:\n'+errors); 
	}
	
	grecaptcha.reset();
    
}

function gravacoment(nome,email,comentario){
	var data = "";
	var url = "gravacomentario.php"; // NÃO ESQUEÇA DE CONFIGURAR ESSE ARQUIVO ?nome=" + nome + "&email=" + email + "&comentario=" + comentario
	
	var jqxhr = $.post(url,$("#form_comentario").serialize(), function(data) {
		
		if(data=='ok'){
			document.getElementById('nome').value = 'Nome';
			document.getElementById('email').value = 'E-mail';
			document.getElementById('comentario').value = 'Mensagem';
			document.getElementById('extra').value = $('#c_extra').val();
			alert('Sua mensagem foi enviada! Obrigado!'); 
		} else {
			alert(data);
		}
	
	});
}


function checa_aovivo () {
		
	    var valorDaDiv = parseInt($("#cc_strinfo_listeners_" + $("#user_centova").val()).text());
		
		if(valorDaDiv >= 100000000) {   
			$("#a_seguir").css("display","none");
			$("#no_ar").css("display","none");
			$("#a_seguir_reserva").css("display","inline");
			$("#no_ar_reserva").css("display","inline");
		} else {
			$("#a_seguir_reserva").css("display","none");
			$("#no_ar_reserva").css("display","none");
			$("#a_seguir").css("display","inline");
			$("#no_ar").css("display","inline");
		}
		
		setTimeout(function(){ checa_aovivo(); },10000);//1000=a um segundo, altere conforme o necessario
 	
}


function checa_streaming () {
	
	$.ajax({
    type: "GET" ,
    url: "http://" + $("#url_centova").val() + ":2199/rpc/" + $("#user_centova").val() + "/streaminfo.get?x=1" ,
    dataType: "xml" ,
	
    success: function(xml) {

    	var checkstream = $(xml).find('server').text();  

		if(checkstream=='Online'){
     		
			$('#temp').html('');
			$("#temp").append('Ciclano On-line');
			
			if($("#fonte").val()!=$("#fonte_titular").val()) {
				audio.src = $("#fonte_titular").val();
				audio.play();
			}
			
			$("#fonte").val($("#fonte_titular").val());
			
		} else {
			
			$('#temp').html('');
			$("#temp").append('Ciclano Off-line 1');
			
			
			if($("#fonte").val()!=$("#fonte_reserva").val()) {
				audio.src = $("#fonte_reserva").val();
				audio.play();
			}
			
			$("#fonte").val($("#fonte_reserva").val());
			
		}
 
    },
    error: function(result) {
			$('#temp').html('');
			$("#temp").append('Ciclano Off-line 2');
			
			if($("#fonte").val()!=$("#fonte_reserva").val()) {
				audio.src = $("#fonte_reserva").val();
				audio.play();
			}
			
			$("#fonte").val($("#fonte_reserva").val());
			
    }    
});

setTimeout(function(){ checa_streaming(); },10000);//1000=a um segundo, altere conforme o necessario
	
}


function curtir_radio(){
	MM_openBrWindow("app_curtir.php?face=1",'','width=600,height=200');	
	//alert($('#radio_add').val());
}


function share_audio(audio){
	MM_openBrWindow("app_curtir.php?id=" + audio,'','width=600,height=550');
	//MM_openBrWindow("https://www.facebook.com/sharer/sharer.php?u=" + $('#radio_add').val() + "/facebook.php?id=" + audio,'','width=600,height=200');	
	//alert($('#radio_add').val());
}

function whatsapp () {
	window.open("whatsapp://send?text=Estou Ouvindo " + encodeURI(document.getElementById('audio_a_curtir').value) + " na " + encodeURI(document.getElementById('radio_name').value)  + ": " + encodeURI(document.getElementById('radio_add').value), '_blank');
}

function curtir_radio_tw(){
	MM_openBrWindow("app_curtir.php?tw=1",'','width=600,height=450');
	//MM_openBrWindow("https://www.facebook.com/sharer/sharer.php?u=" + $('#radio_add').val() + "/facebook.php?id=" + audio,'','width=600,height=200');	
	//alert($('#radio_add').val());
}


function campo_formulario (campo,info) {
	$(campo).click(function() {
  		if(this.value==info)this.value='';
	});
	$(campo).focusout(function() {
  		if(this.value=='')this.value=info;
	});
}

function ativa_campos () {
	campo_formulario("#nome","Nome");
	campo_formulario("#email","E-mail");
	campo_formulario("#comentario","Mensagem");
}

function fecha_materia () {
	$("#voce_esta_ouvindo").css("display","none");
}

function fecha_aviso () {
	$("#aviso_background").css("display","none");
}

function fecha_janela () {
	$("#baixar_app_background").css("display","none");
}

var Redimensionar = function(){
	
	var proporcao = screen.height / screen.width;
			
	if (proporcao < 1.5) {
		//var screenWidth = ((screen.width)/640)*1.333333333;
		var screenWidth = (screen.height*0.66666)/640 * 1.5;
	} else {
		var screenWidth = (screen.width)/640;
	}
			
		$("body").css("-moz-transform", "scale(" + screenWidth + ")");
		$("body").css("zoom", screenWidth);
			
		setTimeout(function(){ Redimensionar(); },1000);//1000=a um segundo, altere conforme o necessario
}

function checkVersion(){
	return "?id=" + Date();
}


function aceita_cookie(){
	var url = "aceita.php";
	$.post(url,function(data){ 
		$("#aviso_lgpd").css("display","none");
	})
}

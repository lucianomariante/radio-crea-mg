
function share_audio(audio){	
	window.open("app_curtir.php?id=" + audio, '_blank','width=600,height=550');
}


// FUNÇÃO QUE ATUALIZA A PROGRAMAÇÃO

var musica_passando = function(){
	
	$.ajaxSetup({ cache: false });
	$w = 0;
	$.ajax({
		type: "GET",
		url: "radio.xml" + checkVersion(),
		dataType: "xml",
		success: function(xml) {
			$(xml).find('CurMusic').each(function(){
				if ($w == 0) {
					var titulo = $(this).find('Title').text();
					var musico = $(this).find('Artist').text();
					console.log(titulo);
					$('#musica_no_ar').html('');
					$('#artista_no_ar').html('');
					$('<div></div>').html(titulo).appendTo('#musica_no_ar');
					$('<div></div>').html(musico).appendTo('#artista_no_ar');
					//document.getElementById('audio_a_curtir').value = titulo + ' - ' + musico;
					$w++;
				}	
			});
		}
	});
	setTimeout(function(){ musica_passando(); },30000);//1000=a um segundo, altere conforme o necessario
}
		
var musica_passara = function(){
	
	$.ajaxSetup({ cache: false });
	$y = 0;
	$.ajax({
		type: "GET",
		url: "radio.xml" + checkVersion(),
		dataType: "xml",
		success: function(xml) {
			$(xml).find('Music').each(function(){
				if ($y == 0) {	
					var titulo = $(this).find('Title').text();
					var musico = $(this).find('Artist').text();
					$('#musica_a_seguir').html('');
					$('#artista_a_seguir').html('');
					$('<div></div>').html(titulo).appendTo('#musica_a_seguir');
					$('<div></div>').html(musico).appendTo('#artista_a_seguir');
				}
				$y++;	
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

function atualizavolume() {
	$('#indicador_volume').html('<label>Volume: </label> ' + document.getElementById('controle_volume').value);
	$('#tempo_transcorrido').html(formata_tempo(audio.currentTime));
	
	audio.volume = document.getElementById('controle_volume').value * 0.01;
	setTimeout(function(){ atualizavolume(); },12);
}

function checkVersion(){
	return "?id=" + Date();
}
<link rel="stylesheet" href="extras/estilo.css">
<style type="text/css">
</style>
<script type="text/javascript">
jQuery(document).ready(function(){
	
	$("#nome").click(function() {
		if($("#nome").val()=="") {
		$("#nome").val("");
		}
	});
	
	$("#email").click(function() {
		if($("#email").val()=="") {
		$("#email").val("");
		}
	});
	
	$("#comentario").click(function() {
		if($("#comentario").val()=="") {
		$("#comentario").val("");
		}
	});
	
	
	$("#expediente_titulo").click(function() {
		if($("#expediente_texto").css("display")=="none") {
		$("#expediente_texto").css("display","inline");
		mostra = 1;
		} else {
		$("#expediente_texto").css("display","none");
		mostra = 0;	
		}
		
	});
	
	$("#botao_Entrevistas").click(function() { $("#expediente_texto").css("display","none"); });	
	$("#botao_Minuto").click(function() { $("#expediente_texto").css("display","none"); });
	$("#botao_Boletins").click(function() { $("#expediente_texto").css("display","none"); });
	$("#botao_Especiais").click(function() { $("#expediente_texto").css("display","none"); });	
	$("#buscar").click(function() { $("#expediente_texto").css("display","none"); });	
	
	
	$('#audios_controles').prepend("<div id=\"relogio\"><div>");
	relogio();
	formata_campos();
	//lista_not(0);
	formata_data();
	
  $(window).keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
	  busca_not();
      return false;
    }
  });
	
});

function formata_campos () {
	if($("#nome").val()=="Nome") { $("#nome").val(""); }
	if($("#email").val()=="E-mail") { $("#email").val(""); }
	if($("#comentario").val()=="Mensagem") { $("#comentario").val(""); }
	setTimeout(function(){ formata_campos(); },500);
}


function formata_data () {
 			$("#conteiner_noticias_0 article").each(function( index ) {
				
			text = "";
  			
			explode = $(this).find('h1').text().split('/');
			
				if(explode[1]=='01') { text = " de Janeiro de "; }
				if(explode[1]=='02') { text = " de Fevereiro de "; }
				if(explode[1]=='03') { text = " de Março "; }
				if(explode[1]=='04') { text = " de Abril de "; }
				if(explode[1]=='05') { text = " de Maio de "; }
  				if(explode[1]=='06') { text = " de Junho de "; }
				if(explode[1]=='07') { text = " de Julho de "; }
				if(explode[1]=='08') { text = " de Agosto de "; }
				if(explode[1]=='09') { text = " de Setembro de "; }
				if(explode[1]=='10') { text = " de Outubro de "; }
				if(explode[1]=='11') { text = " de Novembro de "; }
  				if(explode[1]=='12') { text = " de Dezembro de "; }
				
    		var semana = ["Domingo", "Segunda-Feira", "Terça-Feira", "Quarta-Feira", "Quinta-Feira", "Sexta-Feira", "Sábado"];
        	var teste = new Date(explode[2], explode[1]-1, explode[0],0,0,0);
        	var dia = teste.getDay();

			if(text!="") {
				$(this).find('h1').empty().html($(this).find('h3').text().replace(":", "'") + '" | ' + explode[0] + text + explode[2]);
				
				conteudodiv = $(this).find('#conteiner_article').html();
				$(this).find('#conteiner_article').empty().html("<div class=\"pai\">" + conteudodiv + "<div>");
			}
			
			infopg = $("#lista_de_comentarios h4").text();
			

		});
		
		
		setTimeout(function(){ formata_data(); },500);
}

function relogio(){
	
	var dNow = new Date();
	
	var dh = dNow.getHours();
	var dm = dNow.getMinutes();
	
	if(dm > 9) { var minuto = dm; } else { var minuto = "0" + dm; }
	if(dh > 9) { var hora = dh; } else { var hora = "0" + dh; }
	
	var localdate = hora + ':' + minuto;	
	$('#relogio').empty().html(localdate);

	setTimeout(function(){ relogio(); },60000);//1000=a um segundo, altere conforme o necessario
}

function positivo_audio(entrada) {
if(entrada==1) { var def = ""; } else { var def = "não"; }
str1 = $("#audio_a_curtir").val();
alert("Você curtiu " + def + " \"" + $.trim(str1) + "\".\n Obrigado por sua participação!");
}
</script>
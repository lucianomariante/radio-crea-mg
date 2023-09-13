<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr">

<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width,user-scalable=no">
<title>Apple</title>
<script type="text/javascript" src="js/jquery.js"> </script>
<script type="text/javascript">

var Requisitar = function(){
	
	var d = new Date();
	
	$.ajaxSetup({ cache: false });
	
			$.ajax({
				type: "GET",
				url: "xml/passando.xml?id=" + d.getTime(),
				dataType: "xml",
				success: function(xml) {
					$(xml).find('musica').each(function(){
						var titulo = $(this).find('titulo').text();
						var musico = $(this).find('musico').text();
						$('#titulopassando').html('');
						$('#musicopassando').html('');
						$('<div></div>').html(titulo).appendTo('#titulopassando');
						$('<div></div>').html(musico).appendTo('#musicopassando');
					});
				}
			});
			
			
			$.ajax({
				type: "GET",
				url: "xml/passara.xml?id=" + d.getTime(),
				dataType: "xml",
				success: function(xml) {
					$(xml).find('musica').each(function(){
						var titulo = $(this).find('titulo').text();
						var musico = $(this).find('musico').text();
						$('#titulopassara').html('');
						$('#musicopassara').html('');
						$('<div></div>').html(titulo).appendTo('#titulopassara');
						$('<div></div>').html(musico).appendTo('#musicopassara');
					});
				}
			});
			
			var proporcao = screen.height / screen.width;
			
			if (proporcao < 1.5) {
			//var screenWidth = (window.innerHeight*0.66666)/640 * 1.5;	
			var screenWidth = (screen.height*0.66666)/640 * 1.5;
			//var screenWidth = ((screen.width)/640)*1.333333333;
			} else {	
			//var screenWidth = (window.innerWidth)/640;
			var screenWidth = (screen.width)/640;
			}
			
			$("body").css("-moz-transform", "scale(" + screenWidth + ")");
			$("body").css("zoom", screenWidth);
			
						
			setTimeout(function(){ Requisitar(); },1000);//1000=a um segundo, altere conforme o necessario
		}
Requisitar();//Dispara


</script>
<link rel="stylesheet" href="extras/estilo_app.css">
</head>

<body id="aplicativo">

	<div id="apDiv1">
		<div class="musica_passara" id="titulopassara"></div>
		<div class="musico_passara" id="musicopassara"></div>
	</div>
    
	<div id="apDiv2">
		<div class="musica_passando" id="titulopassando"></div>
		<div class="musico_passando"  id="musicopassando"></div>
	</div>
    
	<img src="extras/app_fundo.png" name="fundo" width="640" height="172" id="fundo"/>
    
</body>
</html>
</html>
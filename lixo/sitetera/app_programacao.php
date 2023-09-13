<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr">

<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width,user-scalable=no">
<title>Apple</title>
<script type="text/javascript" src="js/libs/jquery-1.10.2.min.js"></script>
<script src="js/funcoes_mobile.js"></script>
<script type="text/javascript">

var Requisitar = function(){
	
	var d = new Date();
	
	
			
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
musica_passando(); 
musica_passara();

</script>
<link rel="stylesheet" href="extras/estilo_app.css">
</head>

<body id="aplicativo">

	<div id="apDiv1">
		<div class="musica_passara" id="musica_a_seguir"></div>
		<div class="musico_passara" id="artista_a_seguir"></div>
	</div>
    
	<div id="apDiv2">
		<div class="musica_passando" id="musica_no_ar"></div>
		<div class="musico_passando"  id="artista_no_ar"></div>
	</div>
    
	<img src="extras/app_fundo.png" name="fundo" width="640" height="172" id="fundo"/>

</body>
</html>
</html>
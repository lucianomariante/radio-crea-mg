jQuery(function($) {
    'use strict';

	(function() {
				
		$("#login_submit").click(function() {
            "use strict";
			$("#hdnTipo").val('E');
			var vSAlerta = "Erros ocorreram durante o envio de seu formul\xe1rio.\n\nPor favor, fa\xe7a as seguintes corre\xe7\xf5es:\n";
			var vSErro = 'N';
			var emailValue = $("#vSUsuario").val();			
            //var testEmail = /^[a-z0-9.]+@[a-z0-9]+\.[a-z]+(\.[a-z]+)?$/i;
			if (!emailValue) {
				var vSErro = 'S';
				vSAlerta += "\n* O campo Usuário/E-mail é obrigatório.";
                $("#vSUsuario").css({
                    "border": "1px solid red"
                });
            } 
            var nameValue = $("#vSSenha").val();
            if (!nameValue.length) {
				var vSErro = 'S';
				vSAlerta += "\n* O campo Senha é obrigatório.";
                $("#vSSenha").css({
                    "border": "1px solid red"
                });
            }            
			if (vSErro == 'S'){
				swal({title : "Opss..", text : vSAlerta, type : "warning"});
				return false;
			}else{
                grecaptcha.execute();
            }
            return false;
        });
				
	}());
	
});	

function enviarLogin()
{
	$.ajax({
		url: 'transaction/credencial.php',				
		type: 'POST',
		data: $("form#form2").serialize(),
		success: function(result) {
			if ($("#hdnTipo").val() == 'S') {
				if (result == 'N') {
					swal({
					  title: "Oops!",
					  text: "Usuário não cadastrado!",
					  type: "warning",
					});
				} else {
					swal({
					  title: ":)",
					  text: "Enviamos um e-mail com sua nova senha!",
					  type: "success",
					},
					function(){
					  //location.href = "acompanhar-registro-list";
					});	
				}	
			}else if ($("#hdnTipo").val() == 'E') {		
				if (result == 'B') {
					swal({
					  title: ":(",
					  text: "Precisamos confirmar o cadastro e não estamos conseguindo contato com a sua emissora.\n\nLigue para o número (51) 98408-3974, atualize os dados e volte a ter acesso ao conteúdo da Radioweb. O horário de atendimento é de segunda a sexta, das 9h às 17h. Caso não consiga contato por telefone, por favor, avise através do e-mail cadastro@agenciaradioweb.com.br e nos informe um celular que retornaremos. \n\nObrigado!",
					  type: "info",
					},
					function(){
						location.href = "index.php"; 						
					});						
				} else if (result > 0) {
					location.href = "index.php"; 					
				} else {
					swal({
					  title: "Oops!",
					  text: "Usuário e/ou senha inválidos!",
					  type: "warning",
					});
				}
			}
		},
		complete: function() {
			grecaptcha.reset();
		}
	});	
}




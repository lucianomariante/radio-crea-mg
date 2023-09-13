<?php 
require_once('Connections/conectar.php'); 
require('includes/funcoes.php');

require_once 'includes/PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
require_once 'includes/PHPMailer-master/PHPMailer-master/src/SMTP.php';
require_once 'includes/PHPMailer-master/PHPMailer-master/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

mysqli_select_db($conectar,$database_conectar);
$query_definicoes = "SELECT * FROM radio_definicoes";
$definicoes = mysqli_query($conectar,$query_definicoes);
$row_definicoes = mysqli_fetch_assoc($definicoes);

$browser_cliente = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';  

//if($ieshit=='sim')  {
//$nome = addslashes($_POST['nome']);
//$email = addslashes($_POST['email']);
//$comentario = addslashes($_POST['comentario'].$_POST['mensagem']);
//$extra = addslashes($_POST['extra']);
//} else {
$nome = utf8_decode(addslashes($_POST['nome']));
$email = utf8_decode(addslashes($_POST['email']));
$comentario = utf8_decode(addslashes($_POST['comentario'].$_POST['mensagem']));
$extra = utf8_decode(addslashes($_POST['extra']));
//}

$aprovado = 2;
$ipuser = getip();

$data = date('Y-m-d');
$data2 = date('d/m/Y');
if($_POST['extra']!="") { $o = $row_definicoes['comentarios_extra'].": ".$extra."<br>"; }
if($row_definicoes['complemento_msg']!="") { $in = $row_definicoes['complemento_msg']."<br><br>"; }
$mensagem = $in."Data: ".$data2."<br>Autor: ".$nome."<br>E-mail: ".$email."<br>".$o."Mensagem: ".$comentario;

$mail = new PHPMailer(true);
try {

     //Server settings
    $mail->SMTPDebug = 0;               
    $mail->isSMTP();                               
    $mail->Host = 'ssl://smtp.gmail.com';  
    $mail->SMTPAuth = true;             
    $mail->Username = 'relatorios@agenciaradioweb.com.br';
    $mail->Password = 'teste2012';     
    $mail->SMTPSecure = 'tls';               
    $mail->Port = 465;                                 

    //Recipients
    $mail->setFrom('relatorios@agenciaradioweb.com.br', utf8_decode('Agência Radioweb'));
	if($row_definicoes['email1']!="") { $mail->AddAddress($row_definicoes['email1'],$row_definicoes['email1']); }
	if($row_definicoes['email2']!="") { $mail->AddAddress($row_definicoes['email2'],$row_definicoes['email2']); }
	if($email!="") { $mail->AddAddress($email,$email); }

    $mail->Subject = utf8_decode("Comentário sobre a ").stripslashes($row_definicoes['nome_radio']);
    $mail->msgHTML($mensagem);
    $mail->AltBody = $mensagem;;

    
	
if($email != "") {
if($nome != "") {
if(strlen($email) <= $row_definicoes['comentarios_max']) {
if(strlen($nome) <= $row_definicoes['comentarios_max']) {
if(strlen($comentario) <= $row_definicoes['comentarios_max']) {
if(strlen($extra) <= $row_definicoes['comentarios_max']) {	
if(validaemail($email)==1) {
if(isset($_POST['g-recaptcha-response']) or $_POST['gravacomentario']==1) {
	
	
    	$secretKey = stripslashes($row_definicoes['captcha_b']);
    	$response = $_POST['g-recaptcha-response'];     
    	$remoteIp = $_SERVER['REMOTE_ADDR'];


    	$reCaptchaValidationUrl = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$remoteIp");
    	$result = json_decode($reCaptchaValidationUrl, TRUE);
		
$qr = "INSERT INTO radio_comentarios (data,nome,email,comentario,aprovado,ipuser,browser,so,extra) VALUES('".$data."','".$nome."','".$email."','".$comentario."','".$aprovado."','".$ipuser."','".Obter_Browser()."','".Obter_SO()."','".$extra."')"; // CONFIGURAR O BANCO ONDE VAI GRAVAR
		

    //get response along side with all results
    //print_r($result);

    	if($result['success'] == 1 or $_POST['gravacomentario']==1) {
			if(!$mail->Send()) {
   				echo 'Erro no envio. Tente novamente!'; // captcha inválido
			} else {
   				echo 'ok'; // envio com sucesso
				mysqli_query($conectar,$qr);
			}		

		} else { 
		echo 'Erro no envio. Tente novamente!'; // captcha inválido
		} 
		
	} else { 
		echo 'Erro no envio. Tente novamente!';  // captcha não enviado
	}
} else { 
	echo utf8_decode('Seu e-mail é inválido.');  // captcha não enviado
}


} else { 
	echo utf8_decode('O número de caracteres do campo '.$row_definicoes['comentarios_extra'].' foi excedido.');  // captcha não enviado
}	
} else { 
	echo utf8_decode('O número de caracteres do campo comentário foi excedido.');  // captcha não enviado
}
} else { 
	echo utf8_decode('O número de caracteres do campo nome foi excedido.');  // captcha não enviado
}		
} else { 
	echo utf8_decode('O número de caracteres do campo e-mail foi excedido.');  // captcha não enviado
}	
} else { 
	echo utf8_decode('O campo nome deve ser preenchido.');  // captcha não enviado
}		
} else { 
	echo utf8_decode('O campo e-mail deve ser preenchido.');  // captcha não enviado
}	

mysqli_close($conectar);
	
} catch (Exception $e) {
    echo utf8_decode('A mensagem não pode ser enviada.');
}

?>
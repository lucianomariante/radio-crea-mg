<?php
session_start();
$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

require_once 'PHPMailer.php';
require_once 'SMTP.php';
require_once 'Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);
try {

     //Server settings
    $mail->SMTPDebug = 2;               
    $mail->isSMTP();                               
    $mail->Host = 'ssl://smtp.gmail.com';  
    $mail->SMTPAuth = true;             
    $mail->Username = 'relatorios@agenciaradioweb.com.br';
    $mail->Password = 'teste2012';     
    $mail->SMTPSecure = 'tls';               
    $mail->Port = 465;                                 

    //Recipients
    $mail->setFrom('relatorios@agenciaradioweb.com.br', 'Mailer');
    $mail->addAddress('gustavo@agenciaradioweb.com.br', 'Joe User');  

    $mail->Subject = "Email de contato da loja";
    $mail->msgHTML("<html>de: {$nome}<br/>email: {$email}<br/>mensagem: {$mensagem}</html>");
    $mail->AltBody = "de: {$nome}\nemail:{$email}\nmensagem: {$mensagem}";

    if ($mail->send()) {
        echo "Mensagem enviada com sucesso";
        //header("Location: index.php");
    } else {
        echo "Erro ao enviar mensagem " . $mail->ErrorInfo;
        //header("Location: contato.php");
    }
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}


?>
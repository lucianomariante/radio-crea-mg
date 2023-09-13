<?php 
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
include_once('admin/includes/constantes.php'); 	

if (isset($_POST['vscomnome']) && isset($_POST['vscomemail']) && isset($_POST['vscomtexto'])) {


    $vscomnome = filter_input(INPUT_POST, 'vscomnome', FILTER_SANITIZE_STRING);
    $vscomemail = filter_input(INPUT_POST, 'vscomemail', FILTER_SANITIZE_EMAIL);    
    $vscomtexto = filter_input(INPUT_POST, 'vscomtexto', FILTER_SANITIZE_STRING);    
	
	$_POSTDADOS = array(
		'vSCOMNOME'  => $vscomnome,
		'VSCOMEMAIL' => $vscomemail,
		'vSCOMDESCRICAO'  => $vscomtexto
		);
    $id = insertUpdateComentariosCapa($_POSTDADOS)

    if ($id > 0) {
        echo json_encode(array(true, 'Mensagem enviada com sucesso!'));
    } else {
        echo json_encode(array(false, 'Houve um erro ao enviar a mensagem!'));
    }
} else {
    echo json_encode(array(false, 'Houve um erro ao realizar a validação!'));
}
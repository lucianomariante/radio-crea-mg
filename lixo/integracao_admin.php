<?php 
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
include_once('admin/includes/constantes.php'); 	

echo 'CONFIGURACOES<br/>';
$vo_configuracoes_radio = searchConfiguracao();
pre($vo_configuracoes_radio);




echo 'BANNERS<br/>';
$vo_configuracoes_radio = searchBanners();
pre($vo_configuracoes_radio);


echo 'NOTICIAS<br/>';
$list = searchNoticias(3);

if ($list['quantidadeRegistros'] > 0) :
    foreach($list['dados'] as $value):
		pre($value);
	endforeach;
else:
?>
    <h5> Nenhum registro encontrado!</h5>
<?php
endif;


echo 'NOTICIAS<br/>';
$list = searchNoticias(4);

if ($list['quantidadeRegistros'] > 0) :
    foreach($list['dados'] as $value):
		pre($value);
	endforeach;
else:
?>
    <h5> Nenhum registro encontrado!</h5>
<?php
endif;

echo 'NOTICIAS<br/>';
$list = searchNoticias(5);

if ($list['quantidadeRegistros'] > 0) :
    foreach($list['dados'] as $value):
		pre($value);
	endforeach;
else:
?>
    <h5> Nenhum registro encontrado!</h5>
<?php
endif;
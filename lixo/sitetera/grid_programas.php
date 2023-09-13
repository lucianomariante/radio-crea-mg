<?php
require_once 'admin/includes/constantes.php';

$paginaAtual = $_GET['paginaAtual'];
$itensPorPagina = 5;

$limiteInicial = ($paginaAtual - 1) * $itensPorPagina;

$list = searchNoticiasPaginacao(1, $limiteInicial, $itensPorPagina);
?>

<!-- event list -->
<ul class="event-list">
<?php if ($list['quantidadeRegistros'] > 0) :
    foreach($list['dados'] as $value):
		list($vIAno, $vIMes, $vIDia) = explode('-', $value['NOTDATAPUBLICACAO']);
?>
	<li>
		<div class="one-sixth">
			<!-- day -->
			<span class="day">
				<?= $vIDia;?>
			</span>
			<!-- month -->
			<span class="month">
				<?= descricaoMes($vIMes);?>
			</span>
		</div>
		<div class="two-third">
			<!-- title -->
			<a class="name" href="javascript:play_audio('https://drive.google.com/a/agenciaradioweb.com.br/uc?id=<?php echo $value['NOTIDDRIVE']; ?>')">
				<?= $value['NOTMANCHETE'];?>
			</a>
			<!-- details -->
			<span class="icon small style-1">&#xf017;</span><span class="time"><?= $value['NOTDURACAO'];?></span>
			<span class="icon small style-1">&#xf124;</span><span><?= $value['NOTAUTOR'];?></span>
		</div>
		<div class="one-sixth last">
			<!-- link -->
			<div style="position: absolute;top: 35px;width: 119px;">
				<a href="javascript:play_audio('https://drive.google.com/a/agenciaradioweb.com.br/uc?id=<?php echo $value['NOTIDDRIVE']; ?>')" id="play_materia" title="Ouvir Conteúdo">										
					<img src="img/ouvir.png">
				</a>
				<a href="https://drive.google.com/a/agenciaradioweb.com.br/uc?id=<?= $value['NOTIDDRIVE'];?>&export=download" title="Baixar Conteúdo">
					<img src="img/baixar.png">
				</a>
				<a href="javascript:share_audio('<?= $value['NOTCODIGO']; ?>')" title="Compartilhar Conteúdo">										
					<img src="img/share.png">
				</a>
			</div>
		</div> 
	</li>
<?php
    endforeach;
else:
?>
    <h5> Nenhum registro encontrado!</h5>
<?php
    endif;
?>
</ul>
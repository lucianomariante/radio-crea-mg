<?php

if (isset($_GET['page'])) {
	echo gerarPaginacao($_GET);
}

function gerarPaginacao($_GETDADOS){

	require_once 'admin/includes/constantes.php';

	$itensPorPagina = 6;
	if ($_GETDADOS['page'] == 1)
		$starRegistro = 0;
	else 
		$starRegistro = ($itensPorPagina * $_GETDADOS['page']);
	
	$sql = "SELECT
				count(NOTCODIGO) as qtd
			FROM
				NOTICIAS
			WHERE
				NOTSTATUS = 'S'";
	if ($_GETDADOS['vicategoria'] > 0)
		$sql .= " AND CATCODIGO = ? ";
	if ($_GETDADOS['vstermo'] != '')
		$sql .= " AND NOTMANCHETE like ? ";
	$arrayQuery = array(
		'query' => $sql,
		'parametros' => array()
	);
	if ($_GETDADOS['vicategoria'] > 0)
		$arrayQuery['parametros'][] = array($_GETDADOS['vicategoria'], PDO::PARAM_INT);
	if ($_GETDADOS['vstermo'] != '') {
		$pesquisa = $_GETDADOS['vstermo'];
		$arrayQuery['parametros'][] = array("%$pesquisa%", PDO::PARAM_STR);
	}	
	
	$result = consultaComposta($arrayQuery);
	
	$qtdPaginas = ceil($result['dados'][0]['qtd']/$itensPorPagina);

	$sql = "SELECT
					n.NOTCODIGO,
					n.NOTMANCHETE,
					n.NOTIMAGEM,
					n.NOTDATA_INC,
					n.NOTIDDRIVE,
					c.CATCATEGORIA
				FROM
					NOTICIAS n
				LEFT JOIN
					CATEGORIAS c
				ON
					n.CATCODIGO = c.CATCODIGO
				WHERE
					n.NOTSTATUS = 'S' ";
	if ($_GETDADOS['vicategoria'] > 0)
		$sql .= " AND n.CATCODIGO = ? ";			
	if ($_GETDADOS['vstermo'] != '')
		$sql .= " AND n.NOTMANCHETE like ? ";
	$sql .= "LIMIT ".$itensPorPagina.' OFFSET '.$starRegistro;
	
	$arrayQuery2 = array(
		'query' => $sql,
		'parametros' => array()
	);
	if ($_GETDADOS['vicategoria'] > 0)
		$arrayQuery2['parametros'][] = array($_GETDADOS['vicategoria'], PDO::PARAM_INT);
	if ($_GETDADOS['vstermo'] != '') {
		$pesquisa = $_GETDADOS['vstermo'];
		$arrayQuery2['parametros'][] = array("%$pesquisa%", PDO::PARAM_STR);
	}	
	$result = consultaComposta($arrayQuery2);

	if ($result['quantidadeRegistros'] > 0) :
		foreach ($result['dados'] as $value) :			 
		?>
			<div class="col-md-4">
                <div class="thumbnail">
                  <div class="caption">                    
                    <span class="primarycol"><?= formatar_data($value['NOTDATAPUBLICACAO']); ?></span>
                    <p><?= stripslashes($value['NOTMANCHETE']); ?></p>
                    <ul class="social-icons">
                      <ul class="social-icons">
                        <li><a href="javascript:play_audio('https://drive.google.com/a/agenciaradioweb.com.br/uc?id=<?= $value['NOTIDDRIVE'];?>')" id="play_materia" title="Ouvir Conteúdo"><i class="fa fa-play-circle"></i></a></li>
                        <li><a href="https://drive.google.com/a/agenciaradioweb.com.br/uc?id=<?= $value['NOTIDDRIVE'];?>&amp;export=download" title="Baixar Conteúdo"><i class="fa fa-download"></i></a></li>
                        <li><a href="javascript:share_audio('<?= $value['NOTCODIGO'];?>')" title="Compartilhar Conteúdo"><i class="fa fa-share-square"></i></a></li>
                      </ul>
                    </ul>
                  </div>
                </div>
              </div>
			
	<?php endforeach;
	endif;	
		
		
	if ($qtdPaginas > 1) { ?>
	<!-- PAGINAÇÃO PODCASTS -->  
	<div class="container text-center mt-5">
		<nav aria-label="Page navigation example">
		  <ul class="pagination justify-content-center">
			<?php for ($i=1; $i <= $qtdPaginas; $i++): 
				if ($i < 11){ ?>
				<li class="page-item <?php if($i == $_GETDADOS['page']) echo 'active'; ?>" rel="<?= $i ?>" onclick="loadMoreData('<?= $i; ?>', '4', 'divpaginacao4');">
					<span class="page-link" ><?= $i; ?></span>
				</li>
				<?php }
				endfor; ?>			
		  </ul>
		</nav> 
	</div>	
	<?php
	}
}
?>

<?php 
header("Content-type: application/xml"); 
header("Cache-Control: no-store, no-cache, must-revalidate"); 

echo '<?xml version="1.0" encoding="iso-8859-1"?>';

require_once('Connections/conectar.php');  
require('includes/funcoes.php');

mysqli_select_db($conectar,$database_conectar);
$query_definicoes = "SELECT * FROM radio_definicoes";
$definicoes = mysqli_query($conectar,$query_definicoes);
$row_definicoes = mysqli_fetch_assoc($definicoes);

mysqli_select_db($conectar,$database_conectar);
$query_podcasts = "SELECT * FROM radio_podcasts order by id asc";
$podcasts = mysqli_query($conectar,$query_podcasts);
$row_podcasts = mysqli_fetch_assoc($podcasts);
$i = 1;
do { 
$i = $i+1;
	if($_GET['area']==$i) {
		$enxert_podcast = " where idcategoria = '".$row_podcasts['id']."' "; 
	}
} while ($row_podcasts = mysqli_fetch_assoc($podcasts)); 

$maxRows_materiaslistac = 200;
$pageNum_materiaslistac = 0;
if (isset($_GET['pageNum_materiaslistac'])) {
  $pageNum_materiaslistac = $_GET['pageNum_materiaslistac'];
}
$startRow_materiaslistac = $pageNum_materiaslistac * $maxRows_materiaslistac;

mysqli_select_db($conectar,$database_conectar);
$query_materiaslistac = "SELECT * FROM radio_noticias $enxert_podcast order by data desc, idradioweb desc, id desc";
$query_limit_materiaslistac = sprintf("%s LIMIT %d, %d", $query_materiaslistac, $startRow_materiaslistac, $maxRows_materiaslistac);
$materiaslistac = mysqli_query($conectar,$query_limit_materiaslistac);
$row_materiaslistac = mysqli_fetch_assoc($materiaslistac);

if (isset($_GET['totalRows_materiaslistac'])) {
  $totalRows_materiaslistac = $_GET['totalRows_materiaslistac'];
} else {
  $all_materiaslistac = mysqli_query($conectar,$query_materiaslistac);
  $totalRows_materiaslistac = mysqli_num_rows($all_materiaslistac);
}
$totalPages_materiaslistac = ceil($totalRows_materiaslistac/$maxRows_materiaslistac)-1;

function semana($entrada) {
if($entrada==1){ return "Segunda"; }	
elseif($entrada==2){ return "Terça"; }
elseif($entrada==3){ return "Quarta"; }	
elseif($entrada==4){ return "Quinta"; }
elseif($entrada==5){ return "Sexta"; }
elseif($entrada==6){ return "Sábado"; }	
else { return "Domingo"; }		
}

?>
<XML>

   <myXMLList>
		<?  do { ?>
   		<ListItem>
   		  <itemColor><?php echo $row_materiaslistac['id']; ?></itemColor>
          <? if($row_definicoes['app_noticia']==2) { ?>
   		  <itemLabel><?php echo semana(date('w',strtotime($row_materiaslistac['data']))); ?>, <?php echo convdata($row_materiaslistac['data'],2); ?> | <? echo $row_materiaslistac['duracao']."\n"; ?><?php echo html_entity_decode(stripslashes($row_materiaslistac['manchete'])); ?></itemLabel>
          <? } else { ?>
          <itemLabel><?php echo convdata($row_materiaslistac['data'],2); ?> - <?php echo html_entity_decode(stripslashes($row_materiaslistac['manchete'])); ?></itemLabel>
          <? } ?>
   		  <itemPhone><?php if($row_materiaslistac['url']!='') { echo $row_materiaslistac['url']; } else { echo "https://drive.google.com/a/agenciaradioweb.com.br/uc?id=".$row_materiaslistac['iddrive']; } ?></itemPhone>
   		</ListItem>
		<?php } while ($row_materiaslistac = mysqli_fetch_assoc($materiaslistac)); 
		
		
		mysqli_select_db($conectar,$database_conectar);
$query_podcasts = "SELECT * FROM radio_podcasts order by id asc";
$podcasts = mysqli_query($conectar,$query_podcasts);
$row_podcasts = mysqli_fetch_assoc($podcasts);
$i = 1;
do { 
$i = $i+1;
	if($_GET['area']==$i) {
		//$enxert_podcast = " where idcategoria = '".$row_podcasts['id']."' "; 
	}
} while ($row_podcasts = mysqli_fetch_assoc($podcasts)); 
		
		?>
  </myXMLList>

</XML>
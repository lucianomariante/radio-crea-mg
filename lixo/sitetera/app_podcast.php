<?php 
header("Content-type: application/xml"); 
header("Cache-Control: no-store, no-cache, must-revalidate"); 

echo '<?xml version="1.0" encoding="iso-8859-1"?>';

$hostname_conectar = "mysql02-farm2.uni5.net";
$database_conectar = "radiotjminas";
$username_conectar = "radiotjminas";
$password_conectar = "4wFJU4lGw45u";
$conectar = mysqli_connect($hostname_conectar, $username_conectar, $password_conectar,$database_conectar);

mysqli_select_db($conectar,$database_conectar);

function convdata($dataform, $tipo){
  if ($tipo == 0) {
     $datatrans = explode ("/", $dataform);
     $data = "$datatrans[2]-$datatrans[1]-$datatrans[0]";
  } elseif ($tipo == 1) {
     $datatrans = explode ("-", $dataform);
     $data = "$datatrans[2]/$datatrans[1]/$datatrans[0]";
  } elseif ($tipo == 2) {
     $datatrans = explode ("-", $dataform);
     $data = $datatrans[2]."/".$datatrans[1]."/".substr($datatrans[0],2,2);
  }
  return $data;
}

if($_GET['area']==3) { $nn = 1; } else { $nn = 2; }

$maxRows_materiaslistac = 200;
$pageNum_materiaslistac = 0;
if (isset($_GET['pageNum_materiaslistac'])) {
  $pageNum_materiaslistac = $_GET['pageNum_materiaslistac'];
}
$startRow_materiaslistac = $pageNum_materiaslistac * $maxRows_materiaslistac;

mysqli_select_db($conectar,$database_conectar);
$query_materiaslistac = "SELECT * FROM NOTICIAS WHERE CATCODIGO = '".$nn."' and NOTSTATUS = 'S' order by NOTDATAPUBLICACAO desc, NOTCODIGO desc";
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
   		  <itemColor><?php echo $row_materiaslistac['NOTCODIGO']; ?></itemColor>
          <? if($row_definicoes['app_noticia']==2) { ?>
   		  <itemLabel><?php echo semana(date('w',strtotime($row_materiaslistac['NOTDATAPUBLICACAO']))); ?>, <?php echo convdata($row_materiaslistac['NOTDATAPUBLICACAO'],2); ?> | <? echo $row_materiaslistac['NOTDURACAO']."\n"; ?><?php echo html_entity_decode(stripslashes($row_materiaslistac['NOTMANCHETE'])); ?></itemLabel>
          <? } else { ?>
          <itemLabel><?php echo convdata($row_materiaslistac['NOTDATAPUBLICACAO'],2); ?> - <?php echo html_entity_decode(stripslashes($row_materiaslistac['NOTMANCHETE'])); ?></itemLabel>
          <? } ?>
   		  <itemPhone><?php  echo "https://drive.google.com/a/agenciaradioweb.com.br/uc?id=".$row_materiaslistac['NOTIDDRIVE'];  ?></itemPhone>
   		</ListItem>
		<?php } while ($row_materiaslistac = mysqli_fetch_assoc($materiaslistac)); 
		
		
	
		?>
  </myXMLList>

</XML>
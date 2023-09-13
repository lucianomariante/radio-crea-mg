<?php 
header("Content-type: application/xml"); 
header("Cache-Control: no-store, no-cache, must-revalidate"); 

echo '<?xml version="1.0" encoding="iso-8859-1"?>';

require_once('Connections/conectar.php');  
require('includes/funcoes.php');


mysqli_select_db($conectar,$database_conectar);
$query_materiaslistac = "SELECT * FROM onlines_programacao order by id desc limit 0, 200";
$materiaslistac = mysqli_query($conectar,$query_materiaslistac);
$row_materiaslistac = mysqli_fetch_assoc($materiaslistac);


?>
<XML>
   <myXMLList>
		<?  do { ?>
   		<ListItemX>
   		  <itemColorX>ffffff</itemColorX>
   		  <itemLabelX><?php echo html_entity_decode(stripslashes(trim($row_materiaslistac['artista']))); ?></itemLabelX>
   		  <itemPhoneX><?php echo html_entity_decode(stripslashes(trim($row_materiaslistac['musica']))); ?></itemPhoneX>
   		</ListItemX>
		<?php } while ($row_materiaslistac = mysqli_fetch_assoc($materiaslistac)); ?>
  </myXMLList>

</XML>
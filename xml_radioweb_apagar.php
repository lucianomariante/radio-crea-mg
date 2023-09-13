<?php require_once('Connections/conectar_radioweb.php');
require_once('includes/funcoes.php');

header("Content-type: application/xml"); 
header("Cache-Control: no-store, no-cache, must-revalidate");  
echo "<?xml version=\"1.0\" encoding=\"iso-8859-1\" ?>";


if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$datahoje = date('Y-m-d');

if($_GET['area'] > 0) { $pedaco_query .= "or materias_apagadas.area = '".$_GET['area']."'"; }
if($_GET['autor'] > 0) { $pedaco_query .= "or materias_apagadas.autor = '".$_GET['autor']."'"; }
if($_GET['editoria'] > 0) { $pedaco_query .= "or materias_apagadas.titulo = '".$_GET['editoria']."'"; } 
if($_GET['cliente'] > 0) { 
$pedaco_query .= "or materias_apagadas.cliente = '".$_GET['cliente']."'";  
$pedaco_query .= "or materias_apagadas.cliente2 = '".$_GET['cliente']."'";  
$pedaco_query .= "or materias_apagadas.cliente3 = '".$_GET['cliente']."'"; 
}


$query_listamaterias = "SELECT *, materias_apagadas.descricao as descmat, materias_apagadas.area as idar, materias_apagadas.tsAtu as mat_atu FROM 
materias_apagadas, areas, autores, indicetitulos WHERE areas.idArea = materias_apagadas.area
AND materias_apagadas.autor = autores.idAutor 
and indicetitulos.idtitulo = materias_apagadas.titulo 
group by materias_apagadas.idMateria 
ORDER BY materias_apagadas.idMateria DESC, materias_apagadas.tsPub DESC limit 0, 500";
$listamaterias = mysqli_query($conectar, $query_listamaterias) or die(mysqli_error());
$row_listamaterias = mysqli_fetch_assoc($listamaterias);
$totalRows_listamaterias = mysqli_num_rows($listamaterias);

//echo $query_listamaterias;

$pedaco_query = "";

$ar_especial = array(   'á'=>'&aacute;',
                        'Á'=>'&Aacute;',
                        'ã'=>'&atilde;',
                        'Ã'=>'&Atilde;',
                        'â'=>'&acirc;',
                        'Â'=>'&Acirc;',
                        'à'=>'&agrave;',
                        'À'=>'&Agrave;',
                        'é'=>'&eacute;',
                        'É'=>'&Eacute;',
                        'ê'=>'&ecirc;',
                        'Ê'=>'&Ecirc;',
                        'í'=>'&iacute;',
                        'Í'=>'&Iacute;',
                        'ó'=>'&oacute;',
                        'Ó'=>'&Oacute;',
                        'õ'=>'&otilde;',
                        'Õ'=>'&Otilde;',
                        'ô'=>'&ocirc;',
                        'Ô'=>'&Ocirc;',
                        'ú'=>'&uacute;',
                        'Ú'=>'&Uacute;',
                        'ç'=>'&ccedil;',
                        'Ç'=>'&Ccedil;',
                        ' '=>'&nbsp;',
                        '\&'=>'\&amp;',
                        'ˆ'=>'&circ;',
                        '˜'=>'&tilde;',
                        '¨'=>'&uml;',
                        '´'=>'&cute;',
                        '¸'=>'&cedil;',
                        '"'=>'&quot;',
                        '“'=>'&ldquo;',
                        '”'=>'&rdquo;',
                        '‘'=>'&lsquo;',
                        '’'=>'&rsquo;',
                        '‚'=>'&sbquo;',
                        '„'=>'&bdquo;',
                        'º'=>'&ordm;',
                        'ª'=>'&ordf;',
                        '‹'=>'&lsaquo;',
                        '›'=>'&rsaquo;',
                        '«'=>'&laquo;',
                        '»'=>'&raquo;',
                        '–'=>'&ndash;',
                        '—'=>'&mdash;',
                        '¯'=>'&macr;',
                        '…'=>'&hellip;',
                        '¦'=>'&brvbar;',
                        '•'=>'&bull;',
                        '?'=>'&#8227;',
                        '¶'=>'&para;',
                        '§'=>'&sect;',
                        '©'=>'&copy;',
                        '®'=>'&reg',
                        'ü'=>'&uuml;',
                        'Ü'=>'&Uuml;',
                        "'"=>'&#39;',
                        '½'=>'&frac12;',
                        '?'=>'&#8531;',
                        '?'=>'&ne;',
                        '?'=>'&cong;',
                        '='=>'&le;',
                        '='=>'&ge;');

function desconversao($palavra) { // converte o formato html para texto normal
    global $ar_especial;
    return str_replace(array_values($ar_especial), array_keys($ar_especial), $palavra);
}

?><conteudo>
<?php do { ?>
	<item>
    	<nmat><?php $nmat = $nmat + 1; echo $nmat; ?></nmat>
    	<areanum><?php echo $row_listamaterias['idar']; ?></areanum>
    	<materianum><?php echo $row_listamaterias['idMateria']; ?></materianum>
    	<datahora><?php echo convdata($row_listamaterias['materiadata'],1); ?></datahora>
    	<editoria><?php echo str_replace("&","e",$row_listamaterias['textotitulo']); ?></editoria>
    	<editorianum><?php echo $row_listamaterias['titulo']; ?></editorianum>
        <autor><?php echo $row_listamaterias['nome']; ?></autor>
        <autornum><?php echo $row_listamaterias['autor']; ?></autornum>
        <cliente1><?php echo $row_listamaterias['cliente']; ?></cliente1>
        <cliente2><?php echo $row_listamaterias['cliente2']; ?></cliente2>
        <cliente3><?php echo $row_listamaterias['cliente3']; ?></cliente3>
    	<duracao><?php echo $row_listamaterias['duracao']; ?></duracao>
    	<titulo><?php echo desconversao($row_listamaterias['descmat']); ?></titulo>
        <arquivo><?php echo $row_listamaterias['arquivo']; ?></arquivo>
        <atualizacao><?php echo $row_listamaterias['mat_atu']; ?></atualizacao>
    	<url>http://www.agenciaradioweb.com.br/conteudo/materias/<?php echo $row_listamaterias['arquivo']; ?></url>
        <iddrive><?php echo $row_listamaterias['IDDRIVE']; ?></iddrive>
	</item>
<?php } while ($row_listamaterias = mysqli_fetch_assoc($listamaterias)); ?>
</conteudo>
<?php
mysqli_free_result($listamaterias);
?>

<?php require_once('Connections/conectar_radioweb.php');
require_once('includes/funcoes.php');
 
header("Content-type: application/xml"); 
header("Cache-Control: no-store, no-cache, must-revalidate");  
echo "<?xml version=\"1.0\" encoding=\"iso-8859-1\" ?>";



$datahoje = date('Y-m-d');

if($_GET['area'] > 0) { $pedaco_query .= "materias.area = '".$_GET['area']."' or "; }
if($_GET['autor'] > 0) { $pedaco_query .= "materias.autor = '".$_GET['autor']."' or "; }
if($_GET['editoria'] > 0) { $pedaco_query .= "materias.titulo = '".$_GET['editoria']."' or "; } 
if($_GET['cliente'] > 0) { 
$pedaco_query .= "materias.cliente = '".$_GET['cliente']."' or ";  
$pedaco_query .= "materias.cliente2 = '".$_GET['cliente']."' or ";  
$pedaco_query .= "materias.cliente3 = '".$_GET['cliente']."' or "; 
}


$query_listamaterias = "SELECT *, materias.descricao as descmat, materias.area as idar, materias.tsAtu as mat_atu FROM 
materias, autores, arquivos, indicetitulos WHERE
materias.autor = autores.idAutor 
AND arquivos.materia = materias.idMateria 
and indicetitulos.idtitulo = materias.titulo and (".substr($pedaco_query,0,-4).") and materias.area <> 31 and materias.area <> 192 
ORDER BY materias.idMateria DESC, materias.tsPub DESC limit 0, 500";
$listamaterias = mysqli_query($conectar,$query_listamaterias) or die(mysqli_error());
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
    	<editoria><?php echo str_replace("&","&amp;",desconversao($row_listamaterias['textotitulo'])); ?></editoria>
    	<editorianum><?php echo $row_listamaterias['titulo']; ?></editorianum>
        <autor><?php echo str_replace("&","&amp;",desconversao($row_listamaterias['nome'])); ?></autor>
        <autornum><?php echo $row_listamaterias['autor']; ?></autornum>
        <cliente1><?php echo $row_listamaterias['cliente']; ?></cliente1>
        <cliente2><?php echo $row_listamaterias['cliente2']; ?></cliente2>
        <cliente3><?php echo $row_listamaterias['cliente3']; ?></cliente3>
    	<duracao><?php echo $row_listamaterias['duracao']; ?></duracao>
    	<titulo><?php echo str_replace("&","&amp;",desconversao($row_listamaterias['descmat'])); ?></titulo>
        <arquivo><?php echo $row_listamaterias['arquivo']; ?></arquivo>
        <atualizacao><?php echo $row_listamaterias['mat_atu']; ?></atualizacao>
    	<url>https://drive.google.com/a/agenciaradioweb.com.br/uc?id=<?= $row_listamaterias['IDDRIVE']; ?></url>
        <iddrive><?php echo $row_listamaterias['IDDRIVE']; ?></iddrive>
        <? 	
			$query_listafontes = "SELECT * from fontes where idmateria = '".$row_listamaterias['idMateria']."'";
			$listafontes = mysqli_query($conectar,$query_listafontes) or die(mysqli_error());
			$row_listafontes = mysql_fetch_assoc($listafontes);
			$totalRows_listafontes = mysql_num_rows($listafontes);
		?>
        <? if($row_listafontes['id']!="") { ?>
        <listafontes>
        <?php do { ?>
        	<fonte>
				<id><? echo $row_listafontes['id']; ?></id>
            	<idmateria><? echo $row_listafontes['idmateria']; ?></idmateria>	
				<nome><? echo $row_listafontes['nome']; ?></nome>
				<email><? echo $row_listafontes['email']; ?></email>
				<cargo><? echo $row_listafontes['cargo']; ?></cargo>
            </fonte>
		<?php } while ($row_listafontes = mysqli_fetch_assoc($listafontes)); ?>
        </listafontes>
        <? } ?>
	</item>
<?php } while ($row_listamaterias = mysqli_fetch_assoc($listamaterias)); ?>
</conteudo>
<?php
mysql_free_result($listamaterias);
?>

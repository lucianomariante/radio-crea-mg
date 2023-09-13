<? header('Content-type: application/xml; charset=utf-8');
require_once('Connections/conectar.php');
require_once('includes/funcoes.php');
require_once('drive/client.php');

date_default_timezone_set('America/Sao_Paulo');

function createaudio($gdrive_id)
{
	$client = getClient();
	
	
	$service = new Google_Service_Drive($client);


	$response = $service->files->get($gdrive_id, array(
		'fields' => 'id, name'
	));

	$fileContent = $service->files->get($gdrive_id, array(
		'alt' => 'media',
	));

	$content = $fileContent->getBody()->getContents();

	$contentType = $fileContent->getHeader('Content-Type');
	$contentType = $contentType[0];

	$contentLength = $fileContent->getHeader('Content-Length');
	$contentLength = $contentLength[0];

    $myfile = fopen("audios/".$gdrive_id.".mp3", "w");
    fwrite($myfile, $content);
    fclose($myfile);
	exit;
}

$currentPage = $_SERVER["PHP_SELF"];

$query_site = "SELECT * FROM radio_definicoes where id = 1";
$site = mysqli_query($conectar,$query_site);
$row_site = mysqli_fetch_assoc($site);	




if($_GET['id']!="") { 
$idpd = (int) $_GET['id'];
$query_podcastlist = "SELECT * FROM radio_podcasts where id = '".$idpd."'";
$podcastlist = mysqli_query($conectar,$query_podcastlist);
$row_podcastlist = mysqli_fetch_assoc($podcastlist);
$pdenxerto = "and radio_noticias.idcategoria = '".$idpd."'";
} else {
$query_podcastlist = "SELECT * FROM radio_definicoes where id = 1";
$podcastlist = mysqli_query($conectar,$query_podcastlist);
$row_podcastlist = mysqli_fetch_assoc($podcastlist);	
}

if($row_podcastlist['amigavel']!="") {
	$amigavel_principal =  amigaveis(txtpodcast3($row_podcastlist['amigavel']));
} else {
	$amigavel_principal =  amigaveis(txtpodcast3($row_podcastlist['titulo']));;
}

mysqli_select_db($conectar,$database_conectar);
$query_itempodcast = "SELECT radio_noticias.*, radio_podcasts.nome_podcast FROM radio_noticias, radio_podcasts where radio_noticias.idcategoria = radio_podcasts.id $pdenxerto order by data desc,  radio_noticias.idradioweb desc, radio_noticias.ultima_atualizacao desc limit 0, 100";
$itempodcast = mysqli_query($conectar,$query_itempodcast);
$row_itempodcast = mysqli_fetch_assoc($itempodcast);

function txtpodcast ($entrada) {
	//return str_replace("&","e",str_replace("\"","&quot;",stripslashes(utf8_encode($entrada))));
	return utf8_encode($entrada);
}

function txtpodcast2  ($entrada) {
	//return str_replace("&","e",str_replace("\"","&quot;",html_entity_decode($entrada)));
	return utf8_encode($entrada);
}

function txtpodcast3 ($entrada) {
	//return str_replace("&","e",str_replace("\"","&quot;",stripslashes(utf8_encode($entrada))));
		return utf8_encode($entrada);
}
header('Content-type: application/xml; charset=utf-8');
echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>"; ?>
<rss version="2.0"
	xmlns:content="http://purl.org/rss/1.0/modules/content/"
	xmlns:wfw="http://wellformedweb.org/CommentAPI/"
	xmlns:dc="http://purl.org/dc/elements/1.1/"
	xmlns:atom="http://www.w3.org/2005/Atom"
	xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
	xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
	xmlns:itunes="http://www.itunes.com/dtds/podcast-1.0.dtd"
xmlns:rawvoice="http://www.rawvoice.com/rawvoiceRssModule/"
xmlns:googleplay="http://www.google.com/schemas/play-podcasts/1.0">
<channel>
	<title><? echo txtpodcast3($row_podcastlist['titulo']); ?></title>
	<atom:link href="<? echo "http://".$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]; //txtpodcast3($row_podcastlist['link']); ?>" rel="self" type="application/rss+xml" />
	<link><? echo "http://".$_SERVER[HTTP_HOST];   // ."/podcast/".$row_podcastlist['id']."/".$amigavel_principal   ?></link>
	<description><? echo txtpodcast3($row_podcastlist['descricao']); ?></description>
	<lastBuildDate><? echo date("D, d M Y H:i:s O", $row_itempodcast['ultima_atualizacao']); ?></lastBuildDate>
	<language>pt-BR</language>
    <copyright>Todos os direitos reservados</copyright>
	<sy:updatePeriod>hourly</sy:updatePeriod>
	<sy:updateFrequency>1</sy:updateFrequency>
    <generator>http://wordpress.org/?v=4.0</generator>
	<itunes:summary><? echo txtpodcast3($row_podcastlist['descricao']); ?></itunes:summary>
	<itunes:author><? echo txtpodcast3($row_podcastlist['nome_autor']); ?></itunes:author>
	<itunes:explicit>clean</itunes:explicit>
	<itunes:image href="<? echo txtpodcast3($row_podcastlist['imagem']); ?>" />
	<itunes:type>episodic</itunes:type>
	<itunes:owner>
		<itunes:name><? echo txtpodcast3($row_podcastlist['nome_autor']); ?></itunes:name>
		<itunes:email><? echo txtpodcast3($row_podcastlist['email']); ?></itunes:email>
	</itunes:owner>
	<managingEditor><? echo txtpodcast3($row_podcastlist['email']); ?> (<? echo txtpodcast3($row_podcastlist['nome_autor']); ?>)</managingEditor>
	<itunes:subtitle><? echo txtpodcast3($row_podcastlist['subtitulo']); ?></itunes:subtitle>
	<image>
		<title><? echo txtpodcast3($row_podcastlist['titulo']); ?></title>
		<url><? echo txtpodcast3($row_podcastlist['imagem']); ?></url>
		<link><? echo txtpodcast3($row_podcastlist['link']); ?></link>
	</image>
	<itunes:category text="News">
	</itunes:category>
	<rawvoice:subscribe feed="<? echo txtpodcast3($row_podcastlist['link']); ?>" spotify="https://open.spotify.com/show/<? echo txtpodcast3($row_podcastlist['spotify']); ?>"></rawvoice:subscribe>
	<?php  do { 
	//if ($row_itempodcast['iddrive']!="") {
	//if (!file_exists("audios/".$row_itempodcast['iddrive'].".mp3") and $row_itempodcast['iddrive']!="") {
	//createaudio($row_itempodcast['iddrive']);
   // } else {


	if($row_itempodcast['amigavel']!="") { 
	$complemento_amigavel = amigaveis(txtpodcast2($row_itempodcast['amigavel']));
	} else {
	$complemento_amigavel = amigaveis(txtpodcast2($row_itempodcast['manchete']));
	}

	?>

	<item>
		<title><? echo txtpodcast2($row_itempodcast['manchete']); ?></title>
        <link><? echo $row_site['url_radio']; ?>/not/<? echo $row_itempodcast['id']; ?>/<? echo $complemento_amigavel; ?></link>
        <pubDate><? echo date("D, d M Y H:i:s O", $row_itempodcast['ultima_atualizacao']); ?></pubDate>
        <enclosure url="<? echo $row_site['url_radio']; ?>/audios/<? echo txtpodcast($row_itempodcast['iddrive']); ?>.mp3" length="7733397" type="audio/mpeg"/>
        <guid isPermaLink="false">arw<? echo txtpodcast($row_itempodcast['id']); ?></guid>
		<category><![CDATA[<? echo txtpodcast3($row_podcastlist['titulo']); ?>]]></category>
		<category><![CDATA[<? echo txtpodcast3($row_podcastlist['nome_autor']); ?>]]></category>
		<itunes:subtitle><? echo txtpodcast3($row_podcastlist['titulo']); ?> - <? echo txtpodcast3($row_podcastlist['nome_autor']); ?></itunes:subtitle>
		<? if($row_itempodcast['descricao']!="") { ?><description><![CDATA[<? echo txtpodcast2($row_itempodcast['descricao']); ?>]]></description>
		<itunes:summary><![CDATA[<? echo txtpodcast2($row_itempodcast['descricao']); ?>]]></itunes:summary>
		<googleplay:description><? echo txtpodcast2($row_itempodcast['descricao']); ?></googleplay:description><? } 
		 if($row_itempodcast['thumbnail']=="") { ?><itunes:image href="<? echo txtpodcast($row_podcastlist['imagem']); ?>" />
		<googleplay:image href="<? echo txtpodcast($row_podcastlist['imagem']); ?>"/><? } else { ?><itunes:image href="thumbnails/<? echo txtpodcast($row_itempodcast['thumbnail']); ?>" />
		<googleplay:image href="thumbnails/<? echo txtpodcast($row_itempodcast['thumbnail']); ?>"/><? } ?>

		<itunes:episodeType>full</itunes:episodeType>  
        <itunes:explicit>clean</itunes:explicit>
 		<googleplay:explicit>No</googleplay:explicit> 
		<itunes:duration><? $tempomat = explode(":",$row_itempodcast['duracao']); echo ($tempomat[0]*60)+($tempomat[1]); ?></itunes:duration>
 		<itunes:author><? echo txtpodcast2($row_itempodcast['autor']); ?></itunes:author>
        <googleplay:author><? echo txtpodcast2($row_itempodcast['autor']); ?></googleplay:author>
        <itunes:keywords><? if($row_itempodcast['metakeywords']=="") { echo txtpodcast3($row_podcastlist['metakeywords']); } else { echo txtpodcast3($row_itempodcast['metakeywords']); } ?></itunes:keywords>
	</item> 

	<?php } while ($row_itempodcast = mysqli_fetch_assoc($itempodcast)); ?>
<? /*<link><? echo $row_site['url_radio']; ?>/podcast/<? echo $row_podcastlist['id']; ?>/<? echo $amigavel_principal; ?>/<? echo $row_itempodcast['id']; ?>/<? echo $complemento_amigavel; ?></link>*/ ?>
</channel>
</rss>
<? 
require_once('includes/funcoes.php');
require_once('Connections/conectar.php');

mysqli_select_db($conectar,$database_conectar);
$query_definicoes = "SELECT * FROM radio_definicoes";
$definicoes = mysqli_query($conectar,$query_definicoes);
$row_definicoes = mysqli_fetch_assoc($definicoes);

function procura_pasta ($titulo,$nome_pasta,$nome_id) {

$xml = simplexml_load_file('xml/pastas.xml');

	foreach($xml->pasta as $item) {
		if(trim($item->nome) == trim($nome_pasta) or trim($item->nome) == trim($nome_id)) { $testa = 1; $novo_titulo = $item->titulo; }
	}
	
	if($testa==1) { return $novo_titulo; } else { return $titulo; }

}


function geratodos($xmladd) {
	//if (filemtime("xml/radio.xml") > filemtime("xml/passando.xml")) {
	if ($xmladd=="") {
	$xml = simplexml_load_file('xml/radio.xml');
	} else {
	$xml = simplexml_load_file($xmladd);	
	}

    	$divisor = explode(" - ",procura_pasta($xml->OnAir->CurIns->Name,$xml->OnAir->CurIns->Folder,$xml->OnAir->CurIns->Id),2);
		$conteudo = "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?>
			<page>
				<musica>
					<posicao>1)</posicao>
					<musico>".utf8_decode(str_replace("&","e",$divisor[0]))."</musico>
					<titulo>".utf8_decode(str_replace("&","e",$divisor[1]))."</titulo>
				</musica>
			</page>";
		unlink("xml/passando.xml");	
		$fp = fopen("xml/passando.xml", "w");
		$escreve = fwrite($fp, $conteudo);
		echo $conteudo;

		foreach($xml->Next->NextIns->Ins as $item)
		{
			if($item['Name']!="" and $i < 1) {
    			$divisor = explode(" - ",procura_pasta($item['Name'],$item['Folder'],$item['Id']),2);
				$conteudo = "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?>
					<page>
						<musica>
							<posicao>2)</posicao>
							<musico>".utf8_decode(str_replace("&","e",$divisor[0]))."</musico>
							<titulo>".utf8_decode(str_replace("&","e",$divisor[1]))."</titulo>
						</musica>
					</page>";
				unlink("xml/passara.xml");	
				$fp = fopen("xml/passara.xml", "w");
				$escreve = fwrite($fp, $conteudo);
				echo $conteudo;
				$i = $i + 1;
				//exit();
			}
		}
	//}
}

geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
sleep(5);
geratodos($row_definicoes['xmladd']);
?>
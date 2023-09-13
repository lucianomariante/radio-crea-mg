<?

function retiraacentos ($string) {
$comAcentos = array('à', 'á', 'â', 'ã', 'ä', 'å', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ü', 'ú', 'ÿ', 'À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'O', 'Ù', 'Ü', 'Ú', ' ');
$semAcentos = array('a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'y', 'A', 'A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', '_');
return str_replace($comAcentos, $semAcentos, $string);
}

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


function getip()
{
 
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
 
        $ip = $_SERVER['HTTP_CLIENT_IP'];
 
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
 
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
 
    }
    else{
 
        $ip = $_SERVER['REMOTE_ADDR'];
 
    }
 
    return $ip;
 
}


function Obter_SO() {
 /**
 * Windows...
 */
 $sistemas_operativos['win95']              = 'Windows 95';
 $sistemas_operativos['windows 95']         = 'Windows 95';
 $sistemas_operativos['win98']              = 'Windows 98';
 $sistemas_operativos['windows 98']         = 'Windows 98';
 $sistemas_operativos['winnt']              = 'Windows NT';
 $sistemas_operativos['winnt4.0']           = 'Windows NT 4.0';
 $sistemas_operativos['windows nt 4.0']     = 'Windows NT 4.0';
 $sistemas_operativos['win 9x 4.90']        = 'Windows Me';
 $sistemas_operativos['windows me']         = 'Windows Me';
 $sistemas_operativos['windows nt 5.0']     = 'Windows 2000';
 $sistemas_operativos['windows nt 5.1']     = 'Windows XP';
 $sistemas_operativos['windows nt 5.2']     = 'Windows 2003';
 $sistemas_operativos['windows nt 6.0']     = 'Windows Vista';
 $sistemas_operativos['windows nt 6.1']     = 'Windows 7';
 /**
 * Linux...
 */
 $sistemas_operativos['linux']              = 'Linux';
 $sistemas_operativos['linux i686']         = 'Linux i686';
 $sistemas_operativos['linux i586']         = 'Linux i586';
 $sistemas_operativos['linux i486']         = 'Linux i486';
 $sistemas_operativos['linux i386']         = 'Linux i386';
 $sistemas_operativos['linux ppc']          = 'Linux PPC';
 /**
 * Unix...
 */
 $sistemas_operativos['unix']               = 'Unix';
 /**
 * Mac...
 */
 $sistemas_operativos['mac']               = 'Mac';
 $sistemas_operativos['Mac OS X']          = 'Mac OS X';
 $sistemas_operativos['Mac 10']            = 'Mac OS X';
 $sistemas_operativos['Mac OS X 10_4']     = 'Mac OS X Tiger';
 $sistemas_operativos['Mac OS X 10_5']     = 'Mac OS X Leopard';
 $sistemas_operativos['Mac OS X 10_5_2']   = 'Mac OS X Leopard';
 $sistemas_operativos['Mac OS X 10_5_3']   = 'Mac OS X Leopard';
 $sistemas_operativos['PowerPC']           = 'Mac PPC';
 $sistemas_operativos['PPC']               = 'Mac PPC';
 /**
 * So Móveis...
 */
 $sistemas_operativos['Android']           = 'Android';
 $sistemas_operativos['elaine']            = 'Palm';
 $sistemas_operativos['palm']              = 'Palm';
 $sistemas_operativos['series60']          = 'Symbian S60';
 $sistemas_operativos['symbian']           = 'Symbian';
 $sistemas_operativos['SymbianOS']         = 'Symbian OS';
 $sistemas_operativos['windows ce']        = 'Windows CE';
 if (is_array($sistemas_operativos)) {
 foreach ($sistemas_operativos as $ua => $sistemas_operativo) {
 if (preg_match("|".preg_quote($ua)."|i", trim($_SERVER['HTTP_USER_AGENT']))) {
 return $sistemas_operativo;
 }
 }
 }
 return 'Sistema Operativo Desconhecido';
 }


function Obter_Browser() {
 /**
 * Apenas os mais conhecidos...
 */
 $browsers['Chrome']             = 'Chrome';
 $browsers['Firebird']           = 'Firebird';
 $browsers['Firefox']            = 'Firefox';
 $browsers['Internet Explorer']  = 'Internet Explorer';
 $browsers['Konqueror']          = 'Konqueror';
 $browsers['Lynx']               = 'Lynx';
 $browsers['mobilexplorer']      = 'Mobile Explorer'; // Móvel
 $browsers['Mobile Safari']      = 'Mobile Safari'; // Móvel
 $browsers['MSIE']               = 'Internet Explorer';
 $browsers['Netscape']           = 'Netscape';
 $browsers['OmniWeb']            = 'OmniWeb';
 $browsers['Opera']              = 'Opera';
 $browsers['operamini']          = 'Opera Mini'; // Móvel
 $browsers['opera mini']         = 'Opera Mini'; // Móvel
 $browsers['Phoenix']            = 'Phoenix';
 $browsers['Safari']             = 'Safari';
 if (is_array($browsers)) {
 foreach ($browsers as $ua => $browser) {
 if (preg_match("|".preg_quote($ua).".*?([0-9\.]+)|i", trim($_SERVER['HTTP_USER_AGENT']), $versao)) {
 return $browser.' '.$versao[1];
 }
 }
 }
 return 'Browser Desconhecido';
 }
 
 
preg_match('/MSIE (.*?);/', $_SERVER['HTTP_USER_AGENT'], $matches);
if(count($matches)<2){
preg_match('/Trident\/\d{1,2}.\d{1,2}; rv:([0-9]*)/', $_SERVER['HTTP_USER_AGENT'], $matches);
}
if (count($matches)>1){
// Então, estamos usando o IE
$version = $matches[1];
if($version <= 11) { $ieshit = 'sim'; }
}

function htmlXentities($string, $ent=ENT_COMPAT, $charset='ISO-8859-1') {
return htmlentities($string, $ent, $charset);
}

function convmes($numeromês) { 
if ($numeromês == 1) { $mês = "Janeiro";}
if ($numeromês == 2) { $mês = "Fevereiro";}
if ($numeromês == 3) { $mês = "Março";}
if ($numeromês == 4) { $mês = "Abril";}
if ($numeromês == 5) { $mês = "Maio";}
if ($numeromês == 6) { $mês = "Junho";}
if ($numeromês == 7) { $mês = "Julho";}
if ($numeromês == 8) { $mês = "Agosto";}
if ($numeromês == 9) { $mês = "Setembro";}
if ($numeromês == 10) { $mês = "Outubro";}
if ($numeromês == 11) { $mês = "Novembro";}
if ($numeromês == 12) { $mês = "Dezembro";}
return $mês;
}

function formata_data ($data) {
$explodedata = explode("-",$data); 
//return $explodedata['2']." de ".convmes($explodedata['1'])." de ".$explodedata['0'];	
return $explodedata['2']."/".$explodedata['1']."/".$explodedata['0'];
}

function gera_pastas() {

$query_playlists = "SELECT * FROM playlist order by id DESC";
$playlists = mysqli_query($GLOBALS["conectar"],$query_playlists);
$row_playlists = mysqli_fetch_assoc($playlists);

		$conteudo = "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?>
		<arquivo>";
		
		do {
		$conteudo .= "<pasta>
						<nome>".$row_playlists['pasta']."</nome>
						<titulo>".$row_playlists['artista']." - ".$row_playlists['musica']."</titulo>
					</pasta>";
		} while ($row_playlists = mysqli_fetch_assoc($playlists));
		
		$conteudo .= "</arquivo>";
		
		unlink("../../xml/pastas.xml");	
		$fp = fopen("../../xml/pastas.xml", "w");
		$escreve = fwrite($fp, $conteudo);
		//echo $conteudo;

		
}

function validaemail($email){
	//verifica se e-mail esta no formato correto de escrita
	if (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/',$email)){
			return false;
    }
    else{
		//Valida o dominio
		$dominio=explode('@',$email);
		if(!checkdnsrr($dominio[1],'A')){
			return false;
		}
		else{return true;} // Retorno true para indicar que o e-mail é valido
	}
}

function copia_arquivo_upload($arquivo, $arquivo_name) {
			
			$nomefinal = date("ymdHis").retiraacentos($arquivo_name);
			
			$formato = substr($arquivo_name,-3,3);
			
			$drive_id = upload_gdrive($arquivo, $nomefinal, $formato);
			
			return $drive_id;
}

function amigaveis ($str) {
    $str = strtolower(utf8_decode($str)); $i=1;
    $str = strtr($str, 'àáâãäåæçèéêëìíîïñòóôõöøùúûýýÿ$', 'aaaaaaaceeeeiiiinoooooouuuyyys');
    $str = preg_replace("/([^a-z0-9])/",'-',$str);
    while($i>0) $str = str_replace('--','-',$str,$i);
    if (substr($str, -1) == '-') $str = substr($str, 0, -1);
    return $str;
}
?>
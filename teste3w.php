<?php 

function download_page($path){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$path);
    curl_setopt($ch, CURLOPT_FAILONERROR,1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    $retValue = curl_exec($ch);          
    curl_close($ch);
    return $retValue;
}




    $xml= simplexml_load_file("http://www.radiocreaminas.com.br/creaminas/xml_radioweb.php?id=1&editoria=0&autor=0&area=146&cliente=0") or die("Error: Cannot create object");

	echo $xml;

?>

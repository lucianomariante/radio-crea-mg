<?php
$ctx = stream_context_create(array(
    'http' => array(
        'timeout' => 1
        )
    )
);
echo file_get_contents("http://www.agenciaradioweb.com.br/novosite4/klabin_foradoar/xml_checkin.php?matricula=90855108053", 0, $ctx);
?>
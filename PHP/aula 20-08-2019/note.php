<?php
$xml=simplexml_load_file("note.xml") or die("Erro: não foi possível criar objeto");
echo $xml->para . "<br>";
echo $xml->de . "<br>";
echo $xml->cabecalho . "<br>";
echo $xml->texto . "<br>";
echo $xml->email . "<br>";
echo $xml->nome . "<br>";
echo $xml->senha . "<br>";
?>
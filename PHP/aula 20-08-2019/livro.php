<?php

$xml=simplexml_load_file("livro.xml") or die ("Erro: nenhum arquivo encontrado");

foreach($xml->book as $registro){
echo $registro->author . "<br>";
echo $registro->year . "<br>";
}
?>
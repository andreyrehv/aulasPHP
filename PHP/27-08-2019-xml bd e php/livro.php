<?php
$xml=simplexml_load_file("book.xml") or die("Erro: não foi possível criar objeto");

foreach($xml->children() as $registro){
SHA1($registro->nome . "<br>");
echo $registro->nome . "<br>";
echo $registro->autor . "<br>";
echo $registro->ano . "<br>";
echo $registro->price . "<br>";
echo "<br>"."<br>";
}
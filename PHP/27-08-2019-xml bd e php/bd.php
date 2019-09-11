<?php
$xml=simplexml_load_file("book.xml") or die("Erro: não foi possível criar objeto");

$conn = new mysqli('localhost', 'root', '', 'etec270819');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
foreach($xml->children() as $registro ){
$insert = "INSERT INTO livros VALUES ('$registro->nome','$registro->autor','$registro->ano','$registro->price','".SHA1($registro->nome) ."' );";
if ($conn->query($insert)=== TRUE)
{
	echo 'sucesso';
}
else
{
	echo 'erro';
}

}

		
$conn->close();


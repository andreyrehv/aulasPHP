<?php
$servername = 'localhost';
$username = "root";
$password = "";
$dbname = "etec2";

$nome = $_POST["nome"];
$senha = $_POST["senha"];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
	
$sql = "INSERT INTO aluno VALUES (0,'$nome','$senha');";
$sql .= "INSERT INTO aluno VALUES (0,'$nome','$senha');";
$sql .= "INSERT INTO aluno VALUES (0,'$nome','$senha');";

if ($conn->multi_query($sql)=== TRUE)
{
	echo 'sucesso';
}
else
{
	echo 'erro';
}
		
$conn->close();
?>

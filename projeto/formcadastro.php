<html>
<head>
	<meta charset="utf-8"/>
	<style>
	
	.center{
		display:block;
		margin-left:auto;
		margin-right:auto;
	}
	</style>
	
</head>

<body>
	<img src="ty.jpg" height="300" width="300" class="center"-->
	<?php	
		echo " <center> Obrigado pelo cadastro </center> <br>";
		
		
		$nome= $_GET['nome'];
		$endereco = $_GET['endereco'];
		$numero = $_GET['numero'];
		$cep = $_GET['cep'];
		$tel = $_GET['tel'];
		$uf = $_GET['uf'];
		$pais = $_GET['pais'];
		$email = $_GET['email'];
		$rg = $_GET['rg'];
		$cpf = $_GET['cpf'];
		
	
		/*
		echo "Nome: $nome <br>";
		echo "Endereço: $endereco" . "Numero: $numero <br>";
		echo "CEP: $cep <br>";
		echo "Telefone: $tel <br>";
		echo "UF: $uf <br>";		
		echo "País: $pais <br>";	
		echo "Email: $email <br>";
		echo "RG: $rg <br>";
		echo "CPF: $cpf <br>";		
		echo "Time que você torce: $time <br>";	
		*/
	?>
	
</body>
</html>
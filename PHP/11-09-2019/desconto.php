<?php

$valor = $_POST["valor"];
$desconto = $valor * 0.017;
$vpagar = $valor - $desconto;

	echo "O desconto foi de $desconto reais <br><br><br>";

	echo "O comprador pagou $vpagar reais";


?>
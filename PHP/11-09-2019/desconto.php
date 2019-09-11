<?php

$valor = $_POST["valor"];

	class descontoSub{
		
		public $desconto;
		public $vpagar;
		
		public function calcular($valor){
			$desconto = $valor * 0.017;
			$vpagar = $valor - $desconto;

		echo "O desconto foi de $desconto reais <br><br><br>";

		echo "O comprador pagou $vpagar reais";
		}
}

$obj = new descontoSub();
$obj->calcular($valor);

?>
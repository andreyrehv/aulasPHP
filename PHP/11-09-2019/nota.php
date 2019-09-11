<?php
/*
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$n3 = $_POST["n3"];
$n4 = $_POST["n4"];

$media = (($n1+$n2+$n3+$n4)/4);

if($media >= 7){
	echo "Aluno Aprovado!";
}else{
	echo "Aluno Reprovado!";
}	
*/
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$n3 = $_POST["n3"];
$n4 = $_POST["n4"];

class mediaAlunos{
	
	public $media;
	
	public function calcular($n1, $n2, $n3, $n4){
		$media = (($n1+$n2+$n3+$n4)/4);
			
		echo "A media do Aluno é: ". $media . "<br><br>" ;
		
		if($media >= 7){
		echo "Aluno Aprovado!";
	}else{
		echo "Aluno Reprovado!";
	}	
	
	}
}

$obj = new mediaAlunos();
$obj -> calcular($n1, $n2, $n3, $n4);	
	
	



?>
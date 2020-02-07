<?php

$num1 = $_GET["num1"];
$num2 = $_GET["num2"];

$num1 = (int)$num1;
$num2 = (int)$num2;


$soma = $num1 + $num2;

if($soma > 20){

	$total = $soma + 8;
	echo "O valor da total da soma é: $soma. $soma + 8 = $total porque o valor é maior que 20!";

}else{

	$total = $soma - 5;
	echo "O valor da total da soma é: $soma. $soma + 8 = $total porque o valor é maior que 20!";

}


?>
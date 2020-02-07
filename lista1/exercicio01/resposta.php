<?php

$numero = $_GET["numero"];
$numero = (int)$numero;

if($numero % 5 == 0 || $numero % 2 == 0){

	echo "É divisível!";

}else{

	echo "Não é divisível";
}


?>
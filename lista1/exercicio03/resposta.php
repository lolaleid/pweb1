<?php

$name = $_GET["name"];
$age = $_GET["age"];
$gender = $_GET["gender"];

if($age < 18 && $gender == "female"){
	echo "$name Acesso Proibido!";
}else{
	echo "$name Acesso Permitido!";
}


?>
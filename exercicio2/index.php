<?php

require_once "Leite.php";
require_once "Dvd.php";




$estoque = [
 new Dvd("0",10, "file 0", 2001),
 new Dvd("1",10, "file 0", 2001),
 new Dvd("2",10, "file 0", 2002),
 new Dvd("3",10, "file 0", 2003),
 new Leite("4",2.5,"marca x", 1,date("2019-m-d")),
 new Leite("5",2.5,"marca x", 1,date("Y-m-d")),
 new Leite("6",2.5,"marca x", 1,date("Y-m-d")),
 new Leite("7",2.5,"marca x", 1,date("Y-m-d")),
 new Leite("8",2.5,"marca x", 1,date("Y-m-d")),
 new Leite("9",2.5,"marca x", 1,date("Y-m-d"))
];

$vencidos = [];
$dvds = [];
$ano = 2001;
$total = 0;
foreach ($estoque as $item) {
	$total += $item -> getPreco();

	if($item instanceof Leite){
        if($item->estaVencido()){
            array_push($vencidos, $item);
        }
    }else if($item instanceof Dvd){
    	if($item->getAno() == $ano){
    		array_push($dvds, $item);
    	}
    }
}

if(!empty($vencidos)){
    echo "<p>Leites Vencidos:</p>";
    
    foreach ($vencidos as $item){
        echo "<p>Cod: {$item->getCodigo()}, Marca: {$item->getMarca()}, Vencimento: {$item->getDataValidade()}";
    }
}

if(!empty($dvds)){
    echo "<hr><p>DVD's lançados em {$ano}</p>";
    foreach ($dvds as $item){
        echo "<p>Cod: {$item->getCodigo()}, Titulo: {$item->getTitulo()}, Ano: {$item->getAno()}</p>";
    }
}


echo "<hr><p>Valor total do estoque: R$ ".number_format($total, 2, ",", ".")."</p>";

//echo "<pre>";
//print_R($estoque);
?>
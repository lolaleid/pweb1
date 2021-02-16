<?php
require("produtos.php");

$pedido = $_GET;

?>

<h1>Obrigado!</h1>
<h3>Recebemos seu pedido!</h3>


<div>
	<p>Produto: <?= $pratos[$pedido['product']]['name']?></p>
	<p>Quantidade: <?= $pedido['quantidade']?></p>
	<p>Tipo de Pagamento: <?= $pedido['tipe']?></p>

	<p>Levar troco: <?= (!empty($pedido['troco'])?'Sim':'Não')  ?></p>

	<p>Valor Total: <?= $pratos[$pedido['product']]['price'] * $pedido['quantidade']?> </p>

	<p>Endereço: <?= $pedido['rua'].', '.$pedido['numero'].' - '.$pedido['bairro']?></p>
</div>

<a href="exercicio1.php">Comprar de Novo</a>
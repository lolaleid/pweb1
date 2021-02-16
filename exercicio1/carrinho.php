<?php
require("produtos.php");

$item = $_GET['product'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Carrinho</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="item">
		<img src="img/<?= $item+1 ?>.jpg">
		<h3><?= $pratos[$item]['name']?></h3>
		<span>R$ <?= $pratos[$item]['price']?></span><br>
		<span><?= $pratos[$item]['descript']?></span>
	</div>


	<form action="finalizar.php" method="get">
		<p>Quantidade: <input type="number" name="quantidade" required min="1"></p>
		<fieldset>
			<legend>Método de Pagamento:</legend>
			<input type="radio" name="tipe" value="cartao" required> Cartão
			<input type="radio" name="tipe" value="dinheiro" required> Dinheiro<br>
			<input type="checkbox" name="troco" value="sim"> Levar Troco<br>
		</fieldset> <br>

		<fieldset>
			<legend>Dados de Entrega:</legend>
			Endereço: <input type="text" name="rua">
			Bairro: <input type="text" name="bairro">
			Nº <input type="number" name="numero">
		</fieldset><br>
		<input type="hidden" name="product" value="<?= $item ?>">
		<button type="submit">Finalizar Pedido</button>
	</form>

	<a href="exercicio1.php">Cancelar Pedido</a>
</body>
</html>
<?php 
require("produtos.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php foreach ($pratos as $key => $value): ?>
	<div class="item">
		<img src="img/<?= $key+1 ?>.jpg">
		<h3><a href="carrinho.php?product=<?= $key ?>"><?= $value['name']?></a></h3>
		<span>R$ <?= $value['price']?></span><br>
		<span><?= $value['descript']?></span>
	</div>
	<?php endforeach; ?>
</body>
</html>
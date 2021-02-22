<?php

	$pdo = new PDO('mysql:host=localhost;dbname=modulo_8', 'root', '');
	$sql = $pdo->prepare("SELECT * FROM `clientes` GROUP BY `cargo` ORDER BY id ASC LIMIT 2");
	//se for usar sempre respeite a ordem
	//ASC significa ordem crescente
	//DESC ja seria o decrescente
	$sql->execute();
	$clientes = $sql->fetchAll();

	foreach ($clientes as $key => $value) {

		echo $value['nome'];
		echo '<hr>';
	}
?>
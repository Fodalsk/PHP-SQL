<?php

	$pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');

	$id = 2;

	$sql = $pdo->prepare("UPDATE `clientes` SET nome='Guilherme',sobrenome='Grillo' WHERE nome='Mario' AND sobrenome='Da Silva'");

	if ($sql->execute()){
		echo 'Meu cliente foi atualizado com sucesso!';
	}

?>
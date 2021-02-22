<?php

	$pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');

	$id = 2;

	$sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=4");

	if ($sql->execute()){
		echo 'Meu cliente foi deletado com sucesso!';
	}

?>

DELETE SEGURO
Veja o WHERE id=? e o execute($id)
<?php

	$pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');

	$id = 5;

	$sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=?");

	if ($sql->execute($id)){
		echo 'Meu cliente foi deletado com sucesso!';
	}

?>
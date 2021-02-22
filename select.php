<?php

	$pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');
/* ESTA PUXANDO SOMENTE ESSA CATEGORIA
	$sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = 2"); 

	$sql->execute();

	$info = $sql->fetchAll();


foreach ($info as $key => $value) {
	echo 'Titulo: '.$value['titulo'];
	echo '<br>';
	echo 'Noticia: '.$value['conteudo'];
	echo '<hr>';
}
*/

/* APENAS OUTRA FORMA DE MOSTRAR OS VALORES
for($i = 0; $i < count($info); $i++){
	echo 'Titulo: '.$info[$i]['titulo'];
	echo '<br>';
	echo 'Noticia: '.$info[$i]['conteudo'];
	echo '<hr>';
}
*/

	$sql = $pdo->prepare("SELECT * FROM categorias"); 
	$sql->execute();

	$info = $sql->fetchAll();


foreach ($info as $key => $value) {
	$categoria_id = $value['id'];
	echo 'Exibindo posts de: '.$value['nome'];
	echo '<br>';
	$sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = $categoria_id");
	$sql->execute();

	$infoPosts = $sql->fetchAll();
	foreach ($infoPosts as $key => $value) {
		echo 'Titulo: '.$value['titulo'];
		echo '<br>';
		echo 'Noticia: '.$value['conteudo'];
		echo '<hr>';
	}
}

?>
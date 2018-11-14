<?php
	
	$produto = new StdClass;

	$produto->descricao = 'Chocolate Amargo';
	$produto->estoque = 100;
	$produto->preco = 7;

	$vetor1 = (array) $produto;	//transformando objeto em array

	$vetor2 = [ 'descricao' => 'Cafe', 'estoque' => 100, 'preco' =>10]; //declarando um array para transforma-lo em um objeto

	$produto2 = (object) $vetor2;



	// print $vetor1['descricao'];
	var_dump($vetor1);

	echo "<br>";

	// print $produto2->descricao;
	var_dump($produto2);

	echo "<br>";

	print_r($produto);

?>
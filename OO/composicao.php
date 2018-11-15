<?php

	require_once 'classes/Produto.php';
	require_once 'classes/Caracteristica.php';

	$p1 = new Produto ('Coffe', 100, 15.50);

	$p1->addCaracteristica('Peso', '1kg');
	$p1->addCaracteristica('Embalagem', 'Biodegradavel');
	$p1->addCaracteristica('Pureza', '95%');
	$p1->addCaracteristica('Nacionalidade', 'Nacional');

	print 'Produto : '.$p1->getDescricao()."<br>\n";

	$caracteristicas = $p1->getCaracteristicas();

	foreach ($caracteristicas as $key) {
		echo $key->getNome().' => '.$key->getValor()."<br>\n";
	}

?>
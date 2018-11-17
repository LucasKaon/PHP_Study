<?php

	require_once 'classes/Caracteristica.php';
	require_once 'classes/Produto.php';

	$p1 = new Produto ('Guarana',50,8.00);

	$p1->addCaracteristica('Tamanho','290ml');
	$p1->addCaracteristica('Cor','Guarana');
	$p1->addCaracteristica('Palletizacao','12x5');
	$p1->addCaracteristica('Unidade','Dz');


	print 'Produto: '.$p1->getDescricao()."<br>\n";

	foreach ($p1->getCaracteristicas() as $key) {
		
		print 'Caracteristica: '.$key->getNome().' => '.$key->getValor()."<br>\n";

	}


?>
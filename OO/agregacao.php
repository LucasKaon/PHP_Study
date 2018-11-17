<?php

	require_once 'classes/Produto.php';
	require_once 'classes/Cesta.php';

	$p1 = new Produto ('Agua Mineral',100,3.00);
	$p2 = new Produto ('Guarana Antartica',100,6.00);
	$p3 = new Produto ('Soda Limonada', 80, 16.80);
	$p4 = new Produto ('Brahma Chopp',80,17.00);

	$cesta = new Cesta();

	$cesta->addItem($p1);
	$cesta->addItem($p2);
	$cesta->addItem($p3);
	$cesta->addItem($p4);

	print 'Horario de cadastro : '.$cesta->getTime()."<br>\n";

	foreach ($cesta->getItem() as $key ) {

		print 'Produto: '.$key->getDescricao()."<br>\n";

	}




?>
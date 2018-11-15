<?php

	require_once 'classes/Produto.php';
	require_once 'classes/Fabricante.php';

	//create the objects

	$p1 = new Produto('Chocolate', 10, 7);
	$f1 = new Fabricante('Chocolate Factory', 'Willy Wonka Street', '12345689');

	$p1->setFabricante($f1);

	print 'Descricao : '.$p1->getDescricao()."<br>\n";
	print 'Fabricante: '.$p1->getFabricante()->getNome()."<br>\n";
?>
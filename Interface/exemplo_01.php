<?php

	require_once 'Interface_Orcavel.php';
	require_once 'Produto.php';
	require_once 'Orcamento.php';
	require_once 'Servico.php';
	


	$p1 = new Produto('Santorini', 10, 100);
	$p2 = new Produto('Guararapis', 8, 120);
	$p3 = new Produto('Estela Louis',20, 80);

	$s1 = new Servico('Limpeza de Equipamentos', 150);
	$s2 = new Servico('Pintura de portão', 65);
	$s3 = new Servico('Limpeza de Ar Condicionado',200);

	$cesta = new Orcamento();

	$cesta->addItens($p1,1);
	$cesta->addItens($p2,1);
	$cesta->addItens($p3,2);
	$cesta->addItens($s1,1);
	$cesta->addItens($s2,1);
	$cesta->addItens($s3,1);

	print $cesta->calcularTotal();

?>
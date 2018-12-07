<?php
	
	require_once 'class/Conta.php';

	$cc1 = new Conta('1556','Usuario','5.000');

	$cc1->conta = 1556;
	$cc1->valor = 5.000;
	$cc1->nome = 'Usuario';
	$cc1->senha = '5G2bop';

	$cc2 = clone $cc1;

	print $cc1;
	print $cc2;
	



?>
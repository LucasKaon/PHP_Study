<?php
	
	require_once 'class/Conta.php';

	$cc = new Conta('1556','Usuario','5.000');

	$cc->conta = 1556;
	$cc->valor = 5.000;
	$cc->nome = 'Usuario';
	$cc->senha = '5G2bop';

	print json_encode($cc->valor);
	print "<hr>\n";

	unset($cc->nome);

	if (isset($cc->valor)) {

		print json_encode($cc->valor);	
	
	}
	



?>
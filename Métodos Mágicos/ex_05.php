<?php
	
	require_once 'class/Conta.php';


	$cc = new Conta();

	$cc->tipo = 'Corrente';
	$cc->raiz = '/bash/cs';

	$cc->setValor(2000);
	print "<br>\n";
	print $cc;



?>
<?php
	
	require_once 'class/Vencimento.php';

	try{

		$venc = new Vencimento();
		$venc->dt_vencimento = '2015-05-20';
		$venc->valor = 12345;
		$venc->multa = 2;
		$venc->juros = 0.01;

		print 'O valor é : '.number_format($venc->valor,2,',','.');

	} catch(Exception $e){

		print 'Erro! : '.$e->getMessage();

	}



?>
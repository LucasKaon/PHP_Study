<?php

	require_once 'Conta_Corrente.php';
	require_once 'Conta_Poupanca.php';

	$contas = array();
	$contas[] = new ContaPoupanca(6678,'PP.1234.57',100);
	$contas[] = new ContaCorrente(6677,'CC.1223.56',100,500);

 	foreach ($contas as $key => $conta) {
		
 		print 'Conta: '.$conta->getInfo()."<br>\n";
 		print '	Saldo Atual: '.$conta->getSaldo()."<br>\n";
 		$conta->depositar(200);
 		print "Deposito de : 200<br>\n";
 		print 'Saldo Atual: '.$conta->getSaldo()."<br>\n";

 		if ($conta->retirar(700)) {
 			
 			print 'Aprovada a retirada de R$ 700,00.'."<br>\n";

 		} else
 		{

 			print "Retirada no valor desejado não foi permitida.Entre em contato com seu gerente. <br>\n";

 		}

 		print 'Saldo Atual: '.$conta->getSaldo()."<br><br>\n";

 	}

?>
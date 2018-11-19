<?php

	require_once 'class/Preferencias.php';


	$p1 = Preferencias::getInstance();
	print 'A linguagem é P1: '.$p1->getData('language')."<br>\n";

	$p1->setData('language','pt');
	print 'A linguagem P1 é: '.$p1->getData('language')."<br>\n";	

	$p2= Preferencias::getInstance();
	print 'A linguagem P2 é: '.$p1->getData('language')."<br>\n";

	$p2->save();
	$p2 = Preferencias::getInstance();
	print 'A linguagem é: '.$p2->getData('language')."<br>\n";			

?>
<?php 

	/*
	*
		simplexml_load_file 	=> cria um objeto do tipo SimpleXMLElement
	*
	*/	

	$xml = simplexml_load_file('xml/paises.xml');

	// print $xml->estados->nome[0];

	foreach ($xml->estados->nome as $key) {
		
		print 'Estado: '.$key."<br>\n".PHP_EOL;

	}
	
 ?>
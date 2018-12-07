<?php 

	/*
	*
		simplexml_load_file() 	=> cria um objeto do tipo SimpleXMLElement
		asXML()					=> retorna uma string formatada que representa o objeto.
	*
	*/	

	$xml = simplexml_load_file('xml/paises.xml');

	$xml->nome = 'Brasil';
	$xml->moeda = 'Novo Real';
	$xml->geografia->clima = 'Pantanal';

	echo $xml->asXML();

	file_put_contents('xml/paises.xml', $xml->asXML());
	
 ?>
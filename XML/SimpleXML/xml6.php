<?php 

	/*
	*
		simplexml_load_file() 	=> cria um objeto do tipo SimpleXMLElement
		asXML()					=> retorna uma string formatada que representa o objeto.
	*
	*/	

	$xml = simplexml_load_file('xml/estados.xml');

	echo str_pad('Estados',26,"*",STR_PAD_BOTH);

	echo "<br><br>";

	foreach ($xml->estados->estado as $key) {
		
		echo str_pad($key['nome'],25,".",STR_PAD_RIGHT).
		'Capital : '.$key['capital'] ."<br>\n";

	}
	
	
 ?>
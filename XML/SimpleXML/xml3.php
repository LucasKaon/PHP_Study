<?php 

	/*
	*
		simplexml_load_file 	=> cria um objeto do tipo SimpleXMLElement
	*
	*/	

	$xml = simplexml_load_file('xml/paises.xml');

	print str_pad('Informações Geográficas', 40, "*", STR_PAD_BOTH);

	echo "<br><br>";

	print 'Clima : '.$xml->geografia->clima."<br>\n".PHP_EOL;
	print 'Pico : '.$xml->geografia->pico."<br>\n".PHP_EOL;
	print 'Costa : '.$xml->geografia->costa."<br>\n".PHP_EOL;

	
 ?>
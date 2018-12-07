<?php 

	/*
	*
		simplexml_load_file 	=> cria um objeto do tipo SimpleXMLElement
	*
	*/	

	$xml = simplexml_load_file('xml/config.xml');

	echo 'Nome : '.$xml->user."<br>\n".PHP_EOL;
	echo 'Host : '.$xml->host."<br>\n".PHP_EOL;
	echo 'Plataforma : '.$xml->plataforma."<br>\n".PHP_EOL;

	echo "<hr>";

	$xml->plataforma = "DENIED_EOL";

	echo 'Nome : '.$xml->user."<br>\n".PHP_EOL;
	echo 'Host : '.$xml->host."<br>\n".PHP_EOL;
	echo 'Plataforma : '.$xml->plataforma."<br>\n".PHP_EOL;


	
 ?>
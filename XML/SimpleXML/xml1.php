<?php 

	/*
	*
		simplexml_load_file 	=> cria um objeto do tipo SimpleXMLElement
	*
	*/	

	$xml = simplexml_load_file('xml/config.xml');

	var_dump($xml);
	
 ?>
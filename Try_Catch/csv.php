<?php

	require_once 'classes/CSVParse.php';
		class FileNotFoundException extends Exception{}
		class PermissionException extends Exception{}

	$csv = new CSVParse('clieente.csv', ';');
	
	try{
		$csv->parse();

			while ($row = $csv->fetch()) {
				print $row['Cliente'] . " - " ;
				print $row['Cidade'] . "<br>\n";
			}
		}
		catch(FileNotFoundException $e){
			print_r($e->getTrace());
			// print "Erro ".$e->getCode()." : ".$e->getMessage();
		}
		catch(PermissionException $e){
			print "Erro: ".$e->getMessage();
		}
?>
<?php

	function new_directory($name, $mode = 'a+'){

		$file = fopen($name, $mode);

	}	#end new_directory

	function verify_directory($name){

		if (is_file($name)) {
			
			echo PHP_EOL."O diretorio '$name' existe.";

		} else {

			echo PHP_EOL."O diretorio '$name' não existe.";

		}

	}	#end verify_directory

	function destroy_file($name){

		unlink($name);

	}	#end destroy_file


	$name = 'diretorio_teste/file_exemplo_02.txt';

	new_directory($name);
	//destroy_file($name);
	verify_directory($name);

	
?>
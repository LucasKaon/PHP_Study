<?php

//CRIAR NOVO ARQUIVO
	function new_directory($name, $mode = 'w+'){

		return $file = fopen($name, $mode);

	}	#end new_directory


//VERIFICAR EXISTENCIA DE UM ARQUIVO
	function verify_directory($name){

		if (file_exists($name)) {
			
			echo PHP_EOL."O diretorio '$name' existe.";

		} else {

			echo PHP_EOL."O diretorio '$name' não existe.";

		}

	}	#end verify_directory

//DESTRUIR UM ARQUIVO
	function destroy_file($name){

		unlink($name);

	}	#end destroy_file

//ESCREVER EM UM ARQUIVO
	function write_file($name,$string){

			$f = new_directory($name);

			fwrite($f, $string);

			fclose($f);

	}	#end write_file


//LER ARQUIVO
	function read_file($name){

		$info = file_get_contents($name);

		$organizando = explode(".", $info);

		//var_dump($organizando);

		foreach ($organizando as $value) {
			
			echo $value."<br>";

		}
	}

//CRIAR OU REMOVER DIRETORIO
	function cd_directory($name, $int = 1){

		$file = 'diretorio_teste/'.$name;

		if ($int == 1) {
			mkdir($file);
		} 
		else if ($int == 2){

			if (file_exists($file)) {
				rmdir($file);

				echo "Diretorio solicitado foi removido com sucesso.";

			} else {
				echo "Diretorio solicitado não existe.";
			}
		} 
		else {
			echo "Parametro passado é ivalido.";
		}
		

	}

//PERCORRER DIRETORIO

	function read_directory($nome){

		$data = array();

		if (is_dir($nome)) {
			
			$rows = scandir($nome);

			foreach ($rows as $value) {
				
				if (!in_array( $value, array('.', '..'))) {

					$info['name'] = $value;
					$info['size'] = filesize($nome);
					
					array_push($data, $info);
				}
				

			}

			echo json_encode($data);

		} else {
			echo "O parametro passado não pertence a um diretorio.";
		}
		

	}









	
?>
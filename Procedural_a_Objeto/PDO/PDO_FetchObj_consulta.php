<?php

	try{

		$conn = new PDO('mysql:host=127.0.0.1;port=3306;dbname=db_livro','root','');

		$resultado = $conn->query('SELECT codigo, nome FROM identificacao');

		if ($resultado) {
			//percorrer resultados via fetch
			while ($row = $resultado->fetch(PDO::FETCH_OBJ)) {
				
				echo $row->codigo.' - '.$row->nome."<br>\n";
				
			}

		}

		$conn = null;

	}

	catch(PDOException $e){

		print "Erro! - ".$e->getMessage()."<br>\n";

	}
	

?>
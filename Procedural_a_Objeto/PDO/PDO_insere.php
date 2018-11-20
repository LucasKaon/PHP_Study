<?php

	try{

		$conn = new PDO('mysql:host=127.0.0.1;port=3306;dbname=db_livro','root','');

		$conn->exec("INSERT INTO identificacao (codigo, nome) VALUES (11, 'Maria Venice')");
		$conn->exec("INSERT INTO identificacao (codigo, nome) VALUES (12, 'Janice Ferreira')");
		$conn->exec("INSERT INTO identificacao (codigo, nome) VALUES (13, 'Luiz Gonzaga')");
		$conn->exec("INSERT INTO identificacao (codigo, nome) VALUES (14, 'Marcelo Fraga')");

		//fechando a conexão

		$conn = null;

	}
	catch(PDOException $e){

		//caso ocorra uma exceção

		print "Erro! : ".$e->getMessage()."\n";

	}

?>
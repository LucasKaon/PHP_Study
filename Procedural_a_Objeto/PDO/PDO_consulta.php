<?php

	try{

		//instanciando o objeto PDO

		$conn = new PDO('mysql:host=127.0.0.1;port=3306;dbname=db_livro','root','');

		$resultado = $conn->query('SELECT codigo, nome FROM identificacao');

		//exec apenas envia a alteração
		//query me retorna algo como array

		if ($resultado) {
			
			foreach ($resultado as $value) {
				echo $value['codigo']." - ".$value['nome']."<br>\n";
			}

		} 

		//fechando conexão
		$conn = null;

	}

	catch(PDOException $e){

		print "Erro! - ".$e->getMessage()."\n";

	}


	/*
		PDO::FETCH_ASSOC - Retorna um array indexado pelo nome da coluna
		PDO::FETCH_NUM - Retorna um array indexado pela posição númerica da coluna
		PDO::FETCH_BOTH - Retorna um array indexado pelo nome e pela posição numérica da coluna
		PDO::FETCH_OBJ - Retorna um objeto anônimo (stdClass), de modo que cada coluna seja acessada como uma propriedade
	*/

?>
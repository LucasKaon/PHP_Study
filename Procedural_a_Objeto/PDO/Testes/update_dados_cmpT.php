<?php

	try {
		
		$conn = new PDO('mysql:host=127.0.0.1;port=3306;dbname=db_school','root','');

		$nome =	'PEDRO MANOEL';
		$funcao = 'GERENTE DE FINANCAS';
		$salario = '8000';
		$id = 12;

		$result = $conn->prepare("UPDATE funcionario SET nome = :nome, funcao=:funcao, salario = :salario WHERE id_funcionario = :id_funcionario");
		$result->bindParam(':nome',$nome);
		$result->bindParam(':funcao',$funcao);
		$result->bindParam(':salario',$salario);
		$result->bindParam(':id_funcionario',$id);

		$result->execute();

		$conn = null;

	} catch (PDOException $e) {
		
		echo 'Erro - '.$e->getMessage()."<br>\n";

	}


?>
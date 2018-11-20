<?php

	try {
		
		$conn = new PDO('mysql:host=127.0.0.1;port=3306;dbname=db_school','root','');
		$id = 10;


		$result = $conn->prepare("DELETE FROM funcionario WHERE id_funcionario = :parameter");
		$result->bindParam(':parameter',$id);
		// var_dump($result);
		$result->execute();

	} catch (PDOException $e) {
		
		echo 'Erro ! - '.$e->getMessage()."<br>\n";

	}

?>
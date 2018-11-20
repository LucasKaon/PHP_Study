<?php

	try {
		
		$conn = new PDO('mysql:host=127.0.0.1;port=3306;dbname=db_school','root','');

		$parametro = 'professor'.'%';

		$resultado = $conn->prepare('SELECT nome, funcao, salario FROM funcionario WHERE funcao LIKE :parametro ');
		$resultado->bindParam(':parametro', $parametro);

		if ($resultado->execute()) {
			
			while ($row = $resultado->fetch(PDO::FETCH_OBJ)) {
				
				echo $row->nome."<br>\n";
				echo $row->funcao."<br>\n";
				echo $row->salario."<br><br>\n";


			}

		}


		$conn = null;

	} catch (PDOException $e) {
		
		echo "Erro! - ".$e->getMessage()."<br>\n";

	}

?>
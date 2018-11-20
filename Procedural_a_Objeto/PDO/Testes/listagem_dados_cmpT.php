<?php

	try{
		if($conn = new PDO('mysql:host=127.0.0.1;port=3306;dbname=db_school','root','')){

		print 'Conexão realizada com sucesso'."<br><hr>\n";

	}

	$resultado = $conn->query("SELECT nome, funcao, salario FROM funcionario");
	if($resultado){

		while ($row = $resultado->fetch(PDO::FETCH_OBJ)) {
			
			echo $row->nome."<br>\n";
			echo $row->funcao."<br>\n";
			echo $row->salario."<br><br>\n";

		}

	}

	$conn = null;


	}
	catch(PDOException $e){
		echo "Erro! - ".$e->getMessage()."<br>\n";
	}



?>
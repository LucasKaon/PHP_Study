<?php

	function listar_pessoas(){

		try{

			$output = '';

		$conn = new PDO('mysql:host=127.0.0.1;port=3306;dbname=db_school','root','');

		$resultado = $conn->query('SELECT id_funcionario,nome from funcionario');

		if($resultado){

			foreach ($resultado as $value ) {
				
				$output .= "<option value=".$value['id_funcionario'].">".$value['nome']."</option><br>\n";

			}

		}

		return $output;

	}

		catch(PDOException $e){

			echo 'Erro ! - '.$e->getMessage()."<br>\n";

		}
		


	}

	listar_pessoas();

?>
<?php

	$dados = $_POST;

	if ($dados['id']) {
		
		$conn = mysqli_connect('localhost','root','','db_livro');

		$query = "UPDATE pessoa SET nome 		= 	'{$dados['nome']}',
									endereco 	= 	'{$dados['endereco']}',
									bairro 		= 	'{$dados['bairro']}',
									telefone 	= 	'{$dados['telefone']}',
									email 		= 	'{$dados['email']}',
									id_cidade 	= 	'{$dados['id_cidade']}'

									WHERE id = '{$dados['id']}'";

		$resultado = mysqli_query($conn, $query);

		if($resultado) {

			print 'Registro atualizado com sucesso';

		} else
		{
			print mysqli_error($conn);
		}


		mysqli_close($conn);

	}


?>
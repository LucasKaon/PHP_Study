<?php

	$dados = $_POST;
	$conn = mysqli_connect('127.0.0.1','root','','db_livro');

	$query = 'SELECT max(id) as next FROM pessoa';

	$resultado = mysqli_query($conn, $query);
	$next = (int) mysqli_fetch_assoc($resultado)['next'] + 1;

	$sql = "INSERT INTO pessoa (id, nome, endereco, bairro, telefone, email, id_cidade)
	VALUES ('{$next}',
			'{$dados['nome']}',
			'{$dados['endereco']}',
			'{$dados['bairro']}',
			'{$dados['telefone']}',
			'{$dados['email']}',
			'{$dados['id_cidade']}'
		)";

	$resultado = mysqli_query($conn,$sql);

	if($resultado){

		print 'Registro inserido com sucesso';

	}
	else {
		print mysqli_error($conn);
	}

	mysqli_close($conn);


?>
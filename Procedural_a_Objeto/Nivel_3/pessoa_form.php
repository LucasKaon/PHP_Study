<?php

	if (!empty($_REQUEST['action'])) {
		
		$conn = mysqli_connect('localhost','root','','db_livro');

		if ($_REQUEST['action'] == 'edit') {
			
			$id = (int) $_GET['id'];

			$resultado = mysqli_query($conn,"SELECT * FROM pesso WHERE id='{$id}'");

			$pessoa = mysqli_fetch_assoc($resultado);

		}
		else if ($_REQUEST['action'] == 'save' ){

			$pessoa = $_POST;
			
			$exec = mysqli_query($conn, "SELECT max(id) as next FROM pessoa");

			$next = mysqli_fetch_assoc($exec)['next']+1;

			$sql = "INSERT INTO pessoa(id, nome, endereco, bairro, telefone,
												email, id_cidade)
							VALUES ('{$next}','{$pessoa['nome']}','{$pessoa['endereco']}','{$pessoa['bairro']}','{$pessoa['telefone']}','{$pessoa['email']}','{$pessoa['id_cidade']}')";

							$resultado = mysqli_query($conn,$sql);

		}

		/* Inserir else 182*/

	}


?>
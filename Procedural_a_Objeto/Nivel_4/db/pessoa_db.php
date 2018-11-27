<?php

	function lista_pessoas(){

		$conn = mysqli_connect('localhost','root','','db_livro');
		
		$query = "SELECT * FROM pessoa ORDER BY id";
		$resultado = mysqli_query($conn,$query);

		$list = mysqli_fetch_all($resultado);

		mysqli_close($conn);

		return $list;

	}

	function excluir_pessoa($id){

		$conn = mysqli_connect('localhost','root','','db_livro');

		$query = "DELETE FROM pessoa WHERE id = '{$id}'";

		$resultado = mysqli_query($conn, $query);

		mysqli_close($conn);

		return $resultado; //true or false

	}

	function get_pessoa($id){

		$conn = mysqli_connect('localhost','root','','db_livro');

		$query = "SELECT * FROM pessoa WHERE id = '{$id}'";

		$resultado = mysqli_query($conn, $query);

		$pessoa = mysqli_fetch_assoc($resultado); //mysqli_result::fetch_assoc -- mysqli_fetch_assoc — Obtem uma linha do conjunto de resultados como uma matriz associativa

		mysqli_close($conn);

		return $pessoa;

	}

	function get_next_pessoa(){

		$conn = mysqli_connect('localhost','root','','db_livro');

		$query = "SELECT max(id) AS next FROM pessoa";

		$resultado = mysqli_query($conn, $query);

		$next = (int) mysqli_fetch_assoc($resultado)['next']+1;

		mysqli_close($conn);

		return $next;
	}

	function insert_pessoa($pessoa){

		$conn = mysqli_connect('localhost','root','','db_livro');

		$query = "INSERT INTO pessoa (id, nome, endereco, bairro, 
									  telefone, email, id_cidade)
							VALUES('{$pessoa['id']}','{$pessoa['nome']}', '{$pessoa['endereco']}','{$pessoa['bairro']}', '{$pessoa['telefone']}','{$pessoa['email']}','{$pessoa['id_cidade']}')";

		$resultado = mysqli_query($conn,$query);

		mysqli_close($conn);

		return $resultado;

	}

	function update_pessoa($pessoa){

		$conn = mysqli_connect('localhost','root','','db_livro');

		$query = "UPDATE pessoa SET nome 		= 		'{$pessoa['nome']}',
									endereco	=		'{$pessoa['endreco']}',
									bairro		=		'{$pessoa['bairro']}',
									telefone 	=		'{$pessoa['telefone']}',
									email 		=		'{$pessoa['email']}',
									id_cidade 	=		'{$pessoa['id_cidade']}'
									WHERE id 	=		'{$pessoa['id']}'";

		$resultado = mysqli_query($conn, $query);

		mysqli_close($conn);

		return $resultado;

	}

?>
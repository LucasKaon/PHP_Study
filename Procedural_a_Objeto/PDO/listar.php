<?php

	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$data = 'db_livro';

	if($conn = mysqli_connect($host, $user, $pass, $data)){

		print 'Conexão realizada.'."<br>\n";

	}

	$query = 'SELECT codigo, nome FROM identificacao';

	//enviando consulta ao banco de dados

	$result = mysqli_query($conn,$query);

	if($result){

		while ($row = mysqli_fetch_assoc($result)){

			echo $row['codigo'].' - '.$row['nome']."<br>\n";

		}	
	}

	//fechando conexao

	mysqli_close($conn);

?>
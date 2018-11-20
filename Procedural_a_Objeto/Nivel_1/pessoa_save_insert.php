<?php

	$dados = $_POST;
	$conn = mysqli_connect('127.0.0.1','root','','db_livro');

	$query = 'SELECT max(id) as next FROM pessoa';

	$resultado = mysqli_query($conn, $query);
	$next = (int) mysqli_fetch_assoc($resultado)['next'] + 1;

?>
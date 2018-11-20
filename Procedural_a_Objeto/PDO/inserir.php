<?php

	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$data = 'db_livro';

	if($conn = mysqli_connect($host, $user, $pass, $data)){

		print 'Conexão realizada.';

	}

	mysqli_query($conn, "INSERT INTO identificacao (codigo, nome) VALUES (4, 'Marry Chavez')");
	mysqli_query($conn, "INSERT INTO identificacao (codigo, nome) VALUES (5, 'Toronto Miss')");
	mysqli_query($conn, "INSERT INTO identificacao (codigo, nome) VALUES (6, 'Jefferson Pereira')");
	mysqli_query($conn, "INSERT INTO identificacao (codigo, nome) VALUES (7, 'Luis Peixoto')");
	mysqli_query($conn, "INSERT INTO identificacao (codigo, nome) VALUES (8, 'Luisa Castilho')");
	mysqli_query($conn, "INSERT INTO identificacao (codigo, nome) VALUES (9, 'Herik Freitas')");
	mysqli_query($conn, "INSERT INTO identificacao (codigo, nome) VALUES (10, 'Steffany Stevens')");


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Lista</title>
	<link rel="stylesheet" type="text/css" href="css/list.css">
</head>
<body>

	<?php

	$conn = mysqli_connect('localhost','root','','db_school');

	$query = 'SELECT * FROM funcionario';

	$resultado = mysqli_query($conn, $query);

	/* foreach ($resultado as $key) {
		
	 	foreach ($key as $row => $value) 
	 	{

	 	echo $row." -> ".$value."<br>\n";

	 	}

	 	echo "<hr>";
	 }*/

		print '<table border = 1>';
		print '<thead>';
		print '<tr>';
		print '<th>	Id </th>';
		print '<th> Nome </th>';
		print '<th> Sexo </th>';
		print '<th> Funcao </th>';
		print '<th> Salario </th>';
		print '<th> Codigo Departamento </th>';
		print '</tr>';
		print '</thead>';
		print '<tbody>';

		while ($row = mysqli_fetch_assoc($resultado)) {
			
			$id = $row['id_funcionario'];
			$nome = $row['nome'];
			$sexo = $row['sexo'];
			$funcao = $row['funcao'];
			$salario = $row['salario'];
			$codigo_departamento = $row['codigo_departamento'];

			print '<tr>';
			print "<td> {$id} </td>";
			print "<td> {$nome} </td>";
			print "<td> {$sexo} </td>";
			print "<td> {$funcao} </td>";
			print "<td> {$salario} </td>";
			print "<td> {$codigo_departamento} </td>";
			print '</tr>';


		}

		print '</tbody>';
		print '</table>';

	?>


</body>
</html>


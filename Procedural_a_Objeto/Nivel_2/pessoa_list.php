<!DOCTYPE html>
<html lang="pt-br">
	<head>

		<meta charset="utf-8">
		<title>Listagem de Pessoas</title>
		<link rel="stylesheet" type="text/css" href="css/list.css" media="screen">
		
	</head>
	<body>

		<?php

		$conn = mysqli_connect('127.0.0.1','root','','db_livro');

		if (!empty($_GET['action']) AND $_GET['action'] == 'delete') {
			
			$id = (int) $_GET['id'];

			$resultado = mysqli_query($conn,"DELETE FROM pessoa WHERE id=".$id);

		}

		$query = "SELECT * FROM pessoa ORDER BY id";

		$resultado = mysqli_query($conn,$query);

		print '<table border = 1>';
		print '<thead>';
		print '<tr>';
		print '<th>	</th>';
		print '<th>	</th>';
		print '<th>	Id </th>';
		print '<th> Nome </th>';
		print '<th> Endereco </th>';
		print '<th> Bairro </th>';
		print '<th> Telefone </th>';
		print '</tr>';
		print '</thead>';
		print '<tbody>';

		while ($row = mysqli_fetch_assoc($resultado)) {
				
				$id = $row['id'];
				$nome = $row['nome'];
				$endereco = $row['endereco'];
				$bairro = $row['bairro'];
				$telefone = $row['telefone'];
				$email = $row['email'];
				$id_cidade = $row['id_cidade'];

				print '<tr>';
				print "<td align='center' class = 'icon'>
						<a href='pessoa_form.php?action=edit&id={$id}'>
						<img src='imagens/edit.svg' style='width:17px'>
						</a></td>";
				print "<td align='center' class = 'icon'>
						<a href='pessoa_list.php?action=delete&id={$id}'>
						<img src='imagens/remove.svg' style='width:17px'>
						</a></td>";

				print "<td> {$id} </td>";
				print "<td> {$nome} </td>";
				print "<td> {$endereco} </td>";
				print "<td> {$bairro} </td>";
				print "<td> {$telefone} </td>";
				print '</tr>';

		}

		print '</tbody>';
		print '</table>';

		?>

		<button id="btn_inserir" onclick="window.location='pessoa_form.php'">
				
				<img src='imagens/insert.svg' style="width: 12px"> Inserir

		</button>

	</body>
</html>
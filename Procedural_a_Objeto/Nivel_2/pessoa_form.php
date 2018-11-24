<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Formulário</title>
	<link rel="stylesheet" type="text/css" href="css/form.css">
</head>

	<?php

	$id = $nome = $endereco = $bairro = $telefone = $email = $id_cidade = '';

		if (!(empty($_REQUEST['action']))) {
		
			$conn = mysqli_connect('localhost','root','','db_livro');

			if($_REQUEST['action'] == 'edit'){

				$id = (int) $_GET['id'];

				$resultado = mysqli_query($conn,"SELECT * FROM pessoa WHERE id = '{$id}'");

				if ($row = mysqli_fetch_assoc($resultado)) {
					
					$id 			= 	$row['id'];
					$nome 			=	$row['nome'];
					$endereco		= 	$row['endereco'];
					$bairro 		= 	$row['bairro'];
					$telefone 		= 	$row['telefone'];
					$email 			= 	$row['email'];
					$id_cidade 		= 	$row['id_cidade'];

				}

			}


			 else if ($_REQUEST['action'] == 'save') {
				
				$id = $_POST['id'];
				$nome = $_POST['nome'];
				$endereco = $_POST['endereco'];
				$bairro = $_POST['bairro'];
				$telefone = $_POST['telefone'];
				$email = $_POST['email'];
				$id_cidade = $_POST['id_cidade'];

				if (empty($_POST['id'])) {
						
					$exec = mysqli_query($conn, "SELECT max(id) as next FROM pessoa");

					$next = mysqli_fetch_assoc($exec)['next']+1;

					$sql = "INSERT INTO pessoa(id, nome, endereco, bairro, telefone,
												email, id_cidade)
							VALUES ('{$next}','{$nome}','{$endereco}','{$bairro}','{$telefone}','{$email}','{$id_cidade}')";

					$resultado = mysqli_query($conn, $sql);

				} else {

					$sql = "UPDATE pessoa SET 	nome 		= '{$nome}',
												endereco 	= '{$endereco}',
												bairro 		= '{$bairro}',
												telefone 	= '{$telefone}',
												email 		= '{$email}',
												id_cidade 	= '{$id_cidade}'
											WHERE id 		= '{$id}'";

					$resultado = mysqli_query($conn,$sql);

				}

				print ($resultado) ? 'Registro salvo com sucesso' : mysqli_error($conn);
				echo "<br><br><hr>";
				mysqli_close($conn);

		}

	}

	?>

<body>

	<form enctype="multipart/form-data" method="post" action="pessoa_form.php?action=save">

		<label>Código</label>
		<input type="text" name="id" readonly="1" style="width: 30%" value="<?=$id?>">

		<label>Nome</label>
		<input type="text" name="nome" style="width: 50%" value="<?=$nome?>">

		 <label>Endereço</label>
		 <input type="text" name="endereco" style="width: 50%" value="<?=$endereco?>">

		 <label>Bairro</label>
		 <input type="text" name="bairro" style="width: 25%" value="<?=$bairro?>"> 

		 <label>Telefone</label>
		 <input type="text" name="telefone" style="width: 25%" value="<?=$telefone?>">

		 <label>Email</label>
		 <input type="text" name="email" style="width: 25%" value="<?=$email?>">

		 <label>Cidade</label>
		 <select name="id_cidade" style="width: 25%" >
		 	
		 	<?php

		 	require_once 'lista_combo_cidade.php';
		 	print lista_combo_cidades();

		 	?> 


		 </select><br>

		 <input id="input_submit" type="submit" value="Enviar">

	</form>
	


</body>
</html>
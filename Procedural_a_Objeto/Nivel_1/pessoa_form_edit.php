<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta charset="utf-8">
	<title>Cadastro de Pessoa</title>
	<link rel="stylesheet" type="text/css" href="css/form.css">

</head>

<?php

	if (!empty($_GET['id'])) {
		
		$conn = mysqli_connect('localhost','root','','db_livro');

		$id = (int) $_GET['id'];

		$query = "SELECT * FROM pessoa WHERE id = ".$id;

		$resultado = mysqli_query($conn,$query);

		$row = mysqli_fetch_assoc($resultado);

		$id 			=	$row['id'];
		$nome 			=	$row['nome'];
		$endereco 		=	$row['endereco'];
		$bairro 		=	$row['bairro'];
		$telefone 		= 	$row['telefone'];
		$email 			= 	$row['email'];
		$id_cidade 		= 	$row['id_cidade'];

	}

	?>

<body>

	<form enctype="multipart/form-data" method="post" action="pessoa_save_update.php">

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

		 <input type="submit" value="Enviar">

	</form>
	

</body>
</html>
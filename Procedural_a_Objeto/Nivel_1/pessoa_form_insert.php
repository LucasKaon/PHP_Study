<!DOCTYPE html>
<html lang="pt-br">
<head>
	
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen">

</head>
<body>

	<form enctype="multipart/form-data" method="post" action="pessoa_save_insert.php">

		<label>Código</label><br>
		<input type="text" name="id" readonly="1" style="width: 30%"><br><br>

		<label>Nome</label><br>
		<input type="text" name="nome" style="width: 50%"><br><br>

		 <label>Endereço</label><br>
		 <input type="text" name="endereco" style="width: 50%"><br><br>

		 <label>Bairro</label><br>
		 <input type="text" name="bairro" style="width: 25%"><br><br>

		 <label>Telefone</label><br>
		 <input type="text" name="telefone" style="width: 25%"><br><br>

		 <label>Email</label><br>
		 <input type="text" name="email" style="width: 25%"><br><br>

		 <label>Cidade</label><br>
		 <select name="id_cidade" style="width: 25%"><br><br>
		 	
		 	<?php

		 	require_once 'lista_combo_cidade.php';
		 	print lista_combo_cidades();

		 	?> 


		 </select><br>

		 <input type="submit" value="Enviar">

	</form>

</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Select</title>
</head>
<body>

		<select name="id" style="width: 25%;">
			
			
			<?php

				require_once 'lista_pessoas_mysql.php';
				print listar_pessoas();

			?>


		</select>

</body>
</html>
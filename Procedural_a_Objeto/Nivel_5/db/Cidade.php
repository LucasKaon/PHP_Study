<?php


		function lista_combo_cidades($id = null)
		{

			$output = '';

			$conn = mysqli_connect("localhost", "root","","db_livro");
			// $conn = new PDO('mysql:host=127.0.0.1;port=3306;dbname=db_livro','root','')

			$query = 'SELECT id, nome FROM cidade';

			$resultado = mysqli_query($conn,$query);

			if ($resultado) {
				
				while ($row = mysqli_fetch_assoc($resultado)) {
					
					$check = ($row['id'] == $id) ? 'selected=1' : '';
					$output .= "<option $check value='{$row['id']}'>{$row['nome']}</option>\n";

				}

			}

			mysqli_close($conn);

			return $output;

		}
	

?>
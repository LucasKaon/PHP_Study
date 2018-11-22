<?php
	
	
	$dados = $_GET;

	if($dados['id']){

		$conn = mysqli_connect('localhost','root','','db_livro');

		$sql = "DELETE FROM pessoa WHERE id = ".$dados['id'];

		$resultado = mysqli_query($conn,$sql);

		if ($resultado) {
			
			echo 'Registro foi excluído com sucesso.';

		} else {

			print mysqli_error($conn);

		}

		mysqli_close($conn);

	}
	
		
?>
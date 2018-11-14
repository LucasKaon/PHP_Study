<form method="POST" action="">
	
	Nome: <input type="text" name="nome" maxlength="30">
	<select name="select_option">
		<option value=".txt" >.txt</option>
		<option value=".csv">.csv</option>
	</select><br><br>
	<textarea name="texto" cols="40" rows="8"></textarea><br><br>

	<input type="submit" value="Send">
	<input type="reset" Value="Clear"><hr><br><br>


</form>

<?php

	require_once('funcoes.php');

	if (isset($_POST['nome']) and isset($_POST['select_option']) and isset($_POST['texto'])) {
		$nome = 'diretorio_teste/'.$_POST['nome'].$_POST['select_option'];
		$string = $_POST['texto'];

		write_file($nome,$string);

		echo "Arquivo criado com sucesso.";
	} else
	{
		echo "Aguardando o envio dos parametros.";
	}
	

?>
<?php

	//verifica se determinado objeto possui o método descrito.

	class Funcionario {

		public function setNome($nome){}
		public function getNome(){}
		public function setCargo($cargo){}
		public function getCargo(){}

	}

	$pessoa = new Funcionario();
	$method = 'getCargo';

	if (method_exists($pessoa, $method)) {
		echo "O método ".$method." existe. <br>\n";
	} else
	{
		echo "O método indicado não existe.";
	}

?>
<?php

	class Funcionario 
	{

		public $nome;
		public $salario;
		public $departamento;

	}

	class Estagiario extends Funcionario 
	{

		public $bolsa;

	}

	$jose = new Funcionario();
	$joao = new Estagiario();

	if (is_subclass_of($joao,'Funcionario')) {
	 	
       echo "Classe do objeto Joao é derivada de Funcionário.";

	 } 

	 echo "<br>\n";

	 if (is_subclass_of('Estagiario', 'Funcionario')) {

	 	echo "Classe Estagiário é derivada de Funcionário.";
	 	
	 }

?>
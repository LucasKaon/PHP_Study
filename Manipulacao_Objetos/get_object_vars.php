<?php

	class Funcionario{

		public $nome;
		public $salario;
		public $cargo;

	}

	$f1 = new Funcionario();

	$f1->nome = 'José Afonso';
	$f1->salario = 2000.00;
	$f1->cargo = 'Tecnico em Eletricista';

	print_r(get_object_vars($f1));


?>
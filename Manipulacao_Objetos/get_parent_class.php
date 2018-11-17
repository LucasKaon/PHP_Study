<?php

	//retorna o nome da classe ancestral (superclasse).
	
	class Funcionario 
	{

		public $nome;
		public $cargo;

	}

	class Estagiario extends Funcionario 
	{

		public $bolsa;
		public $curso;

	}

	$f1 = new Funcionario();
	$f1->nome = 'Alex Atalla';
	$f1->cargo = 'Cozinheiro';

	$f2 = new Estagiario();
	$f2->nome = 'Richard Queiroz';
	$f2->cargo = 'Auxiliar de Cozinha';
	$f2->bolsa = 500.00;
	$f2->curso = 'Gastronomia';

	print 'Funcionario 1: '.get_parent_class($f1)."<br>\n";
	print 'Funcionario 2: '.get_parent_class($f2)."<br>\n";
	print 'Parent Class : "Estagiario" - '.get_parent_class($f2)."<br>\n";



?>
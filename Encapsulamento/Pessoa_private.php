<?php

	//só poderá ser alterado dentro da própria classe. Necessária a criação de métodos para a alteração destas propriedades.

	class Pessoa{

		private $nome;
		private $endereco;
		private $nascimento;

	}

	$p1 = new Pessoa();

	$p1->nome = 'Maria do Carmo';
	$p1->endereco = 'Rua Benedita Morais';
	$p1->nascimento = '12-12-2000';

?>
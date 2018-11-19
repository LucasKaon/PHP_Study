<?php

	class Pessoa {
		private $nome;
		private $genero;
		const GENEROS = array('M'=>'Masculino','F'=>'Feminino','m'=>'Masculino','f'=>'Feminino');

		public function __construct($nome, $genero){

			$this->nome = $nome;
			$this->genero = $genero;

		}

		public function getNome(){

			return $this->nome;

		}

		public function getNomeGenero(){

			return self::GENEROS[$this->genero];	//para acessar a constante de dentro da classe usa-se self:Constante

		}

	}


	$p1 = new Pessoa('João Otávio','M');
	$p2 = new Pessoa('Maria Eduarda','F');

	print 'Nome: '.$p1->getNome()."<br>\n";
	print 'Genero: '.$p1->getNomeGenero()."<br>\n";
	print 'Nome: '.$p2->getNome()."<br>\n";
	print 'Genero: '.$p2->getNomeGenero()."<br>\n";

	print_r(Pessoa::GENEROS);	//para acessar a constante de fora da classe usa-se Classe:Constante
?>
<?php

	class Pessoa{

		protected $nome;

		public function __construct ($nome){
			$this->nome = $nome;

		}
	}

	final class Funcionario extends Pessoa
	{

		private $cargo;
		private $salario;

		public function contratar($cargo, $salario){

			if (is_numeric($salario) AND $salario > 0) {
				$this->cargo = $cargo;
				$this->salario = $salario;
			}

		}

		public function getInfo(){

			return 'Nome : '.$this->nome.', Salário: '.$this->salario.', Funcao: '.$this->cargo;
		}
	} 


	$pessoa = new Funcionario('Joaquim Barbosa');
	$pessoa->contratar('Supervisor de Vendas',1800.00);
	print $pessoa->getInfo();






?>
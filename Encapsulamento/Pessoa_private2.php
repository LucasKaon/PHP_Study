<?php

	class Pessoa
	{

		private $nome;
		private $endereco;
		private $nascimento;

		public function __construct($nome, $endereco){

			$this->nome = $nome;
			$this->endereco = $endereco;

		}

		public function setNascimento($nascimento){

			$partes = explode('-', $nascimento);
			if(count($partes) == 3){
					if (checkdate($partes[1], $partes[0], $partes[2])) {
						
						$this->nascimento = $nascimento;
						return true;

					}

					return false;
				}

				return false;

		}
			
	}

	$p1 = new Pessoa('João Felix','Bairro Feliz');
	if($p1->setNascimento('15-08-1995')){
		print 'A data 15-08-1995, foi atribuida a Pessoa cadastrada.'."<br>\n";
	}
	else {
		print 'Não foi possível atribuir a data digitada. Formato incorreto.'."<br>\n";
	}

	$p2 = new Pessoa('Maria Ferreira','Bairro do Sossego');
	if($p2->setNascimento('15 de Outrbro de 1990')){
		print 'A data 15 de Outrbro de 1990, foi atribuida a Pessoa cadastrada.'."<br>\n";
	}
	else {
		print 'Não foi possível atribuir a data digitada. Formato incorreto.'."<br>\n";
	}







?>
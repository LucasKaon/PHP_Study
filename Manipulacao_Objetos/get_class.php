<?php
	//retorna o nome da classe à qual o objeto pertence (STRING)

	class Software{

		public $nome;
		public $id;

		public function __construct($nome, $id){

			$this->nome = $nome;
			$this->id = $id;

		}
	}

	$software = new Software('Ajax',1);

	print 'Classe : '.get_class($software);

?>
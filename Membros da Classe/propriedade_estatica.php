<?php

	class Software{

		private $id;
		private $nome;
		public static $contador;

		public function __construct($nome){

			self::$contador ++;
			$this->id = self::$contador;
			$this->nome = $nome;
			print 'Software: '.$this->nome."<br>\n";


		}

	}

	new Software('House');
	new Software('Gpend');
	new Software('Salvation');
	new Software('Godspeed');

	print 'Total de softwares: '.Software::$contador;

?>
<?php

	class Software{

		private $id;
		private $nome;
		private static $contador;

		public function __construct($nome){

			self::$contador ++;
			$this->id = self::$contador;
			$this->nome = $nome;

			print 'Nome: '.$nome."<br>\n";

		}

		public static function getContador(){

			return self::$contador;

		}

	}

	new Software('Ajax_Premium');
	new Software('Doolnet');
	new Software('Technet.net');
	new Software('TextBOX');
	new Software('Miss_destroyer');
	new Software('Column_Line');
	print Software::getContador();

?>
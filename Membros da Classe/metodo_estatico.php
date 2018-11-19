<?php
	//métodos estáticos são criados para manipularem atributos estáticos

	class Software{

		private $id;
		private $nome;
		private static $contador;

		public function __construct($nome){

			self::$contador ++;
			$this->id = self::$contador;
			$this->nome = $nome;

			print 'Nome do software: '.$this->nome."<br>\n";

		}

		public static function getContador(){

			return self::$contador;

		}


	}

	new Software('AppleMay');
	new Software('FoundBiz');
	new Software('LouisMiss');
	print Software::getContador();

?>
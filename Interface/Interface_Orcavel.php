<?php

	//Interface => Recurso utilizado para diminuir o acomplamento entre as partes de um sistema.
	//Contem a definição de um conjunto de dados e/ou parametros 
	//define um fronteira entre de comunicação entre dois módulos.
	

	interface interface_Orcavel{

		public function getPreco();
		public function getDescricao();

	}

?>
<?php

	class Cliente{

		public function setNome() {}
		public function getNome() {}
		public function setContato() {}
		public function getContato() {}

	}

	$vetor = get_class_methods('Cliente');

	print_r($vetor);

?>
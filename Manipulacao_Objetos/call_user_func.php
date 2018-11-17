<?php

	function apresenta($nome){

		echo 'Hi there! You is the '.$nome."? Nice to meet you!<br>\n";

	}

	class Pessoa {

		public static function apresenta($nome) {

			echo 'Hello '.$nome.", how are you? What do you do today?<br>\n";

		}

	}

	//chamada de um método estático.
	call_user_func(array('Pessoa','apresenta'),'Pablo');

	//chamada de um método de objeto
	$obj1 = new Pessoa();
	call_user_func(array($obj1, 'apresenta'), 'Carlos');

	//execução de uma função
	call_user_func('apresenta','Noah');



?>
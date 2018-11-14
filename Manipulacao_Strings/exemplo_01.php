<?php

	//'STRING LITERAL'

	$string = <<<CHAVE
	Nesta área,
	Pode-se escrever multiplos textos com multiplas linhas.
	E será armazenado dentro da string.
	
CHAVE;

	echo $string;

	/*		//CARACTERES DE SCAPE - PHP
			
			\n - Quebra de linha
			\r - Retorno de Carro
			\t - Tabulação
			\\ - Barra invertida ( o mesmo que '\')
			\" - Aspas Duplas
			\$ - Simbolo de cifrão

	*/
?>
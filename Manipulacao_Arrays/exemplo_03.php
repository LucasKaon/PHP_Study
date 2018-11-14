<?php

	$colors = array('Ciano', 'Verde', 'Esmeralda', 'Fumê', 'Prata');

	$sprays = array('Preto','Diamantino');

	$c = array_merge($colors,$sprays);

	array_unshift($colors, 'Vermelho');	//	contrario : array_shift

	array_push($colors, 'Pérola');		// contrario : array_pop

	// print_r($veiculos);

	// print_r(array_reverse($veiculos));	//inverte o array e adapta os indices

	// print_r($c);

	// print_r(array_keys($colors));	//retorna o índices de minhas keys

	// print_r(array_values($colors)); 	//retorna posição de cada value

	/*
		Comandos para organização
		sort => coloca em ordem de acordo com os values, sem manter as posicoes das key
		rsort => contrario de sort

		asort =>coloca em ordem de acordo com os values, mantendo a posicao das key
		arsort =>contrario de asort
	*/


?>
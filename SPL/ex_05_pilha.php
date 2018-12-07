<?php 

	$ingredientes = new SplStack();

	$ingredientes->push('Agua');
	$ingredientes->push('Energetico');
	$ingredientes->push('Suco');
	$ingredientes->push('Refrigerante');

	foreach ($ingredientes as $key) {
		
		print 'Item: '.$key.'<br>'.PHP_EOL;

	}

	print PHP_EOL.'<br><hr><br>';

	$i = 0;

	while($i < $ingredientes->count()){

		print 'Retirar '.$ingredientes->pop().'<br>'.PHP_EOL;

		print 'Restam '.$ingredientes->count().' ingredientes na lista<br><br>';

	}

?>